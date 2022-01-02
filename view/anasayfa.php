<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/index.css">

    <title>Arac Kiralama</title>
</head>
<body>

  
        <div class="container-fluid">
            <div class="row">
                <header>
                    <nav class="navbar text-light navbar-expand-lg navbar-light bg-dark rounded mt-3">
                        <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-light" id="navbarTogglerDemo01">
                            <a class="navbar-brand text-light" href="#">Agalar Araç Kiralama Servisi</a>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">Anasayfa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="anonimMain.php">Araclari Goruntule</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="login.php">Giriş</a>
                            </li>
                            
                            </ul>
                            <form class="d-flex">
                            <input class="form-control me-2" type="search"  aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Ara</button>
                            </form>
                        </div>
                        </div>
                    </nav>
                </header>
            </div>
            <div class="row mb-4">
                <main class="d-flex flex-column justify-content-center align-items-center mt-4 mb-4">
                    <style>
                        .css-3d-text {
                           font-size: 60px;
                           color: #8ebfb0;
                           font-family: Arial, Helvetica, sans-serif;
                           text-shadow: 0px 0px 0 rgb(137,186,171),
                                        -1px 0px 0 rgb(132,181,166),
                                        -2px 0px 0 rgb(127,176,161),
                                        -3px 0px 0 rgb(122,171,156),
                                        -4px 0px 0 rgb(117,166,151),
                                        -5px 0px 0 rgb(112,161,146),
                                        -6px 0px 0 rgb(107,156,141),
                                        -7px 0px 0 rgb(102,151,136),
                                        -8px 0px 0 rgb(97,146,131),
                                        -9px 0px 0 rgb(92,141,126),
                                        -10px 0px  0 rgb(87,136,121),
                                        -11px 0px 10px rgba(0,0,0,0.6),
                                        -11px 0px 1px rgba(0,0,0,0.5),
                                        0px 0px 10px rgba(0,0,0,.2);
                        }
                       
                       </style>
                    <div class="css-3d-text">En Kaliteliyi En Ucuza..</div>
                    <div class="col-6 photo-carousel">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img src="assets/images/araba1.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/araba2.jpeg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="assets/images/araba3.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                          </div>
                    </div>
                </main>

            </div>
            <div class="row col-12 ">
                <!-- Footer -->
                <footer class="bg-dark text-center text-white mt-5">
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