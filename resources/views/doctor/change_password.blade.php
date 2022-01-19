@extends('layouts.app')

@section('content')
@include('layouts/message') 
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0 fw-600">Change Password</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <form action="{{ url('change-password') }}" class="mx-input-300" method="post">
                    {{ csrf_field() }}

                    @foreach ($errors->all() as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach

                    <div class="p-4 border rounded">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Current Password</label>
                            <input type="password" class="form-control" name="current_password" id="formGroupExampleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="new_password" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Re-Type Password</label>
                            <input type="password" class="form-control" name="new_confirm_password" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
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