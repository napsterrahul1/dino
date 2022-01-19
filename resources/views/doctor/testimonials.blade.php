@extends('layouts.app')

@section('content')
    @include('layouts/message')
    <!-- END: Main Menu-->

    <div class="page-wrapper">
        <div class="page-content">
            <h4 class="mb-0 text-uppercase">Testimonials</h4>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Approved</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Rajesh</td>
                                <td>testingggg</td>

                                <td>15 sep 2021</td>
                                <td>
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" checked value="option1">
                                </td>
                                <td>
                                    <a href="" class="btn btn-success">Delete</a>
                                </td>
                            </tr>


                            </tfoot>
                        </table>
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
                buttons: [ 'copy', 'excel', 'pdf', 'print']
            } );

            table.buttons().container()
                .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
        } );
    </script>

@endsection