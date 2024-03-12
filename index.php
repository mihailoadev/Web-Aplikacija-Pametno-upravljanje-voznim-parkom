<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="eParking pocetna stranica">
    <meta name="keywords" content="parking, parking karta, E-Parking, parking servis">
    <meta name="author" content="Mihailo Anđelić | mihailo46821@its.edu.rs">

    <!-- Favicon -->
    <link rel='icon' href="assets/img/square-parking-solid.svg" type='image/x-icon' sizes="16x16" />
    <!-- Favicon kraj -->

    <!-- Naslov -->
    <title>eParking / Početna</title>
    <!-- Naslov - kraj -->

    <!-- Stilovi - pocetak -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <!-- Stilovi kraj -->

    <!-- AOS skripta - mora da se ukljuci na pocetku!!! -->
    <script src="assets/js/aos.js"></script>
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

    <main>
        <!-- Pocetak navigacije -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed" id="header-nav" role="navigation">
            <div class="container">
                <a class="link-light navbar-brand site-title mb-0" href="index.php">
                    <i class="fa-solid fa-square-parking fa-2xl"></i> eParking
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto me-2">
                        <li class="nav-item"><a class="nav-link" href="#functions">Funkcionalnosti</a></li>
                        <li class="nav-item"><a class="nav-link" href="#statistic">Statistika</a></li>
                        <li class="nav-item"><a class="nav-link" href="#securityHero">Bezbednost</a></li>                       
                        <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>

                    </ul>
                    <a class="btn btn-outline-secondary px-4 me-md-2" href="auth/user_login.php">Prijavi se</a>
                    <a class="btn btn-light px-4 me-md-2" href="auth/user_registration.php">Registruj se</a>
                </div>
            </div>
        </nav>
        <!-- Kraj navigacije -->

        <!-- Pocetak headera -->
        <header class="px-4 pt-5 text-center border-bottom" data-aos="fade-up" data-aos-duration="2000">
            <h1 class="display-4 fw-bold text-body-emphasis marker">Efikasno upravljajte voznim parkom!</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mt-4 mb-4">Inovativna web aplikacija za upravljanje voznim parkom pruža efikasno
                    praćenje,
                    optimizaciju i kontrolu flote vozila, omogućavajući kompanijama preciznu kontrolu, smanjenje
                    troškova i
                    povećanje operativne efikasnosti.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <a class="btn btn-dark btn-lg px-4 me-sm-3" href="auth/user_login.php">Prijavi se</a>
                    <a class="btn btn-outline-secondary btn-lg px-4" href="auth/user_registration.php">Registruj se</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="assets/img/Data-report.png" class="img-fluid" alt="Opis slike" width="520">
                </div>
            </div>
        </header>
        <!-- Kraj headera -->

        <!-- Funkcionalnosti - pocetak -->
        <section class="p-5" id="functions">
            <div class="container" data-aos="fade-right" data-aos-duration="2000">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Funkcionalnosti</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col">
                        <div class="card h-100 bg-dark text-light">
                            <div class="card-body text-center shadow-lg">
                                <i class="fa-solid fa-file-circle-plus fs-1 mb-3" style="color: #ffffff;"></i>
                                <h3 class="card-title mb-3">Unos novog vozila</h3>
                                <p class="card-text">
                                    Otvorite vrata za nova vozila u vašem voznom parku. Iskoristite naš jednostavan korak za unos koji omogućava brzo i lako registrovanje vozila, obezbeđujući sve potrebne informacije za efikasno vođenje evidencije.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-dark text-light">
                            <div class="card-body text-center shadow-lg">
                                <i class="fa-solid fa-pen-to-square fs-1 mb-3" style="color: #ffffff;"></i>
                                <h3 class="card-title mb-3">Ažuriranje vozila</h3>
                                <p class="card-text">
                                    Optimizujte podatke o vašem voznom parku putem funkcionalnosti ažuriranja vozila. Izmenite ključne informacije o vozilu s lakoćom, osiguravajući tačnost i relevantnost podataka u svakom trenutku.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-dark text-light">
                            <div class="card-body text-center shadow-lg">
                                <i class="fa-solid fa-trash fs-1 mb-3" style="color: #ffffff;"></i>
                                <h3 class="card-title mb-3">Brisanje vozila</h3>
                                <p class="card-text">
                                    Upravljajte svojim voznim parkom bez nepotrebnih tereta. Naša funkcionalnost brisanja vozila omogućava vam da efikasno uklonite zastarele podatke i očistite evidenciju vozila.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-dark text-light">
                            <div class="card-body text-center shadow-lg">
                                <i class="fa-solid fa-shield-halved fs-1 mb-3" style="color: #ffffff;"></i>
                                <h3 class="card-title mb-3">Siguran Login sistem</h3>
                                <p class="card-text">
                                    Zaštitite pristup vašem sistemu pomoću sigurnog sistema prijave. Uz napredne mere bezbednosti, obezbedićemo vaše podatke od neovlašćenog pristupa, čineći vašu platformu bezbednom.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-dark text-light">
                            <div class="card-body text-center shadow-lg">
                                <i class="fa-solid fa-file-export fs-1 mb-3" style="color: #ffffff;"></i>
                                <h3 class="card-title mb-3">Export u Excel</h3>
                                <p class="card-text">
                                    Eksportujte podatke o vozilima u Excel format uz našu efikasnu funkciju izvoza. Obezbeđujemo vam mogućnost jednostavnog deljenja, analize podataka i praćenja promena u vašem voznom parku.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 bg-dark text-light">
                            <div class="card-body text-center shadow-lg">
                                <i class="fa-solid fa-magnifying-glass fs-1 mb-3" style="color: #ffffff;"></i>
                                <h3 class="card-title mb-3">Pretraga vozila</h3>
                                <p class="card-text">
                                    Istražujte vaš vozni park pomoću funkcionalnosti pretrage vozila. Pronađite brzo i precizno sve informacije o vozilima koje su vam potrebne, olakšavajući praćenje i upravljanje voznim parkom.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Funkcionalnosti kraj -->

        <!-- Broj korisnika i vozila - pocetak -->
        <section id="statistic" class="p-5 bg-dark">
            <div class="container" data-aos="fade-up" data-aos-duration="2000">
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-white">Statistika</h2>
                </div>
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light-subtle">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-2">
                        <h1 class="display-5 fw-bold text-body-emphasis">Registrovani korisnici</h1>
                        <p class="lead">Naša zajednica sada broji <?php include 'includes/user_count.php'; ?> registrovanih korisnika koji su pridruženi našoj platformi!</p>                        
                    </div>
                    <div class="col-lg-2 offset-lg-1 p-0 overflow-hidden text-center">
                    <h1 class="display-5 fw-bold text-body-emphasis"><i class="fa-solid fa-user-group" style="color: #000000;"></i>
                        </h1>
                        <p style="font-size: 200px;"><?php include 'includes/user_count.php'; ?></p>
                    </div>
                </div>
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 mt-3 align-items-center rounded-3 border shadow-lg bg-light-subtle">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-2">
                        <h1 class="display-5 fw-bold text-body-emphasis">Registrovana vozila</h1>
                        <p class="lead">Zahvaljujući našem rešenju za evidenciju voznog parka, već imamo uspešno uneto <?php include 'includes/vehicles_count.php'; ?> vozila. Ovo efikasno sredstvo omogućava vam brzo i jednostavno vođenje administracije voznog parka.</p>
                    </div>
                    <div class="col-lg-2 offset-lg-1 p-0 overflow-hidden text-center">
                    <h1 class="display-5 fw-bold text-body-emphasis"><i class="fa-solid fa-car" style="color: #000000;"></i>
                            <i class="fa-solid fa-truck" style="color: #000000;"></i>
                            <i class="fa-solid fa-truck-pickup" style="color: #000000;"></i>
                        </h1>
                        <p style="font-size: 200px;"><?php include 'includes/vehicles_count.php'; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Kraj broja korisnika i vozila -->

        <!-- Bezbednost-sekcija - pocetak -->
        <section id="securityHero" class="p-5">
            <div class="container" data-aos="fade-up" data-aos-duration="2000">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Bezbednost</h2>
                </div>
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light-subtle">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-2">
                        <i class="fa-solid fa-shield-halved fa-4x mb-3" style="color: #000000;"></i>
                        <h1 class="display-5 fw-bold lh-1 text-body-emphasis">Siguran sistem logovanja!
                        </h1>
                        <p class="lead">Zaštitite pristup vašem sistemu pomoću sigurnog sistema prijave. Uz napredne mere bezbednosti, obezbedićemo vaše podatke od neovlašćenog pristupa, čineći vašu platformu bezbednom.</p>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
                        <img class="rounded-lg-3 img-fluid" src="assets/img/Secure-login.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Kraj bezbednosti sekcije -->        

        <!-- Export-sekcija - pocetak -->
        <section id="securityHero" class="p-5">
            <div class="container" data-aos="fade-up" data-aos-duration="2000">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Izvoz podataka</h2>
                </div>
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light-subtle">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-2">
                        <i class="fa-solid fa-file-export fa-4x mb-3" style="color: #000000;"></i>
                        <h1 class="display-5 fw-bold lh-1 text-body-emphasis">Export u Excel (.xls)
                        </h1>
                        <p class="lead">Eksportujte podatke o vozilima u Excel format uz našu efikasnu funkciju izvoza. Obezbeđujemo vam mogućnost jednostavnog deljenja, analize podataka i praćenja promena u vašem voznom parku.</p>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
                        <img class="rounded-lg-3 img-fluid" src="assets/img/Files.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Kraj export sekcije --> 

        <!-- Kontakt forma -->
        <section id="contact" class="p-5">
            <div class="container" data-aos="fade-up" data-aos-duration="2000">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Kontaktiraj nas!</h2>
                </div>
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-light-subtle">
                    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                        <h1 class="display-4 fw-bold lh-1 text-body-emphasis text-white">Imate pitanje?</h1>
                        <form action="" id="contact_form" novalidate>
                            <div class="mb-3">
                                <label for="name" class="form-label">Ime i prezime</label>
                                <input type="text" class="form-control" id="name" placeholder="Vaše ime i prezime" name="from_name">
                                <div class="invalid-feedback">
                                    Unesite validno ime i prezime (samo slova i razmaci)!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email@email.com" name="from_email">
                                <div class="invalid-feedback">
                                    Email adresa nije validna!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Pitanje</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Unesite poruku..." name="from_message"></textarea>
                                <p class="contact-message" id="contact_message"></p>
                                <div class="invalid-feedback">
                                    Poruka mora sadržati najmanje 20 karaktera!
                                </div>                                
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                                    <button type="submit" name="send" class="btn btn-dark btn-lg px-4 me-md-2"><i class="fa-solid fa-paper-plane" style="color: #ffffff;"></i>
                                        Pošalji</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden">
                        <img class="rounded-lg-3 img-fluid" src="assets/img/Form.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- Kraj kontakt forme -->

        <!-- Modal uspesna validacija -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Uspešna validacija forme! <i class="fa-solid fa-circle-check" style="color: #000000;"></i></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="mt-3">Hvala vam na slanju forme. Vaša poruka je uspešno primljena.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal uspesna validacija - kraj -->
    </main>

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.js"></script>
    <script src="assets/js/contact_validation.js"></script>
    <!-- Kraj skripti -->    

</body>

</html>