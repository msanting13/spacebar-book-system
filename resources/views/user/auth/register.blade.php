<!doctype html>
<html lang="en">


<head>

    <meta charset="utf-8" />
	<title>{{ config('app.name') }} | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin-assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/admin-assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/admin-assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/admin-assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Create an account</h5>
                                <a href="index.html" class="logo logo-admin mt-4">
                                    <img src="/admin-assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <form class="form-horizontal" action="{{ route('register') }}" method="POST">
									@csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <input type="email" class="form-control" id="useremail" name="email" value="{{ old('email') }}"
                                            placeholder="Enter Email">
										@error('email')
                                            <span class='text-sm text-danger'>{{ $errors->first('email') }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="firstname">Firstname</label>
                                        <input type="text" class="form-control" id="firstname" name="first_name" value="{{ old('first_name') }}"
                                            placeholder="Enter Firstname">
										@error('first_name')
                                            <span class='text-sm text-danger'>{{ $errors->first('first_name') }}</span>
                                        @enderror
                                    </div>

									<div class="mb-3">
                                        <label class="form-label" for="lastname">Lastname</label>
                                        <input type="text" class="form-control" id="lastname" name="last_name" value="{{ old('last_name') }}"
                                            placeholder="Enter Lastname">
										@error('last_name')
                                            <span class='text-sm text-danger'>{{ $errors->first('last_name') }}</span>
                                        @enderror
                                    </div>

									<div class="mb-3">
                                        <label class="form-label" for="phone_number">Mobile No.</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                            placeholder="Enter Mobile No.">
										@error('phone_number')
                                            <span class='text-sm text-danger'>{{ $errors->first('phone_number') }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" 
                                            placeholder="Enter password">
										@error('password')
                                            <span class='text-sm text-danger'>{{ $errors->first('password') }}</span>
                                        @enderror
                                    </div>

									<div class="mb-3">
                                        <label class="form-label" for="retypepassword">Re-type password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="retypepassword"
                                            placeholder="Re-type your password">
                                    </div>

									<div class="mb-3">
                                        <label class="form-label" for="address">Address</label>
                                        <textarea name="address" class='form-control' id="address" rows="3">{{ old('address') }}</textarea>
										@error('address')
                                            <span class='text-sm text-danger'>{{ $errors->first('address') }}</span>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                            type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the {{ config('app.name') }} <a href="#"
                                                class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="pages-login.html" class="fw-medium text-primary">
                                Login</a> </p>
                        <p>©
                            {{ date('Y') }} {{ config('app.name') }}. Crafted with <i class="mdi mdi-heart text-danger"></i> by {{ config('app.name') }} Team
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="/admin-assets/libs/jquery/jquery.min.js"></>
    <script src="/admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin-assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/admin-assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/admin-assets/libs/node-waves/waves.min.js"></script>
    <script src="/admin-assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>


    <script src="/admin-assets/js/app.js"></script>

</body>


</html>
