@extends('layouts.app')
@section('title','Milestone History')

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
                <div class="p-4 border rounded">
                    <form class="row g-3" action="" method="post">
                        {!! csrf_field()  !!}
                        <input type="hidden" name="milestone_id" value="{{ $data->milestone_id }}">

                    <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Milestone History</h4>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="" class="form-label w-100">Delayed or On time ?</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" @if($data->milestone_delay=='yes') checked @endif name="milestone_delay" id="milestoneHistory1"  value="yes">
                                    <label class="btn btn-outline-primary" for="milestoneHistory1">Yes</label>
                                    <input type="radio" class="btn-check" @if($data->milestone_delay=='no') checked @endif name="milestone_delay" id="milestoneHistory2" value="no">
                                    <label class="btn btn-outline-primary" for="milestoneHistory2">No</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="teething" class="form-label w-100">Teething, any problem?</label>
                                <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" @if($data->milestone_teething=='yes') checked @endif name="milestone_teething" id="teething1"  value="yes">
                                    <label class="btn btn-outline-primary" for="teething1">Yes</label>
                                    <input type="radio" class="btn-check" @if($data->milestone_teething=='no') checked @endif name="milestone_teething" id="teething2" value="no">
                                    <label class="btn btn-outline-primary" for="teething2">No</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Neck Holding</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_neck_holding">{{ $data->milestone_neck_holding }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Difficulty in Sitting, Standing or Walking ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_difficulty">{{ $data->milestone_difficulty }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Eating any indigestibles like chalk, lime, earth, slate-pencil etc.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_eating">{{ $data->milestone_eating }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Urine control / bed-wetting ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_urine">{{ $data->milestone_urine }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Difficulty in Stool or Toilet training ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_stool">{{ $data->milestone_stool }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any other problem about growth & development?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_growth">{{ $data->milestone_growth }}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Difficulty in Speaking Words, sentence, stammering, speech ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="milestone_speaking">{{ $data->milestone_speaking }}</textarea>
                            </div>
                        </div>
                    </div>


                    <div class="nav--card-btn py-4">
                        @if($pid)
                        <a href="{{ url('mother') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('vaccination') }}?id={{ $pid }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        @else
                        <a href="{{ url('mother') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="{{ url('vaccination') }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
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
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );

        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );


</script>

@endsection
