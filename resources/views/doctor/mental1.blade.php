@extends('layouts.app')
@section('title','Specific Mental Set-up')

@section('content')
@include('layouts/message')
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            @include('doctor.head')
        </div>
        <h4 class="mb-0 card-form-head">Specific Mental Set-up
        </h4>
        <hr>
        <div class="card">
            <div class="card-body">


                    <form class="g-3 p-3 border rounded" action="" method="post">
                        {!! csrf_field()  !!}
                        <input type="hidden" name="smm_id" value="{{ $data->smm_id }}">
                    <div class="next_prev_div">



                        <h5>Basic</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you very rigid or Obstinate in nature?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_rigid">{{$data->smm_rigid}}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Any specific Fears / Phobias / Passions / Hobbies / Interest?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_phobia">{{$data->smm_rigid}}</textarea>
                            </div>
                        </div>

                        <hr>
                        <h5>Religious Affections</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Religious Affections?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_affection">{{$data->smm_rigid}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you believe in God?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_god">{{$data->smm_god}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you perform religious customs?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_customs">{{$data->smm_customs}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you visit religious places?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_places">{{$data->smm_places}}</textarea>
                            </div>
                        </div>

                        <hr>
                        <h5>Personality Details</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Can you take your own decisions or you depend upon some one else to take decisions.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_decisions">{{$data->smm_decisions}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you always need someone behind you when you take decision.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_decisions_behind">{{$data->smm_decisions_behind}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    Do you take time to take decision or you take decisions immediately</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_immediately">{{$data->smm_immediately}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you get tired mentally very easily or you can work for long hours.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_tired">{{$data->smm_tired}}</textarea>
                            </div>
                        </div>

                        <hr>
                        <h5>Consolation</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you like consolation by friends, family members?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_consolation">{{$data->smm_consolation}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you like people visiting you when you are not well?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_visiting">{{$data->smm_visiting}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you want people around you?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_around">{{$data->smm_around}}</textarea>
                            </div>
                        </div>

                        <hr>
                        <h5>Intellect</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Desribe your Intellect?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_intellect">{{$data->smm_intellect}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Scope of memory?(e.g sharp,quick,visual,confuse,forgotful,absent minded,for calculation,for numbers,for names,etc)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_memory">{{$data->smm_memory}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Talents?
                                    (e.g. makes poems, verses, rhymes, stories, music, dancing, performing arts, creative arts etc)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_talents">{{$data->smm_talents}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Character?
                                    (e.g. jovoal, iesting, inciting, mischyevous, teasing, criticism, sarcastic, witty, etc)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_character">{{$data->smm_character}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    Do you crave for knowledge?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_knowledge">{{$data->smm_knowledge}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you inquisitive?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_inquisitive">{{$data->smm_inquisitive}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    What is your expertise?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_expertise">{{$data->smm_expertise}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you like Reading?What do you read?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_reading">{{$data->smm_reading}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">What is the area of interest?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_interest">{{$data->smm_interest}}</textarea>
                            </div>
                        </div>

                        <hr>
                        <h5>Nature</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Current changes noticed in your nature by you / friend / family ?
                                    (e.g: Initially or before angry person but now has become mild)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_changes">{{$data->smm_changes}}</textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Was a very positive person before but now has become negative or pessimistic person.</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_positive">{{$data->smm_positive}}</textarea>
                            </div>
                        </div>.

                        <hr>
                        <h5>Mental State
                        </h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">What is your reaction to the same?
                                    ( eg: Anger, grief, jealousy, revenge, violence, embarrassment, envy, jealousy, guilt, rage etc )</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="smm_samereaction">{{$data->smm_samereaction}}</textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="form-label w-100">What are you Sensitive to?
                                </label>
                                <div>
                                    <?php $arraycheck = explode(',',$data->sensitive);?>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Contradiction', $arraycheck)) checked @endif id="sensitivity1" value="Contradiction" name="sensitive[]">
                                        <label class="form-check-label" for="sensitivity1">Contradiction</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Scoldings', $arraycheck)) checked @endif id="sensitivity2" value="Scoldings" name="sensitive[]">
                                        <label class="form-check-label" for="">Scoldings</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Insults', $arraycheck)) checked @endif id="sensitivity3" value="Insults" name="sensitive[]">
                                        <label class="form-check-label" for="">Insults </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Hurts', $arraycheck)) checked @endif id="sensitivity4" value="Hurts" name="sensitive[]">
                                        <label class="form-check-label" for="">Hurts</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Touch', $arraycheck)) checked @endif id="sensitivity5" value="Touch" name="sensitive[]">
                                        <label class="form-check-label" for="">Touch</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Travelling Sickness', $arraycheck)) checked @endif id="sensitivity6" value="Travelling Sickness" name="sensitive[]">
                                        <label class="form-check-label" for="">Travelling Sickness</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Light', $arraycheck)) checked @endif id="sensitivity7" value="Light" name="sensitive[]">
                                        <label class="form-check-label" for="">Light</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Motion Sickness', $arraycheck)) checked @endif id="sensitivity8" value="Motion Sickness" name="sensitive[]">
                                        <label class="form-check-label" for="">Motion Sickness</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Sun', $arraycheck)) checked @endif id="sensitivity9" value="Sun" name="sensitive[]">
                                        <label class="form-check-label" for="">Sun</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Tight Clothing', $arraycheck)) checked @endif id="sensitivity10" value="Tight Clothing" name="sensitive[]">
                                        <label class="form-check-label" for="">Tight Clothing</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" @if(in_array('Thunderstorm & lightening', $arraycheck)) checked @endif id="sensitivity11" value="Thunderstorm & lightening" name="sensitive[]">
                                        <label class="form-check-label" for="">Thunderstorm & lightening</label>
                                    </div>
                                </div>
                                {{-- <div class="btn-group" role="group" aria-label="">
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo1"  >
                                    <label class="btn btn-outline-success" for="sensitiveTo1"></label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo2" >
                                    <label class="btn btn-outline-success" for="sensitiveTo2"></label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo3" >
                                    <label class="btn btn-outline-success" for="sensitiveTo3"></label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo4" >
                                    <label class="btn btn-outline-success" for="sensitiveTo4"></label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo5" >
                                    <label class="btn btn-outline-success" for="sensitiveTo5">Social Position</label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo6" >
                                    <label class="btn btn-outline-success" for="sensitiveTo6">Disrespectful Behaviour</label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo7" >
                                    <label class="btn btn-outline-success" for="sensitiveTo7">Loss in Position</label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo8" >
                                    <label class="btn btn-outline-success" for="sensitiveTo8">Loss in Relation</label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo9" >
                                    <label class="btn btn-outline-success" for="sensitiveTo9">Injustice</label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo10" >
                                    <label class="btn btn-outline-success" for="sensitiveTo10">Criticism</label>
                                    <input type="radio" class="btn-check" name="sensitiveTo" id="sensitiveTo11" >
                                    <label class="btn btn-outline-success" for="sensitiveTo11">Partialities</label>

                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="nav--card-btn py-4">
                        @if($pid)
                        <a href="{{ url('mental') }}?id={{ $pid }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
{{--                        <a href="{{ url('') }}?id={{ $pid }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>--}}
                        @else
                        <a href="{{ url('mental') }}" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
{{--                        <a href="{{ url('') }}" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>--}}
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
