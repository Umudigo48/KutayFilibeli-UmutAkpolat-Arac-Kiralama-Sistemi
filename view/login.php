<?php

  session_start();  
  include('db.php');
  include('../business/business.php');
  loginPageAlreadyInCheck();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--Bootstrap CDN-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../assets/index.css" />
    <link rel="stylesheet" href="../assets/login.css">

    <title>Agalar Arac Kiralama</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <header>
          <nav
            class="
              navbar
              text-light
              navbar-expand-lg navbar-light
              bg-dark
              rounded
              mt-3
            "
          >
            <div class="container-fluid">
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="collapse navbar-collapse text-light"
                id="navbarTogglerDemo01"
              >
                <a class="navbar-brand text-light" href="#"
                  >Araç Kiralama Servisi</a
                >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a
                      class="nav-link active text-light"
                      aria-current="page"
                      href="anasayfa.php"
                      >Anasayfa</a
                    >
                  </li>
                 
                </ul>
                <form class="d-flex">
                  <input
                    class="form-control me-2"
                    type="search"
                    aria-label="Search"
                  />
                  <button class="btn btn-outline-success" type="submit">
                    Ara
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </header>
      </div>
      <div class="row d-flex flex-column align-items-center justify-content-center mt-5">
          <center><h1><b class="giris-yap-title">Giris Yap</b></h1></center>
          
        <main class="d-flex flex-column align-items-center justify-content-center mt-3">

            <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                <form action="login.php" method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Kullanici Adi </label>
                      <input type="text" class="form-control"  name="kullanici_adi" >
                      <div id="emailHelp" class="form-text">Verilerinizi kimse ile paylasmiyoruz.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Sifre</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <?php
                      if(@$_GET['mismatch']){
                          echo '
                          
                          <center><label for="exampleInputPassword1" class="form-label text-danger">Kullanici adi veya Sifre Hatali</label></center>

                          ';
                      }
                    ?>
                   
                    <center><button type="submit" class="btn btn-primary">Giris</button></center>
                  </form>
            </div>
        </main>
      </div>
      <style>
                #footer{
                    margin-top: 400px;
                }
            </style>
        <div class="row fix-footer col-12"  id="footer">
          <!-- Footer -->
          <footer  class="bg-dark text-center text-white mt-5">
            <!-- Grid container -->
            <div class="container p-4">
              <!-- Section: Form -->
              <section class="">
                <form action="">
                  <!--Grid row-->
                  <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-auto">
                      <p class="pt-2">
                        <strong>E-bultene katilmak icin lutfen kaydolun!</strong>
                      </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12">
                      <!-- Email input -->
                      <div class="form-outline form-white mb-4">
                        <input
                          type="email"
                          id="form5Example21"
                          class="form-control"
                          
                        />
                        <label class="form-label" for="form5Example21"
                          >Email adresi</label
                        >
                      </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto">
                      <!-- Submit button -->
                      <button type="submit" class="btn btn-outline-light mb-4">
                        Katil
                      </button>
                    </div>
                    <!--Grid column-->
                  </div>
                  <!--Grid row-->
                </form>
              </section>
              <!-- Section: Form -->

              <!-- Section: Text -->
              <section class="mb-4">
                <p>
                  Arac Kiralama Sirketimiz size en uygun araci bulabilmek icin tum siteleri dolasir ve en uygun olan araclari sizin karsiniza cikarir.
                </p>
              </section>
              <!-- Section: Text -->

              <!-- Section: Links -->

              <!-- Section: Links -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div
              class="text-center p-3"
              style="background-color: rgba(0, 0, 0, 0.2)"
            >
              © 2022 Copyright Arac kiralama
            </div>
            <!-- Copyright -->
          </footer>
          <!-- Footer -->
        </div>
     
    </div>
  </body>
</html>
