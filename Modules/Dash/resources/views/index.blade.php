@extends('dash::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('dash.name') !!}</p>
@endsection
