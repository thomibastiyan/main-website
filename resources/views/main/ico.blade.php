<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap5/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/img/epw-logo/logo-bg-blue.png" type="image/x-icon">

    <title>EPW 2022 | {{ $title }}</title>
  </head>
  <body style="background-color: #f2f2f2">
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg py-0">
      <div class="container">
        <div class="navbar-brand flex-lg-grow-1">
          <a href="#">
            <img src="/img/epw-logo/logo-white.png" alt="EPW Logo" width="60">
          </a>
        </div>
        <div class="navbar-rainbow">
          <div class="rainbow"></div>
          <div class="rainbow"></div>
          <div class="rainbow"></div>
          <div class="rainbow"></div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fas fa-bars fa-lg fa-fw"></span>
        </button>
        <div class="collapse navbar-collapse flex-lg-grow-0" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="#">Home</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="#">About</a>
            </li>
            <li class="nav-item text-center dropdown">
              <a class="nav-link dropdown-toggle my-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Event
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-center" href="#">EPC</a></li>
                <li><a class="dropdown-item text-center" href="#">SNOW</a></li>
                <li><a class="dropdown-item text-center" href="#">Grand Roadshow</a></li>
                <li><a class="dropdown-item text-center" href="#">Big Event</a></li>
              </ul>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="#">Merchandise</a>
            </li>
            <li class="nav-item text-center">
              <a class="nav-link my-3" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
      </div>
    </nav>
    {{-- End of Navbar --}}

    @yield('content')
    <div class="body">
      <div class="container">
        <!-- Description -->
        <section id="deskripsi">
          <div class="container-1">
            <div class="judul">
              <div class="row text-center">
                <div class="col">
                  <h1 class="mt-5 fw-bold">Laboratorium Instrumentasi, Kontrol, dan Optimisasi</h1>      
                </div>       
              </div>
            </div>
          <div class="container-2">
            <div class="row justify-content-center">
             <div class="col-md-3 text-center" >
               <img src="/img/lab-logo/ico.png" class="img-fluid" alt="logo lab ico">
             </div>
             <div class="col-md-5">
               <p>Laboratorium instrumentasi, kontrol, dan optimisasi adalah laboratorium di departemen teknik fisika yang berfokus pada bidang instrumentasi dan pengembangannya meliputi manufacturing, desain, hingga aplikasi dari instrument dan control. Proses deteksi, observasi, pengukuran, dan akuisisi data dipelajari dalam berbagai bidang mulai dari industry hingga medis.</p>
             </div>
           </div>
         </div>
        </section>
        <!-- Pengembangan -->
        <section class="pengembangan mx-auto">
          <h2 class="pengembangan-judul">Bidang Pengembangan</h2>
          <ol class="pengembangan-isi">
            <li>Mengembangkan rancang bangun instrumentasi, kalibrasi, pengukuran,   pengendalian, dan safety untuk aplikasi di industri dan medis.</li>
            <li>Mangembangkan teknologi jaringan untuk sistem deteksi, observasi, dan pengendalian. </li>
            <li>Mengembangkan metode neural network, genetic algoritma, fuzzy logic, artificial intelligent.</li>
            <li>Mengembangkan rancang bangun instrumentasi kedokteran untuk aplikasi medis.</li>
          </ol>
  
        </section>
        <!-- Penelitiaan -->
        <section class="penelitian mx-auto">
          <h2 class="penelitian-judul">Penelitian</h2>
          <ol class="penelitian-isi">
            <li>Utami, E & Purnomo, M & Rizki, R & Biyanto, Totok. (2020). Preliminary sandstone reservoir depth prediction with pre-processing data using principle component analysis (PCA) and partial least square (PLS) based on well logging.</li>
            <li>Purnomo, Leo & Biyanto, Totok. (2019). Neural network model for profile temperature of nickel kiln. AIP Conference Proceedings. 2088. 020015. 10.1063/1.5095267.</li>
          </ol>
        </section>
        <!--Penghargaan-->
        <section class="penghargaan mx-auto">
          <h2 class="penghargaan-judul">Penghargaan</h2>
          <ol class="penghargaan-isi">
            <li>1st winner paper competition and petroolympic case study competition oil and gas horizons XI at Gubkin University, Russia.</li>
            <li>1st place (champion) plant design competition energy and environmental competition 2019 at university teknologi mara,     Malaysia.</li>
            <li>2nd (runner up) power plant design competition SPE UTM.</li>
            <li>2nd RU paper competition (oil and gas festival 2018 malaysia).</li>
            <li>3rd winner of international process control competition 2018 at Institut Teknologi Sepuluh Nopember (ITS).</li>
          </ol>
          
        </section>
        
  
  
      </div>
    </div>

    {{-- Footer --}}
    <footer class="footer footer-blue">
      <div class="container pt-4 pb-2">
        <div class="row align-items-center">
          <div class="col-lg-4 text-center">
            <img src="/img/epw-logo/logo-white.png" alt="EPW Logo" class="footer-logo">
          </div>
          <div class="col-lg-8">
            <div class="footer-desc">
              <h2 class="footer-title">Reach us!</h2>
              <a href="https://goo.gl/maps/SBkiPs6v96jUeDHn9" target="_blank" class="footer-content">
                <img src="/svg/icons/location.svg" alt="" class="footer-icon">
                <p>
                  Department of Engineering Physics<br>
                  <span>Kampus ITS, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur - 60111</span>
                </p>
              </a>
              <div class="row">
                <div class="col-md-4 col-6">
                  <a href="https://www.instagram.com/epw.its/" target="_blank" class="footer-content">
                    <img src="/svg/icons/instagram.svg" alt="" class="footer-icon">
                    <span>@epw.its</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="http://line.me/ti/p/~@ket9005b" target="_blank" class="footer-content">
                    <img src="/svg/icons/line.svg" alt="" class="footer-icon">
                    <span>@ket9005b</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="https://www.linkedin.com/in/epw-its/" target="_blank" class="footer-content">
                    <img src="/svg/icons/linkedin.svg" alt="" class="footer-icon">
                    <span>EPW ITS</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="https://twitter.com/epw_its" target="_blank" class="footer-content">
                    <img src="/svg/icons/twitter.svg" alt="" class="footer-icon">
                    <span>@epw_its</span>
                  </a>
                </div>
                <div class="col-md-4 col-6">
                  <a href="https://www.tiktok.com/@epw.its" target="_blank" class="footer-content">
                    <img src="/svg/icons/tiktok.svg" alt="" class="footer-icon">
                    <span>@epw.its</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p class="text-center mt-5 copyright">Copyright &copy; 2021 by EPW ITS 2022, all rights reserved!</p>
      </div>
    </footer>
    {{-- End of Footer --}}
    
    {{-- Javascript --}}
    <script src="/vendor/bootstrap5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>