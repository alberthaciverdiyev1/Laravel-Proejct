@extends('dash::layouts.layout')
@section('body')
    <section class="blog-section blog-style-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>News, Tips & Articles</h2>
            </div>

            <div class="row">
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

                    <div class="blog-widget blog-category">
                        <h3>Category</h3>
                        <ul>
                            @foreach($data['categories'] as $category)
                                <li>
                                    <a href="">{{$category->name}}</a>
                                    <span>({{$category->job_count}})</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($data['jobs'] as $job)
                            <div class="col-md-4  col-sm-4">
                                <div class="blog-card">
                                    <div class="blog-img">
                                        <a href="{{route('job.details',$job->id)}}">
                                            <img src="{{asset('assets/img/blog/1.jpg')}}" alt="blog image">
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <ul>
                                            <li>
                                                <i class='bx bxs-user'></i>
                                                {{$job->user_name}}{{$job->user_surname}}
                                            </li>
                                            <li>
                                                <i class='bx bx-calendar'></i>
                                                {{$job->minute_since_update ?? $job->minute_since_creation}}
                                            </li>
                                        </ul>

                                        <h3>
                                            <a href="{{route('job.details',$job->id)}}">
                                                {{$job->subcategory_name}}
                                            </a>
                                        </h3>
                                        <p>{{strlen($job->description) >200 ? substr($job->description,0,200).'...' : $job->description}}</p>

                                        <a href="{{route('job.details',$job->id)}}" class="blog-btn">
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

            </div>
        </div>
    </section>
@endsection
