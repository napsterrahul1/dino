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
                                    <form class="forms-sample" method="POST" action="{{ route('create-user') }}" >
                                        @csrf
                                            <div class="row">
                                                <div class="col-sm-6">

                                                    <div class="form-group">
                                                        <label for="role">{{ __('Assign Role')}}<span class="text-red">*</span></label>
                                                        {!! Form::select('role', $roles, null,[ 'class'=>'form-control select2', 'placeholder' => 'Select Role','id'=> 'role', 'required'=> 'required']) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="name">{{ __('Username')}}<span class="text-red">*</span></label>
                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" placeholder="Enter user name" required>
                                                        <div class="help-block with-errors"></div>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">{{ __('Email')}}<span class="text-red">*</span></label>
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email address" required>
                                                        <div class="help-block with-errors" ></div>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label for="password">{{ __('Password')}}<span class="text-red">*</span></label>
                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter password" required>
                                                        <div class="help-block with-errors"></div>

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password-confirm">{{ __('Confirm Password')}}<span class="text-red">*</span></label>
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>

                                                    
                                                    
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">{{ __('Submit')}}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->

                        <!-- jQuery Validation -->
                    
                        <!-- /jQuery Validation -->
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
        $(function () {
            'use strict';
            // form repeater jquery
            $('.invoice-repeater, .repeater-default').repeater({
              show: function () {
                $(this).slideDown();
                // Feather Icons
                if (feather) {
                  feather.replace({ width: 14, height: 14 });
                }
              },
              hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                  $(this).slideUp(deleteElement);
                }
              }
            });
          });
    </script>
    
@endsection