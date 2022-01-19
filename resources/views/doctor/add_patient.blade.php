@extends('layouts.app')
@section('title','New Patient')

@section('content')
@include('layouts/message') 
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0 fw-600 text-white">Preliminary Data</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="p-3 border rounded">
                    <form class="row g-3" method="post" action="">
                        {{ csrf_field() }}
                        <div class="col-md-4">
                            <label for="validationDefault01" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="validationDefault01" name="fname" value="" placeholder="e.g. Jay" required>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault02" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="validationDefault02" value="" name="mname" required placeholder="e.g. Ramesh">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="validationDefault03" value="" name="lname" required placeholder="e.g. Gupta">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label w-100">Sex</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="male">
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="female">
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="inlineRadio3" value="other">
                                <label class="form-check-label" for="inlineRadio3">Other</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Age</label>
                            <input type="number" class="form-control" id="validationDefault03" name="age" value="" placeholder="e.g. 25" required>
                        </div>

                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Father Full Name</label>
                            <input type="text" class="form-control" id="validationDefault03" name="fathname" value="" required placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Mother Full Name</label>
                            <input type="text" class="form-control" id="validationDefault03" value="" name="mothname" required placeholder="">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault04" class="form-label">Blood Group</label>
                            <select class="form-select" id="validationDefault04" required name="bloodgrp">
                                <option selected disabled value="">Select</option>
                                <option>A+</option>
                                <option>A-</option>
                                <option>B+</option>
                                <option>B-</option>
                                <option>AB+</option>
                                <option>AB-</option>
                                <option>O+</option>
                                <option>O-</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label w-100">Martial Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="martial" id="inlineRadio1" value="single">
                                <label class="form-check-label" for="inlineRadio1">Single</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="married">
                                <label class="form-check-label" for="inlineRadio2">Married</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="divorce">
                                <label class="form-check-label" for="inlineRadio3">Divorce</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">If Married, No. Of Times</label>
                            <input type="number" class="form-control" id="validationDefault03" name="times" required placeholder="e.g. 2">
                        </div>

                        <div class="col-md-4">
                            <label for="validationDefaultUsername" class="form-label">Height (in CM)</label>
                            <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">CM</span>
                                <input type="number" class="form-control" id="validationDefaultUsername" name="height" aria-describedby="inputGroupPrepend2" required placeholder="e.g. 158">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefaultUsername" class="form-label">Weight (in KG)</label>
                            <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">KG</span>
                                <input type="number" class="form-control" id="validationDefaultUsername" name="weight" aria-describedby="inputGroupPrepend2" required placeholder="e.g. 58">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Address</label>
                            <input type="text" class="form-control" id="validationDefault03" name="addr" required placeholder="e.g. Sharda Nagar">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">City</label>
                            <input type="text" class="form-control" id="validationDefault03" name="city"  required placeholder="e.g. Pune">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Pincode</label>
                            <input type="number" class="form-control" id="validationDefault03" name="pin" required placeholder="e.g. 443151">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">State</label>
                            <input type="text" class="form-control" id="validationDefault03" name="state" required placeholder="e.g. Maharashtra">
                        </div>
                        <div class="col-md-4">
                            <label for="country" class="form-label">Country</label>
                            @include('doctor.country')
                        </div>

                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Religion</label>
                            <input type="text" class="form-control" id="validationDefault03" name="religion" required placeholder="e.g. Hindu">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Landline Number</label>
                            <input type="number" class="form-control" id="validationDefault03" name="lnumber" required placeholder="e.g. 0206758292">
                        </div>

                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Cell Number</label>
                            <input type="number" class="form-control" id="validationDefault03" name="cnumber" required placeholder="e.g. 9887766554433">
                        </div>

                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="validationDefault03" name="email" required placeholder="e.g. name@email.com">
                        </div>
                        <div class="col-md-4">
                            <label for="validationDefault03" class="form-label">Referred By</label>
                            <input type="text" class="form-control" id="validationDefault03" name="ref" required placeholder="e.g. Jeniffer">
                        </div>
                        <div class="col-md-4">
                            <label for="formFile" class="form-label">Upload your Photograph</label>
                            <input class="form-control" type="file" id="formFile" name="photo">
                        </div>

                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/js/scripts/cards/card-analytics.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

@endsection