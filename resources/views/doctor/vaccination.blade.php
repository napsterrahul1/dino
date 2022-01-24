@extends('layouts.app')
@section('title','Vaccination')

@section('content')
@include('layouts/message')
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">

            @include('doctor.head')

        <div class="card">
            <div class="card-body">
                <div class="p-3 border rounded">



                    <form class="row g-3" action="" method="post">
                        {!! csrf_field()  !!}
                        <input type="hidden" name="vaccination_id" value="{{ $data->vaccination_id }}">

                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Vaccination History</h4>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="" class="form-label w-100">Was there any reaction after any vaccination?</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" name="vaccination" @if($data->vaccination=='yes') checked @endif value="yes" id="vaccination1"  >
                                    <label class="btn btn-outline-success" for="vaccination1">Yes</label>
                                    <input type="radio" class="btn-check" name="vaccination" @if($data->vaccination=='no') checked @endif value="no" id="vaccination2" >
                                    <label class="btn btn-outline-success" for="vaccination2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="nav--card-btn py-4">
                        @if($pid)
                        <a href="{{ url('milestone') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('mental') }}?id={{ $pid }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @else
                        <a href="{{ url('milestone') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('mental') }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @endif

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>

@endsection
