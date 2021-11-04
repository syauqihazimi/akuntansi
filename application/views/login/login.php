<!DOCTYPE html>
<html lang="en">
<head>
	<title>Berkah Laundry - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/icons/favicon.ico') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src=" <?= base_url('assets/img/brand/300x300.png') ?>" alt="IMG">
				</div>

				<form role="form" action="<?= base_url('login') ?>" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Sistem Informasi Akuntansi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100 form-control" placeholder="Username" type="text" name="username" value="<?= $data->username ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 form-control" placeholder="Password" type="password" name="password" value="<?= $data->password ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
          <div class="text-center">
						<span class="txt1">
							Login sebagai..
						</span>
					</div>
          <div class="btn-group" data-toggle="buttons">
            <label class="btn btn-light active">
              <input type="radio" name="options" id="option1" checked> Admin
            </label>
            <label class="btn btn-light">
              <input type="radio" name="options" id="option2"> Accountant
            </label>
            <label class="btn btn-light">
              <input type="radio" name="options" id="option3"> Finance
            </label>
          </div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Kelas 5A - Sistem Informasi
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src=" <?= base_url('assets/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src=" <?= base_url('assets/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src=" <?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src=" <?= base_url('assets/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src=" <?= base_url('assets/vendor/tilt/tilt.jquery.min.js') ?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src=" <?= base_url('assets/js/main.js') ?>"></script>

  <!-- SWEETALERT -->
  <script src=" <?= base_url('assets/vendor/sweetalert/sweetalert2.all.min.js') ?>"></script>

  <?php
    $formErrorUsername = form_error('username');
    $formErrorPassword = form_error('password');
    if(!empty($formErrorUsername) || !empty($formErrorPassword)):
  ?>
    <!-- SCRIPT SWEETALERT INLINE -->
    <script>
      $(window).on('load',function(){
        let pesan = "<?= $formErrorUsername ?> \n <?= $formErrorPassword ?>";
        swal('Oops!',pesan,'error');
      });
    </script>
  <?php endif; ?>

  <?php
    $pesan = $this->session->flashdata('pesan_error');
    if(!empty($pesan)):
  ?>
    <!-- SCRIPT SWEETALERT INLINE -->
    <script>
      $(window).on('load',function(){
        let pesan = "<?= $pesan ?>";
        swal('Oops!',pesan,'error');
      });
    </script>
  <?php endif; ?>
</body>
</html>