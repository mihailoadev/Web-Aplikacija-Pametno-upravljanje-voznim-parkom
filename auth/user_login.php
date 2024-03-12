<?php require '../includes/session_user.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<link rel='icon' href="../assets/img/square-parking-solid.svg" type='image/x-icon' sizes="16x16" />
	<title>eParking System / Prijava</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/custom.css">          
    <link rel="stylesheet" href="../assets/css/all.css">
	<link rel="stylesheet" href="../assets/css/aos.css">
  <script src="../assets/js/aos.js"></script>
</head>

<body>
	<script>
        AOS.init();
      </script>

<section id="login" data-aos="fade-down" data-aos-duration="2000">
        <div class="container h-100 justify-content-center align-items-center">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class=" text-center my-5">
                        <a class="link-dark navbar-brand site-title mb-0" href="../index.php">
                            <i class="fa-solid fa-square-parking fa-6x"></i>
                            <p class="lead">eParking System</p>
                        </a>
                    </div>
                    <div class="card shadow-lg">                        
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4 text-center">Prijava</h1>
                            <?php require(__DIR__ . '/../auth/login_process.php'); ?>
                            <form action="" method="POST" class="needs-validation" novalidate="" autocomplete="off">
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Adresa</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email nije validan!
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Potrebno je uneti ispravan password!
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="btn btn-dark btn-lg ms-auto">
                                        Prijavi se
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer py-3 border-0">
                            <div class="text-center">
                                Nemaš nalog? <a href="user_registration.php" class="text-dark">Registruj se!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<script src="../assets/js/login_validation.js"></script>
    <script src="../assets/js/all.js"></script>
</body>
</html>
