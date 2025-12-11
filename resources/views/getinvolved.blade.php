<!DOCTYPE html>
<html lang="en">

    @include('partials.header')

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading... </span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0. 1s">Get Involved</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Get Involved</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Get Involved Introduction Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="position-relative rounded overflow-hidden">
                            <img src="{{asset('assets/images/faith.jpg')}}" class="img-fluid rounded w-100" alt="Get Involved">
                            <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                <h4 class="text-white mb-0">Be Part of the Solution</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Get Involved Info -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="involved-content">
                            <h4 class="text-primary mb-3">Join Our Movement</h4>
                            <h1 class="display-5 mb-4">There's a Role for Everyone</h1>
                            <p class="mb-4">
                                Whether you have time, talent, resources, or passion, there are countless ways to join Lending To Nations in transforming lives and building God's kingdom. 
                                Your unique contribution can create lasting impact in communities in need.
                            </p>
                            
                            <div class="bg-light rounded p-4">
                                <h5 class="mb-3 text-primary">Ways to Make a Difference</h5>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-heart fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Financial Support</h6>
                                        <small class="text-muted">Donate one-time or become a monthly partner</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-handshake fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Volunteer Your Time</h6>
                                        <small class="text-muted">Dedicate hours to serve communities</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-brain fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Share Your Skills</h6>
                                        <small class="text-muted">Use your expertise to create impact</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-users fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Build Partnerships</h6>
                                        <small class="text-muted">Connect organizations and resources</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Get Involved Introduction Section End -->

        <!-- Ways to Get Involved Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Multiple Opportunities</h4>
                    <h1 class="display-6 mb-4">Choose Your Path to Impact</h1>
                </div>

                <div class="row g-4">
                    <!-- Donors -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="involved-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-hand-holding-heart fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Financial Partners</h4>
                                <p class="text-muted mb-4">
                                    Your financial gifts directly transform lives. Every contribution, no matter the size, creates meaningful change.
                                </p>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-3">Giving Options:</h6>
                                   
                                </div>
                                <a href="{{route('donate')}}" class="btn btn-primary btn-sm rounded-pill">
                                    <i class="fas fa-heart me-2"></i> Donate Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Volunteers -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="involved-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-people-carry fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Volunteers</h4>
                                <p class="text-muted mb-4">
                                    Give your time and energy to directly serve communities. Meaningful work that touches lives and builds lasting relationships.
                                </p>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-3">Volunteer Roles:</h6>
                                   
                                </div>
                                <a href="#volunteerForm" class="btn btn-primary btn-sm rounded-pill">
                                    <i class="fas fa-user-tie me-2"></i> Volunteer
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Professionals -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="involved-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-briefcase fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Professionals & Experts</h4>
                                <p class="text-muted mb-4">
                                    Share your professional skills and expertise. Mentorship and specialized knowledge accelerate our mission.
                                </p>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-3">Expert Areas:</h6>
                                   
                                </div>
                                <a href="#partnerForm" class="btn btn-primary btn-sm rounded-pill">
                                    <i class="fas fa-handshake me-2"></i> Partner With Us
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Advocates -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="involved-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-bullhorn fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Advocates & Ambassadors</h4>
                                <p class="text-muted mb-4">
                                    Spread the word about our mission.  Your voice can inspire others to join this transformation movement.
                                </p>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-3">What You'll Do:</h6>
                                   
                                </div>
                                <a href="#advocateForm" class="btn btn-primary btn-sm rounded-pill">
                                    <i class="fas fa-share-alt me-2"></i> Become Ambassador
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Corporate Partners -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="involved-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-users fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Corporate Partners</h4>
                                <p class="text-muted mb-4">
                                    Partner your organization with us for CSR initiatives, employee volunteering, and sustained community impact.
                                </p>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-3">Partnership Types:</h6>
                                   
                                </div>
                                <a href="#corporateForm" class="btn btn-primary btn-sm rounded-pill">
                                    <i class="fas fa-handshake me-2"></i> Corporate Info
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Prayer Warriors -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="involved-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-church fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Prayer Partners</h4>
                                <p class="text-muted mb-4">
                                    Intercede for our work and the communities we serve. Spiritual support is the foundation of everything we do.
                                </p>
                                <div class="mb-4">
                                    <h6 class="text-primary mb-3">Prayer Focus:</h6>
                                </div>
                                <a href="#prayerForm" class="btn btn-primary btn-sm rounded-pill">
                                    <i class="fas fa-envelope me-2"></i> Join Prayer Team
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ways to Get Involved Section End -->

      

        <!-- Benefits of Getting Involved Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Rewards of Service</h4>
                    <h1 class="display-6 mb-4">What You'll Gain</h1>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="benefit-card text-center rounded p-4 h-100">
                            <i class="fas fa-heart fa-3x text-primary mb-3"></i>
                            <h5 class="mb-3">Personal Fulfillment</h5>
                            <p class="text-muted">Experience the deep satisfaction of making a real difference in people's lives and communities.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="benefit-card text-center rounded p-4 h-100">
                            <i class="fas fa-users fa-3x text-primary mb-3"></i>
                            <h5 class="mb-3">Build Connections</h5>
                            <p class="text-muted">Connect with like-minded people who share your passion for social impact and change.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="benefit-card text-center rounded p-4 h-100">
                            <i class="fas fa-certificate fa-3x text-primary mb-3"></i>
                            <h5 class="mb-3">Skill Development</h5>
                            <p class="text-muted">Develop new skills and gain valuable experience through hands-on involvement in projects.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="benefit-card text-center rounded p-4 h-100">
                            <i class="fas fa-award fa-3x text-primary mb-3"></i>
                            <h5 class="mb-3">Recognition</h5>
                            <p class="text-muted">Get recognized for your contributions through certificates, appreciation events, and public recognition.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="benefit-card text-center rounded p-4 h-100">
                            <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                            <h5 class="mb-3">Learning Opportunities</h5>
                            <p class="text-muted">Access training programs and workshops to enhance your knowledge and professional growth.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="benefit-card text-center rounded p-4 h-100">
                            <i class="fas fa-leaf fa-3x text-primary mb-3"></i>
                            <h5 class="mb-3">Legacy Building</h5>
                            <p class="text-muted">Leave a lasting legacy of positive change that impacts generations to come.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Benefits of Getting Involved Section End -->

        <!-- Testimonials Section Start -->
        <div class="container-fluid bg-primary py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-white">Volunteer Stories</h4>
                    <h1 class="display-6 text-white mb-4">From Our Team Members</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="testimonial-card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('assets/images/user.png')}}" class="rounded-circle me-3" style="width: 60px; height: 60px;" alt="Testimonial">
                                <div>
                                    <h5 class="mb-0">Catherine M.</h5>
                                    <small class="text-muted">Education Volunteer</small>
                                </div>
                            </div>
                            <p class="mb-0">
                                "Tutoring here has transformed my view of what it means to serve. Seeing students grow academically and personally is incredibly rewarding.  I've found my calling!"
                            </p>
                            <div class="text-warning mt-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="testimonial-card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('assets/images/user.png')}}" class="rounded-circle me-3" style="width: 60px; height: 60px;" alt="Testimonial">
                                <div>
                                    <h5 class="mb-0">Dr. James K.</h5>
                                    <small class="text-muted">Medical Professional</small>
                                </div>
                            </div>
                            <p class="mb-0">
                                "As a professional, I'm proud to contribute my medical skills. The team is well-organized and truly committed to serving with excellence and integrity."
                            </p>
                            <div class="text-warning mt-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="testimonial-card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('assets/images/user.png')}}" class="rounded-circle me-3" style="width: 60px; height: 60px;" alt="Testimonial">
                                <div>
                                    <h5 class="mb-0">Ruth N.</h5>
                                    <small class="text-muted">Corporate Ambassador</small>
                                </div>
                            </div>
                            <p class="mb-0">
                                "Our company's CSR partnership here has energized our team.  Employees are more motivated and proud knowing we're creating real impact together."
                            </p>
                            <div class="text-warning mt-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials Section End -->

       

        <!-- Final CTA Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary mb-3">Ready to Make an Impact?</h4>
                        <h2 class="mb-4">Your Journey of Service Starts Here</h2>
                        <p class="mb-0">
                            Don't wait to become part of something bigger. Whether through volunteering, donating, sharing skills, or praying, 
                            there's a meaningful role for you in our mission to transform nations. Take the first step today!
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end wow fadeInRight" data-wow-delay="0.2s">
                        <div class="d-flex flex-column gap-3">
                            <a href="#volunteerForm" class="btn btn-primary btn-lg rounded-pill py-3">
                                <i class="fas fa-user-tie me-2"></i> Start as Volunteer
                            </a>
                            <a href="{{route('donate')}}" class="btn btn-outline-primary btn-lg rounded-pill py-3">
                                <i class="fas fa-heart me-2"></i> Make Donation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final CTA Section End -->

        @include('partials.footer')
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        

    </body>

</html>