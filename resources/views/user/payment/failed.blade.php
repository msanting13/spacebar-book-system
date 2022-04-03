<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>Payment Failed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin-assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/admin-assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/admin-assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">

                        <div class="card-body">

                            <div class="text-center p-3">

                                <div class="img">
                                    <img src="/admin-assets/images/error-img.png" class="img-fluid" alt="">
                                </div>

                                <h1 class="error-page mt-5"><span>Payment Failed</span></h1>
                                <h4 class="mb-4 mt-5">Something went wrong</h4>
                                <p class="mb-4 w-75 mx-auto">Please contact us to fix your problem.</p>
                                <a class="btn btn-primary mb-4 waves-effect waves-light" href="{{ route('login') }}"><i
                                        class="mdi mdi-home"></i> Back to Dashboard</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>