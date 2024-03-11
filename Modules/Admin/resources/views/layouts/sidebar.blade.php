<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="dropdown header-profile">
                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                    <img src="{{ asset('adminassets/images/profile/pic1.jpg') }}" width="20" alt="">
                    <div class="header-info ms-3">
                        <span class="font-w600 "><b>{{ Auth::user()->username }}</b></span>
                        <small class="text-end font-w400">{{ Auth::user()->email }}</small>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon">
                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                            height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" y1="12" x2="9" y2="12"></line>
                        </svg>
                        <span class="ms-2">Logout </span>
                    </a>
                </div>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard Light</a></li>
                    <li><a href="my-wallet.html">My Wallet</a></li>
                    <li><a href="page-invoices.html">Invoices</a></li>
                    <li><a href="cards-center.html">Cards Center</a></li>
                    <li><a href="page-transaction.html">Transaction</a></li>
                    <li><a href="transaction-details.html">Transaction Details</a></li>
                </ul>

            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('category.list') }}">
                    <i class="fa-solid fa-gear fw-bold"></i>
                    <span class="nav-text">Categories</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('category.list') }}">
                    <i class="fa-solid fa-gear fw-bold"></i>
                    <span class="nav-text">subCategories</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('role.index') }}">
                    <i class="fa-solid fa-gear fw-bold"></i>
                    <span class="nav-text">Roles</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('permission.all') }}">
                    <i class="fa-solid fa-gear fw-bold"></i>
                    <span class="nav-text">Permissions</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('setting.all') }}">
                    <i class="fa-solid fa-gear fw-bold"></i>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('master.requests') }}">
                    <i class="fa-solid fa-gear fw-bold"></i>
                    <span class="nav-text">Master requests</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="{{ route('setting.all') }}">
                    <i class="fa-solid fa-gear fw-bold"></i>
                    <span class="nav-text">Users</span>
                </a>
            </li>
        </ul>
        <div class="copyright">
            <p><strong>Dompet Payment Admin Dashboard</strong> © 2023 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
        </div>
    </div>
</div>
