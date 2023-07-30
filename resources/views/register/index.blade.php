<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <title>Register Page | AryaBlog</title>
    
   
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
                                        <a class="nav-link d-flex align-items-center me-2 active"
                                            aria-current="page" href="../pages/dashboard.html" data-target="nav-dashboard">
                                            <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link me-2" href="/login" data-target="nav-signin">
                                            <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                            Sign in
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

            <!-- Right Box -->
            
            <section class="min-vh-100 mb-8">
                <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('/img/bg.jpg');">
                  <span class="mask bg-gradient-dark opacity-6"></span>
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Register!</h1>
                        <p class="text-lead text-white">Hallo dan selamat datang di AryaBlog, Silahkan buat akun baru mu disini dan bergabung lah. </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                    <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                      <div class="card z-index-0">
                       
                        <div class="row px-xl-5 px-sm-4 px-3">
                          <div class="col-3 ms-auto px-1">
                           
                          </div>
                          
                         
                          <div class="mt-2 position-relative text-center">
                            <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                              Let's Register!!
                            </p>
                          </div>
                        </div>
                        <div class="card-body">
                        <form action="/register" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="name" class="form-control form-control-lg bg-light fs-6 @error('name')is-invalid @enderror" id="name" placeholder="Full Name" required value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        <div class="input-group mb-3">
                            <input type="text" name="username" class="form-control form-control-lg bg-light fs-6 @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                      <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control form-control-lg bg-light fs-6 @error('email')is-invalid @enderror" id="email" placeholder="Email address" required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                      <div class="input-group mb-1">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6 @error('password')is-invalid @enderror" id="password" placeholder="Password" required >
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                      <div class="form-check form-check-info text-left">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                          I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                        </label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                    </div>

                      <p class="text-sm mt-3 mb-0">Sudah memiliki akun?, Ayo <a href="/login" class="text-dark font-weight-bolder">Login</a></p>
                    </form>
                  </div>
<!-- ... Bagian setelahnya ... -->

                </div>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk menangani tindakan saat tombol "Sign up" diklik
        function signUp() {
            // Ambil data dari formulir
            const name = document.getElementById("name").value;
            const username = document.getElementById("username").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            // Lakukan validasi data (Anda dapat menambahkan validasi sesuai kebutuhan)

            // Kirim data ke server (Anda dapat menggunakan fetch API atau AJAX untuk mengirim data ke server)
            // 
</body>
</html>
