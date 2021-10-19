@extends('main.layouts.main')

@section('content')

{{-- EPC Header --}}
<header id="epc-header">
  <div class="container header d-flex justify-content-center align-items-center flex-column text-center">
    <img src="/img/EPC/logo-epc.png" class="header-logo mx-auto" alt="">
    <h1 class="header-title">EPC</h1>
    <p class="header-desc mt-4">Engineering Physics Challenge</p>
  </div>
  <hr class="header-line">
</header>
{{-- End of EPC Header --}}

{{-- EPC About --}}
<section id="epc-about" class="about">
  <div class="about-header">
    <h2 class="about-title mx-auto text-center">What is EPC?</h2>
    <hr class="header-line">
    <hr class="header-line">
    <hr class="header-line">
  </div>
  <div class="about-content my-5 py-5">
    <div class="container">
      <p class="content-text text-center px-3">EPC atau Engineering Physics Challenge merupakan sebuah kompetisi ilmiah tahunan dalam bidang fisika yang diikuti oleh siswa/siswi SMA sederajat. Kegiatan tersebut diselenggarakan oleh Departemen Teknik Fisika ITS yang bertujuan agar siswa/siswi SMA dapat mengenal ilmu-ilmu fisika dalam bidang teknik terutama lima bidang minat teknik fisika.
      </p>
    </div>
  </div>
  <div class="container px-3">
    <div class="about-gallery mx-auto">
      <div class="row">
        <div class="col-md-4">
          <div class="gallery-photo my-3">
            {{--  --}}
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-photo my-3">
            {{--  --}}
          </div>
        </div>
        <div class="col-md-4">
          <div class="gallery-photo my-3">
            {{--  --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End of EPC About --}}

{{-- EPC Description --}}
<section id="epc-desc">
  <div class="container pb-5">
    <div class="description">
      <div class="description-video mx-auto">
        {{--  --}}
      </div>
      <div class="description-theme my-3">
        <div class="row align-items-center">
          <div class="col-md-5 col-lg-3">
            <h2 class="theme-title text-center mb-3 mb-md-0">Theme</h2>
          </div>
          <div class="col-md-7 col-lg-9">
            <p class="theme-desc text-center text-md-start">“Challenge your limits, be the future with the greatest impact in technology”
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End of EPC Description --}}

