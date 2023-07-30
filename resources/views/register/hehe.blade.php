<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>Register Page | AryaBlog</title>
    
   
</head>
<body>

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <!-- Login Container -->
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <!-- Left Box -->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #103cbe;">
                <div class="featured-image mb-3">
                    <img src="images/1.png" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
            </div> 

            <!-- Right Box -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello, Again</h2>
                        <p>You can register your account here.</p>
                    </div>
                   <!-- ... Bagian sebelumnya ... -->
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
    <div class="input-group mb-5 d-flex justify-content-between">
        <div class="input-group mb-3">
            <button class="btn btn-lg btn-primary w-100 fs-6">Register</button>
        </div>
        <div class="row">
            <small>Already have an account? <a href="/login">Login Here</a></small>
        </div>
    </div>
</form>
<!-- ... Bagian setelahnya ... -->

                </div>
            </div>
        </div>
    </div>

</body>
</html>
