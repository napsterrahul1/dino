<?php $__env->startSection('title','General Make-up'); ?>

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
                    <div class="p-4 border rounded">
                        <form class="row g-3" action="" method="post">
                            <?php echo csrf_field(); ?>

                            <input type="hidden" name="physical_id" value="<?php echo e($data->physical_id); ?>">
                            <div class="next_prev_div">
                                <h4 class="mb-2 card-form-head">General Make-up</h4>
                                <hr>
                                <h5>Physicals</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="Built" class="form-label">Built</label>
                                        <textarea class="form-control" id="Built" rows="2"
                                                  name="physical_built"><?php echo e($data ? $data->physical_built : ''); ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="addComplexion" class="form-label">Complexion</label>
                                        <textarea class="form-control" id="addComplexion" rows="2"
                                                  name="physical_complexion"><?php echo e($data ? $data->physical_complexion : ''); ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Discoloration" class="form-label">Discoloration/
                                            Pigmentation</label>
                                        <textarea class="form-control" id="Discoloration" rows="2"
                                                  name="physical_discoloration"><?php echo e($data ? $data->physical_complexion : ''); ?></textarea>
                                    </div>
                                </div>
                                <hr>
                                <h5>Appetite</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="yourAppetite" class="form-label">How is your appetite ? </label>
                                        <textarea class="form-control" id="yourAppetite" rows="2"
                                                  name="appetite" ><?php echo e($data ? $data->physical_complexion : ''); ?></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label w-100">Can you tolerate hunger / Need to eat
                                            Immediately when hungry?</label>
                                        <div class="btn-group" role="group" aria-label="">
                                            <input type="radio" class="btn-check" <?php if($data->appetite_hunger=='yes'): ?> checked <?php endif; ?> name="appetite_hunger"
                                                   id="tolerateThermoHunger1" value="yes">
                                            <label class="btn btn-outline-primary"
                                                   for="tolerateThermoHunger1">Yes</label>

                                            <input type="radio" class="btn-check" <?php if($data->appetite_hunger=='no'): ?> checked <?php endif; ?> name="appetite_hunger"
                                                   id="tolerateThermoHunger2" value="no">
                                            <label class="btn btn-outline-primary"
                                                   for="tolerateThermoHunger2">No</label>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5>Thirst</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="feelThirsty" class="form-label">Do you feel thirsty? (As a habit you
                                            drink / Is it that you drink only during your meals and you don’t feel
                                            thirsty in between.)</label>
                                        <textarea class="form-control" id="feelThirsty" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="waterDrink" class="form-label">How much water do you drink in the
                                            whole day? </label>
                                        <textarea class="form-control" id="waterDrink" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="mouthGoDry" class="form-label">
                                            Does your throat or mouth go dry?</label>
                                        <textarea class="form-control" id="mouthGoDry" rows="2"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h5>Food</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="reheatTheFood" class="form-label">Do you ask to reheat the food if
                                            it is in Room Temperature ?</label>
                                        <textarea class="form-control" id="reheatTheFood" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="dislikeFood" class="form-label">A complete dislike to anything
                                            particular in food?</label>
                                        <textarea class="form-control" id="dislikeFood" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="foodCannotResist" class="form-label">
                                            What do you like the most in food which you cannot resist? </label>
                                        <textarea class="form-control" id="foodCannotResist" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Food Type </label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="foodType1" value="">
                                                <label class="form-check-label" for="foodType1">Hot</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="foodType2" value="">
                                                <label class="form-check-label" for="foodType2">Cold</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="foodType3" value="">
                                                <label class="form-check-label" for="foodType3">Warm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="foodType4" value="">
                                                <label class="form-check-label" for="foodType3">Room Temperature</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h5>Bowels</h5>
                                <div class="row g-3">
                                    <div class="col-md-2">
                                        <label for="stoolProblems1" class="form-label w-100">Any problem in your
                                            Stools?</label>
                                        <div class="btn-group" role="group" aria-label="">
                                            <input type="radio" class="btn-check" name="stoolProblems"
                                                   id="stoolProblems1">
                                            <label class="btn btn-outline-primary" for="stoolProblems1">Yes</label>

                                            <input type="radio" class="btn-check" name="stoolProblems"
                                                   id="stoolProblems2">
                                            <label class="btn btn-outline-primary" for="stoolProblems2">No</label>

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="" class="form-label">How are your Stools? </label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="yourStool1"
                                                       value="">
                                                <label class="form-check-label" for="yourStool1">Smooth</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="yourStool2"
                                                       value="">
                                                <label class="form-check-label" for="yourStool2">Hard</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="yourStool3"
                                                       value="">
                                                <label class="form-check-label" for="yourStool3">Any Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="characterStool" class="form-label">Character of Stool
                                            (odour/Color)</label>
                                        <textarea class="form-control" id="characterStool" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Bowel Habits</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="bowelHabits1"
                                                       value="">
                                                <label class="form-check-label" for="bowelHabits1">Regular</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="bowelHabits2"
                                                       value="">
                                                <label class="form-check-label" for="bowelHabits2">Irregular</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="bowelHabits3"
                                                       value="">
                                                <label class="form-check-label" for="bowelHabits3">Satisfactory</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="bowelHabits4"
                                                       value="">
                                                <label class="form-check-label"
                                                       for="bowelHabits4">Unsatisfactory</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="troublePassingStool" class="form-label">Do you have any trouble
                                            before, during and after passing stool ?</label>
                                        <textarea class="form-control" id="troublePassingStool" rows="2"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h5>Urine</h5>
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="" class="form-label w-100">Any problem in your Urine?</label>
                                        <div class="btn-group" role="group" aria-label="">
                                            <input type="radio" class="btn-check" name="problemUrine"
                                                   id="problemUrine1">
                                            <label class="btn btn-outline-primary" for="problemUrine1">Yes</label>
                                            <input type="radio" class="btn-check" name="problemUrine"
                                                   id="problemUrine2">
                                            <label class="btn btn-outline-primary" for="problemUrine2">No</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">How is your Urine?</label>
                                        <div class="btn-group" role="group" aria-label="">
                                            <input type="checkbox" class="btn-check" id="yourUrine1">
                                            <label class="btn btn-outline-primary" for="yourUrine1">Voluntary </label>
                                            <input type="checkbox" class="btn-check" id="yourUrine2">
                                            <label class="btn btn-outline-primary" for="yourUrine2">Involuntary </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="characterUrine" class="form-label">Character of
                                            Urine(odour/Color)</label>
                                        <textarea class="form-control" id="characterUrine" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="troubleDuringUrine" class="form-label">Do you have any trouble
                                            before, during & after passing urine?</label>
                                        <textarea class="form-control" id="troubleDuringUrine" rows="2"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h5>Perspiration</h5>
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="" class="form-label">How much do you Perspire or Sweat ?</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="profuse" value="">
                                                <label class="form-check-label" for="profuse">Profuse</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="moderate" value="">
                                                <label class="form-check-label" for="moderate">Moderate</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="scanty" value="">
                                                <label class="form-check-label" for="scanty">Scanty</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="absent" value="">
                                                <label class="form-check-label" for="absent">Absent</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Do you perspire on palms or soles?</label>
                                        <div class="btn-group" role="group" aria-label="">
                                            <input type="checkbox" class="btn-check" id="palms">
                                            <label class="btn btn-outline-primary" for="palms">Palms</label>
                                            <input type="checkbox" class="btn-check" id="soles">
                                            <label class="btn btn-outline-primary" for="soles">Soles</label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">Character of Perspiration</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="wet" value="">
                                                <label class="form-check-label" for="wet">Wet</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="oily" value="">
                                                <label class="form-check-label" for="oily">Oily</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="warm" value="">
                                                <label class="form-check-label" for="warm">Warm</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="cold" value="">
                                                <label class="form-check-label" for="cold">Cold</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sticky" value="">
                                                <label class="form-check-label" for="sticky">Sticky</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="anyOther" value="">
                                                <label class="form-check-label" for="anyOther">Any Other</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">What is the odour like?</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="odourLike1"
                                                       value="">
                                                <label class="form-check-label" for="odourLike1">Offensive</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="odourLike2"
                                                       value="">
                                                <label class="form-check-label" for="odourLike2">Sour</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="odourLike3"
                                                       value="">
                                                <label class="form-check-label" for="odourLike3">Sweetish</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="odourLike4"
                                                       value="">
                                                <label class="form-check-label" for="odourLike4">Urine-like </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="odourLike5"
                                                       value="">
                                                <label class="form-check-label" for="odourLike5">Pungent</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="odourLike6"
                                                       value="">
                                                <label class="form-check-label" for="odourLike6">Any Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h5>Sleep</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Quality of Sleep</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="qualitySleep1"
                                                       value="">
                                                <label class="form-check-label" for="qualitySleep1">Sound</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="qualitySleep2"
                                                       value="">
                                                <label class="form-check-label" for="qualitySleep2">Alert</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="qualitySleep3"
                                                       value="">
                                                <label class="form-check-label" for="qualitySleep3">Restless</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="qualitySleep4"
                                                       value="">
                                                <label class="form-check-label" for="qualitySleep4">Continuous tossing
                                                    about</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="qualitySleep5"
                                                       value="">
                                                <label class="form-check-label" for="qualitySleep5">Any Other</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Activity in Sleep</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep1"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep1">Salivation during
                                                    sleep </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep2"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep2">Catnap
                                                    Sleep </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep3"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep3">Talking</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep4"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep4">Walking</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep5"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep5">Snore</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep6"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep6"> Grind
                                                    Teeth </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep7"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep7"> Weeping </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="activitySleep8"
                                                       value="">
                                                <label class="form-check-label" for="activitySleep8"> Any Other </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="" class="form-label">Position during Sleep?</label>

                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="positionSleep1"
                                                       value="">
                                                <label class="form-check-label" for="positionSleep1">Back</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="positionSleep2"
                                                       value="">
                                                <label class="form-check-label" for="positionSleep2">Abdomen</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="positionSleep3"
                                                       value="">
                                                <label class="form-check-label" for="positionSleep3">Left
                                                    Lateral </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="positionSleep4"
                                                       value="">
                                                <label class="form-check-label" for="positionSleep4">Right
                                                    Lateral</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="positionSleep5"
                                                       value="">
                                                <label class="form-check-label" for="positionSleep5">Knee Chest </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="coverInSleep" class="form-label">How much do you cover in
                                            sleep?</label>
                                        <input class="form-control" id="coverInSleep">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="describeDream" class="form-label">Describe your Dreams:
                                            (good/bad)</label>
                                        <textarea class="form-control" id="describeDream" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="repeatedDream" class="form-label">Repeated dreams if any, describe
                                            it:</label>
                                        <textarea class="form-control" id="repeatedDream" rows="2"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h5> Thermo Regulation</h5>
                                <div class="row g-3">
                                    <div class="col-md-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">What type of
                                            climate/ Weather can you tolerate?</label>
                                        <br>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="climateTolerate1"
                                                       value="">
                                                <label class="form-check-label" for="climateTolerate1">Cool</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="climateTolerate2"
                                                       value="">
                                                <label class="form-check-label" for="climateTolerate2">Colder</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="climateTolerate3"
                                                       value="">
                                                <label class="form-check-label" for="climateTolerate3">Warm </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="climateTolerate4"
                                                       value="">
                                                <label class="form-check-label" for="climateTolerate4">Hot</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <label for="thermalTolerance" class="form-label">Thermal tolerance between cool
                                            / colder temp and warm / hot temperatures as in what you CAN TOLERATE more
                                            compared to others:</label>
                                        <textarea class="form-control" id="thermalTolerance" rows="2"></textarea>
                                        <small>(e.g:-Say in cold temperature you are the one who is feeling more cold or
                                            you are the one who comments it is not that cold and you require less woolen
                                            coverings in cold weather compared to others / Infact in slight cold weather
                                            also you are the one saying it is so cold & pile up with many layers of
                                            clothing.) [Think over this as it is important to know this answer as its
                                            shows the thermo equilibrium of the patient]
                                        </small>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="complexion" class="form-label">Complexion</label>
                                        <textarea class="form-control" id="complexion" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="presentMedications" class="form-label">
                                            At present, on any medications</label>
                                        <textarea class="form-control" id="presentMedications" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label w-100">Can you tolerate hunger / Need to eat
                                            Immediately when hungry?</label>
                                        <div class="btn-group" role="group" aria-label="">
                                            <input type="radio" class="btn-check" name="tolerateHunger"
                                                   id="tolerateHunger1">
                                            <label class="btn btn-outline-primary" for="tolerateHunger1">Yes</label>
                                            <input type="radio" class="btn-check" name="tolerateHunger"
                                                   id="tolerateHunger2">
                                            <label class="btn btn-outline-primary" for="tolerateHunger2">No</label>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h5>Sensitivity</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="typeOfClothing" class="form-label">What type of clothing do you
                                            prefer ? </label>
                                        <textarea class="form-control" id="typeOfClothing" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label w-100">What are you Sensitive to? </label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity1"
                                                       value="">
                                                <label class="form-check-label" for="sensitivity1">Sound/Music</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity2"
                                                       value="">
                                                <label class="form-check-label" for="">Perfumes/Strong Odours</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity3"
                                                       value="">
                                                <label class="form-check-label" for="">Noise </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity4"
                                                       value="">
                                                <label class="form-check-label" for="">Allergic Reaction</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity5"
                                                       value="">
                                                <label class="form-check-label" for="">Touch</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity6"
                                                       value="">
                                                <label class="form-check-label" for="">Travelling Sickness</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity7"
                                                       value="">
                                                <label class="form-check-label" for="">Light</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity8"
                                                       value="">
                                                <label class="form-check-label" for="">Motion Sickness</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity9"
                                                       value="">
                                                <label class="form-check-label" for="">Sun</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity10"
                                                       value="">
                                                <label class="form-check-label" for="">Tight Clothing</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="sensitivity11"
                                                       value="">
                                                <label class="form-check-label" for="">Thunderstorm & lightening</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="" class="form-label w-100">Can you tolerate tight clothing:</label>
                                        <div class="btn-group" role="group" aria-label="">
                                            <input type="radio" class="btn-check" name="tightClothing"
                                                   id="tightClothing1">
                                            <label class="btn btn-outline-primary" for="tightClothing1"> Around the
                                                Neck</label>
                                            <input type="radio" class="btn-check" name="tightClothing"
                                                   id="tightClothing2">
                                            <label class="btn btn-outline-primary" for="tightClothing2"> Around the
                                                Waist</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="superNaturalWorld" class="form-label">SuperNatural World (Extra
                                            Sensory Perceptions)</label>
                                        <textarea class="form-control" id="superNaturalWorld" rows="2"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h5>Addictions/HABITS</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="anyAddictions" class="form-label">Any Addictions/ Habits? </label>
                                        <textarea class="form-control" id="anyAddictions" rows="2"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h5>Speed</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="describeSpeed" class="form-label">Mentally and Physically:(Before
                                            the disease, Describe your basic speed</label>
                                        <textarea class="form-control" id="describeSpeed" rows="2"></textarea>
                                    </div>
                                </div>

                                <hr>
                                <h5>Birthmarks</h5>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <label for="birthMark" class="form-label">Do you have any birthmarks, moles,
                                            Injury scars; if yes what age?</label>
                                        <textarea class="form-control" id="birthMark" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="birthMarkSide" class="form-label">Which part of the body and which
                                            Side (Right or Left)?</label>
                                        <textarea class="form-control" id="birthMarkSide" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="nav--card-btn py-4">
                                <?php if($pid): ?>
                                    <a href="<?php echo e(url('makeup')); ?>?id=<?php echo e($pid); ?>" id="display1"
                                       class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                                    <button class="btn btn-success" type="submit">Update</button>
                                    <a href="<?php echo e(url('birth')); ?>?id=<?php echo e($pid); ?>" id="display"
                                       class="display nex-pre-btn btn btn-info px-4">Next</a>
                                <?php else: ?>
                                    <a href="<?php echo e(url('makeup')); ?>" id="display1"
                                       class="display nex-pre-btn btn btn-warning px-4 me-4">Prev</a>
                                    <button class="btn btn-success" type="submit">Update</button>
                                    <a href="<?php echo e(url('birth')); ?>" id="display"
                                       class="display nex-pre-btn btn btn-info px-4">Next</a>
                                <?php endif; ?>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <?php $__env->stopSection(); ?>

        <?php $__env->startSection('js'); ?>
            <script>
                $(document).ready(function () {
                    $('#example').DataTable();
                });
            </script>
            <script>
                $(document).ready(function () {
                    var table = $('#example2').DataTable({
                        lengthChange: false,
                        buttons: ['copy', 'excel', 'pdf', 'print']
                    });

                    table.buttons().container()
                        .appendTo('#example2_wrapper .col-md-6:eq(0)');
                });


            </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/general.blade.php ENDPATH**/ ?>