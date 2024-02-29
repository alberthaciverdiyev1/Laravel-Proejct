@extends('dash::layouts.layout')
@section('body')
    <!-- Page Title Start -->
    <section class="page-title title-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Post a Job</h2>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Post a Job</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- Page Title End -->

    <!-- Post Job Section Start -->
    <div class="job-post ptb-100">
        <div class="container">
            <form class="job-post-from" method="post" action="{{route('joinAsMaster')}}">
                @csrf
                <h2>Fill Up Your Job information</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="category" name="category_id">
                                <option data-display="Category">Category</option>
                                <option value="1">Web Development</option>
                                <option value="2">Graphics Design</option>
                                <option value="4">Data Entry</option>
                                <option value="5">Visual Editor</option>
                                <option value="6">Office Assistant</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>SubCategory</label>
                            <select class="category" name="subcategory_id">
                                <option data-display="Category">Category</option>
                                <option value="1">Web Development</option>
                                <option value="2">Graphics Design</option>
                                <option value="4">Data Entry</option>
                                <option value="5">Visual Editor</option>
                                <option value="6">Office Assistant</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone" class="form-control" id="exampleInput1" placeholder="Phone number" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>FIN Code</label>
                            <input type="text" class="form-control" name="FIN" id="exampleInput2" placeholder="FIN Code" maxlength="7" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <select class="category" name="city_id">
                                <option data-display="Category">Category</option>
                                <option value="1">Web Development</option>
                                <option value="2">Graphics Design</option>
                                <option value="4">Data Entry</option>
                                <option value="5">Visual Editor</option>
                                <option value="6">Office Assistant</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Town</label>
                            <select class="category" name="town_id">
                                <option data-display="Category">Category</option>
                                <option value="1">Web Development</option>
                                <option value="2">Graphics Design</option>
                                <option value="4">Data Entry</option>
                                <option value="5">Visual Editor</option>
                                <option value="6">Office Assistant</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Email</label>
                            <input type="email" class="form-control" id="exampleInput3" name="email"
                                   placeholder="e.g. hello@company.com" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Experience</label>
                            <input type="number" name="experience" class="form-control" id="exampleInput8" placeholder="e.g. 1 year"
                                   required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Job Description</label>
                            <textarea class="form-control description-area" name="description" id="exampleFormControlTextarea1" rows="6"
                                      placeholder="Job Description" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="post-btn">
                            Apply
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Post Job Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Get New Job Notifications</h2>
                        <p>Subscribe & get all related jobs notification</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required
                               autocomplete="off">

                        <button class="default-btn sub-btn" type="submit">
                            Subscribe
                        </button>

                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->
@endsection
