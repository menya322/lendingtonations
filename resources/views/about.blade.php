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
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">About</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                        <div>
                            <h4 class="text-primary">About Us</h4>
                            <h1 class="display-5 mb-4">About Our Organisation</h1>
                            <p class="mb-4">
                                Lending To Nations is a sacred initiative, born not of human ambition but from divine revelation. It exists as a dedicated ministry, serving as the outstretched arm of God to extend tangible kindness and eternal hope to nations. The vision was sovereignly imparted to our founder, Dr. Tumusiime Paul, during a profound moment of meditation with the Holy Spirit on February 5th, 2025. 
                                This was not merely the marking of a 26th birthday, but a definitive commissioning a heavenly blueprint for a work of compassion and truth.
                            </p>
                            <p>
                                Our work is guided by a singular, powerful vision: To make nations better by manifesting the truth of the Gospel. This vision is realized through our mission to extend compassion to all nations. We understand that the Gospel is both spoken and demonstrated; it is a message proclaimed
                                 from the pulpit and a love made real through school fees for the destitute, nourishing food for the hungry, and healing for the sick.
</p>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Our Leadership</h4>
                                            <p>Guided by divine wisdom and surrounded by a movement of minded young men and women who delight in serving the Lord, Dr. Tumusiime Paul leads with a heart aligned to God's purpose. Our team represents the next generation of kingdom builders, 
                                                united by a common vision to see nations transformed through the power of the Gospel made manifest.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <div class="d-flex">
                                        <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                        <div class="ms-4">
                                            <h4>Our Foundation</h4>
                                            <p>Founded in 2025, our ministry was born from a divine encounter and continues to grow through faithful stewardship. We are committed to being vessels of God's love, bringing hope and transformation to communities across nations.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="bg-primary rounded position-relative overflow-hidden">
                            <img src="{{asset('assets/images/about.jpg')}}" class="img-fluid rounded w-100" alt="Lending To Nations Ministry">
                            <div class="rounded-bottom">
                                <img src="{{asset('assets/images/donation.jpg')}}" class="img-fluid rounded-bottom w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Vision, Mission & Values Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">What We Stand For</div>
                    <h1 class="display-6 mb-5">Learn More About What We Do And Get Involved</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5 rounded shadow-sm">
                            <img class="img-fluid mb-4" src="{{asset('assets/images/vision.png')}}" alt="Vision Icon" style="max-width: 80px;">
                            <h4 class="mb-3">Our Vision</h4>
                            <p class="mb-4">To make nations better by manifesting the truth of the Gospel through acts of love, compassion, and practical service to humanity.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5 rounded shadow-sm">
                            <img class="img-fluid mb-4" src="{{asset('assets/images/target.png')}}" alt="Mission Icon" style="max-width: 80px;">
                            <h4 class="mb-3">Our Mission</h4>
                            <p class="mb-4">To extend compassion to all nations, reaching the forgotten, marginalized, and less privileged with the tangible love of Christ.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5 rounded shadow-sm">
                            <img class="img-fluid mb-4" src="{{asset('assets/images/value.png')}}" alt="Core Values Icon" style="max-width: 80px;">
                            <h4 class="mb-3">Our Core Values</h4>
                            <div class="text-start px-3">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Love</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Truth</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Stewardship</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Faithfulness</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Give God All the Glory</li>
                                    <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Integrity</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision, Mission & Values End -->

