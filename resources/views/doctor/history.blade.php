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
                <div class="p-4 border rounded">
                    <form class=" g-3" action="" method="post">
                        {{ csrf_field() }}
                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Preliminary Data</h4>
                        <hr>
                        <div class="row">

                            <input type="hidden" name="user_id" value="{{ $data ? $data->user_id : '' }}">
                            <div class="col-md-4">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="fname" value="{{ $data ? $data->fname : '' }}"
                                       placeholder="e.g. Jay" required>
                            </div>
                            <div class="col-md-4">
                                <label for="middleName" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middleName"  name="mname" value="{{ $data ? $data->mname : '' }}" required
                                       placeholder="e.g. Ramesh">
                            </div>
                            <div class="col-md-4">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lname" value="{{ $data ? $data->lname : '' }}" required
                                       placeholder="e.g. Gupta">
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault03" class="form-label w-100">Sex</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex"
                                           id="sexRadio1" @if($data) @if($data->sex == 'male') checked @endif @endif value="male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex"
                                           id="sexRadio2" value="female"  @if($data) @if($data->sex == 'female') checked @endif @endif>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex"  @if($data) @if($data->sex == 'other') checked @endif @endif
                                           id="sexRadio3" value="other">
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="ageNum" class="form-label">Age</label>
                                <input type="number" class="form-control" id="age" name="age" value="{{ $data ? $data->age : '' }}"
                                       placeholder="e.g. 25" required>
                            </div>

                            <div class="col-md-4">
                                <label for="fatherFullName" class="form-label">Father Full Name</label>
                                <input type="text" class="form-control" id="fatherFullName" name="ffname" value="{{ $data ? $data->ffname : '' }}" required
                                       placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label for="motherFullName" class="form-label">Mother Full Name</label>
                                <input type="text" class="form-control" id="motherFullName" name="mfname" value="{{ $data ? $data->mfname : '' }}" required
                                       placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label for="bloodGroup" class="form-label">Blood Group</label>
                                <select class="form-select" id="bloodGroup" name="blgrp" required>
                                    <option  disabled value="">Select</option>
                                    <option value="A+"  @if($data) @if($data->blgrp == 'A+') selected @endif @endif>A+</option>
                                    <option value="A-"  @if($data) @if($data->blgrp == 'A-') selected @endif @endif>A-</option>
                                    <option value="B+"  @if($data) @if($data->blgrp == 'B+') selected @endif @endif>B+</option>
                                    <option value="B-"  @if($data) @if($data->blgrp == 'B-') selected @endif @endif>B-</option>
                                    <option value="AB+"  @if($data) @if($data->blgrp == 'AB+') selected @endif @endif>AB+</option>
                                    <option value="AB-"  @if($data) @if($data->blgrp == 'AB-') selected @endif @endif>AB-</option>
                                    <option value="O+"  @if($data) @if($data->blgrp == 'O+') selected @endif @endif>O+</option>
                                    <option value="O-"  @if($data) @if($data->blgrp == 'O-') selected @endif @endif>O-</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault03" class="form-label w-100">Martial Status</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="mstatus"
                                           id="martialStatus1" @if($data) @if($data->mstatus == 'single') checked @endif @endif value="single">
                                    <label class="form-check-label" for="martialStatus1">Single</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="mstatus"
                                           id="martialStatus2" @if($data) @if($data->mstatus == 'married') checked @endif @endif value="married">
                                    <label class="form-check-label" for="martialStatus2">Married</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="mstatus"
                                           id="martialStatus3" @if($data) @if($data->mstatus == 'divorce') checked @endif @endif value="divorce">
                                    <label class="form-check-label" for="martialStatus3">Divorce</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="martialStatusNo" class="form-label">If Married, No. Of Times</label>
                                <input type="number" class="form-control" name="mnotimes" value="{{ $data ? $data->mnotimes : '' }}" id="martialStatusNo"
                                       placeholder="e.g. 1">
                            </div>

                            <div class="col-md-4">
                                <label for="heightCM" class="form-label">Height (in CM)</label>
                                <div class="input-group"><span class="input-group-text"
                                                               id="heightCM1">CM</span>
                                    <input type="number" class="form-control" id="heightCM"
                                           aria-describedby="heightCM" name="ht" value="{{ $data ? $data->ht : '' }}" required placeholder="e.g. 158">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="WeightKG" class="form-label">Weight (in KG)</label>
                                <div class="input-group"><span class="input-group-text"
                                                               id="WeightKG1">KG</span>
                                    <input type="number" class="form-control" id="WeightKG"
                                           aria-describedby="WeightKG" name="wt" value="{{ $data ? $data->wt : '' }}" required placeholder="e.g. 58">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" value="{{ $data ? $data->address : '' }}" id="address" required
                                       placeholder="e.g. Sharda Nagar">
                            </div>
                            <div class="col-md-4">
                                <label for="addCity" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" value="{{ $data ? $data->city : '' }}" id="addCity" required
                                       placeholder="e.g. Pune">
                            </div>
                            <div class="col-md-4">
                                <label for="addPincode" class="form-label">Pincode</label>
                                <input type="number" class="form-control" name="pincode" value="{{ $data ? $data->pincode : '' }}" id="addPincode" required
                                       placeholder="e.g. 443151">
                            </div>
                            <div class="col-md-4">
                                <label for="State" class="form-label">State</label>
                                <input type="text" class="form-control" name="state" value="{{ $data ? $data->state : '' }}" id="State" required
                                       placeholder="e.g. Maharashtra">
                            </div>
                            <div class="col-md-4">
                                <label for="country" class="form-label">Country</label>
                               @include('doctor.country')
                            </div>

                            <div class="col-md-4">
                                <label for="religion" class="form-label">Religion</label>
                                <input type="text" class="form-control" name="religion" value="{{ $data ? $data->religion : '' }}" id="religion" required
                                       placeholder="e.g. Hindu">
                            </div>
                            <div class="col-md-4">
                                <label for="landlineNumber" class="form-label">Landline Number</label>
                                <input type="number" class="form-control" name="lnumber" value="{{ $data ? $data->lnumber : '' }}" id="landlineNumber" required
                                       placeholder="e.g. 0206758292">
                            </div>

                            <div class="col-md-4">
                                <label for="cellNumber" class="form-label">Cell Number</label>
                                <input type="number" class="form-control" name="mno" value="{{ $data ? $data->mno : '' }}" id="cellNumber" required
                                       placeholder="e.g. 9887766554433">
                            </div>

                            <div class="col-md-4">
                                <label for="emailId" class="form-label">Email ID</label>
                                <input type="email" class="form-control" name="email" value="{{ $data ? $data->email : '' }}" id="emailId" required
                                       placeholder="e.g. name@email.com">
                            </div>
                            <div class="col-md-4">
                                <label for="referredID" class="form-label">Referred By</label>
                                <input type="text" class="form-control" name="reffered_by" value="{{ $data ? $data->reffered_by : '' }}" id="referredID" required
                                       placeholder="e.g. Jeniffer">
                            </div>
                            <div class="col-md-4">
                                <label for="uploadPic" class="form-label">Upload your Photograph</label>
                                <input class="form-control" type="file" id="uploadPic">
                            </div>
                            {{--<div class="col-md-4">--}}
                                {{--<button class="btn btn-success card-head-button" type="submit">Save</button>--}}

                            {{--</div>--}}
                        </div>

                    </div>



                    <div class="nav--card-btn py-4">
                        @if($pid)
                        {{--<a href="{{ url('') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>--}}
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('complaint') }}?id={{ $pid }}" id="display" class="display  btn btn-info px-4">Next</a>
                        @else
                        {{--<a href="{{ url('') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>--}}
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('complaint') }}" id="display" class="display  btn btn-info px-4">Next</a>
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
    $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
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
