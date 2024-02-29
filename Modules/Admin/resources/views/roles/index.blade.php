@extends('admin::layouts.layout')
@section('body')
    <div class="content-body">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic</h4>
                        <a href="{{route('role.add')}}">Add New Role</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <th class="text-black">1</th>
                                        <td>{{$role["name"]}}</td>
                                        <td><span class="badge badge-primary">Sale</span>
                                        </td>
                                        <td>January 22</td>
                                        <td class="color-primary">
                                            <a href="{{route('permission.assign.index',$role['id'])}}" class="btn btn-dark d-sm-inline-block d-none"> Assign Permission</a>
                                            <a href="{{route('role.update',$role['id'])}}"  class="btn btn-warning d-sm-inline-block d-none"> Update</a>
                                            <a href="{{route('role.delete',$role['id'])}}" class="btn btn-danger d-sm-inline-block d-none"> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
