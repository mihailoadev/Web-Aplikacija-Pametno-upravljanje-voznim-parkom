<?php require '../includes/session_dashboard.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="eParking pocetna stranica">
  <meta name="keywords" content="parking, parking karta, E-Parking, auto, parking servis">
  <meta name="author" content="Mihailo Anđelić | mihailo46821@its.edu.rs">
  <link rel='icon' href="../assets/img/square-parking-solid.svg" type='image/x-icon' sizes="16x16" />
  <title>eParkingSystem / Ažuriraj podatke vozila</title>

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel="stylesheet" href="../assets/css/all.css">
  <link rel="stylesheet" href="../assets/css/aos.css">  
  <script src="../assets/js/aos.js"></script>

  <noscript>
    <style type="text/css">
      [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
      }
    </style>
  </noscript>
</head>
<body>

<script>
    AOS.init();
  </script>


<section id="" class="p-2">
  <div class="container" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="500">
    <header class="pb-3 mb-4 border-bottom">
      <div class="d-flex align-items-center text-body-emphasis text-decoration-none">
        <i class="fa-solid fa-square-parking fa-2xl me-2"></i>
        <span class="fs-4">Ažuriranje podataka:</span>
      </div>
    </header>
    <div class="p-5 mb-4 bg-secondary-subtle rounded-3 text-center">
      <div class="container-fluid py-5">
        <h1 class="display-3 fw-bold">Želiš da promeniš podatke o vozilu?</h1>       
        <?php include __DIR__ . '/../pages/update_data.php'; ?>        
      </div>
    </div>
  </div>
</section>  



<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/all.js"></script>

</body>
</html>
