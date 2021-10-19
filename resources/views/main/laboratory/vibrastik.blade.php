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

    <!--deskripsi Lab-->
    <section class="container mt-5">
      <div class="text-center fw-bold" style="font-family: Abril Fatface; color: #424a63; font-size: 42px">Laboratorium Vibrasi dan Akustik</div>
      <div class="row justify-content-center" style="width: auto">
        <div class="col-md-4 mt-5 text-center">
          <img src="/img/lab-logo/vibrastik.png" class="img-fluid" alt="logo lab vibrastik"/>
        </div>
        <div class="col-md-8">
          <div class="badge text-wrap">
            <p class="fs-5 m-auto lh-base" style="font-family: Zilla Slab; text-align: justify; color: #839b4e">Laboratorium Vibrasi dan Akustik, Departemen Teknik Fisika, Institut Teknologi Sepuluh Nopember mempelajari fenomena suara dan getaran, termasuk pemrosesan pendengaran pada manusia dan penerapannya, seperti speech synthesis, noise mapping, analisa getaran, dan banyak lagi untuk industri dan kemanusiaan. Selain melakukan penelitian, laboratorium Vibrastic juga melayani konsultasi di bidang Acoustics dan getaran termasuk akustik ruangan, analisis getaran, sintesis ucapan dan banyak lainnya. Sehingga Laboratorium Vibrastic teknik fisika mampu bersaing dengan lembaga pendidikan dan konsultan lain yang lebih besar dalam hal menggaet masyarakat untuk berkonsultasi tentang masalah tersebut. Dimana menjadikan semua mahasiwa mempunyai kompetensi. Laboratorium Vibrastic bersertifikat LBE (Lab Based Education) oleh JICA melalui ITS – Preditc2 JICA Project.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- bidang pengembangan -->
    <section class="container mt-5">
      <div class="badge text-wrap" style="width: 300px; background: #fde7b6">
        <p class="text-center fs-4 m-auto lh-lg" style="color: #424a63; font-family: 'Zilla Slab', serif">Bidang Pengembangan</p>
      </div>
      <div class="row">
        <div class="col">
          <div class="badge text-wrap" style="width: auto">
            <p class="text-start fs-5 m-auto lh-base" style="color: #424a63; font-family: 'Zilla Slab', serif">
              1. Signal and Speech Processing<br>
              2. Underwater acoustics<br>
              3. Speech Recognition<br>
              4. Binaural Hearing<br>
              5. Choclear Implant<br>
              6. Architechtural Acoustics<br>
              7. Vibration<br>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- penelitian -->
    <section class="container mt-5">
      <div class="badge text-wrap" style="width: 300px; background: #fde7b6">
        <p class="text-center fs-4 m-auto lh-lg" style="color: #424a63; font-family: 'Zilla Slab', serif">Penelitian</p>
      </div>
      <div class="row">
        <div class="col">
          <div class="badge text-wrap" style="width: auto">
            <p class="text-start fs-5 m-auto lh-base" style="color: #424a63; font-family: 'Zilla Slab', serif">
              1. Monitoring pasien MDR-TB menggunakan Audiometri Three-Forced Choice.<br>
              2. Pengembangan aplikasi alat bantu dengan berbasis android untuk smartphone dengan dua microphone internal.<br>
              3. Rancang bangun Muffler sebagai upaya mitigasi kebisingan suara pada genset.<br>
              4. Sintesis suara ekspresif bahasa indonesia.<br>
              5. Rancang bangun 3D printed stethoscope pada android smartphone case.<br>
              6. Identifikasi biometrik memakai suara ketukan gigi dengan fitur Mel Frequency Cepstral Coefficient (MFCC).<br>
              7. Model tuning pada Mock-Up pesawat dengan metode direct dan parametric untuk prediksi flutter.<br>
              8. Synthetic Aperture Sonar<br>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- penghargaan -->
    {{-- <section class="container mt-5">
      <div class="badge text-wrap" style="width: 300px; background: #fde7b6">
        <p class="text-center fs-4 m-auto lh-lg" style="color: #424a63; font-family: 'Zilla Slab', serif">Penghargaan</p>
      </div>
      <div class="row">
        <div class="col">
          <div class="badge text-wrap" style="width: auto">
            <p class="text-start fs-5 m-auto lh-base" style="color: #424a63; font-family: 'Zilla Slab', serif">
            </p>
          </div>
        </div>
      </div>
    </section> --}}

  

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