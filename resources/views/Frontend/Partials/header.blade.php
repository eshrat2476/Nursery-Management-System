 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
 </div>
 <!-- Spinner End -->


 <!-- Topbar Start -->
 <div class="container-fluid bg-dark text-light px-0 py-2">
     <div class="row gx-0 d-none d-lg-flex">
         <div class="col-lg-7 px-5 text-start">
             <div class="h-100 d-inline-flex align-items-center me-4">
                 <span class="fa fa-phone-alt me-2"></span>
                 <span>01974627106</span>
             </div>

             <div class="h-100 d-inline-flex align-items-center">
                 <span class="far fa-envelope me-2"></span>
                 <span>flora@example.com</span>
             </div>
         </div>
         <div class="col-lg-5 px-5 text-end">
             <div class="h-100 d-inline-flex align-items-center mx-n2">

                 <span>Follow Us:</span>
                 <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                 <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                 <a class="btn btn-link text-light" href=""><i class="fab fa-whatsapp"></i></a>

             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
     <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
         <h1 class="m-0">Flora</h1>
     </a>

     <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav ms-auto p-4 p-lg-0">
             <a href="index.html" class="nav-item nav-link active">Home</a>
             <a href="{{route('website_plants')}}" class="nav-item nav-link">Plants</a>

             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                 <div class="dropdown-menu bg-light m-0">
                     <a href="feature.html" class="dropdown-item"></a>
                     <a href="team.html" class="dropdown-item"></a>
                     <a href="testimonial.html" class="dropdown-item"></a>
                     <a href="404.html" class="dropdown-item"></a>
                 </div>
             </div>
             <a href="project.html" class="nav-item nav-link">Offers</a>

             <a href="contact.html" class="nav-item nav-link">Contact</a>
         </div>
         @guest
         <a href="{{route('customer.registration')}}" class="btn btn-success py-4 px-lg-4 rounded-0 d-none d-lg-block">Registration</a>

        <a href="{{route('customer.login')}}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">LogIn<i class="fa fa-arrow-right ms-3"></i></a>
        @endguest

        @auth
        <a href="{{route('customer.logout')}}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Logout<i class="fa fa-arrow-right ms-3"></i></a>
        
        <a href="{{route('Customer_profile')}}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Profile<i class="fa fa-arrow-right ms-3"></i></a>
       
        @endauth

     </div>
 </nav>
 <!-- Navbar End -->