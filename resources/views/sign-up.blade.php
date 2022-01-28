@extends('template/main')
@section('container')

<!-- Header -->
<header id="header" class="ex-2-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>DAFTAR</h1>
                <p>Silahkan Mendaftar Jika Belum Mempunyai Akun, Jika Sudah Silahkan Klik <a class="white" href="{{url('/')}}">Masuk</a></p>
                <!-- Sign Up Form -->
                <div class="form-container">
                    @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <form action="{{url('regis')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control-input" required>
                            <label class="label-control" for="lemail">Nama Lengkap</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="npm" class="form-control-input" id="sname" required>
                            <label class="label-control" for="sname">NPM</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="spassword" name="password" required>
                            <label class="label-control" for="spassword">Kata Sandi</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="sterms" value="Agreed-to-Terms" required>Checklist Untuk Melanjutkan</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">DAFTAR</button>
                        </div>
                        <div class="form-message">
                            <div id="smsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> <!-- end of form container -->
                <!-- end of sign up form -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->
@endsection