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
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Transparency</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Transparency</li>
                    </ol>    
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Transparency Introduction Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="position-relative rounded overflow-hidden">
                            <img src="{{asset('assets/images/transparency-hero.jpg')}}" class="img-fluid rounded w-100" alt="Our Transparency">
                            <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                <h4 class="text-white mb-0">Trust Through Accountability</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Transparency Info -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="transparency-content">
                            <h4 class="text-primary mb-3">Our Commitment</h4>
                            <h1 class="display-5 mb-4">Complete Transparency & Accountability</h1>
                            <p class="mb-4">
                                At Lending To Nations, we believe that transparency is the foundation of trust. We are committed to providing complete openness about how we operate, 
                                how we spend resources, and the impact we create. Your right to know how your contributions are used is paramount to us.
                            </p>
                            
                            <div class="bg-light rounded p-4">
                                <h5 class="mb-3 text-primary">Our Transparency Pillars</h5>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Financial Disclosure</h6>
                                        <small class="text-muted">Complete audited financial statements and regular reports</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Impact Reporting</h6>
                                        <small class="text-muted">Measurable outcomes and detailed project reports</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Governance</h6>
                                        <small class="text-muted">Board information, policies, and decision-making processes</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-check-circle fa-lg text-primary me-3 mt-1"></i>
                                    <div>
                                        <h6 class="mb-1">Open Communication</h6>
                                        <small class="text-muted">Regular updates, newsletters, and direct access to leadership</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Transparency Introduction Section End -->

        <!-- Financial Transparency Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Financial Accountability</h4>
                    <h1 class="display-6 mb-4">How We Manage Resources</h1>
                </div>

                <div class="row g-5">
                    <!-- Fund Allocation -->
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="financial-card bg-white rounded p-5 shadow-sm">
                            <h5 class="text-primary mb-4">
                                <i class="fas fa-chart-pie me-2"></i> Fund Allocation 2024
                            </h5>
                            
                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-500">Education Programs</span>
                                    <strong class="text-primary">45% ($567,000)</strong>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar" style="width: 45%;"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-500">Healthcare & Wellness</span>
                                    <strong class="text-primary">20% ($252,000)</strong>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar" style="width: 20%;"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-500">Community Support</span>
                                    <strong class="text-primary">18% ($226,800)</strong>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar" style="width: 18%;"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-500">Leadership Development</span>
                                    <strong class="text-primary">12% ($151,200)</strong>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar" style="width: 12%;"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-500">Gospel & Evangelism</span>
                                    <strong class="text-primary">5% ($63,000)</strong>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar" style="width: 5%;"></div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Total Program Spending</span>
                                <strong class="text-primary fs-5">$1,260,000 (100%)</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Operational Efficiency -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="efficiency-card bg-white rounded p-5 shadow-sm">
                            <h5 class="text-primary mb-4">
                                <i class="fas fa-percent me-2"></i> Operational Efficiency
                            </h5>

                            <div class="efficiency-box bg-light rounded p-4 mb-4">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="text-center">
                                            <div class="display-6 text-primary fw-bold mb-2">98%</div>
                                            <small class="text-muted">Program Spending</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center">
                                            <div class="display-6 text-primary fw-bold mb-2">2%</div>
                                            <small class="text-muted">Administrative</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h6 class="text-primary mb-3">Cost Breakdown</h6>
                            
                            <div class="mb-3 pb-3 border-bottom">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Salaries & Benefits</span>
                                    <strong>$18,900</strong>
                                </div>
                                <small class="text-muted">Lean management team</small>
                            </div>

                            <div class="mb-3 pb-3 border-bottom">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Operations & Facilities</span>
                                    <strong>$12,600</strong>
                                </div>
                                <small class="text-muted">Offices, utilities, equipment</small>
                            </div>

                            <div class="mb-3 pb-3 border-bottom">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Compliance & Audit</span>
                                    <strong>$6,300</strong>
                                </div>
                                <small class="text-muted">Legal, audits, licensing</small>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Total Administrative</span>
                                <strong class="text-primary">$37,800 (2%)</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Financial Transparency Section End -->

        <!-- Annual Reports Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Reports & Documents</h4>
                    <h1 class="display-6 mb-4">Download Our Documents</h1>
                    <p class="mb-0">Access our annual reports, audited financial statements, and impact reports</p>
                </div>

                <div class="row g-4">
                    <!-- 2024 Annual Report -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="report-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="report-header bg-primary p-4 text-white">
                                <i class="fas fa-file-pdf fa-3x mb-3"></i>
                                <h5 class="mb-0">2024 Annual Report</h5>
                            </div>
                            <div class="p-4">
                                <p class="text-muted mb-3">
                                    Comprehensive overview of our activities, achievements, and financial summary for 2024.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted"><i class="fas fa-calendar me-1"></i> Dec 2024</small>
                                    <small class="text-muted"><i class="fas fa-file me-1"></i> 24 pages</small>
                                </div>
                                <a href="{{asset('assets/documents/annual-report-2024.pdf')}}" class="btn btn-primary btn-sm rounded-pill w-100" target="_blank">
                                    <i class="fas fa-download me-2"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Audited Financial Statements 2024 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="report-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="report-header bg-primary p-4 text-white">
                                <i class="fas fa-file-invoice-dollar fa-3x mb-3"></i>
                                <h5 class="mb-0">Audited Financials 2024</h5>
                            </div>
                            <div class="p-4">
                                <p class="text-muted mb-3">
                                    Independently audited financial statements certified by a third-party auditor.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted"><i class="fas fa-calendar me-1"></i> Dec 2024</small>
                                    <small class="text-muted"><i class="fas fa-file me-1"></i> 18 pages</small>
                                </div>
                                <a href="{{asset('assets/documents/audited-financials-2024.pdf')}}" class="btn btn-primary btn-sm rounded-pill w-100" target="_blank">
                                    <i class="fas fa-download me-2"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Impact Report 2024 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="report-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="report-header bg-primary p-4 text-white">
                                <i class="fas fa-chart-bar fa-3x mb-3"></i>
                                <h5 class="mb-0">Impact Report 2024</h5>
                            </div>
                            <div class="p-4">
                                <p class="text-muted mb-3">
                                    Detailed metrics and outcomes from all our programs and community projects.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted"><i class="fas fa-calendar me-1"></i> Dec 2024</small>
                                    <small class="text-muted"><i class="fas fa-file me-1"></i> 32 pages</small>
                                </div>
                                <a href="{{asset('assets/documents/impact-report-2024. pdf')}}" class="btn btn-primary btn-sm rounded-pill w-100" target="_blank">
                                    <i class="fas fa-download me-2"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- 2023 Annual Report -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="report-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="report-header bg-primary p-4 text-white">
                                <i class="fas fa-file-pdf fa-3x mb-3"></i>
                                <h5 class="mb-0">2023 Annual Report</h5>
                            </div>
                            <div class="p-4">
                                <p class="text-muted mb-3">
                                    Previous year's comprehensive annual report and organizational summary.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted"><i class="fas fa-calendar me-1"></i> Dec 2023</small>
                                    <small class="text-muted"><i class="fas fa-file me-1"></i> 22 pages</small>
                                </div>
                                <a href="{{asset('assets/documents/annual-report-2023.pdf')}}" class="btn btn-primary btn-sm rounded-pill w-100" target="_blank">
                                    <i class="fas fa-download me-2"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Policies & Procedures -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="report-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="report-header bg-primary p-4 text-white">
                                <i class="fas fa-file-contract fa-3x mb-3"></i>
                                <h5 class="mb-0">Policies & Procedures</h5>
                            </div>
                            <div class="p-4">
                                <p class="text-muted mb-3">
                                    Our organizational policies including code of conduct and whistleblower policy.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted"><i class="fas fa-calendar me-1"></i> Updated 2024</small>
                                    <small class="text-muted"><i class="fas fa-file me-1"></i> 15 pages</small>
                                </div>
                                <a href="{{asset('assets/documents/policies-procedures.pdf')}}" class="btn btn-primary btn-sm rounded-pill w-100" target="_blank">
                                    <i class="fas fa-download me-2"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Governance Charter -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="report-card rounded overflow-hidden shadow-sm h-100 transition">
                            <div class="report-header bg-primary p-4 text-white">
                                <i class="fas fa-book fa-3x mb-3"></i>
                                <h5 class="mb-0">Governance Charter</h5>
                            </div>
                            <div class="p-4">
                                <p class="text-muted mb-3">
                                    Board governance structure, roles, and responsibilities documentation.
                                </p>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <small class="text-muted"><i class="fas fa-calendar me-1"></i> Updated 2024</small>
                                    <small class="text-muted"><i class="fas fa-file me-1"></i> 12 pages</small>
                                </div>
                                <a href="{{asset('assets/documents/governance-charter.pdf')}}" class="btn btn-primary btn-sm rounded-pill w-100" target="_blank">
                                    <i class="fas fa-download me-2"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Annual Reports Section End -->

        <!-- Board & Leadership Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Leadership</h4>
                    <h1 class="display-6 mb-4">Board & Executive Team</h1>
                </div>

                <div class="row g-4">
                    <!-- Board Chair -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="leader-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="leader-image bg-primary p-4 text-center" style="height: 200px;">
                                <i class="fas fa-user-circle fa-5x text-white"></i>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Rev. Samuel Kiprotich</h5>
                                <p class="text-primary mb-3"><small>Board Chair & Founder</small></p>
                                <p class="text-muted small mb-3">
                                    Visionary leader with 25+ years of experience in community development and spiritual leadership.
                                </p>
                                <div class="d-flex gap-2">
                                    <small class="badge bg-light text-dark">Leadership</small>
                                    <small class="badge bg-light text-dark">Vision</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Executive Director -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="leader-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="leader-image bg-primary p-4 text-center" style="height: 200px;">
                                <i class="fas fa-user-circle fa-5x text-white"></i>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Dr. Jane Ochieng</h5>
                                <p class="text-primary mb-3"><small>Executive Director</small></p>
                                <p class="text-muted small mb-3">
                                    Strategic leader with expertise in program management, fundraising, and organizational development.
                                </p>
                                <div class="d-flex gap-2">
                                    <small class="badge bg-light text-dark">Strategy</small>
                                    <small class="badge bg-light text-dark">Management</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Finance Officer -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="leader-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="leader-image bg-primary p-4 text-center" style="height: 200px;">
                                <i class="fas fa-user-circle fa-5x text-white"></i>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Mr. David Kipchoge</h5>
                                <p class="text-primary mb-3"><small>Finance Officer</small></p>
                                <p class="text-muted small mb-3">
                                    Certified accountant responsible for financial planning, audits, and fiscal accountability.
                                </p>
                                <div class="d-flex gap-2">
                                    <small class="badge bg-light text-dark">Finance</small>
                                    <small class="badge bg-light text-dark">Audits</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Board Member 1 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="leader-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="leader-image bg-primary p-4 text-center" style="height: 200px;">
                                <i class="fas fa-user-circle fa-5x text-white"></i>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Prof. Grace Mwangi</h5>
                                <p class="text-primary mb-3"><small>Board Member</small></p>
                                <p class="text-muted small mb-3">
                                    Education expert and university professor focused on program quality and impact assessment.
                                </p>
                                <div class="d-flex gap-2">
                                    <small class="badge bg-light text-dark">Education</small>
                                    <small class="badge bg-light text-dark">Quality</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Board Member 2 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="leader-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="leader-image bg-primary p-4 text-center" style="height: 200px;">
                                <i class="fas fa-user-circle fa-5x text-white"></i>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Dr. Peter Kimani</h5>
                                <p class="text-primary mb-3"><small>Board Member</small></p>
                                <p class="text-muted small mb-3">
                                    Healthcare professional responsible for health program oversight and medical partnerships.
                                </p>
                                <div class="d-flex gap-2">
                                    <small class="badge bg-light text-dark">Healthcare</small>
                                    <small class="badge bg-light text-dark">Medical</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Board Member 3 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="leader-card bg-white rounded overflow-hidden shadow-sm h-100">
                            <div class="leader-image bg-primary p-4 text-center" style="height: 200px;">
                                <i class="fas fa-user-circle fa-5x text-white"></i>
                            </div>
                            <div class="p-4">
                                <h5 class="mb-1">Mrs. Esther Kiprop</h5>
                                <p class="text-primary mb-3"><small>Board Member</small></p>
                                <p class="text-muted small mb-3">
                                    Community leader with deep roots in local areas, ensuring community representation and accountability.
                                </p>
                                <div class="d-flex gap-2">
                                    <small class="badge bg-light text-dark">Community</small>
                                    <small class="badge bg-light text-dark">Advocacy</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Board & Leadership Section End -->

        <!-- Certifications & Accreditations Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Recognition & Standards</h4>
                    <h1 class="display-6 mb-4">Certifications & Accreditations</h1>
                    <p class="mb-0">We maintain high standards and are recognized by leading organizations</p>
                </div>

                <div class="row g-4">
                    <!-- NGO Registration -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="certification-card bg-white rounded p-4 text-center shadow-sm h-100 transition">
                            <i class="fas fa-certificate fa-3x text-primary mb-3"></i>
                            <h6 class="mb-2">NGO Registration</h6>
                            <p class="text-muted small mb-3">Officially registered with government authorities</p>
                            <p class="text-primary small"><strong>Reg: NGO-2018-00547</strong></p>
                        </div>
                    </div>

                    <!-- Tax Exemption -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="certification-card bg-white rounded p-4 text-center shadow-sm h-100 transition">
                            <i class="fas fa-file-check fa-3x text-primary mb-3"></i>
                            <h6 class="mb-2">Tax Exemption</h6>
                            <p class="text-muted small mb-3">Recognized charitable organization with tax-exempt status</p>
                            <p class="text-primary small"><strong>EIN: 12-3456789</strong></p>
                        </div>
                    </div>

                    <!-- Financial Audit -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="certification-card bg-white rounded p-4 text-center shadow-sm h-100 transition">
                            <i class="fas fa-check-double fa-3x text-primary mb-3"></i>
                            <h6 class="mb-2">Annual Financial Audit</h6>
                            <p class="text-muted small mb-3">Independently audited by third-party auditors annually</p>
                            <p class="text-primary small"><strong>Auditor: AccountWise LLP</strong></p>
                        </div>
                    </div>

                    <!-- Charity Watchdog -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="certification-card bg-white rounded p-4 text-center shadow-sm h-100 transition">
                            <i class="fas fa-star fa-3x text-primary mb-3"></i>
                            <h6 class="mb-2">Charity Watchdog Rating</h6>
                            <p class="text-muted small mb-3">Highly rated by independent charity evaluators</p>
                            <p class="text-primary small"><strong>Rating: A+ (Excellent)</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Certifications & Accreditations Section End -->

        <!-- Key Metrics & Statistics Start -->
        <div class="container-fluid bg-primary py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-white">By The Numbers</h4>
                    <h1 class="display-6 text-white mb-4">Transparency Metrics</h1>
                </div>

                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-5 text-primary fw-bold mb-2">$1.3M+</div>
                            <h6 class="mb-0">Total Funds Managed</h6>
                            <small class="text-muted">2024 Budget</small>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-5 text-primary fw-bold mb-2">98%</div>
                            <h6 class="mb-0">Program Efficiency</h6>
                            <small class="text-muted">Money to programs</small>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-5 text-primary fw-bold mb-2">6</div>
                            <h6 class="mb-0">Board Members</h6>
                            <small class="text-muted">Diverse expertise</small>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="text-center p-4 bg-white rounded shadow-sm">
                            <div class="display-5 text-primary fw-bold mb-2">100%</div>
                            <h6 class="mb-0">Transparency</h6>
                            <small class="text-muted">Open communication</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Key Metrics & Statistics End -->

        <!-- Accountability Commitments Section Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Our Commitments</h4>
                    <h1 class="display-6 mb-4">Accountability Pledges</h1>
                </div>

                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="commitment-card bg-light rounded p-5 h-100">
                            <h5 class="text-primary mb-4">
                                <i class="fas fa-handshake me-2"></i> Our Commitments to You
                            </h5>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Financial Transparency</strong>
                                        <p class="text-muted small mb-0">Publish audited financial statements annually</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Impact Reporting</strong>
                                        <p class="text-muted small mb-0">Regular reports on program outcomes and community impact</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Open Communication</strong>
                                        <p class="text-muted small mb-0">Monthly newsletters and quarterly updates to all partners</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Governance Excellence</strong>
                                        <p class="text-muted small mb-0">Board oversight and adherence to best practices</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Whistleblower Protection</strong>
                                        <p class="text-muted small mb-0">Safe channels for reporting concerns and issues</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="commitment-card bg-light rounded p-5 h-100">
                            <h5 class="text-primary mb-4">
                                <i class="fas fa-shield-alt me-2"></i> Accountability Standards
                            </h5>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Conflict of Interest Policy</strong>
                                        <p class="text-muted small mb-0">Clear procedures for managing potential conflicts</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Code of Conduct</strong>
                                        <p class="text-muted small mb-0">All staff and board members adhere to ethical standards</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Document Access</strong>
                                        <p class="text-muted small mb-0">Public access to key organizational documents</p>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Feedback Mechanisms</strong>
                                        <p class="text-muted small mb-0">Regular feedback from communities and stakeholders</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check-circle text-primary me-3 mt-1"></i>
                                    <div>
                                        <strong>Continuous Improvement</strong>
                                        <p class="text-muted small mb-0">Regular review and enhancement of processes</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accountability Commitments Section End -->

        <!-- Contact & Questions Section Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                    <h4 class="text-primary">Questions?</h4>
                    <h1 class="display-6 mb-4">We're Here to Help</h1>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="contact-card bg-white rounded p-4 text-center h-100 shadow-sm">
                            <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                            <h6 class="mb-3">Email Us</h6>
                            <p class="text-muted mb-2">For transparency and accountability questions:</p>
                            <a href="mailto:transparency@lendingnations.org" class="text-primary fw-bold">transparency@lendingnations.org</a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="contact-card bg-white rounded p-4 text-center h-100 shadow-sm">
                            <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                            <h6 class="mb-3">Call Us</h6>
                            <p class="text-muted mb-2">Speak with our accountability team:</p>
                            <a href="tel:+256-700-123-456" class="text-primary fw-bold">+256 700 123 456</a>
                        </div>
                    </div>

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="contact-card bg-white rounded p-4 text-center h-100 shadow-sm">
                            <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                            <h6 class="mb-3">Visit Us</h6>
                            <p class="text-muted mb-2">Our office address:</p>
                            <p class="text-primary fw-bold">Plot 45, Industrial Area, Kampala, Uganda</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-8 offset-lg-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-white rounded p-5 shadow-sm">
                            <h5 class="text-primary mb-4">Report a Concern</h5>
                            <p class="text-muted mb-4">
                                We are committed to addressing any concerns about our operations, finances, or conduct. You can report anonymously through our secure whistleblower hotline.
                            </p>
                            <div class="alert alert-info mb-4">
                                <i class="fas fa-phone me-2"></i>
                                <strong>Whistleblower Hotline:</strong> +256 700 987 654 (Anonymous & Confidential)
                            </div>
                            <a href="{{route('contact')}}" class="btn btn-primary btn-lg rounded-pill">
                                <i class="fas fa-arrow-right me-2"></i> Contact Our Integrity Team
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact & Questions Section End -->

        @include('partials.footer')
        
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <style>
            /* Card Hover Effects */
            .report-card,
            .certification-card {
                transition: all 0.3s ease;
            }

            .report-card:hover,
            .certification-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 40px rgba(0, 123, 255, 0.15) !important;
            }

            .report-header {
                background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            }

            .leader-card {
                transition: all 0.3s ease;
            }

            .leader-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1) !important;
            }

            .commitment-card {
                border-left: 5px solid #007bff;
            }

            .contact-card {
                transition: all 0.3s ease;
            }

            .contact-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
            }

            /* Progress Bar Styling */
            .progress {
                background-color: #f0f0f0;
            }

            .progress-bar {
                background-color: #007bff;
                transition: width 0.6s ease;
            }

            /* Financial Card Styling */
            .financial-card {
                border-top: 4px solid #007bff;
            }

            .efficiency-box {
                background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
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
                . display-4 {
                    font-size: 2rem;
                }

                .display-5 {
                    font-size: 1.5rem;
                }

                . display-6 {
                    font-size: 1.3rem;
                }

                .leader-image {
                    height: 150px ! important;
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

                .btn-lg-square {
                    width: 45px;
                    height: 45px;
                }

                .btn-lg-square i {
                    font-size: 20px;
                }

                .financial-card,
                .efficiency-card {
                    padding: 1. 5rem !important;
                }

                .efficiency-box {
                    padding: 1rem !important;
                }
            }

            /* Animations */
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

            .wow {
                animation: fadeInUp 0.8s ease forwards;
            }

            /* Badge Styling */
            .badge {
                font-weight: 500;
                padding: 0.5rem 0.75rem;
            }

            /* List Styling */
            .list-unstyled li {
                transition: all 0.3s ease;
            }

            /* Alert Styling */
            .alert {
                border-radius: 10px;
                border: none;
            }

            .alert-info {
                background-color: #e7f3ff;
                color: #004085;
            }
        </style>

    </body>

</html>