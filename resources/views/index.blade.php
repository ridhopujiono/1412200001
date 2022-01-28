@extends('template/main')
@section('container')
<!-- Header -->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1>UNIVERSITAS RONGGOLAWE</h1>
                        <p class="p-large">Jalan Manunggal No 61. Kota/Kabupaten, Kec. Semanding - Kab. Tuban - Prov. Jawa Timur. Kode Pos, 62319. Telepon, 0356322233. Faximile, 0356331578.</p>
                        <a class="btn-solid-lg page-scroll" href="sign-up.html">DAFTAR</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <div class="img-wrapper">
                            <img class="img-fluid" src="{{asset('web/images/school.png')}}" alt="alternative">
                        </div> <!-- end of img-wrapper -->
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of header-content -->
</header> <!-- end of header -->
<svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 310">
    <defs>
        <style>
            .cls-1 {
                fill: #5f4def;
            }
        </style>
    </defs>
    <title>header-frame</title>
    <path class="cls-1" d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z" />
</svg>
<!-- end of header -->


<!-- Sponsor -->
<div class="slider-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Image Slider -->
                <div class="slider-container">
                    <div class="swiper-container image-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('web/images/logo-panjang.png')}}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('web/images/bank-jatim.png')}}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('web/images/indihome.png')}}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('web/images/iespa.png')}}" alt="alternative">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid" src="{{asset('web/images/djarum.png')}}" alt="alternative">
                            </div>
                        </div> <!-- end of swiper-wrapper -->
                    </div> <!-- end of swiper container -->
                </div> <!-- end of slider-container -->
                <!-- end of image slider -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of customers -->


<!-- Headline -->
<div class="cards-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="above-heading">Headline</div>
                <h2 class="h2-heading">Universitas Ronggolawe</h2>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Headline -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{asset('web/images/headline-1.jpg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">PKKMB 2021</h4>
                        <p>PKKMB Universitas Ronggolawe Tuban Dimeriahkan Dengan Berbagai Event</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Headline -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{asset('web/images/headline-2.jpg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">WISUDA UNIROW</h4>
                        <p>Universitas Ronggolawe Gelar Wisuda dengan Protokol Kesehatan</p>
                    </div>
                </div>
                <!-- end of card -->

                <!-- Headline -->
                <div class="card">
                    <div class="card-image">
                        <img class="img-fluid" src="{{asset('web/images/headline-3.jpg')}}" alt="alternative">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">AKTIFITAS</h4>
                        <p>Dosen Unirow Berlangganan Program Magang dari Kemendikbud Ristek</p>
                    </div>
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of description -->
<!-- Profile -->
<div id="details" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Visi, Misi, dan Tujuan</h2>
                    <p>VISI :</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">MENJADI UNIVERSITAS YANG UNGGUL DAN PROFESIONAL BERLANDASKAN JATI DIRI PGRI PADA TAHUN 2035</div>
                        </li>
                        <p>MISI :</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Menyelengarakan pendidikan secara professional berbasis pada perkembangan IPTEKS dan jati diri PGRI</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Menyelenggarakan penelitian secara professional berbasis pada perkembangan IPTEKS</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Menyelenggarakan pengabdian kepada masyarakat secara professional berbasis pada perkembangan IPTEKS dan jati diri PGRI</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Mengembangakan kerjasama saling menguntungkan dengan berbagai pihak di bidang IPTEKS.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Mengembangkan tata pamong dan tata kelola secara professional berbasis pada jadi diri PGRI.</div>
                            </li>
                            <p>TUJUAN :</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Menghasilkan sivitas akademika yang professional di bidang perkembangan IPTEKS dan memiliki jati diri PGRI.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Menghasilkan penelitian yang dapat memberikan sumbangan kepada perkembangan IPTEKS</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Menghasilkan pengabdian masyarakat di bidang IPTEKS secara professional.</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Menghasilkan kerjasama dengan berbagai pihak secara professional dan saling menguntungkan</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Mewujudkan tata pamong dan tata kelola secara professional dan berbasis pada jati diri PGRI</div>
                                </li>
                            </ul>
                            <a class="btn-solid-reg page-scroll" href="sign-up.html">DAFTAR</a>
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="{{asset('web/images/profile-image.png')}}" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of details -->
<!-- Video -->
<div id="video" class="basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Video Preview -->
                <div class="image-container">
                    <div class="video-wrapper">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=DvgAfxVz-6M" data-effect="fadeIn">
                            <img class="img-fluid" src="{{asset('web/images/video-image.png')}}" alt="alternative">
                            <span class="video-play-button">
                                <span></span>
                            </span>
                        </a>
                    </div> <!-- end of video-wrapper -->
                </div> <!-- end of image-container -->
                <!-- end of video preview -->

                <div class="p-heading">Penerimaan Mahasiswa Baru Universitas Ronggolawe 2021</div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of video -->

<!-- Footer -->
<svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79">
    <defs>
        <style>
            .cls-2 {
                fill: #5f4def;
            }
        </style>
    </defs>
    <title>footer-frame</title>
    <path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)" />
</svg>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col first">
                    <h4>Tentang Universitas Ronggolawe</h4>
                    <p class="p-small">Universitas PGRI Ronggolawe (UNIROW) Tuban yang berdiri pada tahun 2007, di bawah naungan ornisasi Persatuan Guru Republik Indonesia (PGRI) yang berdasarkan Pancasila dan Undang – Undang Dasar 1945.</p>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Link</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Website Official Universitas Ronggolawe : <a class="white" href="https://unirow.ac.id/">unirow.ac.id</a></div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Alamat</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="media-body">jl Manunggal No 61. Kota/Kabupaten, Kec. Semanding - Kab. Tuban - Prov. Jawa Timur.</div>
                        </li>
                    </ul>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright © 2020 <a href="https://inovatik.com">Template by Inovatik</a></p>
            </div> <!-- end of col -->
        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright -->
<!-- end of copyright -->
@endsection