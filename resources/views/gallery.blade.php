<! DOCTYPE html>
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
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Gallery</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Gallery</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Gallery Introduction Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="position-relative rounded overflow-hidden">
                            <img src="{{asset('assets/images/leader.jpg')}}" class="img-fluid rounded w-100" alt="Gallery Showcase">
                            <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                <h4 class="text-white mb-0">Capturing Moments of Transformation</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Info -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="gallery-content">
                            <h4 class="text-primary mb-3">Visual Stories</h4>
                            <h1 class="display-5 mb-4">A Picture is Worth a Thousand Words</h1>
                            <p class="mb-4">
                                Walk through our gallery and witness the remarkable transformations happening in communities across nations. These images capture the essence of hope, 
                                resilience, and the power of collective action. Each photo tells a story of lives changed and futures brightened.
                            </p>
                            
                            <div class="bg-light rounded p-4">
                                <h5 class="mb-3 text-primary">Gallery Categories</h5>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-images fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Education Programs</h6>
                                        <small class="text-muted">Students learning, school events, and academic achievements</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-images fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Community Outreach</h6>
                                        <small class="text-muted">Healthcare drives, feeding programs, and community events</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-images fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Leadership Development</h6>
                                        <small class="text-muted">Training programs, mentorship sessions, and youth forums</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-images fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Events & Crusades</h6>
                                        <small class="text-muted">Spiritual events, community gatherings, and celebrations</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Introduction Section End -->

        <!-- Gallery Filter Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Photo Collection</h4>
                    <h1 class="display-6 mb-4">Browse Our Moments</h1>
                    <p class="mb-0">Filter by category to see specific areas of our work and impact</p>
                </div>

                <!-- Filter Buttons -->
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <button class="btn btn-primary btn-sm rounded-pill me-2 mb-2 filter-btn active" data-filter="all">
                        <i class="fas fa-th me-2"></i> All
                    </button>
                    <button class="btn btn-outline-primary btn-sm rounded-pill me-2 mb-2 filter-btn" data-filter="education">
                        <i class="fas fa-graduation-cap me-2"></i> Education
                    </button>
                    <button class="btn btn-outline-primary btn-sm rounded-pill me-2 mb-2 filter-btn" data-filter="community">
                        <i class="fas fa-hands-helping me-2"></i> Community
                    </button>
                    <button class="btn btn-outline-primary btn-sm rounded-pill me-2 mb-2 filter-btn" data-filter="leadership">
                        <i class="fas fa-crown me-2"></i> Leadership
                    </button>
                    <button class="btn btn-outline-primary btn-sm rounded-pill mb-2 filter-btn" data-filter="events">
                        <i class="fas fa-calendar-alt me-2"></i> Events
                    </button>
                </div>

                <!-- Gallery Grid -->
                <div class="row g-4" id="galleryGrid">
                    
                    <!-- Education Gallery Items -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="education" data-wow-delay="0.2s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/classroom.jpg')}}" data-title="Classroom Learning" data-desc="Students engaged in their studies">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/classroom.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Education">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Classroom Learning</h6>
                                <small class="text-muted">Education Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="education" data-wow-delay="0.3s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/reading.jpg')}}" data-title="Reading Program" data-desc="Literacy development initiative">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/reading.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Education">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Reading Program</h6>
                                <small class="text-muted">Education Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="education" data-wow-delay="0.4s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/supplies.jpg')}}" data-title="School Supplies" data-desc="Providing educational resources">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/supplies.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Education">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">School Supplies</h6>
                                <small class="text-muted">Education Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="education" data-wow-delay="0.5s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/gallery-education-4.jpg')}}" data-title="School Graduation" data-desc="Celebrating academic achievements">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/gallery-education-4.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Education">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">School Graduation</h6>
                                <small class="text-muted">Education Program</small>
                            </div>
                        </div>
                    </div>

                    <!-- Community Gallery Items -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="community" data-wow-delay="0.2s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/health.jpg')}}" data-title="Healthcare Drive" data-desc="Medical outreach program">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/health.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Community">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Healthcare Drive</h6>
                                <small class="text-muted">Community Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="community" data-wow-delay="0. 3s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/children.jpg')}}" data-title="Food Distribution" data-desc="Feeding vulnerable families">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/about.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Community">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Food Distribution</h6>
                                <small class="text-muted">Community Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="community" data-wow-delay="0.4s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/gallery-community-3.jpg')}}" data-title="Community Gathering" data-desc="Bringing communities together">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/education.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Community">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Community Gathering</h6>
                                <small class="text-muted">Community Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="community" data-wow-delay="0. 5s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/food.jpg')}}" data-title="Water Project" data-desc="Clean water initiative">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/surgeon.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Community">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Water Project</h6>
                                <small class="text-muted">Community Program</small>
                            </div>
                        </div>
                    </div>

                    <!-- Leadership Gallery Items -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="leadership" data-wow-delay="0.2s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/gallery-leadership-1.jpg')}}" data-title="Leadership Training" data-desc="Developing young leaders">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/children.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Leadership">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Leadership Training</h6>
                                <small class="text-muted">Leadership Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="leadership" data-wow-delay="0.3s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/relief.jpg')}}" data-title="Mentorship Session" data-desc="One-on-one mentoring">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/needy.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Leadership">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Mentorship Session</h6>
                                <small class="text-muted">Leadership Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="leadership" data-wow-delay="0.4s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/workshop.jpg')}}" data-title="Skill Workshop" data-desc="Equipping leaders with skills">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/workshop.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Leadership">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Skill Workshop</h6>
                                <small class="text-muted">Leadership Program</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="leadership" data-wow-delay="0.5s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/youth.jpg')}}" data-title="Youth Forum" data-desc="Youth development forum">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/youth.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Leadership">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Youth Forum</h6>
                                <small class="text-muted">Leadership Program</small>
                            </div>
                        </div>
                    </div>

                    <!-- Events Gallery Items -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="events" data-wow-delay="0.2s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/gallery-events-1.jpg')}}" data-title="Evangelistic Crusade" data-desc="Gospel outreach event">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/gallery-events-1.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Events">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Evangelistic Crusade</h6>
                                <small class="text-muted">Events & Outreach</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="events" data-wow-delay="0.3s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/gallery-events-2.jpg')}}" data-title="Community Celebration" data-desc="Celebrating together">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/gallery-events-2.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Events">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Community Celebration</h6>
                                <small class="text-muted">Events & Outreach</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="events" data-wow-delay="0.4s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/gallery-events-3.jpg')}}" data-title="Team Activity" data-desc="Team building event">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/gallery-events-3.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Events">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Team Activity</h6>
                                <small class="text-muted">Events & Outreach</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp gallery-item" data-filter="events" data-wow-delay="0.5s">
                        <div class="gallery-card rounded overflow-hidden shadow-sm h-100 cursor-pointer" data-bs-toggle="modal" data-bs-target="#galleryModal" data-image="{{asset('assets/images/gallery-events-4. jpg')}}" data-title="Partnership Event" data-desc="Partner appreciation event">
                            <div class="gallery-image position-relative overflow-hidden" style="height: 250px;">
                                <img src="{{asset('assets/images/gallery-events-4.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Events">
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <i class="fas fa-search-plus fa-3x text-white"></i>
                                </div>
                            </div>
                            <div class="p-3">
                                <h6 class="mb-1">Partnership Event</h6>
                                <small class="text-muted">Events & Outreach</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Gallery Filter Section End -->

        <!-- Gallery Modal Start -->
        <div class="modal fade" id="galleryModal" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content border-0">
                    <div class="modal-header bg-primary border-0">
                        <h5 class="modal-title text-white"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-0">
                        <img id="modalImage" src="" class="w-100" alt="Gallery Image" style="max-height: 500px; object-fit: cover;">
                    </div>
                    <div class="modal-footer bg-light border-top">
                        <p class="mb-0" id="modalDescription"></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Modal End -->

        <!-- Video Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Video Testimonials</h4>
                    <h1 class="display-6 mb-4">Stories in Motion</h1>
                    <p class="mb-0">Watch real stories of transformation from people whose lives have been changed</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="video-card rounded overflow-hidden shadow-sm h-100">
                            <div class="video-wrapper position-relative" style="height: 250px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);">
                                <img src="{{asset('assets/images/video-thumbnail-1.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Video">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play-circle fa-4x text-white" style="cursor: pointer; opacity: 0.9;"></i>
                                </div>
                            </div>
                            <div class="p-4">
                                <h6 class="mb-2">Grace's Journey</h6>
                                <small class="text-muted">From Street to School</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="video-card rounded overflow-hidden shadow-sm h-100">
                            <div class="video-wrapper position-relative" style="height: 250px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);">
                                <img src="{{asset('assets/images/video-thumbnail-2.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Video">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play-circle fa-4x text-white" style="cursor: pointer; opacity: 0.9;"></i>
                                </div>
                            </div>
                            <div class="p-4">
                                <h6 class="mb-2">Community Impact</h6>
                                <small class="text-muted">Healthcare Initiative</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="video-card rounded overflow-hidden shadow-sm h-100">
                            <div class="video-wrapper position-relative" style="height: 250px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);">
                                <img src="{{asset('assets/images/video-thumbnail-3.jpg')}}" class="w-100 h-100" style="object-fit: cover;" alt="Video">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play-circle fa-4x text-white" style="cursor: pointer; opacity: 0.9;"></i>
                                </div>
                            </div>
                            <div class="p-4">
                                <h6 class="mb-2">Leadership Stories</h6>
                                <small class="text-muted">Creating Future Leaders</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Section End -->


        <!-- Share & Download Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary mb-3">Share Our Story</h4>
                        <h2 class="mb-4">Help Us Spread the Message of Hope</h2>
                        <p class="mb-4">
                            Have been blessed by these images? Share them on social media to spread the message of hope and transformation. 
                            Help us reach more people and inspire them to be part of this incredible journey.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#" class="btn btn-primary btn-lg rounded-pill">
                                <i class="fab fa-facebook-f me-2"></i> Share on Facebook
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg rounded-pill">
                                <i class="fab fa-twitter me-2"></i> Share on Twitter
                            </a>
                            <a href="#" class="btn btn-outline-primary btn-lg rounded-pill">
                                <i class="fab fa-instagram me-2"></i> Follow on Instagram
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-center wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-light rounded p-5 text-center">
                            <i class="fas fa-images fa-5x text-primary mb-3"></i>
                            <h5 class="mb-3">Download Collection</h5>
                            <p class="text-muted mb-4">Download high-resolution images for your publications and presentations</p>
                            <a href="#" class="btn btn-primary btn-sm rounded-pill">
                                <i class="fas fa-download me-2"></i> Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Share & Download Section End -->

        @include('partials.footer')
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <style>
            /* Gallery Card Styles */
            .gallery-card {
                cursor: pointer;
                transition: all 0.3s ease;
            }

            .gallery-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15) !important;
            }

            .gallery-card:hover .gallery-overlay {
                opacity: 1;
                backdrop-filter: blur(3px);
            }

            . gallery-image {
                position: relative;
                overflow: hidden;
                background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            }

            .gallery-overlay {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 123, 255, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                opacity: 0;
                transition: all 0.3s ease;
            }

            /* Filter Button Styles */
            .filter-btn {
                transition: all 0.3s ease;
                font-weight: 500;
            }

            .filter-btn.active {
                background-color: #007bff !important;
                color: white;
                transform: scale(1.05);
            }

            .filter-btn:hover {
                transform: translateY(-2px);
            }

            /* Gallery Grid Animation */
            .gallery-item {
                animation: fadeInUp 0.5s ease forwards;
            }

            .gallery-item. hidden {
                display: none;
                opacity: 0;
            }

            /* Video Card Styles */
            .video-card {
                transition: all 0.3s ease;
            }

            .video-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15) !important;
            }

            .video-wrapper {
                position: relative;
                cursor: pointer;
            }

            .video-wrapper:hover i {
                transform: scale(1.2);
                opacity: 1;
            }

            .video-wrapper i {
                transition: all 0.3s ease;
                opacity: 0.8;
            }

            /* Collection Card Styles */
            .collection-card {
                transition: all 0.3s ease;
                cursor: pointer;
            }

            .collection-card:hover {
                transform: scale(1.05);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0. 2) !important;
            }

            .collection-image {
                transition: all 0.3s ease;
            }

            .collection-card:hover .collection-image {
                filter: brightness(0.85);
            }

            /* Modal Styles */
            .modal-content {
                border-radius: 10px;
            }

            .modal-header {
                border-radius: 10px 10px 0 0;
            }

            /* Responsive Styles */
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

            @media (max-width: 768px) {
                . gallery-image {
                    height: 200px !important;
                }

                . collection-image {
                    height: 250px !important;
                }

                .filter-btn {
                    font-size: 0.85rem;
                    padding: 0.4rem 0.8rem !important;
                }

                .display-4 {
                    font-size: 2rem;
                }

                . display-5 {
                    font-size: 1.5rem;
                }

                . display-6 {
                    font-size: 1.3rem;
                }
            }

            @media (max-width: 576px) {
                .display-4 {
                    font-size: 1.5rem;
                }

                . display-5 {
                    font-size: 1.2rem;
                }

                .display-6 {
                    font-size: 1.1rem;
                }

                .gallery-image {
                    height: 180px !important;
                }

                .filter-btn {
                    font-size: 0.75rem;
                    padding: 0.3rem 0.6rem !important;
                    margin-bottom: 0.5rem ! important;
                }

                .filter-btn i {
                    display: none;
                }

                .btn-lg-square {
                    width: 45px;
                    height: 45px;
                }

                .btn-lg-square i {
                    font-size: 20px;
                }

                . d-flex.flex-wrap.gap-3 {
                    flex-direction: column;
                }

                .d-flex.flex-wrap.gap-3 .btn {
                    width: 100%;
                }
            }

            /* Gallery Filter Animation */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .counter {
                display: inline-block;
                animation: countUp 2s ease-in-out;
            }

            @keyframes countUp {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }

            /* Cursor Pointer */
            .cursor-pointer {
                cursor: pointer;
            }
        </style>

        <script>
            // Gallery Filter Functionality
            document.querySelectorAll('.filter-btn'). forEach(btn => {
                btn.addEventListener('click', function() {
                    const filter = this.getAttribute('data-filter');
                    
                    // Update active button
                    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    // Filter gallery items
                    document.querySelectorAll('.gallery-item').forEach(item => {
                        if (filter === 'all' || item.getAttribute('data-filter') === filter) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.classList.remove('hidden');
                            }, 10);
                        } else {
                            item.classList.add('hidden');
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Gallery Modal Functionality
            document.querySelectorAll('.gallery-card').forEach(card => {
                card.addEventListener('click', function() {
                    const image = this.getAttribute('data-image');
                    const title = this.getAttribute('data-title');
                    const desc = this.getAttribute('data-desc');
                    
                    document.getElementById('modalImage').src = image;
                    document.querySelector('.modal-title').textContent = title;
                    document.getElementById('modalDescription').textContent = desc;
                });
            });

            // Counter Animation
            function animateCounter() {
                const counters = document.querySelectorAll('.counter');
                counters. forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-target') || counter.textContent.replace(/\+|,/g, ''));
                    const increment = target / 100;
                    let current = 0;

                    const updateCount = () => {
                        if (current < target) {
                            current += increment;
                            counter.textContent = Math.ceil(current). toLocaleString();
                            setTimeout(updateCount, 20);
                        }
                    };
                    updateCount();
                });
            }

            // Trigger counter animation when page loads
            window.addEventListener('load', animateCounter);
        </script>

    </body>

</html>