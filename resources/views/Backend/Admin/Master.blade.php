
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">

  @notifyCss

  <style>
    .notify{
        z-index: 1000000;
    }
</style>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Development of Nursery Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('backend')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('backend')}}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('backend')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('backend')}}/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('backend')}}/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('backend')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('backend')}}/vendor/simple-datatables/style.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="{{asset('backend')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<x-notify::notify/>





  <!-- ======= Header ======= -->


@include('Backend.Admin.Partial.Header')



 <!-- End Header -->







  <!-- ======= Sidebar ======= -->



@include('Backend.Admin.Partial.Sidebar')



 <!-- End Sidebar-->




 <main id="main" class="main">

    
    <section class="section dashboard">
      <div>
        <div>
          <div>
            <div>
              
            @yield('content')
            
          </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('backend')}}/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('backend')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('backend')}}/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('backend')}}/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('backend')}}/vendor/quill/quill.min.js"></script>
  <script src="{{asset('backend')}}/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('backend')}}/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('backend')}}/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('backend')}}/js/main.js"></script>

  @notifyJs


</body>

</html>