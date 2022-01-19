@extends('layouts.app')

@section('content')
<!-- END: Main Menu-->

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">

        <div class="content-body">
            <!-- Ajax Sourced Server-side -->


            <!--/ Ajax Sourced Server-side -->

            <!-- Column Search -->
            <section id="column-search-datatable" style="">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                        @can('manage_role')
                            <div class="card-header border-bottom dt-action-buttons text-right">
                                <button style="left: 90%;" class="dt-button create-new btn btn-primary text-right" tabindex="0" aria-controls="DataTables_Table_0" type="button" data-toggle="modal" data-target="#modals-slide-in"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus mr-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>Add New</span></button>
                            </div>
                        @endcan
                            <div class="card-datatable" style="padding: 10px;">
                                <table id="roles_table" class="master-column-search table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('Role')}}</th>
                                            <th>{{ __('Permissions')}}</th>
                                            <th>{{ __('Action')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                     
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

        </div>
    </div>
</div>

<div class="modal modal-slide-in fade" id="modals-slide-in">
    <div class="modal-dialog sidebar-xlg">
        <form class="add-new-record modal-content pt-0" method="POST" action="{{url('role/create')}}">
        @csrf

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Add Role</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label" for="basic-icon-default-fullname">Name: </label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name" required>
                    </div>
                    
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-rounded">{{ __('Submit')}}</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END: Content-->
@endsection

@section('js')
<script src="{{ asset('app-assets/js/custom.js') }}"></script>
@endsection