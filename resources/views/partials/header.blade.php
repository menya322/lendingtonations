<head>
        <meta charset="utf-8">
        <title>lending Nations</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{asset('assets/lib/animate/animate.min.css')}}"/>
        <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

     <!-- Topbar Start -->
        <div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Masindi Uganda</a>
                        <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+256784524705</a>
                        <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>info@lendingnations.org</a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
    <div class="d-inline-flex align-items-center gap-3">
        <a href="#" class="btn btn-sm btn-light rounded-circle" title="Facebook">
            <i class="fab fa-facebook-f text-primary"></i>
        </a>
        <a href="#" class="btn btn-sm btn-light rounded-circle" title="Twitter">
            <i class="fab fa-twitter text-primary"></i>
        </a>
        <a href="#" class="btn btn-sm btn-light rounded-circle" title="Instagram">
            <i class="fab fa-instagram text-primary"></i>
        </a>
        <a href="#" class="btn btn-sm btn-light rounded-circle" title="LinkedIn">
            <i class="fab fa-linkedin-in text-primary"></i>
        </a>
    </div>
</div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <img src="{{asset('assets/images/nations.png')}}" alt="Logo" style="height:160px; width:100px auto; max-width: 200px; object-fit: contain;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                        <a href="{{route('about')}}" class="nav-item nav-link ">About</a>
                        <a href="{{route('program')}}" class="nav-item nav-link ">Programs</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Insights</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('impact')}}" class="dropdown-item">Our Impact</a>
                                <a href="{{route('gallery')}}" class="dropdown-item">Gallery</a>
                                <!-- <a href="testimonial.html" class="dropdown-item">Testimonial</a> -->
                                <a href="{{route('getinvolved')}}" class="dropdown-item">Get Involved</a>
                                <!-- <a href="FAQ.html" class="dropdown-item">Transparency</a> -->
                            </div>
                        </div>
                        <a href="{{route('contact')}}" class="nav-item nav-link ">Contact Us</a>
                    </div>
                    <a href="{{route('donate')}}" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Donate</a>
                </div>
            </nav>