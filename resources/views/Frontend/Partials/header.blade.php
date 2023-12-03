<!-- Topbar Start -->
<div class="container-fluid bg-dark text-light px-0 py-2">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-5 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <span class="fa fa-phone-alt me-2"></span>
                <span>𝟶𝟷𝟿𝟽𝟺𝟼𝟸𝟽𝟷𝟶𝟼</span>
            </div>

            <div class="h-100 d-inline-flex align-items-center">
                <span class="far fa-envelope me-2"></span>
                <span>𝓉𝑜𝓇𝓊@𝑒𝓍𝒶𝓂𝓅𝓁𝑒.𝒸𝑜𝓂</span>
            </div>
        </div>


        <div class="col-lg-4 px-5 d-inline-flex align-items-center text-start">
            <form class="col-lg-12" action="{{route('product_search')}}" method="get">
                <input style="border-radius: 10px;" class="col-lg-9" type="text" class="form-control" placeholder="Search..." name="search">
                <button class="col-lg-2" type="submit" class="btn btn-success">Search</button>
            </form>
        </div>


        <div class="col-lg-3 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center mx-n2">



                <a class="btn btn-link text-light" href="{{route('cart_view')}}">
                    <i class="bi-cart-fill me-1"></i>
                    𝒞𝒶𝓇𝓉
                    <span class="badge bg-dark text-white ms-1 rounded-pill">
                        @if(session()->has('vcart'))
                        {{ count(session()->get('vcart')) }}
                        @else
                        0
                        @endif
                    </span>
                </a>

                <a class=" btn btn-link text-light" href="https://www.facebook.com/profile.php?id=61553547762155"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link text-light" href="https://wa.me/<01974627106>"><i class="fab fa-whatsapp"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0">তরু</h1>
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('Home')}}" class="nav-item nav-link active">𝐻𝑜𝓂𝑒</a>
            <a href="{{route('website_plants')}}" class="nav-item nav-link">𝒫𝓁𝒶𝓃𝓉𝓈</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">𝒞𝒶𝓉𝑒𝑔𝑜𝓇𝒾𝑒𝓈</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="feature.html" class="dropdown-item"></a>
                    <a href="team.html" class="dropdown-item"></a>
                    <a href="testimonial.html" class="dropdown-item"></a>
                    <a href="404.html" class="dropdown-item"></a>
                </div>
            </div>
            <a href="project.html" class="nav-item nav-link">𝒪𝒻𝒻𝑒𝓇𝓈</a>

            <a href="contact.html" class="nav-item nav-link">𝒞𝑜𝓃𝓉𝒶𝒸𝓉</a>
        </div>
        @guest
        <a href="{{route('customer.registration')}}" class="btn btn-success py-4 px-lg-4 rounded-0 d-none d-lg-block">𝑅𝑒𝑔𝒾𝓈𝓉𝓇𝒶𝓉𝒾𝑜𝓃</a>

        <a href="{{route('customer.login')}}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">𝐿𝑜𝑔𝐼𝓃<i class="fa fa-arrow-right ms-3"></i></a>
        @endguest

        @auth
        <a href="{{route('customer.logout')}}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">𝐿𝑜𝑔𝑜𝓊𝓉<i class="fa fa-arrow-right ms-3"></i></a>

        <a href="{{route('Customer_profile')}}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">𝒫𝓇𝑜𝒻𝒾𝓁𝑒<i class="fa fa-arrow-right ms-3"></i></a>

        @endauth

    </div>
</nav>
<!-- Navbar End -->