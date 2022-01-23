<?php $__env->startSection('title','Case ANalysis'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts/message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Main Menu-->

<div class="page-wrapper">
    <div class="page-content">
        <h4 class="mb-0">Case Analysis</h4>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="p-3 border rounded">
                    <form class="">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="caseName" class="form-label"> Name</label>
                                <input type="text" class="form-control" id="caseName" disabled value="<?php echo e($user->first_name); ?>" placeholder="e.g. Jay" required>
                            </div>
                            <div class="col-md-3">
                                <label for="ageCase" class="form-label"> Age</label>

                                <input type="number" class="form-control" id="ageCase" disabled value="<?php echo e($profile->age); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault03" class="form-label w-100">Sex</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" disabled name="inlineRadioOptions" <?php if($profile->sex =='male'): ?> checked <?php endif; ?> id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" disabled name="inlineRadioOptions" <?php if($profile->sex =='female'): ?> checked <?php endif; ?> id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" disabled name="inlineRadioOptions" <?php if($profile->sex =='other'): ?> checked <?php endif; ?> id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="caseDate" class="form-label"> Date</label>
                                <input type="text" class="form-control" id="caseDate" value="<?php echo e($data->patDate); ?>" >
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="MIASM" class="form-label">MIASM [From C/C , A/C and MIND]</label>
                                <input type="text" class="form-control" id="MIASM" value="<?php echo e($data->misam); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="aF" class="form-label">A/F</label>
                                <input type="text" class="form-control" id="aF" value="<?php echo e($data->af); ?>" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <h5 class="mb-0">MIASM</h5>
                            <div class="col-md-3">
                                <label for="disposition" class="form-label">Disposition</label>
                                <input type="text" class="form-control" id="disposition" value="<?php echo e($data->disposition); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="will" class="form-label">Will</label>
                                <input type="text" class="form-control" id="will" value="<?php echo e($data->will); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="intellect" class="form-label">Intellect</label>
                                <input type="text" class="form-control" id="intellect" value="<?php echo e($data->intellect); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="morals" class="form-label">Morals</label>
                                <input type="text" class="form-control" id="morals" value="<?php echo e($data->moral); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="memory" class="form-label">Memory</label>
                                <input type="text" class="form-control" id="memory" value="<?php echo e($data->memory); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="emotionalReaction" class="form-label">Emotional Reaction</label>
                                <input type="text" class="form-control" id="emotionalReaction" value="<?php echo e($data->emotional_reaction); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="sensitivity" class="form-label">Sensitivity</label>
                                <input type="text" class="form-control" id="sensitivity" value="<?php echo e($data->sessitiv); ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label for="speed" class="form-label">Speed</label>
                                <input type="text" class="form-control" id="speed" value="<?php echo e($data->speed); ?>" required>
                            </div>
                        </div>
                        <hr>

















































                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4  border-4 border-end">
                                <h5 class="mb-2">GENERALS</h5>
                                <div class="p-2">
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-2">
                                            <label for="thermal" class="form-label">Thermal</label>
                                        </div>
                                        <div class="col-10">
                                            <select class="form-select" aria-label="Default select example" name="gthermal" id="thermal">
                                                <option selected>Select</option>
                                                <option value="1">Hot</option>
                                                <option value="2">Chilly</option>
                                                <option value="3">Ambithermal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-2">

                                            <label for="thirst" class="form-label">Thirst</label>
                                        </div>
                                        <div class="col-10">
                                            <select class="form-select" aria-label="Default select example" name="gthirst" id="thirst">
                                                <option selected>Select</option>
                                                <option value="1">Thirsty</option>
                                                <option value="2">Thirstless</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-2">
                                            <label for="side" class="form-label">Side</label>
                                        </div>
                                        <div class="col-10">
                                            <select class="form-select" aria-label="Default select example" name="gside" id="addSide">
                                                <option selected>Select</option>
                                                <option value="1">Right</option>
                                                <option value="2">Left</option>
                                                <option value="3">Right to Left</option>
                                                <option value="3">  Left to Right</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 border-4 border-end">
                                <h5 class="mb-2">SENSITIVITY TO</h5>
                                <div class="p-2">
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-3">
                                            <label for="Sun" class="form-label">Sun</label>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="Sun" value="<?php echo e($data->sun); ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-3">
                                            <label for="Noise" class="form-label">Noise</label>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="Noise" value="<?php echo e($data->noise); ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-3">
                                            <label for="StrongOdour" class="form-label">Strong Odour</label>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="StrongOdour" value="<?php echo e($data->strong_odour); ?>" required>
                                        </div>
                                    </div>
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-3">
                                            <label for="Touch" class="form-label">Touch</label>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" class="form-control" id="Touch" value="<?php echo e($data->touch); ?>" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h5 class="mb-2">SENSES</h5>
                                <div class="p-2">
                                    <div class="row mb-2 align-items-center">
                                        <div class="col-2">
                                            <label for="Smell" class="form-label">Smell</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="Smell" value="<?php echo e($data->smell); ?>" required>
                                        </div>
                                    </div>
                                    <div class="row   mb-2 align-items-center">
                                        <div class="col-2">
                                            <label for="Hearing" class="form-label">Hearing</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="Hearing" value="<?php echo e($data->hearing); ?>" required>
                                        </div>
                                    </div>
                                    <div class="row  mb-2 align-items-center">
                                        <div class="col-2">
                                            <label for="Taste" class="form-label">Taste</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="Taste" value="<?php echo e($data->taste); ?>" required>
                                        </div>
                                    </div>
                                    <div class="row   mb-2 align-items-center">
                                        <div class="col-2">
                                            <label for="Vision" class="form-label">Vision</label>
                                        </div>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="Vision" value="<?php echo e($data->vision); ?>" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="PQRS" class="form-label">Any PQRS Physical General Symptoms Or Physical Particulars</label>
                                <textarea class="form-control" id="PQRS" rows="3"><?php echo e($data->anypqr); ?></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="DrugHistory" class="form-label">Drug History</label>
                                <textarea class="form-control" id="DrugHistory" rows="3"><?php echo e($data->drug_history); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="InvestigationAdd" class="form-label">Investigation</label>
                                <textarea class="form-control" id="InvestigationAdd" rows="3"><?php echo e($data->investigation); ?></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <h5 class="mb-0">REPERTORISE</h5>
                            <div class="col-md-4">
                                <label for="rubricsTaken" class="form-label">Rubrics Taken</label>
                                <textarea class="form-control" id="rubricsTaken" rows="3"><?php echo e($data->rubric_taken); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="remedies" class="form-label">Remedies</label>
                                <textarea class="form-control" id="remedies" rows="3"><?php echo e($data->remedies); ?></textarea>
                            </div>
                            <div class="col-md-4">
                                <label for="remediesReason" class="form-label">Remedies Given With Reason</label>
                                <textarea class="form-control" id="remediesReason" rows="3"><?php echo e($data->remedies_reason); ?></textarea>
                            </div>
                        </div>
                        <div class="my-4">

                            <a class="btn btn-info" type="">Print</a>
                            <a class="btn btn-success" type="submit">Save</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Row</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="col-md-4">
                        <label for="addDisease" class="form-label">Disease</label>
                        <input type="text" class="form-control" id="addDisease" value="<?php echo e($data->misam); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="addLayer" class="form-label">Layer	</label>
                        <input type="text" class="form-control" id="addLayer" value="<?php echo e($data->misam); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <label for="addMIASM" class="form-label">MIASM	</label>
                        <input type="text" class="form-control" id="addMIASM" value="<?php echo e($data->misam); ?>" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add Entry</button>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
			$('#journeyDisease').DataTable();
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\anup\resources\views/doctor/case.blade.php ENDPATH**/ ?>