<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
            <h4 class="text-primary">Our Team</h4>
            <h1 class="display-5 mb-4">CEO/DIRECTOR</h1>
            <p class="mb-0">We are more than just volunteers; we are a spiritual family and a covenant community, handpicked and guided under 
                 the visionary leadership of Dr. Tumusiime Paul. Each member brings unique gifts,
                  skills, and a burning commitment to be the hands and feet of Jesus in practical service.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('assets/images/paul.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">Dr Tumusiime Paul</h4>
                        <p class="mb-0">CEO/FOUNDER</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Our Story/Journey Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-img">
                            <img src="{{asset('assets/images/journey.jpg')}}" class="img-fluid rounded w-100" alt="Our Journey">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <h4 class="text-primary">Our Journey</h4>
                        <h1 class="display-6 mb-4">How It All Began</h1>
                        <p class="mb-4">
                            On February 5th, 2025, during a moment of deep communion with the Holy Spirit, Dr. Tumusiime Paul received a divine mandate. What started as a whisper in the secret place has grown into a movement touching lives across nations.
                        </p>
                        <p class="mb-4">
                            From a single seed of faith, God has assembled a movement passionate young men and women, each carrying their own testimony of God's call. Together, we have committed to being channels of His love, reaching communities that often feel forgotten by the world but are never forgotten by God.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Divine Calling</h5>
                                        <small>Born from prayer and vision</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Kingdom Impact</h5>
                                        <small>Transforming nations with love</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Story/Journey End -->

        <!-- Impact/Statistics Start -->
        <div class="container-fluid bg-primary py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-white">Our Impact</h4>
                    <h1 class="display-5 text-white mb-4">Making A Difference Together</h1>
                    <p class="text-white mb-0">Through God's grace and your partnership, we are extending His love to communities in need.</p>
                </div>
                <div class="row g-4 text-center">
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-item text-white">
                            <i class="fas fa-users fa-3x mb-3"></i>
                            <h2 class="text-white mb-2"><span class="counter" data-count="20">20</span>+</h2>
                            <p class="text-white mb-0">Dedicated Team Members</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-item text-white">
                            <i class="fas fa-globe fa-3x mb-3"></i>
                            <h2 class="text-white mb-2"><span class="counter" data-count="5">2</span>+</h2>
                            <p class="text-white mb-0">Nations Reached</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="counter-item text-white">
                            <i class="fas fa-hand-holding-heart fa-3x mb-3"></i>
                            <h2 class="text-white mb-2"><span class="counter" data-count="100">50</span>+</h2>
                            <p class="text-white mb-0">Lives Impacted</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="counter-item text-white">
                            <i class="fas fa-heart fa-3x mb-3"></i>
                            <h2 class="text-white mb-2"><span class="counter" data-count="15">4</span>+</h2>
                            <p class="text-white mb-0">Active Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Impact/Statistics End -->

        <!-- What We Believe Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Our Beliefs</h4>
                    <h1 class="display-6 mb-4">What We Stand On</h1>
                    <p class="mb-0">Our ministry is built on the solid foundation of biblical truth and unwavering faith in Jesus Christ.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="belief-item p-4 rounded shadow-sm h-100">
                            <i class="fas fa-bible fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">The Gospel Truth</h4>
                            <p class="mb-0">We believe in the transforming power of the Gospel of Jesus Christ and that faith without works is dead. Our actions demonstrate God's love made tangible in the world.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="belief-item p-4 rounded shadow-sm h-100">
                            <i class="fas fa-praying-hands fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Prayer & Guidance</h4>
                            <p class="mb-0">Every initiative begins in the secret place of prayer. We believe the Holy Spirit guides our steps and directs our paths to those who need His touch most.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="belief-item p-4 rounded shadow-sm h-100">
                            <i class="fas fa-hands-helping fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Compassionate Action</h4>
                            <p class="mb-0">We are called to be doers of the Word. Our ministry extends beyond words to practical demonstrations of God's love through service, support, and sacrifice.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="belief-item p-4 rounded shadow-sm h-100">
                            <i class="fas fa-crown fa-3x text-primary mb-3"></i>
                            <h4 class="mb-3">Kingdom Mindset</h4>
                            <p class="mb-0">We are kingdom builders focused on eternal impact. Every act of service is seed sown for God's kingdom to be established on earth as it is in heaven.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- What We Believe End -->

        <!-- Call To Action Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary">Join Our Mission</h4>
                        <h1 class="display-6 mb-4">Be Part of Something Greater</h1>
                        <p class="mb-4">
                            God is calling more laborers into the harvest. Whether through volunteering, partnership, or prayer support, you can be part of this movement to transform nations with the love of Christ.
                        </p>
                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-volunteer fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Volunteer</h5>
                                        <small>Join our team</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-donate fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Partner</h5>
                                        <small>Support our work</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-pray fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Pray</h5>
                                        <small>Intercede with us</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-share-alt fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Share</h5>
                                        <small>Spread the word</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/contact')}}" class="btn btn-primary rounded-pill py-3 px-5">Get Involved Today</a>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <img src="{{asset('assets/images/involved.jpg')}}" class="img-fluid rounded" alt="Get Involved">
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->

        @include('partials.footer')
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    </body>

</html>