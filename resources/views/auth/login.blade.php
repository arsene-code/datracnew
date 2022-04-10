<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Datrac-Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/dashboard/dashboard/img/favicon.png" rel="icon">
    <link href="assets/dashboard/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dashboard/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/dashboard/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/dashboard/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/dashboard/css/style.css" rel="stylesheet">
    @notifyCss
</head>

<body>

<main>
    <div class="container">
        <x:notify-messages />
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-2">
                            <a href="/" class="logo d-flex align-items-center w-auto">
                                <img src="assets/dashboard/img/logo.png" alt="">
                                <span class="d-block d-lg-block">Datrac</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-4">

                            <div class="card-body">

                                <div class="pt-4 pb-2 mb-4">
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your username or email & password to login</p>
                                </div>

                                <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="login" class="col-md-12 mb-1 col-form-label text-md-right">Username or Email</label>
                                        <input id="login" type="text" class="form-control {{ $errors->has('email') || $errors->has('username') ? 'is-invalid' : ''}} " name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                                        @if ($errors->has('email') || $errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') ?: $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" @error('password') is-invalid @enderror" id="yourPassword" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Don't have account? <a href="/register">Create an account</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/dashboard/vendor/php-email-form/validate.js"></script>
<script src="assets/dashboard/vendor/quill/quill.min.js"></script>
<script src="assets/dashboard/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/dashboard/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/dashboard/vendor/chart.js/chart.min.js"></script>
<script src="assets/dashboard/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/dashboard/vendor/echarts/echarts.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/dashboard/js/main.js"></script>
@notifyJs

</body>

</html>
