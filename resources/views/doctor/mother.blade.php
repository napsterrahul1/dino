@extends('layouts.app')

@section('content')
    @include('layouts/message')
    <!-- END: Main Menu-->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="card">
                @include('doctor.head')
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="p-3 border rounded">


                        <form class="row g-3" action="" method="post">
                            {!! csrf_field()  !!}
                            <input type="hidden" name="preganacy_id" value="{{ $data->preganacy_id }}">


                            <div class="next_prev_div">
                                <h4 class="mb-2 card-form-head">Mother History</h4>
                                <hr>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">Any problem during
                                            pregnancy</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_problem">{{ $data->preganacy_problem }}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">And which
                                            month</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_month"> {{ $data->preganacy_month }}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">Any Treatment taken
                                            for the same</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_treatment"> {{ $data->preganacy_treatment }}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">Mother mental state
                                            during pregnancy </label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_mental">{{ $data->preganacy_mental }}</textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">
                                            Mother mental state during pregnancy
                                            Any recurrent/bad dream during pregnancy</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="2" name="preganacy_recurrent">{{ $data->preganacy_recurrent }}</textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="nav--card-btn py-4">
                                @if($pid)
                                    <a href="{{ url('birth') }}?id={{ $pid }}" id="display1"
                                       class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                                    <button class="btn btn-success" type="submit">Update</button>
                                    <a href="{{ url('milestone') }}?id={{ $pid }}" id="display"
                                       class="display nex-pre-btn btn btn-info px-4">Next</a>
                                @else
                                    <a href="{{ url('birth') }}" id="display1"
                                       class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                                    <button class="btn btn-success" type="submit">Update</button>
                                    <a href="{{ url('milestone') }}" id="display"
                                       class="display nex-pre-btn btn btn-info px-4">Next</a>
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
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    <script>
        $(document).ready(function () {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });


    </script>

@endsection
