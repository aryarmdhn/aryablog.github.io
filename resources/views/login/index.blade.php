<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->

    <title>Login Page | AryaBlog</title>
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                            AryaBlog
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="../pages/dashboard.html" data-target="nav-dashboard">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        Dashboard
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link me-2" href="/register" data-target="nav-signin">
                                        <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                        Sign up
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    <main class="main-content mt-0">

        <section class="min-vh-100 mb-8">
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('/img/bg.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
                            <p class="text-lead text-white">Hallo dan selamat datang di AryaBlog, Silahkan login menggunakan akunmu disini.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                        <div class="card z-index-0">
                            <div class="card-header text-center pt-4">
                                <h5>Let's Login!!</h5>
                            </div>
                            <div class="row px-xl-5 px-sm-4 px-3">
                                <div class="col-3 ms-auto px-1">
                                    
                                </div>
                                <div class="col-3 px-1">
                                   
                                </div>
                              
                                <div class="mt-2 position-relative text-center">
                                    
                                </div>
                            </div>
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                        @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="card-body">
                        <form action="/login" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="email" name="email"
                                    class="form-control form-control-lg bg-light fs-6 @error('email')is-invalid @enderror"
                                    id="email" placeholder="Email address" required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="input-group mb-1">
                                <input type="password" name="password"
                                    class="form-control form-control-lg bg-light fs-6 @error('password')is-invalid @enderror"
                                    id="password" placeholder="Password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Remember
                                        Me</small></label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign
                                    In</button>
                            </div>

                            <p class="text-sm mt-3 mb-0">Masih belum punya akun? <a href="/register"
                                    class="text-dark font-weight-bolder">Register</a></p>
                        </form>
                    </div>
                    <!-- ... Bagian setelahnya ... -->

                </div>
            </div>
        </div>
        </div>
        </section>
    </main>


    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">

                    <a href="/about" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Me
                    </a>

                    <a href="/dashboard" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Profile
                    </a>
                    <a href="/blog" target="_blank"
                        class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>

                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">

                   
                    <a href="https://www.instagram.com/artarmdhn/" target="_blank"
                        class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>

                    <a href="https://github.com/aryarmdhn" target="_blank"
                        class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <script>
        // Function untuk mengubah status garis 3 pada navbar saat ditekan
        function setActiveNav(target) {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            navLinks.forEach(link => {
                if (link.dataset.target === target) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = e.target.dataset.target;
                    setActiveNav(target);
                });
            });
        });
    </script>


</body>

</html>
