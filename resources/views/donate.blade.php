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
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Partner With Us</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Donate</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Donate Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="position-relative rounded overflow-hidden">
                            <img src="{{asset('assets/images/donation.jpg')}}" class="img-fluid rounded w-100" alt="Make a Difference">
                            <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                <h4 class="text-white mb-0">Your Gift Transforms Lives</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Donation Info -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="donation-content">
                            <h4 class="text-primary mb-3">Make A Difference Today</h4>
                            <h1 class="display-5 mb-4">Be God's Outstretched Arm to the Nations</h1>
                            <p class="mb-4">
                                Your partnership enables us to extend further, reach deeper, and impact more lives for God's glory. Every seed sown becomes a harvest of hope, transformation, and eternal impact.
                            </p>
                            
                            <div class="bg-light rounded p-4 mb-4">
                                <h5 class="mb-3 text-primary">Where Your Donation Goes</h5>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-graduation-cap fa-2x text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Education for Destiny</h6>
                                        <small class="text-muted">Sponsoring students and providing school requirements</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-hands-helping fa-2x text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Basic Needs Provision</h6>
                                        <small class="text-muted">Food, shelter, clothing, and medical services</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-bible fa-2x text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Gospel Evangelism</h6>
                                        <small class="text-muted">Spreading the good news of Jesus Christ</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-crown fa-2x text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Leadership Development</h6>
                                        <small class="text-muted">Making kings out of them - mentorship programs</small>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-primary" role="alert">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>100% of your donation</strong> goes directly to program activities. Administrative costs are covered separately.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate Section End -->

        <!-- Donation Methods Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Ways to Give</h4>
                    <h1 class="display-6 mb-4">Choose Your Giving Method</h1>
                    <p class="mb-0">We've made it easy for you to partner with us in transforming nations. Select the method that works best for you.</p>
                </div>

                <div class="row g-4 justify-content-center">
                    <!-- Bank Transfer -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="donation-method-card text-center p-5 bg-white rounded shadow-sm h-100">
                            <div class="icon-box mb-4">
                                <i class="fas fa-university fa-4x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Bank Transfer</h4>
                            <p class="text-muted mb-4">Direct bank deposit for secure and convenient giving</p>
                            <div class="bank-details text-start bg-light p-4 rounded">
                                <p class="mb-2"><strong>Bank Name:</strong> Stanbic Bank</p>
                                <p class="mb-2"><strong>Account Name:</strong> Lending To Nations</p>
                                <p class="mb-2"><strong>Account Number:</strong> 1234567890</p>
                                <p class="mb-0"><strong>Swift Code:</strong> XXXXX</p>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Money -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="donation-method-card text-center p-5 bg-white rounded shadow-sm h-100">
                            <div class="icon-box mb-4">
                                <i class="fas fa-mobile-alt fa-4x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Mobile Money</h4>
                            <p class="text-muted mb-4">Quick and easy donations via mobile money</p>
                            <div class="mobile-details text-start bg-light p-4 rounded">
                                <p class="mb-2"><strong>MTN Merchant Code:</strong></p>
                                <p class="mb-3 fs-5 text-primary">486641</p>
                                <p class="mb-2"><strong>Mtn  Mobile Money:</strong></p>
                                <p class="mb-0 fs-5 text-primary">+256 784 524 705</p>
                            </div>
                        </div>
                    </div>

                    <!-- Online Platforms -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="donation-method-card text-center p-5 bg-white rounded shadow-sm h-100">
                            <div class="icon-box mb-4">
                                <i class="fas fa-credit-card fa-4x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Online Payment</h4>
                            <p class="text-muted mb-4">Secure online donations via card or PayPal</p>
                            <div class="payment-buttons">
                                <button class="btn btn-primary btn-lg w-100 mb-3 rounded-pill">
                                    <i class="fab fa-paypal me-2"></i> PayPal
                                </button>
                                <button class="btn btn-outline-primary btn-lg w-100 rounded-pill">
                                    <i class="fas fa-credit-card me-2"></i> Credit/Debit Card
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donation Methods End -->

        <!-- Impact Statement Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- Donation Info -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary mb-3">Your Impact</h4>
                        <h1 class="display-6 mb-4">See How Your Gift Makes a Difference</h1>
                        <p class="mb-4">
                            Every donation, regardless of size, has eternal significance. When you give to Lending To Nations, you're not just 
                            supporting programs you're partnering with God to transform destinies and build His kingdom on earth.
                        </p>
                        
                        <div class="impact-examples">
                            <div class="d-flex align-items-start mb-4">
                                <div class="bg-primary rounded-circle p-3 me-3" style="width: 60px; height: 60px;">
                                </div>
                                <div>
                                    <h5 class="mb-1">Feed a Family for a Month</h5>
                                    <p class="text-muted mb-0">Provides essential food supplies to a vulnerable household</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="bg-primary rounded-circle p-3 me-3" style="width: 60px; height: 60px;">
                                </div>
                                <div>
                                    <h5 class="mb-1">Sponsor a Child's Education</h5>
                                    <p class="text-muted mb-0">Covers school fees and requirements for one term</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="bg-primary rounded-circle p-3 me-3" style="width: 60px; height: 60px;">
                                </div>
                                <div>
                                    <h5 class="mb-1">Support a Medical Outreach</h5>
                                    <p class="text-muted mb-0">Provides healthcare services to an entire community</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-light rounded p-4 mt-4">
                            <h6 class="text-primary mb-3">
                                <i class="fas fa-quote-left me-2"></i>
                                Remember This
                            </h6>
                            <p class="mb-0 fst-italic">
                                "Each of you should give what you have decided in your heart to give, not reluctantly or under compulsion, for God loves a cheerful giver." - 2 Corinthians 9:7
                            </p>
                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="position-relative rounded overflow-hidden">
                            <img src="{{asset('assets/images/godly.jpg')}}" class="img-fluid rounded w-100 shadow" alt="Impact of Donations">
                            <div class="position-absolute top-0 end-0 p-4">
                                <div class="bg-white rounded-circle p-4 shadow text-center" style="width: 120px; height: 120px;">
                                    <i class="fas fa-heart text-primary fa-3x"></i>
                                    <p class="mb-0 mt-2 small fw-bold">Give with Love</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Impact Statement End -->

        <!-- Testimonial Section Start -->
        <div class="container-fluid bg-primary py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-white">Donor Testimonials</h4>
                    <h1 class="display-6 text-white mb-4">What Our Partners Say</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="testimonial-card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('assets/img/user.png')}}" class="rounded-circle me-3" style="width: 60px; height: 60px;" alt="Donor">
                                <div>
                                    <h5 class="mb-0">Sarah M.</h5>
                                    <small class="text-muted">Monthly Partner</small>
                                </div>
                            </div>
                            <p class="mb-0">
                                "Supporting Lending To Nations has been one of the most fulfilling decisions I've made. Knowing that my monthly gift is helping children go to school and families receive hope is truly a blessing. I'm honored to be part of this divine movement."
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
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="testimonial-card bg-white rounded p-4">
                            <div class="d-flex align-items-center mb-3">
                                <img src="{{asset('assets/img/user.png')}}" class="rounded-circle me-3" style="width: 60px; height: 60px;" alt="Donor">
                                <div>
                                    <h5 class="mb-0">John D.</h5>
                                    <small class="text-muted">Corporate Partner</small>
                                </div>
                            </div>
                            <p class="mb-0">
                                "As a business owner, I wanted to invest in something with eternal value. Lending To Nations demonstrated complete transparency and Kingdom integrity. The impact reports show real lives being transformed. This is kingdom investment at its finest."
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
        <!-- Testimonial Section End -->

        <!-- FAQ Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Common Questions</h4>
                    <h1 class="display-6 mb-4">Frequently Asked Questions About Giving</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="accordion" id="donateAccordion">
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                        Is my donation tax-deductible?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#donateAccordion">
                                    <div class="accordion-body">
                                        Yes, Lending To Nations is a registered charitable organization. All donations are tax-deductible, and you will receive a receipt for your records.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                        How can I be sure my donation is being used effectively?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#donateAccordion">
                                    <div class="accordion-body">
                                        We maintain complete financial transparency and send regular impact reports to all our partners. You can also request to visit our projects and see firsthand how your gift is transforming lives.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                        Can I designate my gift to a specific program?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#donateAccordion">
                                    <div class="accordion-body">
                                        Absolutely! You can specify whether you want your donation to support education, basic needs, medical outreach, or any other specific program. Simply indicate your preference when making your donation.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                        Can I set up a recurring monthly donation?
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#donateAccordion">
                                    <div class="accordion-body">
                                        Yes! Monthly partnerships are highly encouraged as they help us plan and sustain long-term projects. Contact us to set up your recurring donation schedule.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Section End -->

        <!-- Contact CTA Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="text-primary mb-3">Have Questions?</h4>
                        <h2 class="mb-4">We're Here to Help You Give With Confidence</h2>
                        <p class="mb-0">
                            If you have any questions about donating, would like to discuss partnership opportunities, or want to learn more about specific projects, please don't hesitate to reach out. We'd love to connect with you.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end wow fadeInRight" data-wow-delay="0.2s">
                        <a href="{{route('contact')}}" class="btn btn-primary btn-lg rounded-pill py-3 px-5">
                            <i class="fas fa-phone-alt me-2"></i> Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact CTA End -->

        @include('partials.footer')
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    </body>

</html>