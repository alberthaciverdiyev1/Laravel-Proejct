<!doctype html>
<html lang="zxx">
@include('dash::layouts.header')

<body>
{{--@include('layouts.loader')--}}
@include('dash::layouts.navbar')
@yield('body');
@include('dash::layouts.footer')
{{--Back To Top Start --}}
<div class="top-btn">
    <i class='bx bx-chevrons-up bx-fade-up'></i>
</div>
@include('dash::layouts.js')
</body>
</html>
