<?php $__env->startSection('title','Mental Make-up'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Main Menu-->
<div class="page-wrapper">
    <div class="page-content">
        <div class="card">
            <?php echo $__env->make('doctor.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="p-3 border rounded">
                    <form class="row g-3" action="" method="post">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="mental_id" value="<?php echo e($data->mental_id); ?>">


                        <div class="next_prev_div">
                        <h4 class="mb-2 card-form-head">Mental Make-up
                        </h4>

                        <hr>
                        <h5>Describe your Nature</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you Mild or Angry? If angry how do you release your anger?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_angry"><?php echo e($data->nature_angry); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you like to be around people or alone ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_alone"><?php echo e($data->nature_alone); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you mix easily with people or not ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_mix"><?php echo e($data->nature_mix); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">How many friends do you have ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_friendsn"><?php echo e($data->nature_friendsn); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you optimist or pessimist?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_optimisticn"><?php echo e($data->nature_optimisticn); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you bold and courageous or timid and shy ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_bold"><?php echo e($data->nature_bold); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you take your own decisions ? Are they impulsive or thoughtful?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_decision"><?php echo e($data->nature_decision); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">

                                    Do you have any anxieties ?
                                    (of family,friends,meetings,business,money,examination)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_anexities"><?php echo e($data->nature_anexities); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you share your feelings with anyone ? if yes with whom ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_feelingn"><?php echo e($data->nature_feelingn); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you like travelling ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_travelling"><?php echo e($data->nature_travelling); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">How important is social position for you?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_social_position"><?php echo e($data->nature_social_position); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you ambitious?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_ambitious"><?php echo e($data->nature_ambitious); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you organised at workplace and home?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_organisedn"><?php echo e($data->nature_organisedn); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Can you take holidays easily at work?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_holidays"><?php echo e($data->nature_holidays); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you time punctual?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_punctual"><?php echo e($data->nature_punctual); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you very particular about everything ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_perticularn"><?php echo e($data->nature_perticularn); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you desire luxuries? If yes then to what extent?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_luxuries"><?php echo e($data->nature_luxuries); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you restless ? mentally and physically,explain?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_restlessn"><?php echo e($data->nature_restlessn); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">How about cleanliness ? (personal and surrounding) Number</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_cleanliness"><?php echo e($data->nature_cleanliness); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you take risks in life?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_risks"><?php echo e($data->nature_risks); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you adventurous or easy going?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_adventure"><?php echo e($data->nature_adventure); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you take responsibilities ? if yes can you fulfill them?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_reponsibilitiesn"><?php echo e($data->nature_reponsibilitiesn); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Add more about your nature</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_add_nature"><?php echo e($data->nature_add_nature); ?></textarea>
                            </div>

                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you speak lies easily</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_lies"><?php echo e($data->nature_lies); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are you revengeful/ jealous, etc</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_jealous"><?php echo e($data->nature_jealous); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any history of parental domination ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_domination"><?php echo e($data->nature_domination); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any history of Child abuse?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_abuse"><?php echo e($data->nature_abuse); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Sibling rivalry or comparisons ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_comparison"><?php echo e($data->nature_comparison); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any feeling of being neglected ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_neglected"><?php echo e($data->nature_neglected); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Anything specific which has left an impression in your mind during childhood?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="nature_impression"><?php echo e($data->nature_impression); ?></textarea>
                            </div>
                        </div>

                        <hr>
                        <h5>Childhood</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any history of parental domination ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="childhood_history"><?php echo e($data->childhood_history); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any history of Child abuse?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="childhood_abuse"><?php echo e($data->childhood_abuse); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Sibling rivalry or comparisons ? </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="childhood_rivalry"><?php echo e($data->childhood_rivalry); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any feeling of being neglected ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="childhood_feelings"><?php echo e($data->childhood_feelings); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Anything specific which has left an impression in your mind during childhood?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="childhood_impression"><?php echo e($data->childhood_impression); ?></textarea>
                            </div>
                        </div>
<hr>
                        <h5>School Days</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Your Academic status?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="school_status"><?php echo e($data->school_status); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Were you studying on your own or were pushed to study?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="school_study"><?php echo e($data->school_study); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any failure and success ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="school_success"><?php echo e($data->school_success); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Participation in extra curricular activities and sports ? brief it</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="school_sports"><?php echo e($data->school_sports); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">AAny Love affairs or disappointments?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="school_love"><?php echo e($data->school_love); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Anything specific which has left an impression in your mind during school days?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="school_specific"><?php echo e($data->school_specific); ?></textarea>
                            </div>
                        </div>
<hr>
                        <h5>College Days</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Academics and Graduation details?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="college_details"><?php echo e($data->college_details); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Your ambition?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="college_ambition"><?php echo e($data->college_ambition); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Love affairs or disappointments? </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="college_love"><?php echo e($data->college_love); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Participation in extra curricular activities and sports?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="college_participation"><?php echo e($data->college_participation); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Anything specific which has left an impression in your mind during college days?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="college_specific"><?php echo e($data->college_specific); ?></textarea>
                            </div>
                        </div>
<hr>
                        <h5>Home/Work Environment</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Describe Your Home?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_home"><?php echo e($data->work_home); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Whom do you stay with?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_stay"><?php echo e($data->work_stay); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">How often you change your residence?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_residence"><?php echo e($data->work_residence); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">How is the atmosphere at home?
                                    (Conflicts / single parenting / happy / friendly etc )</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_atmosphere"><?php echo e($data->work_atmosphere); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">
                                    Describe Your Work?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_work"><?php echo e($data->work_work); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">How is the atmosphere at Work?
                                    (Domination / friendly / encouraging / Routine etc )</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_watmosphere"><?php echo e($data->work_watmosphere); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">What exactly is your job?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_job"><?php echo e($data->work_job); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you change your job easily?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_changejob"><?php echo e($data->work_changejob); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">What are your contributions to your profession ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="work_contributions"><?php echo e($data->work_contributions); ?></textarea>
                            </div>
                        </div>
<hr>
                        <h5>Traumatic Experiences /Disappointments</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Fraud, tragedy, shock, human loss, accidents etc?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="traumatic_fraud"><?php echo e($data->traumatic_fraud); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Anything which has disturbed your mental and physical state?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="tarumatic_disturbed"><?php echo e($data->tarumatic_disturbed); ?></textarea>
                            </div>
                        </div>
<hr>
                        <h5>Relations</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Describe your Relations with Family, Friends, Neighbours ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="relation_family"><?php echo e($data->relation_family); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Do you have long term relations with people or can break relations easily ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="relation_longterm"><?php echo e($data->relation_longterm); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Are your relations very intense or superficial?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="relation_intense"><?php echo e($data->relation_intense); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Love affairs or disappointments?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="relation_love"><?php echo e($data->relation_love); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any disappointments financially and emotionally ? how ?when? why?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="realtion_disappointments"><?php echo e($data->realtion_disappointments); ?></textarea>
                            </div>
                        </div>
<hr>
                        <h5>Sexual History</h5>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Describe Your Sexual Relations?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_relations"><?php echo e($data->sexual_relations); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Desire Increased/Decreased/Absent?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_desire"><?php echo e($data->sexual_desire); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Orientation Homosexual / Heterosexual / Lesbian? </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_orientation"><?php echo e($data->sexual_orientation); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any Perversions?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_preversions"><?php echo e($data->sexual_preversions); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Masturbation Habits?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_mastrubation"><?php echo e($data->sexual_mastrubation); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any weakness in sexual organs? (Emissions, impotency etc)</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_organs"><?php echo e($data->sexual_organs); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Marital/ Premarital/Extra marital Exposures?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_exposures"><?php echo e($data->sexual_exposures); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Any problems during intercourse and oral sex?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_oral"><?php echo e($data->sexual_oral); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Exposures to different partners?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_partners"><?php echo e($data->sexual_partners); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlTextarea1" class="form-label">Contact with CSW's (Commercial Sex Workers) ?</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="sexual_csw"><?php echo e($data->sexual_csw); ?></textarea>
                            </div>
                        </div>
                    </div>



                    <div class="nav--card-btn py-4">
                        <?php if($pid): ?>
                        <a href="<?php echo e(url('vaccination')); ?>?id=<?php echo e($pid); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('mental1')); ?>?id=<?php echo e($pid); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php else: ?>
                        <a href="<?php echo e(url('vaccination')); ?>" id="display1" class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                        <button class="btn btn-success" type="submit">Update</button>
                        <a href="<?php echo e(url('mental1')); ?>" id="display" class="display nex-pre-btn btn btn-info px-4">Next</a>
                        <?php endif; ?>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/mental.blade.php ENDPATH**/ ?>
