<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Datrac-Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/dashboard/img/favicon.png" rel="icon">
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
</head>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/dashboard/img/logo.png" alt="">
                                <span class="d-none d-lg-block">DATRAC</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                    <p class="text-center small">Enter your personal details to create account</p>
                                </div>

                                <form class="row g-3 needs-validation" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Nom</label>
                                        <input type="text" name="nom" class="form-control @error('name') is-invalid @enderror" id="yourName" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="prenom" class="form-label">Prenom</label>
                                        <input type="text" name="prenom" class="form-control @error('surname') is-invalid @enderror " id="prenom" value="{{ old('surname') }}" required>
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="yourEmail" value="{{ old('email') }}" required>
                                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="yourUsername" value="{{ old('username') }}" required>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="yourPassword" required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password-confirm" class="form-label">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
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

<!-- Template Main JS File -->
<script src="assets/dashboard/js/main.js"></script>

</body>

</html>
