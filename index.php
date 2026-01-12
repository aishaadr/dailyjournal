<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Daily Journal</title>
    <link rel="icon" href="img/logo/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
      .bg-skyblue {
        background-color: #6EC1E4 !important; /* warna sky blue cerah */
      }
      .bg-lilac {
        background-color: #C8A2C8 !important; /* warna lilac lembut */
      }
      .bg-pinkcoral {
        background-color: #FF6B81 !important; /* coral merah muda cerah */
      }
      
    </style>
  </head>
  <body>
    <!-- nav begin -->
     <nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
                  <li class="nav-item">
                    <a class="nav-link" href="#">home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#article">article</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#gallery">gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#schedule">schedule</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#profile">profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="login.php" target="_blank">Login</a>
                  </li>
                </ul>
                <button id="btnDark" class="btn btn-dark ms-3">
                  <i class="bi bi-moon-fill"></i>
                </button>
                <button id="btnLight" class="btn btn-warning ms-3">
                  <i class="bi bi-sun-fill"></i>
                </button>
              </div>
            </div>
          </nav>

     <!-- nav end -->
      <!-- hero begin -->
       <section id="hero" class="text-center p-5 bg-danger-subtle text-sm-start isi">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="img/hero/banner.jpg" class="img-fluid" width="300">
                <div>
                    <h1 class="fw-bold dispplay-4">Create Memories, Save Memories, Everyday</h1>
                    <h4 class="lead display-6">Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali</h4>
                    <h6>
                      <span id="tanggal"></span>
                      <span id="jam"></span>
                    </h6>
                </div>
            </div>
        </div>
       </section>
       <!-- hero end -->
        <!-- article begin --> 
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
          <!-- gallery begin -->
          <section id="gallery" class="text-center p-5 bg-danger-subtle isi">
            <div class="container">
                <h1 class="fw-bold display-4 pb-3">gallery</h1>
                <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/gallery/sunny-young-iSASvVsJX50-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/article/margarita-b-nhQp8Ro-AU4-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/gallery/sunny-young-iSASvVsJX50-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/article/margarita-b-nhQp8Ro-AU4-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/gallery/sunny-young-iSASvVsJX50-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
            </div>
         </section>
        
         <section id="schedule" class="text-center p-5 bg-light isi">
          <div class="container">
              <h1 class="fw-bold display-5 pb-4">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
              <div class="row row-cols-1 row-cols-md-3 g-4 align-items-stretch justify-content-center">
  
                  <!-- Senin -->
                  <div class="col">
                      <div class="card h-100 border-0 shadow-sm">
                          <div class="card-header bg-skyblue text-white fw-bold d-flex justify-content-center">
                              <span>SENIN</span>
                          </div>
                          <div class="card-body text-center">
                              <p class="mb-1">
                                  <span class="fw-bold">09:30 – 12:00</span><br>
                                  logika informatika<br>
                                  ruang H.5.12
                              </p>
                              <br>
                              <p class="mb-1">
                                  <span class="fw-bold">14:10 – 15:50</span><br>
                                  basis data<br>
                                  ruang H.5.10
                              </p>
                          </div>
                      </div>
                  </div>
  
                  <!-- Selasa -->
                  <div class="col">
                      <div class="card h-100 border-0 shadow-sm">
                          <div class="card-header bg-skyblue text-white fw-bold d-flex justify-content-center">
                              <span>SELASA</span>
                          </div>
                          <div class="card-body text-center">
                              <p class="mb-1">
                                  <span class="fw-bold">12:30 – 15:00</span><br>
                                  rekayasa perangkat lunak<br>
                                  ruang H.5.10
                              </p>
                              <br>
                              <p class="mb-1">
                                  <span class="fw-bold">15:30 – 18:00</span><br>
                                  sistem operasi<br>
                                  ruang H.3.2
                              </p>
                          </div>
                      </div>
                  </div>
  
                  <!-- Rabu -->
                  <div class="col">
                      <div class="card h-100 border-0 shadow-sm">
                          <div class="card-header bg-skyblue text-white fw-bold d-flex justify-content-center">
                              <span>RABU</span>
                          </div>
                          <div class="card-body text-center">
                              <p class="mb-1">
                                  <span class="fw-bold">09:30 – 12:00</span><br>
                                  kriptografi<br>
                                  ruang H.5.13
                              </p>
                              <br>
                              <p class="mb-1">
                                  <span class="fw-bold">14:10 – 15:50</span><br>
                                  pemrograman berbasis web<br>
                                  ruang D.2.J
                              </p>
                          </div>
                      </div>
                  </div>
  
                  <!-- Kamis -->
                  <div class="col">
                      <div class="card h-100 border-0 shadow-sm ">
                          <div class="card-header bg-skyblue text-white fw-bold d-flex justify-content-center ">
                              <span>KAMIS</span>
                          </div>
                          <div class="card-body text-center">
                              <p class="mb-1">
                                  <span class="fw-bold">14:10 – 15:50</span><br>
                                  basis data<br>
                                  ruang D.2.K
                              </p>
                          </div>
                      </div>
                  </div>
  
                  <!-- Jumat -->
                  <div class="col">
                      <div class="card h-100 border-0 shadow-sm">
                          <div class="card-header bg-skyblue text-white fw-bold d-flex justify-content-center">
                              <span>JUMAT</span>
                          </div>
                          <div class="card-body text-center">
                              <p class="mb-1">
                                  <span class="fw-bold">09:30 – 12:00</span><br>
                                  Probstat<br>
                                  Ruang H.3.2
                              </p>
                              <br>
                              <p class="mb-1">
                                  <span class="fw-bold">12:30 – 15:00</span><br>
                                  Data Mining<br>
                                  Kulino
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section id="profile" class="text-center p-5 bg-danger-subtle isi">
        <div class="container">
            <h1 class="fw-bold display-4 pb-4">profile mahasiswa</h1>

            <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
                <!-- FOTO PROFIL -->
                <div class="text-center mb-4 mb-md-0 me-md-5">
                    <img src="img/profile/WhatsApp Image 2025-11-04 at 22.17.23.jpeg" class="rounded-circle shadow" width="200" height="250"
                        alt="Foto Profil" />
                </div>

                <!-- CARD PROFIL -->
                <div class="card shadow-sm col-12 col-md-8">
                    <div class="card-body text-start">
                        <h5 class="fw-light mb-4 text-center text-md-center">
                            mahasiswa teknik informatika
                        </h5>
                        <table class="table table-striped mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row" class="col-4">Nama</th>
                                    <td>Aisha Dwi Rahmawati</td>
                                </tr>
                                <tr>
                                    <th scope="row">NIM</th>
                                    <td>A11.2024.15559</td>
                                </tr>
                                <tr>
                                    <th scope="row">Program Studi</th>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>111202415559@mhs.dinus.ac.id</td>
                                </tr>
                                <tr>
                                    <th scope="row">Telepon</th>
                                    <td>087879787157</td>
                                </tr>
                                <tr>
                                    <th scope="row">Alamat</th>
                                    <td>Kudus, Jawa Tengah</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
               
          <!-- footer begin -->
           <footer class="text-center p-5 isi">
            <div>
              <a href="https://www.instagram.com/thiss.aishaa/"><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
              <a href="https://wa.me/+6287879787157"><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
            </div>
            <div>
              Aisha Dwi Rahmawati &copy; 2025
            </div>
           </footer>
           <!-- footer end -->
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
           <script type="text/javascript">
            window.setTimeout("tampilWaktu()",1000);

            function tampilWaktu(){
              var waktu= new Date();
              var bulan= waktu.getMonth() + 1;

              setTimeout("tampilWaktu()",1000);
              document.getElementById("tanggal").innerHTML =
              waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
              document.getElementById("jam").innerHTML =
              waktu.getHours() +
              ":" +
              waktu.getMinutes() +
              ":" +
              waktu.getSeconds();
            };
           </script>
           
           <script>
            document.getElementById("btnDark").onclick = function () {
                document.body.classList.add("btn-dark");
                document.getElementById("btnDark").classList.remove("btn-warning");
                document.getElementById("btnDark").classList.add("btn-dark");
                
                const collection = document.getElementsByClassName("isi");
                for (let i = 0; i < collection.length; i++){
                  collection[i].classList.remove("bg-danger-subtle");
                  collection[i].classList.remove("bg-light");
                  collection[i].classList.remove("text-dark");
                  
                  // selang-seling hitam abu
                  if (i % 2 === 0){
                    collection[i].classList.add("bg-dark");
                  } else {
                    collection[i].classList.add("bg-secondary");
                  }
                  
                  collection[i].classList.add("text-white");
                }
              };
              
              document.getElementById("btnLight").onclick = function () {
                document.body.classList.add("btn-warning");
                document.getElementById("btnLight").classList.remove("btn-dark");
                document.getElementById("btnLight").classList.add("btn-warning");
                
                const collection = document.getElementsByClassName("isi");
                for (let i = 0; i < collection.length; i++){
                  collection[i].classList.remove("bg-dark");
                  collection[i].classList.remove("bg-secondary");
                  collection[i].classList.remove("text-white");
                  
                  // selang-seling pink putih
                  if (i % 2 === 0){
                    collection[i].classList.add("bg-danger-subtle");
                  } else {
                    collection[i].classList.add("bg-light");
                  }
                  
                  collection[i].classList.add("text-dark");
                }
              };
             </script>
          
           
  </body>
</html>