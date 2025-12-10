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

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Impact</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Our Impact</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Impact Overview Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="position-relative rounded overflow-hidden">
                            <img src="{{asset('assets/images/impact.jpg')}}" class="img-fluid rounded w-100" alt="Our Impact">
                            <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                <h4 class="text-white mb-0">Transforming Nations, One Life at a Time</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Impact Info -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="impact-content">
                            <h4 class="text-primary mb-3">Our Mission in Action</h4>
                            <h1 class="display-5 mb-4">Real Lives, Real Change, Real Results</h1>
                            <p class="mb-4">
                                At Lending To Nations, we don't just talk about change we live it every day. From the classrooms where children discover their potential to the communities where hope is being restored, our work speaks volumes about what's possible when compassion meets action.
                            </p>
                            
                            <div class="bg-light rounded p-4">
                                <h5 class="mb-3 text-primary">Our Core Pillars</h5>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Education for Destiny</h6>
                                        <small class="text-muted">Empowering the next generation with knowledge and skills</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Basic Needs Provision</h6>
                                        <small class="text-muted">Ensuring every person has food, shelter, and care</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Gospel Evangelism</h6>
                                        <small class="text-muted">Spreading hope and healing through Christ's message</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Leadership Development</h6>
                                        <small class="text-muted">Creating leaders who will transform their communities</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Impact Overview Section End -->

        <!-- Key Statistics Section Start -->
        <div class="container-fluid bg-primary py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-white">By The Numbers</h4>
                    <h1 class="display-6 text-white mb-4">Our Reach and Impact</h1>
                </div>

                <div class="row g-4">
                    <!-- Statistic 1 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-4 text-primary fw-bold mb-2">
                                <span class="counter">100</span>+
                            </div>
                            <h5 class="mb-0">Students Sponsored</h5>
                            <small class="text-muted">And counting...</small>
                        </div>
                    </div>

                    <!-- Statistic 2 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-4 text-primary fw-bold mb-2">
                                <span class="counter">1000</span>+
                            </div>
                            <h5 class="mb-0">Lives Impacted</h5>
                            <small class="text-muted">Directly supported</small>
                        </div>
                    </div>

                    <!-- Statistic 3 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-4 text-primary fw-bold mb-2">
                                <span class="counter">47</span>
                            </div>
                            <h5 class="mb-0">Communities Served</h5>
                            <small class="text-muted">Across multiple regions</small>
                        </div>
                    </div>

                    <!-- Statistic 4 -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-4 text-primary fw-bold mb-2">
                                <span class="counter">98</span>%
                            </div>
                            <h5 class="mb-0">Fund Utilization</h5>
                            <small class="text-muted">Goes to programs</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Key Statistics Section End -->

        <!-- Program Impact Details Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Program Highlights</h4>
                    <h1 class="display-6 mb-4">Where We Make a Difference</h1>
                </div>

                <div class="row g-4">
                    <!-- Education Program -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="impact-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-book-open fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Education for Destiny</h4>
                                <p class="text-muted mb-3">
                                    We've sponsored over 100 students, providing school fees, uniforms, books, and supplies to ensure they can focus on learning.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 5,847 students sponsored</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i>school fee coverage</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> School supplies included</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Healthcare Program -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="impact-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-heartbeat fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Healthcare & Wellness</h4>
                                <p class="text-muted mb-3">
                                    Through medical outreaches, we've provided healthcare services to thousands, including free consultations and treatment.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 50+ medical consultations</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Free medication provided</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Prevention education programs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Community Support -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="impact-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-hands-helping fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Community Support</h4>
                                <p class="text-muted mb-3">
                                    We provide basic needs including food, clothing, and shelter to vulnerable families in underserved communities.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 50+ families assisted</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Monthly food provisions</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Shelter support programs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Spiritual Growth -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="impact-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-cross fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Gospel & Spiritual Growth</h4>
                                <p class="text-muted mb-3">
                                    We share the message of hope through Christ, conducting evangelistic crusades and spiritual mentoring programs.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 20+ crusades conducted</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 100+ salvations</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Discipleship programs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Leadership Development -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="impact-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-crown fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Leadership Development</h4>
                                <p class="text-muted mb-3">
                                    Training young leaders to become agents of change in their communities and nations. 
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 100+ leaders trained</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Mentorship programs</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Skills development</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Skill Training -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="impact-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="bg-light p-5 text-center">
                                <i class="fas fa-tools fa-4x text-primary mb-3"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="mb-3 text-primary">Vocational Training</h4>
                                <p class="text-muted mb-3">
                                    Equipping youth with practical skills for sustainable livelihoods and economic independence. 
                                </p>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 10+ trained</li>
                                    <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Employment support</li>
                                    <li><i class="fas fa-check text-primary me-2"></i> Business mentoring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Program Impact Details End -->

        <!-- Success Stories Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Stories of Transformation</h4>
                    <h1 class="display-6 mb-4">Meet Those We've Impacted</h1>
                </div>

                <div class="row g-4">
                    <!-- Story 1 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="story-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="story-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/donation.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Grace's Story">
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-primary">Education</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2">Grace's Second Chance</h5>
                                <p class="text-muted small mb-3">
                                    "I never thought I'd go to school. My family couldn't afford it.  Thanks to Lending To Nations, I'm now in Form 4 and dreaming of becoming a teacher."
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary p-2 me-3" style="width: 40px; height: 40px;"></div>
                                    <div>
                                        <h6 class="mb-0">Grace M.</h6>
                                        <small class="text-muted">16 years old</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Story 2 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="story-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="story-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/leader.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Joseph's Story">
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-primary">Leadership</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2">Joseph's Leadership Journey</h5>
                                <p class="text-muted small mb-3">
                                    "Through the mentorship program, I've grown from a street boy to a community leader. Now I'm helping others like myself find hope."
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary p-2 me-3" style="width: 40px; height: 40px;"></div>
                                    <div>
                                        <h6 class="mb-0">Joseph K.</h6>
                                        <small class="text-muted">24 years old</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Story 3 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="story-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="story-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/surgeon.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Mama Ruth's Story">
                                <div class="position-absolute top-0 end-0 m-3">
                                    <span class="badge bg-primary">Community</span>
                                </div>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-2">Mama Ruth's Transformation</h5>
                                <p class="text-muted small mb-3">
                                    "I was broken and hopeless until LTN found me. Now I have food for my children and hope in my heart again."
                                </p>
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-primary p-2 me-3" style="width: 40px; height: 40px;"></div>
                                    <div>
                                        <h6 class="mb-0">Ruth N.</h6>
                                        <small class="text-muted">42 years old</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Success Stories Section End -->

        <!-- Impact Timeline Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Our Journey</h4>
                    <h1 class="display-6 mb-4">Milestones of Impact</h1>
                </div>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- Timeline -->
                        <div class="timeline">
                            <!-- Timeline Item 1 -->
                            <div class="timeline-item wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content bg-light rounded p-4 mb-4">
                                    <h5 class="text-primary mb-2">2025 - Our Beginning</h5>
                                    <p class="mb-0">
                                        Lending To Nations was founded with a vision to transform nations. We started with a few students in a single community.
                                    </p>
                                </div>
                            </div>

                            <!-- Timeline Item 2 -->
                            <div class="timeline-item wow fadeInRight" data-wow-delay="0.2s">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content bg-light rounded p-4 mb-4">
                                    <h5 class="text-primary mb-2">Expansion</h5>
                                    <p class="mb-0">
                                        We expanded to 8 communities and launched our healthcare initiative, reaching over 2,000 people.
                                    </p>
                                </div>
                            </div>

                            <!-- Timeline Item 3 -->
                            <div class="timeline-item wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content bg-light rounded p-4 mb-4">
                                    <h5 class="text-primary mb-2">Crisis Response</h5>
                                    <p class="mb-0">
                                        During the pandemic, we pivoted to support vulnerable communities with food and essential supplies, assisting 100+ families.
                                    </p>
                                </div>
                            </div>

                            <!-- Timeline Item 4 -->
                            <div class="timeline-item wow fadeInRight" data-wow-delay="0.4s">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content bg-light rounded p-4 mb-4">
                                    <h5 class="text-primary mb-2">Leadership Academy</h5>
                                    <p class="mb-0">
                                        Launched our Leadership Academy, training 250+ young people to become agents of change in their communities.
                                    </p>
                                </div>
                            </div>

                            <!-- Timeline Item 5 -->
                            <div class="timeline-item wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="timeline-marker bg-primary"></div>
                                <div class="timeline-content bg-light rounded p-4">
                                    <h5 class="text-primary mb-2">Today & Beyond</h5>
                                    <p class="mb-0">
                                        We're now impacting 50+ lives across communities with ambitious plans to reach even more nations with hope and transformation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Impact Timeline Section End -->

        <!-- Impact Metrics Section Start -->
        <div class="container-fluid bg-primary py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-white">Accountability & Transparency</h4>
                    <h1 class="display-6 text-white mb-4">How We Use Your Resources</h1>
                </div>

                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="bg-white rounded p-4">
                            <h5 class="text-primary mb-4">Fund Allocation</h5>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Education Programs</span>
                                    <strong class="text-primary">45%</strong>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" style="width: 45%;"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Healthcare & Wellness</span>
                                    <strong class="text-primary">20%</strong>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" style="width: 20%;"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Community Support</span>
                                    <strong class="text-primary">18%</strong>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" style="width: 18%;"></div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Leadership Development</span>
                                    <strong class="text-primary">12%</strong>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" style="width: 12%;"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Gospel & Evangelism</span>
                                    <strong class="text-primary">5%</strong>
                                </div>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar" style="width: 5%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="bg-white rounded p-4">
                            <h5 class="text-primary mb-4">Key Performance Indicators</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="d-flex align-items-center">
                                        <i class="fas fa-check-circle text-primary me-3"></i>
                                        Student Completion Rate
                                    </span>
                                    <strong>94%</strong>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="d-flex align-items-center">
                                        <i class="fas fa-check-circle text-primary me-3"></i>
                                        Family Stability Index
                                    </span>
                                    <strong>87%</strong>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="d-flex align-items-center">
                                        <i class="fas fa-check-circle text-primary me-3"></i>
                                        Healthcare Access
                                    </span>
                                    <strong>91%</strong>
                                </li>
                                <li class="mb-3 d-flex justify-content-between">
                                    <span class="d-flex align-items-center">
                                        <i class="fas fa-check-circle text-primary me-3"></i>
                                        Community Satisfaction
                                    </span>
                                    <strong>96%</strong>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <span class="d-flex align-items-center">
                                        <i class="fas fa-check-circle text-primary me-3"></i>
                                        Leader Engagement
                                    </span>
                                    <strong>89%</strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Impact Metrics Section End -->

        <!-- Call to Action Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary mb-3">Join Us in This Mission</h4>
                        <h2 class="mb-4">Be Part of Something Greater</h2>
                        <p class="mb-0">
                            Every story of transformation began with someone who believed in the power of giving.  Your partnership, no matter the size, 
                            contributes to this incredible journey of hope and change. Together, we're not just changing lives we're transforming nations.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end wow fadeInRight" data-wow-delay="0.2s">
                        <a href="{{route('donate')}}" class="btn btn-primary btn-lg rounded-pill py-3 px-5">
                            <i class="fas fa-heart me-2"></i> Support Our Mission
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action Section End -->

        <!-- Partner Testimonials Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">What Partners Say</h4>
                    <h1 class="display-6 mb-4">Voices of Support</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="testimonial-card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('assets/images/ltn11.jpg')}}" class="rounded-circle me-3" style="width: 60px; height: 60px;" alt="Testimonial">
                                <div>
                                    <h5 class="mb-0">Chief Kangira</h5>
                                    <small class="text-muted">Community Leader</small>
                                </div>
                            </div>
                            <p class="mb-0">
                                "Lending To Nations has brought genuine transformation to our village. From education to healthcare, their impact is visible 
                                in every home.  We are grateful for their dedication to our people."
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
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="testimonial-card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('assets/images/ltn12.jpg')}}" class="rounded-circle me-3" style="width: 60px; height: 60px;" alt="Testimonial">
                                <div>
                                    <h5 class="mb-0">Dr. Samuel</h5>
                                    <small class="text-muted">Healthcare Partner</small>
                                </div>
                            </div>
                            <p class="mb-0">
                                "Working with LTN on healthcare initiatives has shown me the power of coordinated compassion. They don't just provide 
                                services; they build lasting relationships and real health outcomes."
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
        <!-- Partner Testimonials End -->

       

        @include('partials.footer')
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <style>
            .impact-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 123, 255, 0.15) !important;
            }

            .transition {
                transition: all 0. 3s ease;
            }

            .counter {
                display: inline-block;
            }

            .timeline {
                position: relative;
                padding: 20px 0;
            }

            .timeline-item {
                display: flex;
                margin-bottom: 30px;
                position: relative;
            }

            .timeline-item:nth-child(even) .timeline-content {
                margin-left: auto;
            }

            .timeline-marker {
                width: 30px;
                height: 30px;
                border-radius: 50%;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                border: 4px solid #fff;
                box-shadow: 0 0 0 4px #007bff;
            }

            .timeline-item:nth-child(even) . timeline-marker {
                left: 50%;
            }

            .timeline-content {
                width: 45%;
                padding: 20px 30px;
            }

            @media (max-width: 768px) {
                .timeline-item {
                    flex-direction: column;
                }

                .timeline-marker {
                    left: 0 !important;
                    transform: translateX(-50%);
                }

                .timeline-content {
                    width: 100%;
                    margin-left: 0 !important;
                    margin-top: 30px;
                    margin-left: 40px;
                }

                .timeline-item:nth-child(even) .timeline-marker {
                    left: 0;
                }
            }

            .story-image {
                background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            }

            .story-card {
                transition: all 0.3s ease;
            }

            .story-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1) !important;
            }

            /* Responsive improvements */
            @media (max-width: 992px) {
                .display-4 {
                    font-size: 2.5rem;
                }

                .display-5 {
                    font-size: 2rem;
                }

                .display-6 {
                    font-size: 1.8rem;
                }
            }

            @media (max-width: 576px) {
                .display-4 {
                    font-size: 2rem;
                }

                .display-5 {
                    font-size: 1.5rem;
                }

                .display-6 {
                    font-size: 1.3rem;
                }

                .btn-lg-square {
                    width: 45px;
                    height: 45px;
                }

                .btn-lg-square i {
                    font-size: 20px;
                }
            }

            /* Progress bar styling */
            .progress {
                background-color: #f0f0f0;
            }

            .progress-bar {
                background-color: #007bff;
                transition: width 0.6s ease;
            }

            /* Animation for counter */
            @keyframes countUp {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            .counter {
                animation: countUp 2s ease-in-out;
            }
        </style>

    </body>

</html>