@extends('admin::layouts.layout')
@section('body')
    <div class="content-body">
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-8">
                            <div class="filter cm-content-box box-primary">
                                <div class="content-title">
                                    <div class="cpa">
                                        Add Blog Category
                                    </div>
                                </div>
                                <div class="cm-content-body  form excerpt">
                                    <div class="card-body">
                                        <form method="post" action="{{route('category.add')}}">
                                          @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Slug</label>
                                                <input type="text" name="slug" class="form-control" placeholder="Slug">
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
