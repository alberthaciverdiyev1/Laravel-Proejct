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
                                <form action="{{ route("permission.assign.index", $data['role']['id']) }}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control input-default" value="{{ $data['role']['name'] }}" disabled>
                                    </div>
                                    <div class="form-check">
                                        @foreach($data['permissions'] as $permission)
                                            <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission['id'] }}" id="permission{{ $permission['id'] }}">
                                            <label class="form-check-label" for="permission{{ $permission['id'] }}">{{ $permission['name'] }}</label><br>
                                        @endforeach
                                    </div>

                                    <button type="submit" class="btn-primary mx-auto">Assign permissions</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
