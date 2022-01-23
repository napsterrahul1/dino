@extends('layouts.app')
@section('title','prescriptions')
@section('content')
    @include('layouts/message')
    <!-- END: Main Menu-->
    <div class="page-wrapper">
        <div class="page-content">
            <h4 class="mb-0 card-form-head">Prescription</h4>
            <hr>
            <div class="card">
                <div class="card-body">
                    <div class="p-3 border rounded">



                        <div class="next_prev_div">
                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    @foreach($data as $key=>$d)
                                        <button class="nav-link @if($key==0) active @endif" id="complain{{ $key+1 }}-tab" data-bs-toggle="pill" data-bs-target="#complain{{ $key+1 }}" type="button" role="tab" aria-controls="complain{{ $key+1 }}" aria-selected="true">prescription {{ $key+1 }}</button>
                                    @endforeach
                                    <button class="btn btn-info" id="complain0-tab" data-bs-toggle="pill" data-bs-target="#complain0" type="button" role="tab" aria-controls="complain0" aria-selected="false">Add Prescription</button>


                                </div>
                                <div class="tab-content" id="v-pills-tabContent">

                                    @foreach($data as $key=>$d)
                                        <div class="tab-pane fade @if($key==0) show active @endif" id="complain{{ $key+1 }}" role="tabpanel" aria-labelledby="complain{{ $key+1 }}-tab">
                                            <form class="row g-3" action="" method="post">
                                                {!! csrf_field()  !!}
                                                <input type="hidden" name="prescription_id" value="{{$d->prescription_id}}">
                                                <input type="hidden" name="user_id" value="{{ $d->user_id }}">
                                                <div class="col-md-4">
                                                    <label for="Complaint" class="form-label">Name</label>
                                                    <textarea class="form-control" id="Complaint" name="prescription" rows="2">{{$d->prescription }}</textarea>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="ComplaintDetails" class="form-label">Description</label>
                                                    <textarea class="form-control" id="ComplaintDetails" rows="2" name="description">{{$d->description }}</textarea>
                                                </div>

                                                <div class="col-md-4 pt-4">

                                                    <button class="btn btn-success" type="submit">Update</button>
                                                </div>




                                            </form>
                                        </div>
                                    @endforeach
                                    <div class="tab-pane fade" id="complain0" role="tabpanel" aria-labelledby="complain0-tab">
                                        <form class="row g-3" action="" method="post">
                                            {!! csrf_field()  !!}
                                            <input type="hidden" name="prescription_id" value="">
                                            <input type="hidden" name="user_id" value="{{ $pid }}">
                                            <div class="col-md-4">
                                                <label for="Complaint" class="form-label">prescription</label>
                                                <textarea class="form-control" id="prescription" name="prescription" rows="2"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ComplaintDetails" class="form-label">Description</label>
                                                <textarea class="form-control" id="ComplaintDetails" rows="2" name="description"></textarea>
                                            </div>


                                            <div class="col-md-4 pt-4">

                                                <button class="btn btn-success" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--<div class="nav--card-btn py-4">--}}
                            {{--@if($pid)--}}
                                {{--<a href="{{ url('history') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>--}}
                                {{--<button class="btn btn-success" type="submit">Update</button>--}}
                                {{--<a href="{{ url('makeup') }}?id={{ $pid }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>--}}
                            {{--@else--}}
                                {{--<a href="{{ url('history') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>--}}
                                {{--<button class="btn btn-success" type="submit">Update</button>--}}
                                {{--<a href="{{ url('makeup') }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>--}}
                            {{--@endif--}}

                        {{--</div>--}}
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


        // selects all the divs of class='next_prev_div',hides them, finds the first, and shows it

    </script>

@endsection