{{-- EPC Prize --}}
<section id="epc-prize">
  <img src="/img/EPC/logo-epc-transparent.png" class="prize-logo mx-auto" alt="">
  <div class="prize">
    <div class="prize-header">
      <h2 class="prize-title mx-auto text-center">PRIZE</h2>
      <hr class="header-line">
      <hr class="header-line">
      <hr class="header-line">
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6">
        <div class="prize-content mx-auto">
          <h3 class="prize-category text-center">Siswa</h3>
          <div class="prize-detail pe-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">LKTI Juara 1</h4>
              <p class="prize-value">IDR 4,000,000</p>
            </div>
            <div class="prize-trophy right-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
          {{-- <div class="prize-detail pe-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">LKTI Juara 2</h4>
              <p class="prize-value">IDR 2,500,000</p>
            </div>
            <div class="prize-trophy right-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
          <div class="prize-detail pe-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">LKTI Juara 3</h4>
              <p class="prize-value">IDR 1,500,000</p>
            </div>
            <div class="prize-trophy right-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div> --}}
        </div>
      </div>
      {{-- <div class="col-md-6">
        <div class="prize-content mx-auto">
          <h3 class="prize-category text-center">Mahasiswa</h3>
          <div class="prize-detail ps-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">LKTI Juara 1</h4>
              <p class="prize-value">IDR 2,500,000</p>
            </div>
            <div class="prize-trophy left-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
          <div class="prize-detail ps-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">LKTI Juara 2</h4>
              <p class="prize-value">IDR 1,500,000</p>
            </div>
            <div class="prize-trophy left-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
          <div class="prize-detail ps-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">LKTI Juara 3</h4>
              <p class="prize-value">IDR 1,000,000</p>
            </div>
            <div class="prize-trophy left-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col-md-6">
        <div class="prize-content mx-auto">
          <h3 class="prize-category text-center">Prestasi</h3>
          <div class="prize-detail pe-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">BEST Poster Mahasiswa</h4>
              <p class="prize-value">IDR 250,000</p>
            </div>
            <div class="prize-trophy right-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
          <div class="prize-detail pe-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">BEST Poster Siswa</h4>
              <p class="prize-value">IDR 150,000</p>
            </div>
            <div class="prize-trophy right-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="col-md-6">
        <div class="prize-content mx-auto">
          <h3 class="prize-category text-center">Poster</h3>
          <div class="prize-detail ps-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">BEST Presentasi Mahasiswa</h4>
              <p class="prize-value">IDR 300,000</p>
            </div>
            <div class="prize-trophy left-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
          <div class="prize-detail ps-5 d-flex justify-content-center flex-column text-center">
            <div class="prize-container">
              <h4 class="prize-level">BEST Presentasi Siswa</h4>
              <p class="prize-value">IDR 200,000</p>
            </div>
            <div class="prize-trophy left-place d-flex justify-content-center align-items-center">
              <img src="/svg/trophy-epc.svg" alt="">
            </div>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>
{{-- End of EPC Prize --}}

{{-- EPC Timeline --}}
<section id="epc-timeline">
  <div class="timeline">
    <div class="timeline-header">
      <h2 class="timeline-title mx-auto text-center">TIMELINE</h2>
      <hr class="header-line">
      <hr class="header-line">
      <hr class="header-line">
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-6 text-center text-lg-start">
        <p class="timeline-desc">Pendaftaran (Registrasi)</p>
        <p class="timeline-date d-block d-lg-none p-0 m-0 mb-5">03/11/2021 - 05/02/2022</p>
        
        <p class="timeline-desc">Babak Penyisihan</p>
        <p class="timeline-date d-block d-lg-none p-0 m-0 mb-5">22/01/2022</p>
        
        <p class="timeline-desc">Babak Perempat Final</p>
        <p class="timeline-date d-block d-lg-none p-0 m-0 mb-5">05/02/2022</p>
        
        <p class="timeline-desc">Technical Meeting Semifinal</p>
        <p class="timeline-date d-block d-lg-none p-0 m-0 mb-5">...</p>
        
        <p class="timeline-desc">Babak Semifinal</p>
        <p class="timeline-date d-block d-lg-none p-0 m-0 mb-5">19/02/2022</p>
        
        <p class="timeline-desc">Technical Meeting Final</p>
        <p class="timeline-date d-block d-lg-none p-0 m-0 mb-5">19/02/2022</p>
        
        <p class="timeline-desc">Babak Final EPC 2022</p>
        <p class="timeline-date d-block d-lg-none p-0 m-0 mb-5">20/02/2022</p>
      </div>
      <div class="col-lg-1 d-lg-flex justify-content-center d-none">
        <div class="timeline-borders d-flex justify-content-lg-between">
          <div class="borders-line"></div>
          <div class="borders-line"></div>
          <div class="borders-line"></div>
        </div>
      </div>
      <div class="col-lg-5 d-none d-lg-block">
        <p class="timeline-date">03/11/2021 - 05/02/2022</p>
        <p class="timeline-date">22/01/2022</p>
        <p class="timeline-date">05/02/2022</p>
        <p class="timeline-date">...</p>
        <p class="timeline-date">19/02/2022</p>
        <p class="timeline-date">19/02/2022</p>
        <p class="timeline-date">20/02/2022</p>
      </div>
    </div>
  </div>
</section>
{{-- End of EPC Timeline --}}

{{-- EPC Testimony --}}
<section id="epc-testimony">
  <img src="/img/EPC/logo-epc-transparent.png" class="testimony-logo mx-auto" alt="">
  <div class="testimony">
    <div class="testimony-header">
      <h2 class="testimony-title mx-auto text-center">TESTIMONY</h2>
      <hr class="header-line">
      <hr class="header-line">
      <hr class="header-line">
    </div>
    <div class="container mt-5">
      <div class="testimony-card">
        <div class="card-photo">
          {{--  --}}
        </div>
        <div class="d-flex flex-column-reverse flex-sm-column">
          <p class="card-content">Smart Inovating of Writing (SNOW) merupakan salah satu sub-event EPW berupa lomba karya tulis ilmiah dari sebuah event tahunan yang diselenggarakan oleh Departemen Teknik Fisika ITS. Kompetisi ini diadakan sebagai ajang penyaluran ide kreatif dan solutif untuk Siswa SMA/Sederajat dan Mahasiswa. Setiap tim terdiri dari 2-3 peserta. Karya yang dikirimkan merupakan karya yang orisinil dan belum pernah dipublikasikan.
          </p>
          <p class="card-author mx-auto text-center text-sm-start ms-sm-auto me-sm-0 mt-0 mb-3 mt-sm-3 mb-sm-0">
            Gilang Rahmat Akbar<br>
            Snow 2021
          </p>
        </div>
      </div>
      <div class="testimony-card">
        <div class="card-photo">
          {{--  --}}
        </div>
        <div class="d-flex flex-column-reverse flex-sm-column">
          <p class="card-content">Smart Inovating of Writing (SNOW) merupakan salah satu sub-event EPW berupa lomba karya tulis ilmiah dari sebuah event tahunan yang diselenggarakan oleh Departemen Teknik Fisika ITS. Kompetisi ini diadakan sebagai ajang penyaluran ide kreatif dan solutif untuk Siswa SMA/Sederajat dan Mahasiswa. Setiap tim terdiri dari 2-3 peserta. Karya yang dikirimkan merupakan karya yang orisinil dan belum pernah dipublikasikan.
          </p>
          <p class="card-author mx-auto text-center text-sm-start ms-sm-auto me-sm-0 mt-0 mb-3 mt-sm-3 mb-sm-0">
            Gilang Rahmat Akbar<br>
            Snow 2021
          </p>
        </div>
      </div>
      <div class="testimony-card">
        <div class="card-photo">
          {{--  --}}
        </div>
        <div class="d-flex flex-column-reverse flex-sm-column">
          <p class="card-content">Smart Inovating of Writing (SNOW) merupakan salah satu sub-event EPW berupa lomba karya tulis ilmiah dari sebuah event tahunan yang diselenggarakan oleh Departemen Teknik Fisika ITS. Kompetisi ini diadakan sebagai ajang penyaluran ide kreatif dan solutif untuk Siswa SMA/Sederajat dan Mahasiswa. Setiap tim terdiri dari 2-3 peserta. Karya yang dikirimkan merupakan karya yang orisinil dan belum pernah dipublikasikan.
          </p>
          <p class="card-author mx-auto text-center text-sm-start ms-sm-auto me-sm-0 mt-0 mb-3 mt-sm-3 mb-sm-0">
            Gilang Rahmat Akbar<br>
            Snow 2021
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- End of Snow Testimonu --}}
  
@endsection