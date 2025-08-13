<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('template/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('template/vendors/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('template/images/favicon.png')}}" />
  </head>
  <body>


     <!-- partial:partials/_navbar.html -->
     @include('layouts.partials.navbar')
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
           <!-- partial:partials/_sidebar.html -->
           @include('layouts.partials.sidebar')

           @yield('contents')
           <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
        @include('layouts.partials.footer')
          <!-- partial:partials/_footer.html -->
          <!-- partial -->
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('template/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('template/vendors/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('template/js/off-canvas.js')}}"></script>
    <script src="{{asset('template/js/misc.js')}}"></script>
    <script src="{{asset('template/js/settings.js')}}"></script>
    <script src="{{asset('template/js/todolist.js')}}"></script>
    <script src="{{asset('template/js/jquery.cookie.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('template/js/dashboard.js')}}"></script>
    <script src="{{asset('template/js/darkmode.js')}}"></script>
    <!-- End custom js for this page -->
     
  </body>
</html>