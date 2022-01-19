@extends('layouts.app')

@section('content')
<!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Roles</h4>
                                </div>
                                <div class="card-body">
                                    <form class="forms-sample" method="POST" action="{{url('role/update')}}">
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-fullname">Name</label>
                                                {{-- {!! $role->name!!} --}}
                                                <input type="text" class="form-control" id="role" name="role" value="{{$role->name}}" placeholder="Insert Role">
                                                <input type="hidden" name="id" value="{{$role->id}}" required>
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>
                                            
                        
                                       
                                        <div class="row">
                                            <div class="col-12">
                                            <br>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
                    </div>
                </section>
                <!-- /Validation -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@section('js')
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
        
    </script>
    
@endsection