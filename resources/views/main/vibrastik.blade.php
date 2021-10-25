@extends('main.layouts.main')

@section('content')

    <!--deskripsi Lab-->
    <section class="container mt-5">
      <div class="text-center fw-bold" style="font-family: Abril Fatface; color: #424a63; font-size: 42px">Laboratorium Vibrasi dan Akustik</div>
      <div class="row justify-content-center align-items-center" style="margin-top:60px">
        <div class="col-md-4 text-center">
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
      <h1 class="badge text-wrap" style="width: 300px; background: #fde7b6">
        <p class="text-center fs-4 m-auto lh-lg" style="color: #424a63; font-family: 'Zilla Slab', serif">Bidang Pengembangan</p>
      </h1>
      <div class="row">
        <div class="col">
          <div class="badge text-wrap" style="margin-top: 40px; margin-bottom: 72px">
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
      <h1 class="badge text-wrap" style="width: 300px; background: #fde7b6">
        <p class="text-center fs-4 m-auto lh-lg" style="color: #424a63; font-family: 'Zilla Slab', serif">Penelitian</p>
      </h1>
      <div class="row">
        <div class="col">
          <div class="badge text-wrap" style="margin-top: 40px; margin-bottom: 72px">
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

  

    @endsection