@extends('dash::layouts.layout')
@section('body')
        <!-- Page Title Start -->
        <section class="page-title title-bg24">
            <div class="d-table">
                <div class="d-table-cell">
                    <h2>Blog Two</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Blog Two</li>
                    </ul>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="other-option">
            <a href="{{route('addBlogView')}}" class="signup-btn">Add New Blog</a>
            </div>
            </section>
        <!-- Page Title End -->

		<!-- Blog Section Start -->
		<section class="blog-section blog-style-two pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>News, Tips & Articles</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus</p>
				</div>

				<div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            @foreach($blogs as $blog)
                            <div class="col-md-6 col-sm-6">
                                <div class="blog-card">
                                    <div class="blog-img">
                                        <a href="blog-details.html">
                                            <img src="{{asset('assets/img/blog/1.jpg')}}" alt="blog image">
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
                                                {{ \Carbon\Carbon::parse($blog->publish_start_date ?? $blog->created_at)->format('d/m/Y')}}

                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="blog-details.html">
                                                {{$blog->title}}
                                            </a>
                                        </h3>
                                        <p>{{Str::substr($blog->description, 0, 135)}}..</p>

                                        <a href="blog-details.html" class="blog-btn">
                                            Read More
                                            <i class='bx bx-plus bx-spin'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                         </div>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i class='bx bx-chevrons-left bx-fade-left'></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class='bx bx-chevrons-right bx-fade-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog-widget blog-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button>
                                        <i class='bx bx-search-alt-2'></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="blog-widget">
                            <h3>Popular Post</h3>

                            <article class="popular-post">
                                <a href="blog-details.html" class="blog-thumb">
                                    <img src="{{asset('assets/img/blog/popular-post1.jpg')}}" alt="blog image">
                                </a>

                                <div class="info">
                                    <time datetime="2021-04-08">May 8, 2021</time>
                                    <h4>
                                        <a href="blog-details.html">Looking for Highly Motivated Product to Build</a>
                                    </h4>
                                </div>
                            </article>

                            <article class="popular-post">
                                <a href="blog-details.html" class="blog-thumb">
                                    <img src="{{asset('assets/img/blog/popular-post2.jpg')}}" alt="blog image">
                                </a>

                                <div class="info">
                                    <time datetime="2021-04-08">May 5, 2021</time>
                                    <h4>
                                        <a href="blog-details.html">
                                            How to Indroduce in Yourself in Job Interview?
                                        </a>
                                    </h4>
                                </div>
                            </article>

                            <article class="popular-post">
                                <a href="blog-details.html" class="blog-thumb">
                                    <img src="{{asset('assets/img/blog/popular-post3.jpg')}}" alt="blog image">
                                </a>

                                <div class="info">
                                    <time datetime="2021-04-08">April 20, 2021</time>
                                    <h4>
                                        <a href="blog-details.html">
                                            Economy Growth is Being Increased by IT Sectors
                                        </a>
                                    </h4>
                                </div>
                            </article>

                            <article class="popular-post">
                                <a href="blog-details.html" class="blog-thumb">
                                    <img src="{{asset('assets/img/blog/popular-post4.jpg')}}" alt="blog image">
                                </a>

                                <div class="info">
                                    <time datetime="2021-04-08">April 28, 2021</time>
                                    <h4>
                                        <a href="blog-details.html">
                                            10 Things You Should Know Before Apply
                                        </a>
                                    </h4>
                                </div>
                            </article>
                        </div>

                        <div class="blog-widget blog-category">
                            <h3>Category</h3>
                            <ul>
                                <li>
                                    <a href="#">Web Design</a>
                                    <span>(10)</span>
                                </li>
                                <li>
                                    <a href="#">Job Tips</a>
                                    <span>(5)</span>
                                </li>
                                <li>
                                    <a href="#">UX Design</a>
                                    <span>(8)</span>
                                </li>
                                <li>
                                    <a href="#">Tips & Tricks</a>
                                    <span>(4)</span>
                                </li>
                                <li>
                                    <a href="#">Writting</a>
                                    <span>(12)</span>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                    <span>(7)</span>
                                </li>
                            </ul>
                        </div>

                        <div class="blog-widget blog-tags">
                            <h3>Tags</h3>
                            <ul>
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">Job Tips</a>
                                </li>
                                <li>
                                    <a href="#">UX Design</a>
                                </li>
                                <li>
                                    <a href="#">Tips & Tricks</a>
                                </li>
                                <li>
                                    <a href="#">Writting</a>
                                </li>
                                <li>
                                    <a href="#">Business</a>
                                </li>
                                <li>
                                    <a href="#">Resume</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
			</div>
		</section>
		<!-- Blog Section End -->

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
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">

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
