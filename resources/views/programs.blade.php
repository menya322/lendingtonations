
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
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Programs</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Programs</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        


        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Programs</h4>
                    <h1 class="display-5 mb-4">We Services provided best offer</h1>
                    <p class="mb-0"> Our Programs are purposeful expressions of love designed to educate, uplift, equip, heal, and spiritually empower individuals and communities. 
                    Each program is a doorway through which hope is delivered and destinies are restored.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets/images/education.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Education Sponsorship Initiative</a>
                                <p class="mb-4">Our foundational project focuses on breaking the cycle of generational poverty through education. 
                                    We identify promising but disadvantaged children orphans, rural students, and those from extreme poverty and support them with school fees,
                                     uniforms, scholastic materials, transport, and emotional/spiritual mentorship.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets/images/food.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Basic Needs & Family Support Drive</a>
                                <p class="mb-4">Through this project, we provide essential items food staples, soap, clothing, bedding, medical needs, and emergency support to families facing hardship.
This project is especially vital during seasonal famine, disease outbreaks, or economic downturns. We respond quickly and lovingly 
ensuring no child goes hungry, no family sleeps on a cold floor, and no widow is forgotten.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets/images/gospel.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Gospel Outreach & Discipleship Missions</a>
                                <p class="mb-4">Beyond physical assistance, we minister life to the soul. Through street outreaches, youth fellowships, village missions, church partnerships, prayer gatherings, 
                                    and discipleship programs we bring the message of Jesus to communities hungry for hope.

This project transforms hearts, heals emotional wounds, and restores identity. Our mission is not just to preach 
but to disciple, mentor, and anchor people in the truth of the Gospel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets/images/prayer.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Orphanage Partnership & Community Care Network</a>
                                <p class="mb-4">Rather than building separate isolated programs, we believe in strengthening existing ministries. We work alongside orphanages, local churches, and established care institutions becoming partners, encouragers, and supporters.
                              This community network model spreads impact wider and faster. Together, we create a collaborative family of compassion workers ministries helping ministries, believers supporting believers,
                              and hands joining hands to heal brokenness.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets/images/women.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Women of Hope Empowerment Initiative</a>
                                <p class="mb-4">This program focuses on uplifting vulnerable women widows, single mothers, and young women from disadvantaged backgrounds. We support them with emotional encouragement, life skills training, spiritual mentorship, and small scale 
                                    opportunities that build self-reliance.
                  We believe that when a woman is empowered, she becomes a foundation for her family, her community, and future generations.
                  Through this initiative, we restore dignity, strengthen identity, and help women rise again with hope.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{asset('assets/images/crisis.jpg')}}" class="img-fluid rounded-top w-100" alt="Image">
                            </div>
                            <div class="rounded-bottom p-4">
                                <a href="#" class="h4 d-inline-block mb-4">Emergency Response & Crisis Relief Program</a>
                                <p class="mb-4">When unexpected hardships strike such as natural disasters, family crises, accidents, fire outbreaks, or sudden loss we mobilize quickly to provide urgent assistance. This includes food relief, temporary shelter needs, medical aid, counseling, and prayer support.
                               This project ensures that no family faces tragedy alone we stand with them in their darkest hour, demonstrating the compassion of Christ through rapid, practical help.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

      <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-5 mb-4">Our Reviews</h1>
                    <p class="mb-0">Witness the transformative power of God's love through the voices of those whose lives have been touched and nations that are being changed
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/ltn6.jpg')}}" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">"As a widow, I lost all hope of providing for my children. The Women of Destiny program taught me how to sew and run a small business. The seed capital they gave me was a miracle, but the greater miracle was the restoration of my dignity. I am no longer a burden; I am a business owner and a pillar for my family.
                                 This program made me a kingmaker in my own home, and for that, I give all glory to God"
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Zipporah</h4>
                                <p class="mb-0"> Program Beneficiary</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/ltn10.jpg')}}" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">When the Lending To Nations team came with their dental camp, they brought more than medical expertise they brought the tangible love of Christ. Many here live with chronic tooth pain, unable to afford treatment. They not only relieved our physical suffering but prayed with us, showing a compassion that touched our spirits. Through the food packages and medical care, we have seen God's outstretched arm in our community. 
                                They truly make you feel seen and valued by Heaven
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Elder Charles Menya</h4>
                                <p class="mb-0">Community Leader in a Served Village</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/ltn7.jpg')}}" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">When they came to our village, they brought food for our bodies and the Word for our souls. I received a care package for my children, but I also received prayer that broke a years-long burden of despair. Lending To Nations understands that a person is both body and spirit. They didn't just hand out goods and leave; they stayed, they laughed with us, and made us feel like family. 
                                his holistic love has ignited a new hope in our entire community.
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Nalule Jane</h4>
                                <p class="mb-0">Guardian of a Sponsored Student</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-quote-left">
                            <i class="fas fa-quote-left fa-2x"></i>
                        </div>
                        <div class="testimonial-img">
                            <img src="{{asset('assets/images/ltn9.jpg')}}" class="img-fluid" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p class="mb-0">"Before Lending To Nations, my son's future was a closed book. I struggled to even afford his 
                                school uniform. But their Education for Destiny program didn't just pay his fees; they invested in his destiny. They provided books, a mentor, and most importantly, the unwavering belief that he could become a leader. He now dreams of being a doctor, and for the first time, I believe it's possible.
                                 This isn't just charity; it's a divine investment in a future king
                            </p>
                        </div>
                        <div class="testimonial-title">
                            <div>
                                <h4 class="mb-0">Obore Raphael </h4>
                                <p class="mb-0">Mother and Outreach Beneficiary</p>
                            </div>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                        <div class="testimonial-quote-right">
                            <i class="fas fa-quote-right fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Impact Numbers Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container text-center">
        <h4 class="text-primary mb-3">Our Impact So Far</h4>
        <p class="mb-4">By the grace of God and through generous hearts, we have been able to make a real difference in communities and families.</p>
        <div class="row g-4">
            <div class="col-md-3">
                <i class="fas fa-people-carry fa-3x text-primary mb-3"></i>
                <h1 class="text-primary">120+</h1>
                <p>Families supported with food & essentials</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-graduation-cap fa-3x text-primary mb-3"></i>
                <h1 class="text-primary">50+</h1>
                <p>Children equipped with school materials</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-bible fa-3x text-primary mb-3"></i>
                <h1 class="text-primary">200+</h1>
                <p>Individuals reached with Gospel outreach</p>
            </div>
            <div class="col-md-3">
                <i class="fas fa-stethoscope fa-3x text-primary mb-3"></i>
                <h1 class="text-primary">70+</h1>
                <p>Dental & medical services provided</p>
            </div>
        </div>
    </div>
