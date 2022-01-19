@extends('layouts.app')
@section('title','Warranty Support')

@section('content')
<!-- END: Main Menu-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
         @include('layouts/message') 
            <!-- Ajax Sourced Server-side -->
            <!--/ Ajax Sourced Server-side -->
            <!-- Column Search -->
            <section id="column-search-datatable" style="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom dt-action-buttons text-right" align="right">
                                <a href="{{url('user/create')}}" class="dt-button create-new btn btn-primary text-right">Add New</a>
                            </div>
                            <div class="card-datatable" style="padding: 10px;">
                                <table id="user_table" class="master-column-search table">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Email</th>
                                           
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>


<!-- END: Content-->
@endsection

@section('js')
<script src="{{ asset('app-assets/js/custom.js') }}"></script>
@endsection