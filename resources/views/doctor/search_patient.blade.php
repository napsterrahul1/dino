@extends('layouts.app')
@section('title','Search Patient')

@section('content')

<!-- END: Main Menu-->

<div class="page-wrapper">
    <div class="page-content">
        @include('layouts/message')
        <div class="card">
            <div class="card-body">
                <h6 class="mb-0">Search Patient</h6>
                <hr>
                <form class="row g-3" action="{{ url('search-patient') }}" method="get">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{  isset($_GET['email']) ? $_GET['email'] : '' }}" id="inputEmail4">
                    </div>
                    <div class="col-md-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{ isset($_GET['phone']) ? $_GET['phone'] : '' }}" id="phone">
                    </div>
                    <div class="col-md-3">
                        <label for="phone" class="form-label">FIrst Name</label>
                        <input type="text" class="form-control" name="first" value="{{ isset($_GET['first']) ? $_GET['first'] : '' }}" id="name">
                    </div>
                    <div class="col-md-3">
                        <label for="phone" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last" value="{{ isset($_GET['last']) ? $_GET['last'] : '' }}" id="name">
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ url('search-patient') }}" class="btn btn-danger">Reset</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h6 class="mb-0 ">Patient Result</h6>
                <hr>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Patient Name</th>
                                <th>View History</th>
                                <th>CA Form</th>
                                <th>Prescription</th>
                                <th>Medicine Details</th>
                                <th>Follow-ups</th>
                                <th>Testimonials</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($patient as $p)

                            <tr>
                                <td> <span>{!! $p->fname; !!}</span></td>
                                <td><a href="{{ url('history') }}?id={{ $p->user_id }}" class="btn btn-table">View</a></td>
                                <td><a href="{{ url('caseanalysis') }}?id={{ $p->user_id }}" class="btn btn-table">View</a></td>
                                <td><a href="{{ url('prescription') }}?id={{ $p->user_id }}" class="btn btn-table">View</a></td>
                                <td><a href="{{ url('medicine-requests') }}?id={{ $p->user_id }}" class="btn btn-table">View</a></td>
                                <td><a href="{{ url('follow-ups') }}?id={{ $p->user_id }}" class="btn btn-table">View</a></td>
                                <td><a href="{{ url('testimonials') }}?id={{ $p->user_id }}" class="btn btn-table">View</a></td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf',
                        'print'
                    ]
                }
            ]
        });
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'collection',
                    text: 'Export',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf',
                        'print'
                    ]
                }
            ]
        } );

    } );
</script>

@endsection
