<!DOCTYPE html>
<html lang="en">

    @include('partials.header')

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <!-- First Carousel Slide -->
            <div class="header-carousel-item">
                <img src="{{asset('assets/images/godly.jpg')}}" class="img-fluid w-100" alt="Lending to Nations">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-0 gx-5">
                            <div class="col-lg-0 col-xl-5"></div>
                            <div class="col-xl-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4 wow fadeInDown" data-wow-delay="0.1s">Welcome</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4 wow fadeInDown" data-wow-delay="0.2s">Lending to Nations</h1>
                                    <p class="mb-5 fs-5 wow fadeInUp" data-wow-delay="0.3s">
                                        We are LENDING TO NATIONS a divine movement, a generational assignment, a kingdom mandate in motion. We are MAKING NATIONS BETTER through the demonstrated power of the Gospel and the practical love of Christ.  Every life touched, every community transformed, every nation impacted resounds with one eternal echo: ALL GLORY TO GOD who enables us to be His outstretched arm to the nations.
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#" role="button">
                                            <i class="fas fa-play-circle me-2"></i> Watch Video
                                        </a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="{{route('about')}}" role="button">
                                            Learn More
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-md-end wow fadeInUp" data-wow-delay="0.5s">
                                        <h5 class="text-white me-3">Follow Us:</h5>
                                        <div class="d-flex justify-content-end ms-2 gap-2">
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="Facebook" aria-label="Follow us on Facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="Twitter" aria-label="Follow us on Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="Instagram" aria-label="Follow us on Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="LinkedIn" aria-label="Follow us on LinkedIn">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Second Carousel Slide -->
            <div class="header-carousel-item">
                <img src="{{asset('assets/images/lending.jpg')}}" class="img-fluid w-100" alt="Our Mission">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-5">
                            <div class="col-12 animated fadeInUp">
                                <div class="text-center">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4 wow fadeInDown" data-wow-delay="0.1s">Welcome To</h4>
                                    <h1 class="display-4 text-uppercase text-white mb-4 wow fadeInDown" data-wow-delay="0. 2s">LENDING TO NATIONS</h1>
                                    <p class="mb-5 fs-5 wow fadeInUp" data-wow-delay="0.3s">
                                        Born from divine meditation with the Holy Spirit, Lending To Nations represents God's outstretched arm to bring kindness and hope to many nations. We are a movement of passionate young believers committed to making nations better by manifesting the truth of the Gospel through tangible acts of love and compassion.
                                    </p>
                                    <div class="d-flex justify-content-center flex-shrink-0 mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                        <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#" role="button">
                                            <i class="fas fa-play-circle me-2"></i> Watch Video
                                        </a>
                                        <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="{{route('about')}}" role="button">
                                            Learn More
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center wow fadeInUp" data-wow-delay="0.5s">
                                        <h5 class="text-white me-3">Follow Us:</h5>
                                        <div class="d-flex justify-content-center ms-2 gap-2">
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="Facebook" aria-label="Follow us on Facebook">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="Twitter" aria-label="Follow us on Twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="Instagram" aria-label="Follow us on Instagram">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a class="btn btn-md-square btn-light rounded-circle" href="#" title="LinkedIn" aria-label="Follow us on LinkedIn">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Section Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- About Content -->
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0. 2s">
                        <div>
                            <h4 class="text-primary text-uppercase fw-bold">About Us</h4>
                            <h1 class="display-5 mb-4">Extending Compassion, Manifesting Truth, and Transforming Lives Across Nations</h1>
                            <p class="mb-4 lh-lg">
                                Lending To Nations represents a divine convergence of vision and purpose a ministry birthed not in boardrooms but in the secret place of meditation with the Holy Spirit. On February 5th, 2025, during a profound moment of spiritual reflection on Dr. Tumusiime Paul's 26th birthday, heaven deposited a blueprint for global transformation. What emerged was more than an organization; it became God's outstretched arm extended across geographical, cultural, and spiritual boundaries.
                            </p>

                            <!-- About Features -->
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-lightbulb fa-3x text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <h5 class="mb-3">Lives Directly Impacted</h5>
                                            <p class="text-muted">
                                                Lending To Nations has directly transformed lives by providing essential education to underprivileged children, restoring dignity through the provision of food, shelter, and clothing to vulnerable families, and delivering critical healthcare services including successful dental camps to communities in need.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-handshake fa-3x text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <h5 class="mb-3">Strategic Partnerships</h5>
                                            <p class="text-muted">
                                                We believe strategic partnerships represent divine connections ordained to amplify our reach and deepen our impact. We seek covenant relationships with organizations, churches, and businesses that share our commitment to making nations better. 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CTA Buttons -->
                            <div class="row g-4 mt-2">
                                <div class="col-sm-6">
                                    <a href="{{route('about')}}" class="btn btn-primary rounded-pill py-3 px-5 w-100" role="button">
                                        <i class="fas fa-arrow-right me-2"></i> Discover Now
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                        <div>
                                            <h6 class="mb-1">Call Us</h6>
                                            <p class="mb-0 fs-5 text-primary fw-bold" style="letter-spacing: 1px;">+256 776 779 820</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- About Image -->
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded overflow-hidden">
                            <img src="{{asset('assets/images/nations.jpg')}}" class="img-fluid rounded w-100" alt="Our Impact">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section End -->
 <!-- Services Start -->
        <div class="container-fluid service pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <span class="badge bg-primary text-white px-3 py-2 rounded-pill mb-3 fw-semibold text-uppercase" style="font-size: 0.85rem; letter-spacing: 0.5px;">Our Programs</span>
                    <h1 class="display-5 mb-4 fw-bold">Programs And Initiatives</h1>
                    <p class="mb-0 fs-6 text-muted">
                        Lending To Nations isn't just our calling it's an invitation for you to become God's outstretched arm to the nations. 
                        Your partnership enables us to extend further, reach deeper, and impact more lives for God's glory.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item bg-white rounded shadow-sm p-4 h-100"  transition: all 0.3s;">
                            <div class="bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-graduation-cap fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3 fw-bold">Education for Destiny</h4>
                            <p class="mb-0 text-muted" style="line-height: 1.8;">
                                We sponsor less privileged students, providing both school fees and requirements because we believe education is the key to unlocking destinies.
                                We're not just putting children through school we're raising kings and queens who will transform their nations.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item bg-white rounded shadow-sm p-4 h-100" >
                            <div class="bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-hands-helping fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3 fw-bold">Basic Needs Provision</h4>
                            <p class="mb-0 text-muted" style="line-height: 1.8;">
                                Food, shelter, clothing, and medical services the fundamental needs every human deserves. Through our basic needs program, we demonstrate God's practical love, 
                                meeting people at their point of need and showing them that God cares about their everyday struggles
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item bg-white rounded shadow-sm p-4 h-100" >
                            <div class="bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-crown fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3 fw-bold">Kingdom Leadership Development</h4>
                            <p class="mb-0 text-muted" style="line-height: 1.8;">
                                Making Kings Out of Them this is our commitment. Beyond temporary relief, we're building eternal legacies. We identify potential, nurture gifts, and mentor 
                                individuals into the kings God created them to be, equipped to rule and reign in their spheres of influence.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item bg-white rounded shadow-sm p-4 h-100" >
                            <div class="bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-bible fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3 fw-bold">Gospel Evangelism</h4>
                            <p class="mb-0 text-muted" style="line-height: 1.8;">
                                Preaching the gospel to all nations remains our core mandate. Every outreach, 
                                every program, every act of kindness is an opportunity to share the
                                good news of Jesus Christ. We manifest Gospel truth through both word and deed.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item bg-white rounded shadow-sm p-4 h-100" >
                            <div class="bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-users fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3 fw-bold">Community Transformation Partnerships</h4>
                            <p class="mb-0 text-muted" style="line-height: 1.8;">
                                Moving beyond individual aid, this program focuses on strategic, long-term partnerships with local churches and community leaders to identify and address the most pressing needs of a specific region. Together, we develop and fund sustainable projects such as establishing clean water wells,
                                initiating community farming co-ops, or building makeshift medical clinics
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item bg-white rounded shadow-sm p-4 h-100" >
                            <div class="bg-primary bg-gradient rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                                <i class="fas fa-female fa-2x text-white"></i>
                            </div>
                            <h4 class="mb-3 fw-bold">Women of Destiny Empowerment</h4>
                            <p class="mb-0 text-muted" style="line-height: 1.8;">
                                Recognizing that empowered women form the bedrock of thriving communities, this initiative is dedicated to equipping mothers, daughters, and sisters with the tools for holistic transformation. We focus on breaking cycles of poverty and dependency by providing vocational skills training in areas like tailoring, handicrafts, and agribusiness. Coupled with financial literacy education and 
                                small seed capital, we help them launch sustainable micro-enterprises.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->
        <!-- Features Start -->
       <div class="container-fluid feature pb-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); position: relative; overflow: hidden;">
    <!-- Decorative background elements -->
    <div style="position: absolute; top: -50px; right: -50px; width: 300px; height: 300px; background: rgba(0, 123, 255, 0.05); border-radius: 50%; z-index: 0;"></div>
    <div style="position: absolute; bottom: -100px; left: -100px; width: 400px; height: 400px; background: rgba(0, 123, 255, 0.03); border-radius: 50%; z-index: 0;"></div>
    
    <div class="container pb-5" style="position: relative; z-index: 1;">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary" style="font-weight: 600; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 15px;">Our Goals</h4>
            <h1 class="display-5 mb-4" style="font-weight: 700; line-height: 1.3; color: #212529;">These Goals Help Us Reach a Greater Number of People</h1>
            <p class="mb-0" style="font-size: 1.1rem; line-height: 1.8; color: #6c757d;">
                Lending To Nations serves as the outstretched arm of God to transform 
                lives and nations. We empower the less privileged through education, restore dignity by providing essential needs like food, shelter, and medical care, 
                elevate destinies by nurturing individuals into their God-given royal identity, and eternally impact hearts by proclaiming the Gospel of Jesus Christ to all nations 
                ensuring every act of compassion reveals His glory and everlasting hope.
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 h-100" style="background: #ffffff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; border: 1px solid #e9ecef;">
                    <div class="feature-icon p-4 mb-4" style="background: rgba(0, 123, 255, 0.1); border-radius: 15px; display: inline-block;">
                        <i class="fas fa-chart-line fa-4x text-primary"></i>
                    </div>
                    <h4 style="font-weight: 600; color: #212529; margin-bottom: 15px;">Sponsoring Students</h4>
                    <p class="mb-4" style="color: #6c757d; line-height: 1.7;">
                        We go beyond paying school fees to providing comprehensive educational support, 
                        equipping the less privileged with the tools for learning.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 h-100" style="background: #ffffff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; border: 1px solid #e9ecef;">
                    <div class="feature-icon p-4 mb-4" style="background: rgba(0, 123, 255, 0.1); border-radius: 15px; display: inline-block;">
                        <i class="fas fa-university fa-4x text-primary"></i>
                    </div>
                    <h4 style="font-weight: 600; color: #212529; margin-bottom: 15px;">Helping with Basic Needs</h4>
                    <p class="mb-4" style="color: #6c757d; line-height: 1.7;">
                        By providing essential needs like food, shelter, clothing, and medical care, we become 
                        God's outstretched arm of practical compassion.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 h-100" style="background: #ffffff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; border: 1px solid #e9ecef;">
                    <div class="feature-icon p-4 mb-4" style="background: rgba(0, 123, 255, 0.1); border-radius: 15px; display: inline-block;">
                        <i class="fas fa-file-alt fa-4x text-primary"></i>
                    </div>
                    <h4 style="font-weight: 600; color: #212529; margin-bottom: 15px;">Making Kings Out of Them</h4>
                    <p class="mb-4" style="color: #6c757d; line-height: 1.7;">
                        We nurture individuals to recognize and walk in their God-given authority and purpose, transforming beneficiaries 
                        from victims of circumstance into kings and queens who reign in life for His glory.
                    </p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 h-100" style="background: #ffffff; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); transition: all 0.3s ease; border: 1px solid #e9ecef;">
                    <div class="feature-icon p-4 mb-4" style="background: rgba(0, 123, 255, 0.1); border-radius: 15px; display: inline-block;">
                        <i class="fas fa-hand-holding-usd fa-4x text-primary"></i>
                    </div>
                    <h4 style="font-weight: 600; color: #212529; margin-bottom: 15px;">Preaching the Gospel</h4>
                    <p class="mb-4" style="color: #6c757d; line-height: 1.7;">
                        This is the cornerstone of all we do. We actively share the message of Jesus Christ with all nations, ensuring that
                        every act of compassion is coupled with the life-changing truth of the Gospel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .feature-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.12) !important;
    }
    
    .feature-icon {
        transition: all 0.3s ease;
    }
    
    .feature-item:hover .feature-icon {
        transform: scale(1.1);
    }
