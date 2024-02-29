@extends('admin::layouts.layout')
@section('body')
    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Input Style</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route("permission.add")}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control input-default " placeholder="Permission Name">
                                    </div>
                                    <button type="submit" class="btn-primary mx-auto">Add Permission</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
