@extends('layouts.app')

@section('content')

<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        @include('layouts/message')
        <h4 class="mb-0 ">Medicine Request</h4>
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
                            <th>Medicine Status</th>
                            <th>Change Status</th>
                            {{--<th>Confimation</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{ $d->fname }}</td>
                            <td>{{ $d->medi_description }}</td>
                            <td>{{ $d->date_of_order }}</td>


                            <td>NA</td>
                            <td>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input my_checkbox" data-id="paid" data-value="{{$d->oid}}"  name="paidstatus" type="checkbox" @if($d->paidstatus==1) checked  @endif id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Paid</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input my_checkbox" data-id="dispatch" data-value="{{$d->oid}}" name="disaptchstatus" @if($d->disaptchstatus==1) checked @endif type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Dispatch</label>
                                </div>
                            </td>
                            {{--<td><a href="#" class="btn btn-success">submit</a></td>--}}
                        </tr>
                        @endforeach

                        </tbody>

                    </table>

                    <button class="btn btn-info">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable({
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
        });
      } );
</script>
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
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

    $('.my_checkbox').click(function(){
        if($(this).is(':checked')){
            ajax($(this).data('id'),$(this).data('value'),1);
        } else {
            ajax($(this).data('id'),$(this).data('value'),0);
        }
    });

    function ajax(id,value,status) {
        $.ajax({
            type: "get",
            url: 'ajax_form',
            data: {
                id: id,
                value: value,
                status: status
            },
            success: function(html){
                console.log(html);
            }
        });
    }

</script>

@endsection
