@extends('dash::layouts.layout')
@section('body')

    <!-- Banner Section Start -->
    <div class="banner-section">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content text-center">
                        <h2>Drop Resume & Get Your Desire Job!</h2>

                        <form class="banner-form">
                            <div class="row">
                                <form>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keyword:</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                   placeholder="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="find-btn">
                                            Find A Job
                                            <i class='bx bx-search'></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    @if(false)
        <!-- Category Section Start -->
        <section class="categories-section pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Choose Your Category</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore
                        et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
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
    @endif
    <!-- Jobs Section Start -->
    <section class="job-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Jobs You May Be Interested In</h2>
                <button type="button" class="btn-danger btn-rounded" data-role="jobs-btn">Jobs</button>
                    <button type="button" class="btn-danger btn-rounded" data-role="services-btn">Services</button>
            </div>
            <div class="row" data-role="jobs-list">
            </div>
        </div>
    </section>
    <!-- Jobs Section End -->

      <!-- Companies Section Start -->
    <section class="company-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Top Companies</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Quis ipsum suspendisse ultrices.</p>
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
                            <h3>Trophy & Sans</h3>
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

@endsection
