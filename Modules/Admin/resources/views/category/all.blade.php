@extends('admin::layouts.layout')
@section('body')
<div class="content-body">
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="mb-3">
                    <ul class="d-flex align-items-center flex-wrap">
                        <li><a href="{{route('category.add')}}" class="btn btn-primary ">Add Category</a></li>
                    </ul>
                </div>
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                            <i class="fa-solid fa-file-lines me-1"></i>Blogs List
                        </div>
                        <div class="tools">
                            <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-responsive-sm mb-0">
                                    <thead>
                                    <tr>
                                        <th style="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                                <label class="form-check-label" for="checkAll">

                                                </label>
                                            </div>
                                        </th>
                                        <th><strong>S.No</strong></th>
                                        <th><strong>Title</strong></th>
                                        <th><strong>Modified</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th style="width:85px;"><strong>Actions</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
                                                <label class="form-check-label" for="flexCheckDefault-1">

                                                </label>
                                            </div>
                                        </td>
                                        <td><b>1</b></td>
                                        <td>How To Teach Fitness Like A Pro.</td>
                                        <td>01 August 2023</td>
                                        <td class="recent-stats"><i class="fa fa-circle text-success me-1"></i>Successful</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
                                                <label class="form-check-label" for="flexCheckDefault-2">

                                                </label>
                                            </div>
                                        </td>
                                        <td><b>2</b></td>
                                        <td>Quick and Easy Fix For Your Fitness.</td>
                                        <td>01 August 2023</td>
                                        <td class="recent-stats"><i class="fa fa-circle text-danger me-1"></i>Canceled</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
                                                <label class="form-check-label" for="flexCheckDefault-3">

                                                </label>
                                            </div>
                                        </td>
                                        <td><b>3</b></td>
                                        <td>Things That Make You Love Fitness.</td>
                                        <td>01 August 2023</td>
                                        <td class="recent-stats"><i class="fa fa-circle text-warning me-1"></i>Pending</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4">
                                                <label class="form-check-label" for="flexCheckDefault-4">

                                                </label>
                                            </div>
                                        </td>
                                        <td><b>4</b></td>
                                        <td>How to keep your Body.</td>
                                        <td>01 August 2023</td>
                                        <td class="recent-stats"><i class="fa fa-circle text-warning me-1"></i>pending</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-5">
                                                <label class="form-check-label" for="flexCheckDefault-5">

                                                </label>
                                            </div>
                                        </td>
                                        <td><b>5</b></td>
                                        <td>Relax Your Body</td>
                                        <td>01 August 2023</td>
                                        <td class="recent-stats"><i class="fa fa-circle text-danger me-1"></i>Canceled</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-6">
                                                <label class="form-check-label" for="flexCheckDefault-6">

                                                </label>
                                            </div>
                                        </td>
                                        <td><b>6</b></td>
                                        <td>Origins Of Meditation</td>
                                        <td>01 June 2023</td>
                                        <td class="recent-stats"><i class="fa fa-circle text-success me-1"></i>Successful</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-7">
                                                <label class="form-check-label" for="flexCheckDefault-7">

                                                </label>
                                            </div>
                                        </td>
                                        <td><b>7</b></td>
                                        <td>Meditation Workshop</td>
                                        <td>01 May 2023</td>
                                        <td class="recent-stats"><i class="fa fa-circle text-success me-1"></i>Successful</td>
                                        <td>
                                            <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
                                <small class="mb-xl-0 mb-3">Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on 2</small>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination mb-2 mb-sm-0">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
