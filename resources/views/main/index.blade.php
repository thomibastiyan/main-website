@extends('main.layouts.main')

@section('content')
    
{{-- Buat KIKIK --}}
<!-- header -->
<section id="header">
  <div class="container container-fluid d-flex align-items-center justify-content-center flex-lg-row flex-column header-epw">
    <img src="/svg/icons/icon-epw-red.svg" class="logo-epw">
    <div class="container-fluid d-flex align-items-center justify-content-center flex-column header-2022">
    <img src="/img/logo-2022.png" class="logo-2022">
    <p>Engineering Physics Week</p>
  </div>
</div>
<div class="container">
  <a href=""><img src="/svg/icons/button-to-top.svg" alt="button-to-top"></a>
</div>
</section>
<!-- end of header -->
<!-- pembatas 1 -->
<img src="/img/garis-biru.png" class="garis">
<!-- pembatas 1 -->
<!-- page 2 -->
<section id="main-theme">
  <img src="/svg/icons/circuit-atas.svg" class="circuit-atas">
  <div class="container d-flex justify-content-center align-items-center flex-column">
    <h1 class="theme-title">
      <img src="/svg/icons/star.svg" class="theme-sun" alt="">
      <span class="blue-text small-text d-block min-left">" The</span>
      <span class="blue-text large-text">Diverse of Technology</span>
      <span class="red-text small-text d-block text-center">and its</span>
      <span class="red-text large-text">Impact on Humanity "</span>
    </h1>
  </div>
</section>
<!-- diversity buyar -->
<section id="main-definition">
  <img src="/svg/icons/circuit-kiri.svg" class="main-definition-wire" alt="">
  <div class="container definition-content">
    <h1 class="definition-title text-end text-md-start">What is EPW?</h1>
    <p class="definition-desc">
      <span class="box"><span class="inner"></span></span>
      EPW sebagai media pengenalan Teknik Fisika secara umum, keilmuan, keprofesian, dan perkuliahan (prestasi, lingkungan, dan sekitarnya) terhadap masyarakat umum, siswa calon mahasiswa baru, dan siswa SMA secara umum
    </p>
    <p class="definition-desc">
      <span class="box"><span class="inner"></span></span>
      EPW memberikan motivasi terhadap siswa sma untuk berkuliah dan menjadikan Teknik Fisika sebagai pilihan. EPW memberikan dampak tidak hanya pada peningkatan peminat Teknik Fisika, tetapi juga memberikan dampak bagi lingkungan sekitar.
    </p>
  </div>
</section>
<!-- end of page 2 -->
<!-- Page events -->
<section id="events">
    <img src="/img/rainbow-events.png" alt="rainbow" class="rainbow">
  <div class="container EVENTS">
    <div class="events-header">
      <img src="/svg/icons/events-icon.svg" class="events" alt="events">
    </div>
    <div class="d-flex justify-content-evenly align-items-center">
      <a href="/epc" class="EPC-events">EPC</a>
      <a href="/snow" class="SNOW-events">SNOW</a>
      <a href="" class="GR-events">GRAND<br>ROADSHOW</a>
      <a href="" class="BE-events">BIG EVENT</a>
    </div>
  </div>
</section>
<!-- end of page events -->
<!-- EPC -->
<section id="epc">
  <div class="container epc">
    <div class="epc-header">
      <img src="/img/icon-epc.png" class="epc-icon" alt="logo-epc">
      <h2 class="epc-title text-end">EPC</h2>
    </div>
    <div class="epc-desc text-center">
      <p>EPC atau Engineering Physics Challenge,  merupakan sebuah kompetisi ilmiah tahunan dalam bidang Fisika yang diikuti oleh siswa/siswi SMA sederajat. Kegiatan tersebut diselenggarakan oleh Departemen. Teknik Fisika ITS yang bertujuan agar siswa/siswi SMA dapat mengenal ilmu-ilmu fisika dalam bidang teknik terutama lima bidang minat teknik fisika.
      </p>
    </div>
    <div class="text-center">
      <a href="" class="epc-btn">Detail</a>
    </div>
  </div>
  <img src="/img/EPC/bg-EPC.jpg" class="epc-nih" alt="epc-nih">
</section>
<!-- end of EPC-->
<!-- SNOW -->
<section id="SNOW">
  <div class="container SNOW">
    <div class="SNOW-header">
      <img src="/img/icon-snow.png" class="logo-snow" alt="logo-snow">
      <h2 class="text-snow text-start">SNOW</h2>
    </div>
    <div class="snow-desc text-center">
      <p>Smart Inovating of Writing (SNOW) merupakan salah satu sub-event EPW berupa lomba karya tulis ilmiah dari sebuah event tahunan yang diselenggarakan oleh Departemen Teknik Fisika ITS. Kompetisi ini diadakan sebagai ajang penyaluran ide kreatif dan solutif untuk Siswa SMA/Sederajat dan Mahasiswa. Setiap tim terdiri dari 2-3 peserta. Karya yang dikirimkan merupakan karya yang orisinil dan belum pernah dipublikasikan.
        
      </p>
    </div>
    <div class="text-center">

      <a href="" class="snow-btn">Detail</a>
    </div>
  </div>
  <img src="/img/SNOW/bg-snow.jpg" class="snow-nih" alt="snow-nih">
</section>
<!-- end of SNOW -->
<!-- Grand Roadshow -->
<section id="Grand-Roadshow">
  <div class="container Grand-Roadshow">
  <div class="GR-header">
    <img src="/img/icon-grand-roadshow.png" class="logo-GR" alt="logo-GR">
    <div class="text-grand text-end">GRAND</div>
    <div class="text-roadshow text-end">ROADSHOW</div>
  </div>
    <div class="definition-GR text-center">
      <p>Rangkaian kegiatan mengunjungi SMA sederajat di seluruh Indonesia untuk mengenalkan Teknik Fisika beserta informasi mengenai keilmuan, keprofesian, dan perkuliahan(Prestasi, Lingkungan dan sekitarnya), dan diakhiri dengan pelaksanaan info session terpusat yang terdiri dari kegiatan webinar tentang teknik fisika dan perkenalan kegiatan Engineering Physics Week 2022.
      </p>
    </div>
    <div class="text-center">
      <a href="" class="GR-btn">Detail</a>
    </div>
  </div>
  <img src="/img/Grand-Roadshow/bg-grand-roadshow.jpg" class="GR-nih" alt="GR-nih">
</section>
<!-- end of Grand Roadshow -->
<!-- Big Event -->
<section id="Big-Event">
  <div class="container BE">
  <div class="BE-header">
    <img src="/img/icon-big-event.png" class="logo-BE" alt="logo-BE">
    <div class="text-BE text-start">BIG EVENT</div>
  </div>
    <div class="BE-desc text-center">
      <p>Kegiatan penutup dari rangkaian acara EPW yang terdiri dari Talk Show dari tokoh inspiratif , Awarding, dan Closing guna mengenalkan EPW 2022 ke masyarakat umum dan meningkatkan motivasi siswa untuk melanjutkan pendidikan ke jenjang lebih tinggi terutama teknik fisika yang dilaksanakan secara online.
      </p>
    </div>
    <div class="text-center">
      <a href="" class="BE-btn">Detail</a>
    </div>
  </div>
  <img src="/img/Big-Event/bg-big-event.jpg" class="BE-nih" alt="BE-nih">
</section>
<!-- end of Big Event -->
{{-- End of Buat KIKIK --}}

@endsection