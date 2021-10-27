@extends("main.layouts.main")

@section("content")
<section id="laboratoire">
    <img src="/svg/labo-wire.svg" class="labo-wire-top" alt="labo-wire-top">
    <div class="container px-4 px-lg-0 pb-5">
        <h1 class="labo-title text-center py-4">Laboratorium Sistem Tertanam dan Siber-Fisik</h1>
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="../img/lab-logo/ecs.png" class="labo-logo" alt="">
            </div>
            <div class="col-lg-8">
                <p class="labo-desc">Laboratorium Sistem Tertanam dan Siber-Fisik menghubungkan gagasan penelitian terbaru berbasis fisika dengan pengembangan produk/proses dalam format embedded system dan skema internet-of-things.</p>
            </div>
        </div>
        <h2 class="labo-section mt-5 mb-4">Bidang pengembangan</h2>
        <ol class="labo-list ps-4">
            <li>Autonomous Vehicle</li>
            <li>Sistem Pengereman Regeneratice Anti-Lock Bracking System (ABS)</li> 
            <li>Test Rig untuk Fault Detection</li> 
            <li>Monitoring keandalan sistem secara real-time</li> 
            <li>Speed Sensorless Control</li> 
            <li>Internet of Things (IoT)</li> 
        </ol>
        <h2 class="labo-section mt-5 mb-4">Penelitian</h2>
        <ol class="labo-list ps-4">
            <li>Rancang Bangun Estimator Handal untuk Menunjang Sistem peed Sensorless Induction Motor di PT. INKA		2020, Dr. Katherin Indriawati, ST., M.T.	Choirul Mufit</li>
            <li>Perancangan Fault Tolerant Control Pada Pengendalian Speed Sensorless Motor DC	2020, Dr. Katherin Indriawati, ST., M.T.	Diyajeng Luluk Karlina	</li> 
            <li>Rancang Bangun Intelligent Autonomous Vehicle Menggunakan Sensor Fusion Berbasis Deep Learning 2021,	Dr.Bambang Lelono Widjiantoro, S.T.,M.T	Ahmad Ibnu Hija</li> 
            <li>Rancang Bangun Estimator Handal untuk Menunjang Sistem Speed Sensorless Induction Motor di PT. INKA	2021, Dr. Katherin Indriawati, ST., M.T.	Choirul Mufit
            </li> 
            <li>RANCANG  BANGUN REGENERATIF ANTI-LOCK BRAKING SYSTEM BERBASIS KONTROL SLIDING MODE CONTROL (SMC) PADA MOBIL LISTRIK	2021, Dr. Katherin Indriawati, ST., M.T.	Nur Adlun Hafiizh , Ahmah Hazmi Said	</li> 
        </ol>
        <h2 class="labo-section mt-5 mb-4">Penghargaan</h2>
        <ol class="labo-list ps-4">
            <li>Juara 3 kategori Muatan Balon Atmosfer 2015.</li>
            <li>Ide Terbaik Kategori Wahana 2017.</li> 
            <li>Juara 5 Kategori Wahana Sistem Kendali 2019</li> 
        </ol>
    </div>
    <img src="/svg/labo-wire.svg" class="labo-wire-bottom" alt="labo-wire-bottom">
</section>
@endsection
