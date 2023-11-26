
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
    <title>Gardener - Gardening Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://themewagon.github.io/gardener/lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://themewagon.github.io/gardener/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://themewagon.github.io/gardener/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://themewagon.github.io/gardener/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="https://themewagon.github.io/gardener/css/style.css" rel="stylesheet">
</head>

<body>


<x-notify::notify/>



    
    <!-- Header Start -->

<div class="container">

@include('Frontend.Partials.header')


</div>
    <!-- Header End -->






    <!-- Carousel Start -->
    <div class="container">


    @yield('carousel')

    @yield('content')


    </div>
    <!-- Carousel End -->


    <!--  -->
    
    
    <!--  -->





    <!-- Footer Start -->

<div class="container">
    @include('Frontend.Partials.footer')
</div>

    <!-- Footer End -->


  


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/wow/wow.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/easing/easing.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/waypoints/waypoints.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/counterup/counterup.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/parallax/parallax.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="https://themewagon.github.io/gardener/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="https://themewagon.github.io/gardener/js/main.js"></script>


    @notifyJs


</body>

</html>