<?php

namespace Modules\Dash\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Modules\Dash\App\Http\Controllers\Job\JobController;

class HomeController extends Controller
{

    public function index()
    {
        return view('dash::home.index');
    }

}
