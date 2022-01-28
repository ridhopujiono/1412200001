@extends('template/main')
@section('container')
<!-- Header -->
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>AMBIL MATA KULIAH</h1>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->


<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="{{url('/utama')}}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Ambil Mata Kuliah</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


<!-- Terms Content -->
<div class="ex-basic-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(session('success'))
                <div class="alert alert-success">
                    Berhasil ambil mata kuliah, lihat <a href="{{url('lihat_hasil')}}">disini</a>
                </div>
                @endif
                <label for="">Pilih Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control mb-3">
                    @if(!empty($jurusan_aktif))
                    <option value="{{$jurusan_aktif->id}}" selected>{{$jurusan_aktif->nama_jurusan}}</option>

                    @endif
                    @foreach($jurusan as $j)
                    <option value="{{$j->id}}">{{$j->nama_jurusan}}</option>

                    @endforeach
                </select>
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Mata Kuliah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        <form action="{{url('ambil_matkul')}}" method="POST">
                            @csrf
                            @foreach($mata_kuliah as $mk)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$mk->nama_matkul}}</td>
                                <td>
                                    <input type="checkbox" name="pilih_matkul[]" id="" value="{{$mk->nama_matkul}}" class="form-control" style="
                                    height: 25px;
                                ">
                                </td>
                            </tr>
                            @endforeach

                    </tbody>
                </table>
                <button class="btn btn-primary" type="submit">Ambil Mata Kuliah</button>
                </form>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic -->
<!-- end of terms content -->


<!-- Breadcrumbs -->
<div class="ex-basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs">
                    <a href="{{url('/')}}">Beranda</a><i class="fa fa-angle-double-right"></i><span>Ambil Mata Kuliah</span>
                </div> <!-- end of breadcrumbs -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of breadcrumbs -->


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
<!-- Scripts -->
<script src="{{asset('web/js/jquery.min.js')}}"></script>
<script>
    $(function() {
        // bind change event to select
        $('#jurusan').on('change', function() {
            var id = $(this).val(); // get selected value
            if (id) { // require a URL
                let url = "{{url('ambil_matkul')}}/" + id;
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>
@endsection