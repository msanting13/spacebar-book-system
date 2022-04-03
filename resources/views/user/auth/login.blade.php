<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name') }} | Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin-assets/images/favicon.ico" />
        <!-- Bootstrap Css -->
        <link
            href="/admin-assets/css/bootstrap.min.css"
            id="bootstrap-style"
            rel="stylesheet"
            type="text/css"
        />
        <!-- Icons Css -->
        <link
            href="/admin-assets/css/icons.min.css"
            rel="stylesheet"
            type="text/css"
        />
        <!-- App Css-->
        <link
            href="/admin-assets/css/app.min.css"
            id="app-style"
            rel="stylesheet"
            type="text/css"
        />
    </head>
    <body>
		@if($errors->any())
			<div class="alert alert-dismissible bg-danger  rounded-0 text-center">
                <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                    @if(Str::contains($errors->first('email'), 'Too many'))
                        <span class='text-center fw-medium fs-5'>Too many login attempts your account is temporarily blocked for 24 hours.</span>
                    @else
                        <span class='text-center fw-medium fs-5'>{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>
			@endif
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
			
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-login text-center">
                                <div class="bg-login-overlay"></div>
                                <div class="position-relative">
                                    <h5 class="text-white font-size-20">
                                        Welcome Back !
                                    </h5>
                                    <p class="text-white-50 mb-0">
                                        Sign in to continue to
                                        {{ config("app.name") }}.
                                    </p>
                                    <a
                                        href="#"
                                        class="logo logo-admin mt-4"
                                    >
                                        <img
                                            src="/admin-assets/images/logo-sm-dark.png"
                                            alt=""
                                            height="30"
                                        />
                                    </a>
                                </div>
                            </div>
                            <div class="card-body pt-5">
                                <div class="p-2">
                                    <form
                                        class="form-horizontal"
                                        action="{{ route('login') }}"
                                        method="POST"
                                    >
                                        @csrf
                                        <div class="mb-3">
                                            <label
                                                class="form-label text-dark"
                                                for="username"
                                                >Email</label
                                            >
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="email"
                                                placeholder="Enter email"
                                            />
                                        </div>

                                        <div class="mb-3">
                                            <label
                                                class="form-label text-dark"
                                                for="userpassword"
                                                >Password</label
                                            >
                                            <input
                                                type="password"
                                                class="form-control"
                                                id="userpassword"
                                                name="password"
                                                placeholder="Enter password"
                                            />
                                        </div>

                                        <div class="form-check">
                                            <input
                                                type="checkbox"
                                                class="form-check-input"
                                                id="customControlInline"
                                            />
                                            <label
                                                class="form-check-label text-dark"
                                                for="customControlInline"
                                                >Remember me</label
                                            >
                                        </div>

                                        <div class="mt-3">
                                            <button
                                                class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit"
                                            >
                                                Log In
                                            </button>
                                        </div>

                                        <div class="mt-4 text-center"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p>
                                Don't have an account ?
                                <a
                                    href="{{ route('register') }}"
                                    class="fw-medium text-primary"
                                >
                                    Signup now
                                </a>
                            </p>
                            <p>
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                {{ config("app.name") }}. Crafted with
                                <i class="mdi mdi-heart text-danger"></i> by
                                {{ config("app.name") }} Team
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
