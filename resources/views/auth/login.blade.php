<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Rental Mobil - Login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="close h-100" data-dismiss="alert"
                                                aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li><strong>Warning!</strong> {{ $error }}. Silahkan Cek
                                                        Kembali.</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session('warning'))
                                        <div class="alert alert-warning alert-dismissible alert-alt solid fade show">
                                            <button type="button" class="close h-100" data-dismiss="alert"
                                                aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                            </button>
                                            <li><strong>Warning!</strong> {{ session('warning') }}. Silahkan Cek
                                                Kembali.</li>
                                        </div>
                                    @endif
                                    <form action="{{ route('auth.login') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control"
                                                value="{{ old('username') }}" placeholder="Username...">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control"
                                                value="{{ old('password') }}" placeholder="Password...">
                                        </div>
                                        {{-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> --}}
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary"
                                                href="{{ route('auth.register') }}">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>

</body>

</html>
