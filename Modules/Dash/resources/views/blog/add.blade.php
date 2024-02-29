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
                    <li>Post a Blog</li>
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
            <form class="job-post-from" method="post" action="{{route('addBlog')}}">
                @csrf
                <h2>Fill Up Your Job information</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" class="form-control" name="title"
                                   placeholder="Job Title or Keyword" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Start date</label>
                            <input type="datetime-local" class="form-control" name="publish_start_date">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="date" class="form-control" name="publish_end_date">

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> Description</label>
                            <textarea class="form-control description-area" name="description" rows="6"
                                      placeholder="Blog Description" required></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="post-btn">
                            Post A Blog
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Post Job Section End -->

@endsection
