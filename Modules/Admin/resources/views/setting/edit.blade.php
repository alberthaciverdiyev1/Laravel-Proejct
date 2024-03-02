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
                                <form action="{{route("setting.update",$setting->id)}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label>
                                            <input type="text" name="key" class="form-control input-default" value="{{$setting->key}}" placeholder="Setting Key">
                                        </label>
                                        <label>
                                            <input type="text" name="value" class="form-control input-default" value="{{$setting->value}}" placeholder="Setting Value">
                                        </label>
                                    </div>
                                    <button type="submit" class="btn-primary mx-auto">Update role</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
