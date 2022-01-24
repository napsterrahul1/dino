@extends('layouts.app')

@section('content')


<div class="page-wrapper">
    <div class="page-content">
        @include('layouts/message')
        <h4 class="mb-2">New User</h4>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Email ID</th>
                                <th>Phone Number</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{$user->first_name}} {{$user->last_name}}</td>
                            </tr>
                            @endforeach

                        </tbody>
<!--                        <tfoot>-->
<!--                            <tr>-->
<!--                                <th></th>-->
<!--                                <th>Email ID</th>-->
<!--                                <th>Phone Number</th>-->
<!--                                <th>Name</th>-->
<!--                            </tr>-->
<!--                        </tfoot>-->
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
        $('#example').DataTable( {
            columnDefs: [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            select: {
                style:    'os',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]],
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
    } );
</script>
@endsection
