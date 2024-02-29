<!-- Navbar Area Start -->
<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{route('Home')}}" class="logo">
            <img src="{{asset('assets/img/logo.png')}}" alt="logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('Home')}}">
                    <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{route('Home')}}"
                               class="nav-link  {{ Route::currentRouteName() == 'Home' ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blogIndex')}}"
                               class="nav-link {{ Route::currentRouteName() === 'blogIndex' ? 'active' : '' }}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('About')}}"
                               class="nav-link {{Route::currentRouteName() === 'About' ? 'active' : ''}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">Candidates</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="candidate.html" class="nav-link">Candidates</a>
                                </li>
                                <li class="nav-item">
                                    <a href="candidate-details.html" class="nav-link">Candidates Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    @if(Auth::check())
                        <div class="other-option">
                            <a href="{{route('joinAsMaster')}}" class="signin-btn" style="background: green">Join Us</a>
                            <a class="signin-btn">{{ Auth::user()->username }}</a>
                            <a href="{{route('logout')}}" class="signup-btn">LogOut</a>
                        </div>
                    @else
                        <div class="other-option">
                            <a href="{{route('Register')}}" class="signup-btn">Sign Up</a>
                            <a href="{{route('Login')}}" class="signin-btn">Sign In</a>
                        </div>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar Area End -->
