<?php require '../includes/session_dashboard.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="eParkingSystem / Dashboard">
  <meta name="keywords" content="parking, parking karta, E-Parking, auto, parking servis, kontrolna tabla, dashboard">
  <meta name="author" content="Mihailo Anđelić | mihailo46821@its.edu.rs">

  <!-- Favicon -->
  <link rel='icon' href="../assets/img/square-parking-solid.svg" type='image/x-icon' sizes="16x16" />
  <!-- Favicon kraj -->

  <!-- Naslov -->
  <title>eParkingSystem / Kontrolna tabla</title>
  <!-- Naslov - kraj -->

  <!-- Stilovi - pocetak -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <link rel="stylesheet" href="../assets/css/all.css">
  <link rel="stylesheet" href="../assets/css/aos.css">
  <!-- Stilovi kraj -->

  <!-- AOS skripta - mora da se ukljuci na pocetku!!! -->
  <script src="../assets/js/aos.js"></script>
  <!-- AOS skripta - kraj -->

  <!-- Noscript -->
  <noscript>
    <style type="text/css">
      [data-aos] {
        opacity: 1 !important;
        transform: translate(0) scale(1) !important;
      }
    </style>
  </noscript>
  <!-- Noscript - kraj -->
</head>

<body>

  <script>
    AOS.init();
  </script>

  <!-- Pocetak navigacije -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed" id="header-nav" role="navigation">
    <div class="container">
      <a class="link-light navbar-brand site-title mb-0" href="dashboard.php">
        <i class="fa-solid fa-square-parking fa-2xl"></i> Kontrolna tabla
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-2">
        </ul>
        <div class="dropdown">
          <button class="btn btn-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user" style="color: #000000;"></i> <?= $_SESSION['full_name'] ?>
          </button>
          <ul class="dropdown-menu text-center" aria-labelledby="userDropdown" style="min-width: 100%;">
            <li><a class="dropdown-item" href="../auth/user_logout.php">Odjavi se </a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Kraj navigacije -->

  <!-- Welcome sekcija -->
  <section id="welcome" class="p-5">
    <div class="container" data-aos="zoom-in" data-aos-duration="2000">
      <div class="p-5 text-bg-dark rounded-3 border shadow-lg">
        <div class="container-fluid py-5">
          <p class="lead">Dobrodošao/la <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i></p>
          <h1 class="display-5 fw-bold"><?= $_SESSION['full_name'] ?></h1>
          <p class="col-md-8 fs-4">Ovo je inovativna kontrolna tabla putem koje možete inteligentno upravljati voznim
            parkom vaše kompanije.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Welcome sekcija - kraj -->

  <!-- Stanje voznog parka i ubacivanje novog vozila -->
  <section id="insert" class="p-5">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">
      <header class="pb-3 mb-4 border-bottom">
        <div class="d-flex align-items-center text-body-emphasis text-decoration-none">
          <a class="link-dark" href="dashboard.php"><i class="fa-solid fa-square-parking fa-2xl me-2"></i></a>
          <span class="fs-4">Unos novog vozila:</span>
        </div>
      </header>

      <div class="container-fluid py-4">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 mb-3 align-items-center rounded-3 border shadow-lg bg-secondary-subtle">
          <div class="col-lg-7 p-3 p-lg-5 pt-lg-2 text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Započni unos podataka!</h1>
            <p class="lead">Molimo Vas da unesete relevantne informacije o vozilu kako bismo obezbedili preciznost i potpune podatke.</p>
            <button class="btn btn-dark btn-lg mx-auto" type="button" data-bs-toggle="modal" data-bs-target="#insertModal"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Dodaj novo vozilo</button>
          </div>
          <div class="col-lg-2 offset-lg-1 p-0 align-items-center text-center">
            <h1 class="display-5 fw-bold text-body-emphasis">Ukupno vozila:</h1>
            <p style="font-size: 200px;"><?php include __DIR__ . '/../includes/vehicles_count.php'; ?></p>
          </div>
        </div>
      </div>
  </section>
  <!-- Stanje voznog parka i ubacivanje novog vozila - kraj -->


  <!-- Kartice -->
  <section id="cards" class="p-5">
    <div class="container" data-aos="fade-up" data-aos-duration="2000">

      <header class="pb-3 mb-4 border-bottom">
        <div class="d-flex align-items-center text-body-emphasis text-decoration-none">
          <a class="link-dark" href="dashboard.php"><i class="fa-solid fa-square-parking fa-2xl me-2"></i></a>
          <span class="fs-4">Stanje voznog parka:</span>
        </div>
      </header>

      <div class="row align-items-md-stretch">
        <div class="col-md-6 mb-4">
          <div class="h-100 p-5 text-bg-dark rounded-3 text-center border shadow-lg">
            <div class="text-center h1 mb-3">
              <i class="fa-solid fa-car" style="color: #ffffff;"></i>
            </div>
            <h2>Automobil</h2>
            <h3><?php include __DIR__ . '/../includes/car_count.php'; ?></h3>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="h-100 p-5 bg-secondary-subtle border rounded-3 text-center border shadow-lg">
            <div class="text-center h1 mb-3">
              <i class="fa-solid fa-truck" style="color: #000000;"></i>
            </div>
            <h2>Kamion</h2>
            <h3><?php include __DIR__ . '/../includes/truck_count.php'; ?></h3>
          </div>
        </div>
      </div>

      <div class="row align-items-md-stretch mt-3">
        <div class="col-md-6 mb-4">
          <div class="h-100 p-5 bg-secondary-subtle border rounded-3 text-center border shadow-lg">
            <div class="text-center h1 mb-3">
              <i class="fa-solid fa-truck-pickup" style="color: #000000;"></i>
            </div>
            <h2>Pick-up</h2>
            <h3><?php include __DIR__ . '/../includes/pickup_count.php'; ?></h3>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="h-100 p-5 text-bg-dark rounded-3 text-center border shadow-lg">
            <div class="text-center h1 mb-3">
              <i class="fa-solid fa-screwdriver-wrench" style="color: #ffffff;"></i>
            </div>
            <h2>Neispravna vozila</h2>
            <h3><?php include __DIR__ . '/../includes/car_repair_count.php'; ?></h3>
          </div>
        </div>
      </div>

      <div class="row align-items-md-stretch">
        <div class="col-md-6 mb-4">
          <div class="h-100 p-5 text-bg-dark rounded-3 text-center border shadow-lg">
            <div class="text-center h1 mb-3">
              <i class="fa-solid fa-square-parking" style="color: #ffffff;"></i>
            </div>
            <h2>Parking</h2>
            <h3><?php include __DIR__ . '/../includes/parking_count.php'; ?></h3>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="h-100 p-5 bg-secondary-subtle border rounded-3 text-center border shadow-lg">
            <div class="text-center h1 mb-3">
              <i class="fa-solid fa-warehouse" style="color: #000000;"></i>
            </div>
            <h2>Garaža</h2>
            <h3><?php include __DIR__ . '/../includes/garage_count.php'; ?></h3>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- Kraj kartica -->

  <!-- Modal za ubacivanje novog vozila -->
  <div class="modal fade" id="insertModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Unos podataka o vozilu</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form method="post" action="../includes/insert_data.php" id="vehicleForm">
            <div class="mb-3">
              <label for="parkingTypeInput" class="form-label">Tip parkinga:</label>
              <select class="form-select" id="parkingTypeInput" name="parking_type" required>
                <option value="Garaža">Garaža</option>
                <option value="Parking">Parking</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="parkingSpotInput" class="form-label">Broj parking mesta:</label>
              <input type="number" class="form-control" id="parkingNumberInput" name="parking_number" min="1" max="1200" required>
            </div>
            <div class="mb-3">
              <label for="registrationInput" class="form-label">Registracija vozila:</label>
              <input type="text" class="form-control" id="registrationInput" name="registration" required>
            </div>
            <div class="mb-3">
              <label for="vehicleTypeInput" class="form-label">Tip vozila:</label>
              <select class="form-select" id="vehicleTypeInput" name="vehicle_type" required>
                <option value="Automobil">Automobil</option>
                <option value="Kamion">Kamion</option>
                <option value="Pick-up">Pick-up</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="registrationDateInput" class="form-label">Datum registracije:</label>
              <input type="date" class="form-control" id="registrationDateInput" name="registration_date" required>
            </div>
            <div class="mb-3">
              <label for="expirationDateInput" class="form-label">Istek registracije:</label>
              <input type="date" class="form-control" id="expirationDateInput" name="expiration_date" required>
            </div>
            <div class="mb-3">
              <label for="technicalConditionInput" class="form-label">Tehnička ispravnost:</label>
              <select class="form-select" id="technicalConditionInput" name="tehnical_condition" required>
                <option value="Ispravno">Ispravno</option>
                <option value="U kvaru">U kvaru</option>
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
              <button type="submit" name="insertdata" class="btn btn-dark">Dodaj</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal za ubacivanje novog vozila - kraj-->

  <!-- Modal za brisanje vozila -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Potvrda brisanja</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="../includes/delete_data.php" method="post">
          <div class="modal-body">
            <input type="hidden" name="delete_id" id="delete_id">
            Da li ste sigurni da želite da obrišete vozilo?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ne</button>
            <button type="submit" name="deletedata" class="btn btn-danger">Obriši</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Modal za brisanje vozila - kraj  -->

  <!-- Tabela -->
  <section id="table" class="p-5">
    <div class="container">
      <header class="pb-3 mb-4 border-bottom">
        <div class="d-flex align-items-center text-body-emphasis text-decoration-none">
          <a class="link-dark" href="dashboard.php"><i class="fa-solid fa-square-parking fa-2xl me-2"></i></a>
          <span class="fs-4">Lista vozila:</span>
          <div class="ms-auto">
            <form method="post" action="../includes/export_data.php">
              <button type="submit" name="export" class="btn btn-success btn-sm"><i class="fa-solid fa-file-export" style="color: #ffffff;"></i> Export Excel (.xls)</button>
            </form>
          </div>
        </div>
      </header>
      <div class="table-responsive">
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tip parkinga</th>
              <th scope="col">Broj parking mesta</th>
              <th scope="col">Registracija</th>
              <th scope="col">Tip vozila</th>
              <th scope="col">Datum registracije</th>
              <th scope="col">Istek registracije</th>
              <th scope="col">Tehničko stanje</th>
              <th scope="col" class="text-center">Ažuriraj</th>
              <th scope="col" class="text-center">Obriši</th>
            </tr>
          </thead>
          <tbody>
            <?php include __DIR__ . '/../includes/fetch_vehicles.php'; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <!-- Tabela - kraj --> 

  <!-- Footer - pocetak  -->
  <footer class="bg-dark text-center text-white">
    <div class="container p-4" data-aos="zoom-in" data-aos-duration="2000">
      <section class="mb-3">
        <i class="fa-solid fa-square-parking fa-3x"></i>
        <p class="lead">
          eParking System
        </p>
      </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2024 Created by Mihailo Anđelić
    </div>
  </footer>
  <!-- Kraj footera  -->


  <!-- Skripte -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/all.js"></script>
  <script src="../assets/js/delete_modal.js"></script>
  <!-- Kraj skripti -->

</body>

</html>