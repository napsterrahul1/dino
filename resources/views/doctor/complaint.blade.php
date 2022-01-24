@extends('layouts.app')
@section('title','Complaint')
@section('content')
@include('layouts/message')
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">

            @include('doctor.head')

        <div class="card">
            <div class="card-body">
                <div class="p-3 border rounded">

                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Chief Complaint</h4>
                        <hr>
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                @foreach($data as $key=>$d)
                                <button class="nav-link @if($key==0) active @endif" id="complain{{ $key+1 }}-tab" data-bs-toggle="pill" data-bs-target="#complain{{ $key+1 }}" type="button" role="tab" aria-controls="complain{{ $key+1 }}" aria-selected="true">Complain {{ $key+1 }}</button>
                                @endforeach
                                <button class="nav-link" id="complain0-tab" data-bs-toggle="pill" data-bs-target="#complain0" type="button" role="tab" aria-controls="complain0" aria-selected="false">ADD COMPLAINT</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">

                                @foreach($data as $key=>$d)
                                <div class="tab-pane fade @if($key==0) show active @endif" id="complain{{ $key+1 }}" role="tabpanel" aria-labelledby="complain{{ $key+1 }}-tab">
                                    <form class="row g-3" action="" method="post">
                                        {!! csrf_field()  !!}
                                        <input type="hidden" name="complaint_id" value="{{$d->complaint_id}}">
                                        <input type="hidden" name="user_id" value="{{ $pid }}">
                                        <div class="col-md-4">
                                            <label for="Complaint" class="form-label">Complaint</label>
                                            <textarea class="form-control" id="Complaint" name="complain" rows="2">{{$d->complain }}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="ComplaintDetails" class="form-label">Describe your complaint in detail</label>
                                            <textarea class="form-control" id="ComplaintDetails" rows="2" name="complaint_detail">{{$d->complaint_detail }}</textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="ComplaintSince" class="form-label">Complaint Since</label>
                                            <textarea class="form-control" id="ComplaintSince" rows="2" name="complaint_since">{{$d->complaint_since}}</textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="investigation" class="form-label">Any Investigations done, DESCRIBE</label>
                                            <textarea class="form-control" id="investigation" rows="2" name="complaint_investigation">{{$d->complaint_investigation }}</textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="Onset" class="form-label">Onset</label>
                                            <select class="form-select" id="Onset" required name="complaint_onset">
                                                <option selected disabled value="">Select</option>
                                                <option value="Sudden" @if($d->complaint_onset=='Sudden') selected @endif>Sudden</option>
                                                <option value="Gradual" @if($d->complaint_onset=='Gradual') selected @endif>Gradual</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="howDiagnosed" class="form-label">How was it diagnosed?</label>
                                            <textarea class="form-control" id="howDiagnosed" rows="2" name="complaint_diagnosed">{{$d->complaint_diagnosed}}</textarea>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="bodySide" class="form-label">
                                                Which side on the body</label>
                                            <select class="form-select" id="bodySide" required name="complaint_side_body">
                                                <option disabled value="">Select</option>
                                                <option value="Right" @if($d->complaint_side_body=='Right') selected @endif>Right </option>
                                                <option value="Left" @if($d->complaint_side_body=='Left') selected @endif>Left</option>
                                                <option value="Right to Left" @if($d->complaint_side_body=='Right to Left') selected @endif>Right to Left </option>
                                                <option value="Left to Right" @if($d->complaint_side_body=='eft to Right') selected @endif>Left to Right</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="DisorderDev" class="form-label w-100">
                                                Develpmental Disorder / Autism</label>
                                            <div class="btn-group" role="group" aria-label="">
                                                <input type="radio" class="btn-check"  name="complaint_autism" @if($d->complaint_autism=='yes') checked @endif id="DisorderDev1"  value="yes">
                                                <label class="btn btn-outline-success" for="DisorderDev1">Yes</label>

                                                <input type="radio" class="btn-check" name="complaint_autism" @if($d->complaint_autism=='no') checked @endif id="DisorderDev2" value="no">
                                                <label class="btn btn-outline-success" for="DisorderDev2">No</label>

                                            </div>
                                        </div>
                                        {{--<hr>--}}
                                        {{--<div class="col-md-4">--}}
                                            {{--<label for="diagnoseFile" class="form-label">Select files to upload</label>--}}
                                            {{--<input class="form-control" type="file" id="diagnoseFile">--}}
                                        {{--</div>--}}

                                        <div class="col-md-4 pt-4">

                                            <button class="btn btn-success" type="submit">Update</button>
                                            <a class="btn btn-danger" type="submit">Delete</a>
                                        </div>




                                    </form>
                                </div>
                                @endforeach
                                    <div class="tab-pane fade" id="complain0" role="tabpanel" aria-labelledby="complain0-tab">
                                        <form class="row g-3" action="" method="post">
                                            {!! csrf_field()  !!}
                                            <input type="hidden" name="complaint_id" value="">
                                            <input type="hidden" name="user_id" value="{{ $pid }}">
                                            <div class="col-md-4">
                                                <label for="Complaint" class="form-label">Complaint</label>
                                                <textarea class="form-control" id="Complaint" name="complain" rows="2"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="ComplaintDetails" class="form-label">Describe your complaint in detail</label>
                                                <textarea class="form-control" id="ComplaintDetails" rows="2" name="complaint_detail"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="ComplaintSince" class="form-label">Complaint Since</label>
                                                <textarea class="form-control" id="ComplaintSince" rows="2" name="complaint_since"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="investigation" class="form-label">Any Investigations done, DESCRIBE</label>
                                                <textarea class="form-control" id="investigation" rows="2" name="complaint_investigation"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="Onset" class="form-label">Onset</label>
                                                <select class="form-select" id="Onset" required name="complaint_onset">
                                                    <option selected disabled value="">Select</option>
                                                    <option value="Sudden">Sudden</option>
                                                    <option value="Gradual">Gradual</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="howDiagnosed" class="form-label">How was it diagnosed?</label>
                                                <textarea class="form-control" id="howDiagnosed" rows="2" name="complaint_diagnosed"></textarea>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="bodySide" class="form-label">
                                                    Which side on the body</label>
                                                <select class="form-select" id="bodySide" required name="complaint_side_body">
                                                    <option selected disabled value="">Select</option>
                                                    <option value="Right">Right </option>
                                                    <option value="Left">Left</option>
                                                    <option value="Right to Left">Right to Left </option>
                                                    <option value="Left to Right">Left to Right</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="DisorderDev" class="form-label w-100">
                                                    Develpmental Disorder / Autism</label>
                                                <div class="btn-group" role="group" aria-label="">
                                                    <input type="radio" class="btn-check" checked name="complaint_autism" id="DisorderDev1"  >
                                                    <label class="btn btn-outline-success" for="DisorderDev1">Yes</label>

                                                    <input type="radio" class="btn-check" name="complaint_autism" id="DisorderDev2" >
                                                    <label class="btn btn-outline-success" for="DisorderDev2">No</label>

                                                </div>
                                            </div>
                                            {{--<hr>--}}
                                            {{--<div class="col-md-4">--}}
                                            {{--<label for="diagnoseFile" class="form-label">Select files to upload</label>--}}
                                            {{--<input class="form-control" type="file" id="diagnoseFile">--}}
                                            {{--</div>--}}

                                            <div class="col-md-4 pt-4">

                                                <button class="btn btn-success" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>


                    <div class="nav--card-btn py-4">
                        @if($pid)
                        <a href="{{ url('history') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        {{--<button class="btn btn-success" type="submit">Update</button>--}}
                        <a href="{{ url('makeup') }}?id={{ $pid }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @else
                        <a href="{{ url('history') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        {{--<button class="btn btn-success" type="submit">Update</button>--}}
                        <a href="{{ url('makeup') }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @endif

                    </div>
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

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );


    // selects all the divs of class='next_prev_div',hides them, finds the first, and shows it

</script>

@endsection
