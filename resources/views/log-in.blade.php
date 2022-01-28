@extends('template/main')
@section('container')
<!-- Header -->
<header id="header" class="ex-2-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>MASUK</h1>
                <p>Anda Tidak Memiliki Akun ? Silahkan <a class="white" href="{{url('sign-up')}}">Daftar</a></p>
                <!-- Sign Up Form -->
                <div class="form-container">
                    <form id="logInForm" data-toggle="validator" data-focus="false">

                        <div class="form-group">
                            <input type="text" name="npm" class="form-control-input" required>
                            <label class="label-control" for="lemail">NPM</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lpassword" required>
                            <label class="label-control" for="lpassword">Kata Sandi</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Masuk</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
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