</style>
        <!-- Features End -->

        <!-- Core Values Section Start -->
        <div class="container-fluid values-section py-5 bg-light">
            <div class="container py-5">
                <!-- Section Header -->
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary text-uppercase fw-bold">Our Core Values</h4>
                    <h1 class="display-5 mb-4">The Values We Stand On</h1>
                    <p class="mb-0 lh-lg">
                        These four pillars define every decision we make, guide every action we take, and shape the culture of our organization as we pursue our mission to make nations better.
                    </p>
                </div>

                <!-- Values Tabs -->
                <div class="row g-5 align-items-center">
                    <!-- Values Navigation -->
                    <div class="col-xl-5 wow fadeInLeft" data-wow-delay="0.2s">
    <div class="values-navigation bg-white rounded-lg shadow-lg p-0 overflow-hidden">
        <!-- Navigation Header -->
    
        <!-- Navigation Items -->
        <div class="nav nav-pills flex-column p-3 gap-2" role="tablist">
            
            <!-- Love Item -->
            <a class="value-nav-item active p-4 rounded transition" 
               data-bs-toggle="pill" 
               href="#collapseOne" 
               role="tab"
               aria-selected="true">
                <div class="d-flex align-items-start">
                    <!-- Icon Container -->
                    <div class="value-nav-icon me-3 flex-shrink-0">
                        <i class="fas fa-heart fa-2x"></i>
                    </div>
                    <!-- Content -->
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">LOVE</h6>
                        <p class="mb-0 small text-muted">The Motivational Engine</p>
                        <small class="text-primary fw-500 d-inline-block mt-2">
                            <i class="fas fa-arrow-right me-1"></i> Discover More
                        </small>
                    </div>
                    <!-- Indicator -->
                    <div class="value-nav-indicator flex-shrink-0">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>

            <!-- Truth Item -->
            <a class="value-nav-item p-4 rounded transition" 
               data-bs-toggle="pill" 
               href="#collapseTwo" 
               role="tab"
               aria-selected="false">
                <div class="d-flex align-items-start">
                    <!-- Icon Container -->
                    <div class="value-nav-icon me-3 flex-shrink-0">
                        <i class="fas fa-lightbulb fa-2x"></i>
                    </div>
                    <!-- Content -->
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">TRUTH</h6>
                        <p class="mb-0 small text-muted">The Unshakable Foundation</p>
                        <small class="text-primary fw-500 d-inline-block mt-2">
                            <i class="fas fa-arrow-right me-1"></i> Discover More
                        </small>
                    </div>
                    <!-- Indicator -->
                    <div class="value-nav-indicator flex-shrink-0">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>

            <!-- Stewardship Item -->
            <a class="value-nav-item p-4 rounded transition" 
               data-bs-toggle="pill" 
               href="#collapseThree" 
               role="tab"
               aria-selected="false">
                <div class="d-flex align-items-start">
                    <!-- Icon Container -->
                    <div class="value-nav-icon me-3 flex-shrink-0">
                        <i class="fas fa-pray fa-2x"></i>
                    </div>
                    <!-- Content -->
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">STEWARDSHIP</h6>
                        <p class="mb-0 small text-muted">The Sacred Trust</p>
                        <small class="text-primary fw-500 d-inline-block mt-2">
                            <i class="fas fa-arrow-right me-1"></i> Discover More
                        </small>
                    </div>
                    <!-- Indicator -->
                    <div class="value-nav-indicator flex-shrink-0">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>

            <!-- Faithfulness Item -->
            <a class="value-nav-item p-4 rounded transition" 
               data-bs-toggle="pill" 
               href="#collapseFour" 
               role="tab"
               aria-selected="false">
                <div class="d-flex align-items-start">
                    <!-- Icon Container -->
                    <div class="value-nav-icon me-3 flex-shrink-0">
                        <i class="fas fa-shield-alt fa-2x"></i>
                    </div>
                    <!-- Content -->
                    <div class="flex-grow-1">
                        <h6 class="mb-1 fw-bold">FAITHFULNESS</h6>
                        <p class="mb-0 small text-muted">The Unwavering Commitment</p>
                        <small class="text-primary fw-500 d-inline-block mt-2">
                            <i class="fas fa-arrow-right me-1"></i> Discover More
                        </small>
                    </div>
                    <!-- Indicator -->
                    <div class="value-nav-indicator flex-shrink-0">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>





                    <!-- Values Content -->
                    <div class="col-xl-7 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="tab-content">
                            <!-- Value 1: Love -->
                            <div id="collapseOne" class="tab-pane fade show p-0 active">
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/love.jpg')}}" class="img-fluid rounded" alt="Love">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-3">The Motivational Engine</h3>
                                        <p class="lh-lg mb-4">
                                            This is the selfless, unconditional Agape love of God, which serves as the foundation and motivation for every action. It is not merely an emotion but a deliberate choice to seek the highest good for others, mirroring Christ's sacrifice. This value transforms every act of service from mere charity into divine ministry.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Value 2: Truth -->
                            <div id="collapseTwo" class="tab-pane fade show p-0">
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/truth.jpg')}}" class="img-fluid rounded" alt="Truth">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-3">The Unshakable Foundation</h3>
                                        <p class="lh-lg mb-4">
                                            This encompasses both personal integrity and the unwavering commitment to the truth of the Gospel. It is the bedrock upon which trust is built and the message we proclaim. This value ensures credibility and consistency in both word and deed.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Value 3: Stewardship -->
                            <div id="collapseThree" class="tab-pane fade show p-0">
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/steward.jpg')}}" class="img-fluid rounded" alt="Stewardship">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-3">The Sacred Trust</h3>
                                        <p class="lh-lg mb-4">
                                            Recognizing that every resource financial, material, human, and spiritual is a sacred trust from God. We are not owners but managers, accountable to Him for how these resources are utilized. This value governs our operational and financial integrity.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Value 4: Faithfulness -->
                            <div id="collapseFour" class="tab-pane fade show p-0">
                                <div class="row g-4 align-items-center">
                                    <div class="col-md-6">
                                        <img src="{{asset('assets/images/faith.jpg')}}" class="img-fluid rounded" alt="Faithfulness">
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-3">The Unwavering Commitment</h3>
                                        <p class="lh-lg mb-4">
                                            This is unwavering loyalty and reliability in fulfilling the God-given mandate, regardless of circumstances, challenges, or the scale of the task. It is rooted in the faithful character of God Himself.  This value ensures long-term impact and reliability.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Core Values Section End -->

        <!-- Statistics Section Start -->
        <div class="container-fluid statistics py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0. 2s" style="max-width: 800px;">
                    <h4 class="text-primary text-uppercase fw-bold">Our Impact</h4>
                    <h1 class="display-5 mb-4">By The Numbers</h1>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="stat-card bg-light rounded p-4 text-center h-100">
                            <div class="stat-icon mb-3">
                                <i class="fas fa-graduation-cap fa-3x text-primary"></i>
                            </div>
                            <h3 class="display-6 text-primary fw-bold">15+</h3>
                            <p class="mb-0">Students Sponsored</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="stat-card bg-light rounded p-4 text-center h-100">
                            <div class="stat-icon mb-3">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <h3 class="display-6 text-primary fw-bold">100+</h3>
                            <p class="mb-0">Lives Impacted</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0. 6s">
                        <div class="stat-card bg-light rounded p-4 text-center h-100">
                            <div class="stat-icon mb-3">
                                <i class="fas fa-map-marker-alt fa-3x text-primary"></i>
                            </div>
                            <h3 class="display-6 text-primary fw-bold">50</h3>
                            <p class="mb-0">Communities Served</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="stat-card bg-light rounded p-4 text-center h-100">
                            <div class="stat-icon mb-3">
                                <i class="fas fa-heart fa-3x text-primary"></i>
                            </div>
                            <h3 class="display-6 text-primary fw-bold">100%</h3>
                            <p class="mb-0">God's Love in Action</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Statistics Section End -->

        <!-- Testimonials Section Start -->
    <div class="container-fluid testimonial py-5 bg-light">
        <div class="container py-5">
            <!-- Section Header -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary text-uppercase fw-bold">Testimonials</h4>
                <h1 class="display-5 mb-4">Our Reviews</h1>
                <p class="mb-0 lh-lg">
                    Witness the transformative power of God's love through the voices of those whose lives have been touched and nations that are being changed.
                </p>
            </div>

            <!-- Testimonials Carousel -->
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <!-- Testimonial 1 -->
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x text-primary"></i>
                    </div>
                    <div class="testimonial-img text-center mb-3">
                        <img src="assets/images/annette.jpg" class="img-fluid rounded-circle" alt="Annette" style="width: 80px; height: 80px;">
                    </div>
                    <div class="testimonial-text mb-3">
                        <p>
                            "As a widow, I lost all hope of providing for my children. The Women of Destiny program taught me how to sew and run a small business. The seed capital they gave me was a miracle, but the greater miracle was the restoration of my dignity. I am no longer a burden; I am a business owner and a pillar for my family. This program made me a kingmaker in my own home, and for that, I give all glory to God."
                        </p>
                    </div>
                    <div class="testimonial-title mb-3">
                        <div class="mb-2">
                            <h5 class="mb-0">Annette</h5>
                            <small class="text-muted">Program Beneficiary</small>
                        </div>
                        <div class="d-flex text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x text-primary"></i>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x text-primary"></i>
                    </div>
                    <div class="testimonial-img text-center mb-3">
                        <img src="assets/images/elder.jpg" class="img-fluid rounded-circle" alt="Elder John" style="width: 80px; height: 80px;">
                    </div>
                    <div class="testimonial-text mb-3">
                        <p>
                            "When the Lending To Nations team came with their dental camp, they brought more than medical expertise they brought the tangible love of Christ. Many here live with chronic tooth pain, unable to afford treatment. They not only relieved our physical suffering but prayed with us, showing a compassion that touched our spirits. They truly make you feel seen and valued by Heaven."
                        </p>
                    </div>
                    <div class="testimonial-title mb-3">
                        <div class="mb-2">
                            <h5 class="mb-0">Elder John Wanyana</h5>
                            <small class="text-muted">Community Leader</small>
                        </div>
                        <div class="d-flex text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x text-primary"></i>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x text-primary"></i>
                    </div>
                    <div class="testimonial-img text-center mb-3">
                        <img src="assets/images/sarah.jpg" class="img-fluid rounded-circle" alt="Sarah K" style="width: 80px; height: 80px;">
                    </div>
                    <div class="testimonial-text mb-3">
                        <p>
                            "When they came to our village, they brought food for our bodies and the Word for our souls. I received a care package for my children, but I also received prayer that broke a years-long burden of despair. Lending To Nations understands that a person is both body and spirit. They didn't just hand out goods and leave; they stayed, they laughed with us, and made us feel like family. This holistic love has ignited a new hope in our entire community."
                        </p>
                    </div>
                    <div class="testimonial-title mb-3">
                        <div class="mb-2">
                            <h5 class="mb-0">Sarah K</h5>
                            <small class="text-muted">Guardian of a Sponsored Student</small>
                        </div>
                        <div class="d-flex text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x text-primary"></i>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-item">
                    <div class="testimonial-quote-left">
                        <i class="fas fa-quote-left fa-2x text-primary"></i>
                    </div>
                    <div class="testimonial-img text-center mb-3">
                        <img src="assets/images/mariah.jpg" class="img-fluid rounded-circle" alt="Mariah K" style="width: 80px; height: 80px;">
                    </div>
                    <div class="testimonial-text mb-3">
                        <p>
                            "Before Lending To Nations, my grandson's future was a closed book. I struggled to even afford his school uniform. But their Education for Destiny program didn't just pay his fees; they invested in his destiny. They provided books, a mentor, and most importantly, the unwavering belief that he could become a leader. He now dreams of being a doctor, and for the first time, I believe it's possible.  This isn't just charity; it's a divine investment in a future king."
                        </p>
                    </div>
                    <div class="testimonial-title mb-3">
                        <div class="mb-2">
                            <h5 class="mb-0">Mariah K</h5>
                            <small class="text-muted">Grandmother & Beneficiary</small>
                        </div>
                        <div class="d-flex text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-quote-right">
                        <i class="fas fa-quote-right fa-2x text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
        <!-- Testimonials Section End -->

        <!-- Call to Action Section Start -->
        <div class="container-fluid cta py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0. 2s">
                        <h4 class="text-primary text-uppercase fw-bold mb-3">Ready to Make a Difference?</h4>
                        <h2 class="display-5 mb-4">Join Us in Transforming Nations</h2>
                        <p class="mb-0 lh-lg fs-5">
                            Whether through volunteering, donating, or praying, there's a meaningful role for you in our mission to make nations better. Every contribution, no matter how small, creates eternal impact.
                        </p>
                    </div>
                    <div class="col-lg-4 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="d-flex flex-column gap-3">
                            <a href="{{route('getinvolved')}}" class="btn btn-primary btn-lg rounded-pill py-3" role="button">
                                <i class="fas fa-hands-helping me-2"></i> Get Involved
                            </a>
                            <a href="{{route('donate')}}" class="btn btn-outline-primary btn-lg rounded-pill py-3" role="button">
                                <i class="fas fa-heart me-2"></i> Make a Donation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action Section End -->

        @include('partials.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>

        <style>
            /* Service Items Hover Effect */
            .service-item,
            .feature-item,
            .stat-card {
                transition: all 0.3s ease;
            }

            .service-item:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 40px rgba(0, 123, 255, 0.15) !important;
            }

            .feature-item:hover {
                transform: translateX(8px);
                box-shadow: 0 10px 30px rgba(0, 123, 255, 0.2) !important;
            }

            .stat-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
            }

            /* Service Icon */
            .service-icon {
                border-radius: 50px 50px 0 0;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
            }

            /* Accordion Link Active State */
            .accordion-link {
                background-color: transparent;
                border: 2px solid #e0e0e0;
                transition: all 0.3s ease;
            }

            .accordion-link:hover {
                border-color: #007bff;
                background-color: #f8f9ff;
            }

            . accordion-link.active {
                background-color: #007bff;
                border-color: #007bff;
                color: white;
            }

            . accordion-link.active . text-muted {
                color: rgba(255, 255, 255, 0.8) !important;
            }

            /* Testimonial Styles */
            .testimonial-item {
                background-color: white;
                padding: 40px 30px;
                border-radius: 10px;
                text-align: center;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0. 08);
                transition: all 0.3s ease;
            }

            .testimonial-item:hover {
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
                transform: translateY(-5px);
            }

            .testimonial-quote-left,
            .testimonial-quote-right {
                opacity: 0. 2;
            }

            /* Responsive Adjustments */
            @media (max-width: 992px) {
                .display-4 {
                    font-size: 2.5rem;
                }

                .display-5 {
                    font-size: 2rem;
                }

                .display-6 {
                    font-size: 1.5rem;
                }
            }

            @media (max-width: 768px) {
                .carousel-caption h1 {
                    font-size: 2rem;
                }

                .carousel-caption p {
                    font-size: 1rem;
                }

                .feature-item {
                    margin-bottom: 1rem;
                }
            }

            @media (max-width: 576px) {
                .display-4 {
                    font-size: 1.8rem;
                }

                .display-5 {
                    font-size: 1.5rem;
                }

                .testimonial-item {
                    padding: 25px 20px;
                }

                . d-flex.flex-column. gap-3 {
                    gap: 1rem ! important;
                }
            }

            /* General Improvements */
            .transition {
                transition: all 0. 3s ease;
            }

            .lh-lg {
                line-height: 1.8;
            }

            .border-start.border-5 {
                border-width: 5px ! important;
            }

            /* Smooth Scroll Behavior */
            html {
                scroll-behavior: smooth;
            }
        </style>

    </body>

</html>