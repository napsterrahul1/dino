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
                                    <h4 class="card-title">Edit Permissions</h4>
                                </div>
                                <div class="card-body">
                                    {!! Form::model($permission, ['method' => 'PATCH','route' => ['roles.update', $permission->id]]) !!}
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-fullname">Name</label>
                                                {{-- {!! $role->name!!} --}}
                                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="form-label" for="basic-icon-default-fullname">Guard Name</label>
                                                 {!! Form::text('guard_name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

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