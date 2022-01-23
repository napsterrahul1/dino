@extends('layouts.app')

@section('content')
@include('layouts/message')
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            @include('doctor.head')
        </div>
        <div class="card">
            <div class="card-body">
                <div class="p-3 border rounded">


                    <form class="row g-3" action="" method="post">
                        {!! csrf_field()  !!}
                        <input type="hidden" name="disease_id" value="{{$data->disease_id}}">
                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Disease MakeUp</h4>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="AnyPhysicalTrauma" class="form-label">Any Physical Trauma</label>
                                <textarea class="form-control" id="AnyPhysicalTrauma" name="disease_trauma" rows="2">{{ $data->disease_trauma }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="HereditaryIllnesses" class="form-label">Hereditary Illnesses</label>
                                <textarea class="form-control" id="HereditaryIllnesses" name="disease_hereditary" rows="2">{{ $data->disease_hereditary }}</textarea>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="form-label w-100">Past History of Major Operations/Illnesses</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" name="disease_operate" @if($data->disease_operate=='yes') checked @endif id="pastHisotry1" value="yes" >
                                    <label class="btn btn-outline-success" for="pastHisotry1">Yes</label>

                                    <input type="radio" class="btn-check" name="disease_operate" @if($data->disease_operate=='no') checked @endif id="pastHisotry2" value="no">
                                    <label class="btn btn-outline-success" for="pastHisotry2">No</label>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="onAnyMedication" class="form-label">
                                    At present, on any medications</label>
                                <textarea class="form-control" id="onAnyMedication" name="disease_medication" rows="2">{{ $data->disease_medication }}</textarea>
                            </div>

                        </div>
                    </div>

                    <div class="nav--card-btn py-4">
                        @if($pid)
                        <a href="{{ url('complaint') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('general') }}?id={{ $pid }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @else
                        <a href="{{ url('complaint') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('general') }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @endif

                    </div>
                    </form>
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

@endsection
