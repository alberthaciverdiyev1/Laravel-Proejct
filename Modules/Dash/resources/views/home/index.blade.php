@extends('dash::layouts.layout')
@section('body')

    <!-- Banner Section Start -->
    <div class="banner-section">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content text-center">
                        <p>Find Jobs, Employment & Career Opportunities</p>
                        <h1>Drop Resume & Get Your Desire Job!</h1>

                        <form class="banner-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keyword:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job Title">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail2">Location:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="City or State">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="find-btn">
                                        Find A Job
                                        <i class='bx bx-search'></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <ul class="keyword">
                            <li>Trending Keywords:</li>
                            <li><a href="#">Automotive,</a></li>
                            <li><a href="#">Education,</a></li>
                            <li><a href="#">Health</a></li>
                            <li>and</li>
                            <li><a href="#">Care Engineering</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Category Section Start -->
    <section class="categories-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Choose Your Category</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-accounting'></i>
                            <h3>Accountancy</h3>
                            <p>301 open position</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-graduation-cap'></i>
                            <h3>Education</h3>
                            <p>210 open position</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-wrench-and-screwdriver-in-cross'></i>
                            <h3>Automotive Jobs</h3>
                            <p>281 open position</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-consultation'></i>
                            <h3>Business</h3>
                            <p>122 open position</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-heart'></i>
                            <h3>Health Care</h3>
                            <p>335 open position</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3  col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-computer'></i>
                            <h3>IT & Agency</h3>
                            <p>401 open position</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3  col-md-4 col-sm-6 offset-md-2 offset-lg-0">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-worker'></i>
                            <h3>Engineering</h3>
                            <p>100 open position</p>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="job-list.html">
                        <div class="category-card">
                            <i class='flaticon-auction'></i>
                            <h3>Legal</h3>
                            <p>201 open position</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Jobs Section Start -->
    <section class="job-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Jobs You May Be Interested In</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="assets/img/company-logo/1.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Post-Room Operate</a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="#">Tourt Design LTD</a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Wellesley Rd, London
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Accountancy
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Freelance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <span>Full Time</span>
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch' ></i>
                                        1 Hr Ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="assets/img/company-logo/2.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Data Entry</a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="#">Techno Inc.</a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Street 40/A, London
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Data Entry
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Freelance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch' ></i>
                                        3 Hr Ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="assets/img/company-logo/3.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Graphic Designer</a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="#">Devon Design</a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            West Sight, USA
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Graphics
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Freelance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch' ></i>
                                        4 Hr Ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="assets/img/company-logo/4.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Web Developer</a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="#">MegaNews</a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            San Francisco, California
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Development
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Freelance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch' ></i>
                                        5 Hr Ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="assets/img/company-logo/5.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Digital Marketor</a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="#">AB Marketer LTD</a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Wellesley Rd, London
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Marketing
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Freelance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch' ></i>
                                        6 Hr Ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="assets/img/company-logo/6.png" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">UI/UX Designer</a>
                                    </h3>
                                    <ul>
                                        <li>Via <a href="#">Design Hunter</a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Zoo Rd, London
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Accountancy
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Freelance
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                    <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch' ></i>
                                        8 Hr Ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Jobs Section End -->

    <!-- Way To Use Section Start -->
    <section class="use-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Easiest Way To Use</h2>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="use-text">
                        <span>1</span>
                        <i class='flaticon-website'></i>
                        <h3>Browse Job</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="use-text">
                        <span>2</span>
                        <i class='flaticon-recruitment'></i>
                        <h3>Find Your Vaccancy</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
                    <div class="use-text">
                        <span>3</span>
                        <i class='flaticon-login'></i>
                        <h3>Submit Resume</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Way To Use Section End -->

    <!-- Companies Section Start -->
    <section class="company-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Companies</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="assets/img/top-company/1.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Trophy  & Sans</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Green Lanes, London
                            </p>
                            <a href="job-grid.html" class="company-btn">
                                25 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="assets/img/top-company/2.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Trout Design</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Park Avenue, Mumbai
                            </p>
                            <a href="job-grid.html" class="company-btn">
                                35 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="assets/img/top-company/3.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Resland LTD</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Betas Quence, London
                            </p>
                            <a href="job-grid.html" class="company-btn">
                                20 Open Position
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="assets/img/top-company/4.png" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Lawn Hopper</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Wellesley Rd, London
                            </p>
                            <a href="job-grid.html" class="company-btn">
                                45 Open Position
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Companies Section End -->

    <!-- Why Choose Section Start -->
    <section class="why-choose">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 p-0">
                    <div class="why-choose-text pt-100 pb-70">
                        <div class="section-title text-center">
                            <h2>Why You Choose Jovie?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorei.</p>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="media">
                                    <i class="flaticon-group align-self-center mr-3"></i>
                                    <div class="media-body">
                                        <h5 class="mt-0">Best Talented People</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="media">
                                    <i class="flaticon-research align-self-center mr-3"></i>
                                    <div class="media-body">
                                        <h5 class="mt-0">Easy To Find Canditate</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="media">
                                    <i class="flaticon-discussion align-self-center mr-3"></i>
                                    <div class="media-body">
                                        <h5 class="mt-0">Easy To Communicate</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="media">
                                    <i class="flaticon-recruitment align-self-center mr-3"></i>
                                    <div class="media-body">
                                        <h5 class="mt-0">Global Recruitment Option</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row counter-area">
                            <div class="col-md-3 col-6">
                                <div class="counter-text">
                                    <h2><span>127</span></h2>
                                    <p>Job Posted</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="counter-text">
                                    <h2><span>137</span></h2>
                                    <p>Job Filed</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="counter-text">
                                    <h2><span>180</span></h2>
                                    <p>Company</p>
                                </div>
                            </div>

                            <div class="col-md-3 col-6">
                                <div class="counter-text">
                                    <h2><span>144</span></h2>
                                    <p>Members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 p-0">
                    <div class="why-choose-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Section End -->

    <!-- Job Info Section Start -->
    <div class="job-info pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="looking-job">
                        <div class="media">
                            <i class='flaticon-group align-self-start mr-3'></i>
                            <div class="media-body">
                                <h5 class="mt-0">Looking For a Job</h5>
                                <p>Your next role could be with one of these top leading organizations</p>

                                <a href="job-list.html">
                                    Apply Now
                                    <i class='bx bx-chevrons-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="recruiting-card">
                        <div class="media">
                            <i class='flaticon-resume align-self-start mr-3'></i>
                            <div class="media-body">
                                <h5 class="mt-0">Are You Recruiting?</h5>
                                <p>Your next role could be with one of these top leading organizations</p>

                                <a href="post-job.html">
                                    Apply Now
                                    <i class='bx bx-chevrons-right'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Job Info Section End -->

    <!-- Pricing Section Start -->
    <section class="pricing-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Buy Our Plans & Packages</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="price-card">
                        <div class="price-top">
                            <h3>Free Forever</h3>
                            <i class='bx bx-user'></i>
                            <h2>0<sub>/Month</sub></h2>
                        </div>

                        <div class="price-feature">
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Appear in results
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <strong>Accept mobile app</strong>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Manage canditates directly
                                </li>
                            </ul>
                        </div>

                        <div class="price-btn">
                            <a href="post-job.html">Find A  Job</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="price-card mt-12">
                        <div class="price-top">
                            <h3>Sponsor</h3>
                            <i class='bx bx-user'></i>
                            <h2>10<sub>/Month</sub></h2>
                        </div>

                        <div class="price-feature">
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Premium placement
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <strong>PPC on your job</strong>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Reach more candidates
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Desktop, mobile job alerts
                                </li>
                            </ul>
                        </div>

                        <div class="price-btn">
                            <a href="post-job.html">Find A  Job</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="price-card">
                        <div class="price-top">
                            <h3>Premium Plan</h3>
                            <i class='bx bx-user'></i>
                            <h2>30<sub>/Month</sub></h2>
                        </div>

                        <div class="price-feature">
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Job ad live for six-weeks
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <strong>Premium placement</strong>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Desktop, mobile job alerts
                                </li>
                            </ul>
                        </div>

                        <div class="price-btn">
                            <a href="post-job.html">Find A  Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Candidate Section Start -->
    <section class="candidate-section pb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Featured Candidates</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
            </div>

            <div class="condidate-slider owl-carousel owl-theme">
                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/1.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Mibraj Alex</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Construction & Property
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Botchergate, Carlisle
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                9D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/2.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Felica Kareon</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                SEO Expart
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Georgetown, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart' ></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/3.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Malisha Patel</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Project Management
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Madison, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                1D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/1.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Mibraj Alex</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Construction & Property
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Botchergate, Carlisle
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                9D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/4.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Quence Joes</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Web Developer
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Augusta, Maine
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/2.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Felica Kareon</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                SEO Expart
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Georgetown, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/3.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Malisa Petel</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Project Management
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Madison, USA
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                1D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="condidate-item">
                    <div class="candidate-img">
                        <img src="assets/img/candidate/4.jpg" alt="candidate image">
                    </div>
                    <div class="candidate-social">
                        <a href="#" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                    </div>
                    <div class="candidate-text">
                        <h3><a href="candidate-details.html">Quence Joes</a></h3>
                        <ul>
                            <li>
                                <i class='bx bx-filter-alt'></i>
                                Web Developer
                            </li>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                Augusta, Maine
                            </li>
                        </ul>

                        <div class="bottom-text">
                            <p>
                                <i class='bx bx-stopwatch'></i>
                                8D ago
                            </p>
                            <a href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Candidate Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial-section ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>What Client’s Say About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
            </div>

            <div class="row">
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-items">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 offset-md-3 offset-lg-0 p-0">
                                <div class="testimonial-img">
                                    <img src="assets/img/testimonial-img.jpg" alt="testimonial image">
                                </div>
                                <div class="testimonial-img-text">
                                    <h3>Alisa Meair</h3>
                                    <p>CEO of  Company</p>
                                </div>
                            </div>
                            <div class="col-lg-7 p-0">
                                <div class="testimonial-text">
                                    <i class='flaticon-left-quotes-sign'></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-items">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6 offset-md-3 offset-lg-0 p-0">
                                <div class="testimonial-img">
                                    <img src="assets/img/testimonial-img-2.jpg" alt="testimonial image">
                                </div>
                                <div class="testimonial-img-text">
                                    <h3>John Doe</h3>
                                    <p>Web Designer</p>
                                </div>
                            </div>
                            <div class="col-lg-7 p-0">
                                <div class="testimonial-text">
                                    <i class='flaticon-left-quotes-sign'></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>News, Tips & Articles</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    Admin
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    7 Feb, 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="blog-details.html">
                                    How to Indroduce in Yourself in Job Interview?
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read More
                                <i class='bx bx-plus bx-spin'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/2.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    Admin
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    7 Feb, 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="blog-details.html">
                                    Looking for Highly Motivated Product to Build
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read More
                                <i class='bx bx-plus bx-spin'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/3.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <ul>
                                <li>
                                    <i class='bx bxs-user'></i>
                                    Admin
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    7 Feb, 2021
                                </li>
                            </ul>

                            <h3>
                                <a href="blog-details.html">
                                    The Reason Why Software Develope is the Best Job
                                </a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>

                            <a href="blog-details.html" class="blog-btn">
                                Read More
                                <i class='bx bx-plus bx-spin'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->




@endsection
