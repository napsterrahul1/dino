<!doctype html>
<html lang="en">

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="<?php echo e(url('/')); ?>/assets/images/favicon-32x32.png" type="image/png" />
		<!-- loader-->
		<link href="<?php echo e(url('/')); ?>/assets/css/pace.min.css" rel="stylesheet" />
		<script src="<?php echo e(url('/')); ?>/assets/js/pace.min.js"></script>
		<!-- Bootstrap CSS -->
		<link href="<?php echo e(url('/')); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;800&display=swap" rel="stylesheet">
		<link href="<?php echo e(url('/')); ?>/assets/css/app.css" rel="stylesheet">
		<link href="<?php echo e(url('/')); ?>/assets/css/icons.css" rel="stylesheet">
		<link href="<?php echo e(url('/')); ?>/assets/css/custom-style.css" rel="stylesheet">
		<title>Homeopathy Clinic</title>
	</head>

<body class="bg-theme login-banner" >
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col-8 mx-auto">

						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="form-body">
										<div class="mb-4 text-center ">
											<img src="assets/logo/dr_anupama.png" width="180" alt="" />
											<hr>
										</div>
										<h4 class="fw-600">Sign in </h4>
										<p class="mb-sm-4">
											Login here using your username and password</p>
                                        <form method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>

                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
    
                                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                                <div class="input-group" >
                                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
    
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    
                                                </div>
                                            </div>
    
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <br/>
                                                    
                                                    <button type="submit" class="btn btn-success"><i class="bx bxs-lock-open"></i>Sign in</button>
                                                
                                                    
                                                </div>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->

	<!--plugins-->
	<script src="<?php echo e(url('/')); ?>/assets/js/jquery.min.js"></script>

	<script>
	$(".switcher-btn").on("click", function() {
	$(".switcher-wrapper").toggleClass("switcher-toggled")
	}), $(".close-switcher").on("click", function() {
		$(".switcher-wrapper").removeClass("switcher-toggled")
	}),

	</script>
</body>

</html><?php /**PATH C:\xampp\htdocs\anup\resources\views/login/index.blade.php ENDPATH**/ ?>