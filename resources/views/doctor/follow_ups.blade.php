@extends('layouts.app')

@section('content')

<!-- END: Main Menu-->

<div class="page-wrapper">
    <div class="page-content">
        @include('layouts/message')
        <h4 class="mb-0">Follow ups</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Reply</th>
                            <th>Confirmation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->fname}}</td>
                            <td>{{$d->subject}}</td>
                            <td>{{$d->description}}</td>
                            <td>{{$d->date}}</td>
                            <td>{{$d->doctor_reply}}</td>
                            <td>
                                <a href="#" class="btn btn-success" data-id="{{$d->doctor_reply}}" onclick="showMyModalSetTitle('{{ $d->feedback_id }}','{{$d->doctor_reply}}')">Reply</a>
                            </td>
                        </tr>
                        @endforeach



                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="CloseModalPopup();" aria-hidden="true">&times;  </button>
                <h4 class="modal-title" id="myModalLabel">Doctor Reply</h4>
            </div>
            <form action="{{ url('save-followups') }}" method="post">
                {{ csrf_field() }}
            <div class="modal-body">


                    <div class="form-group">
                        <input type="hidden" name="feedback_id" id="feedback_id">
                        <label for="exampleInputEmail1">Reply Description</label>
                        <textarea type="text" class="form-control" id="exampleInputEmail1" rows="3" name="doctor_reply" aria-describedby="emailHelp" placeholder="Enter reply"></textarea>
                        {{--<small id="emailHelp" class="form-text text-muted">description</small>--}}
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" onclick="CloseModalPopup();" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
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
            lengthChange: false,
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

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>

<script type="text/javascript">
    function showMyModalSetTitle(myTitle,reply) {
        $('#feedback_id').val(myTitle);
        $('#exampleInputEmail1').html(reply);
        $('#myModal').modal('show');
    }
    function CloseModalPopup() {
        $('#myModal').modal('hide');
    }

</script>


@endsection
