<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('page-title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/site-template/vendors/feather/feather.css">
  <link rel="stylesheet" href="/site-template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/site-template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="/site-template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="/site-template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="/site-template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/site-template/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="/site-template/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/site-template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/site-template/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layouts.partials.navbar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('admin.layouts.partials.sidebar')

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('user.layouts.partials.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/site-template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/site-template/vendors/chart.js/Chart.min.js"></script>
  <script src="/site-template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="/site-template/vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/site-template/js/off-canvas.js"></script>
  <script src="/site-template/js/hoverable-collapse.js"></script>
  <script src="/site-template/js/template.js"></script>
  <script src="/site-template/js/settings.js"></script>
  <script src="/site-template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/site-template/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="/site-template/js/dashboard.js"></script>
  <script src="/site-template/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
<!-- Code injected by live-server -->
</body>

</html>
