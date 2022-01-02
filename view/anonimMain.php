<?php

include('db.php');

include('../data/data.php');

$arac_listesi = anonimMain($db);

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
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="login.css" />

    <title>Arac Kiralama</title>
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
                <a class="navbar-brand text-light" href="anaSayfa.php"
                  >Araç Kiralama Servisi</a
                >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a
                      class="nav-link active text-light"
                      aria-current="page"
                      href="anaSayfa.php"
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
      <div class=" items d-flex align-items-center justify-content-center flex-wrap mt-5">
          
          
      <?php
            if(count($arac_listesi) == 0){
                
                echo '<center><h2><div class="alert alert-warning">Envanterimizdeki Tum Araclar Kiralanmistir.</div></h2></center>';

            }else{
                for($i = 0; $i< count($arac_listesi);$i++){

                    if($arac_listesi[$i]['rezerve'] != 0){
                        echo '
                        <div class="card m-3" style="width: 18rem; min-width: 250px;">
                        <img src="assets/images/'.$arac_listesi[$i]["foto_adi"].'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">'.$arac_listesi[$i]["baslik"].'</h5>
                            <p class="card-text">'.$arac_listesi[$i]["aciklama_metni"].'</p>
                            <span class="alert alert-danger">Bu arac rezerve edilmistir!</span>
                            <a href="anonimAracSayfasi.php?aracId='.$arac_listesi[$i]['id'].'" class="btn btn-success mt-4">Rezerve Et</a>
                        </div>
                        </div>
                    ';

                    }else{
                        echo '
                        <div class="card m-3" style="width: 18rem; min-width: 250px;">
                        <img src="assets/images/'.$arac_listesi[$i]["foto_adi"].'" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">'.$arac_listesi[$i]["baslik"].'</h5>
                            <p class="card-text">'.$arac_listesi[$i]["aciklama_metni"].'</p>
                        
                            <a href="anonimAracSayfasi.php?aracId='.$arac_listesi[$i]['id'].'" class="btn btn-success">Rezerve Et</a>
                        </div>
                        </div>
                    ';
                    }
               
                    
    
                    
                    
    
    
                    }

            }
                    
            



      ?>
           
                
                                
                  
                  
         
            
    
      </div>
            <style>
                #footer{
                    margin-top: 400px;
                }
            </style>
        <div class="row" >
          <!-- Footer -->
          <footer id="footer" class="bg-dark text-center text-white">
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