</div>
<!-- Impact Numbers End -->



<!-- Volunteer Invitation Start -->
<div class="container-fluid py-5">
    <div class="container text-center">
        <h4 class="text-primary">Join Our Serving Family</h4>
        <h2 class="mb-4">Become a Volunteer</h2>
        <p class="mb-4" style="max-width: 800px; margin: auto;">
            You can be part of something bigger than yourself. Whether it’s your time, prayer, skills, or physical service, 
            your involvement becomes a channel of blessing to those in need. We welcome youth, professionals, ministries, and anyone willing to serve with love.
        </p>
        <a href="#" class="btn btn-primary px-4 py-2">Sign Up to Volunteer</a>
        <form action="{{ route('volunteer.submit') }}" method="POST" class="row g-3 mt-4" style="max-width: 700px; margin:auto;">
    @csrf
    <div class="col-md-6">
        <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
    </div>
    <div class="col-md-6">
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
    </div>
    <div class="col-md-6">
        <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
    </div>
    <div class="col-md-6">
        <select name="interest" class="form-control" required>
            <option value="">Where do you want to serve?</option>
            <option>Children & Education</option>
            <option>Medical & Dental Camps</option>
            <option>Gospel Outreach</option>
            <option>Logistics & Distribution</option>
            <option>Women Empowerment</option>
            <option>General Volunteering</option>
        </select>
    </div>
    <div class="col-12">
        <textarea name="message" class="form-control" rows="3" placeholder="Briefly share your heart or motivation"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary px-4 py-2">Submit Volunteer Request</button>
    </div>
</form>

    </div>
</div>
<!-- Volunteer Invitation End -->


<!-- Partner With Us Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container text-center">
        <h4 class="text-primary">Partnership & Sponsorship</h4>
        <h2 class="mb-4">Become a Kingdom Partner</h2>
        <p class="mb-4" style="max-width: 800px; margin: auto;">
            Whether you are an individual, church, business, or organization your partnership multiplies the impact of every project. 
            Together we can reach more children, support more families, and expand the kingdom footprint of love and compassion.
        </p>
        <a href="#" class="btn btn-primary px-4 py-2 me-2">Sponsor a Program</a>
        <a href="#" class="btn btn-outline-primary px-4 py-2">Donate</a>
    </div>
</div>
<!-- Partner With Us End -->


<!-- Closing Declaration Start -->
<div class="container-fluid py-5">
    <div class="container text-center">
        <h3 class="text-primary mb-3">We Are Lending To Nations</h3>
        <h2 class="mb-4">We Are Making Nations Better</h2>
        <p class="mb-4" style="max-width: 800px; margin: auto;">
            “Truly I tell you, whatever you did for one of the least of these brothers and sisters of mine,  
            you did for me.” Matthew 25:40
        </p>
    </div>
</div>
<!-- Closing Declaration End -->

    
@include('partials.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

       
    </body>

</html>