@extends('layouts.app')
@section('title','Birth History')

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
                        <input type="hidden" name="birthhistory_id" value="{{ $data->birthhistory_id }}">


                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Birth History</h4>
                        <hr>
                        <div class="row g-5">
                            <div class="col-md-4">
                                <label for="birthHistory" class="form-label">Birth History</label>
                                <select class="form-select" id="birthHistory" required>
                                    <option disabled value="">Select</option>
                                    <option value="Normal" @if($data->birth_history=='Normal') selected @endif>Normal</option>
                                    <option value="C Section" @if($data->birth_history=='Normal') selected @endif>C Section</option>
                                    <option value="Forcep" @if($data->birth_history=='Normal') selected @endif>Forcep</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="childBorn" class="form-label">Was your CHILD born</label>
                                <select class="form-select" id="childBorn" required name="birth_child">
                                    <option disabled value="">Select</option>
                                    <option value="Pre mature" @if($data->birth_child=='Pre mature') selected @endif>Pre mature</option>
                                    <option value="Full Term" @if($data->birth_child=='Full Term') selected @endif>Full Term</option>
                                    <option value="Post Mature" @if($data->birth_child=='Post Mature') selected @endif>Post Mature</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label w-100">How Early / Late?</label>
                                <div class="btn-group" role="group" aria-label="" onabort="birth_how">
                                    <input type="radio" class="btn-check" @if($data->birth_how=='Early') checked @endif name="birth_how" id="howEarlyLate1" value="Early" >
                                    <label class="btn btn-outline-success" for="howEarlyLate1">Early</label>
                                    <input type="radio" class="btn-check" @if($data->birth_how=='Late') checked @endif name="birth_how" id="howEarlyLate2" value="Late" >
                                    <label class="btn btn-outline-success" for="howEarlyLate2">Late</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label w-100">
                                    Breech Presentation</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" @if($data->birth_breech=='yes') checked @endif value="yes" name="birth_breech" id="breechPresentation1"  >
                                    <label class="btn btn-outline-success" for="breechPresentation1">Yes</label>
                                    <input type="radio" class="btn-check" @if($data->birth_breech=='no') checked @endif value="no" name="birth_breech" id="breechPresentation2" >
                                    <label class="btn btn-outline-success" for="breechPresentation2">No</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label w-100">Cord around the Neck:</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" @if($data->birth_cord =='yes') checked @endif value="yes" name="birth_cord" id="cordAroundNeck1"  >
                                    <label class="btn btn-outline-success" for="cordAroundNeck1">Yes</label>
                                    <input type="radio" class="btn-check" @if($data->birth_cord =='no') checked @endif value="no" name="birth_cord" id="cordAroundNeck2" >
                                    <label class="btn btn-outline-success" for="cordAroundNeck2">No</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="birthComplications" class="form-label">Complications BEFORE/During/AFTER birth:
                                </label>
                                <select class="form-select" id="birthComplications" required name="birth_complications">
                                    <option selected disabled value="">Select</option>
                                    <option value="Premature" @if($data->birth_complications=='Premature') selected @endif>Pre mature</option>
                                    <option value="FullTerm" @if($data->birth_complications=='FullTerm') selected @endif>Full Term</option>
                                    <option value="PostMature" @if($data->birth_complications=='PostMature') selected @endif>Post Mature</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="birthWeight" class="form-label">Birth Weight</label>
                                <textarea class="form-control" id="birthWeight" rows="2" name="birth_wt">{{ $data->birth_wt }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="problemNursingChild" class="form-label">Problems during nursing child</label>
                                <textarea class="form-control" id="problemNursingChild" rows="2">{{ $data->birth_nursing }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault03" class="form-label w-100">Did child cry immediately after birth ? If not then after how much time ?</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" @if($data->birth_child_cry=='yes') checked @endif name="birth_child_cry" value="yes" id="childBirthCry1"  >
                                    <label class="btn btn-outline-success" for="childBirthCry1">Yes</label>
                                    <input type="radio" class="btn-check" @if($data->birth_child_cry=='no') checked @endif name="birth_child_cry" value="no" id="childBirthCry2" >
                                    <label class="btn btn-outline-success" for="childBirthCry2">No</label>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="nav--card-btn py-4">
                        @if($pid)
                        <a href="{{ url('general') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('mother') }}?id={{ $pid }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @else
                        <a href="{{ url('general') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('mother') }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
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



</script>

@endsection
