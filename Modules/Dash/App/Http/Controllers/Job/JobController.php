<?php

namespace Modules\Dash\App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use App\Http\Requests\postJobRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Job;
use App\Models\Master;
use App\Models\Town;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    function __construct()
    {
    }

    public function index()
    {
        return view('dash::Job.index');
    }

    public function jobDetails($id)
    {
        $details = Job::jobDetails($id)->original['data'];
        return view('dash::Job.details', compact('details'));
    }

    public function action(Request $request)
    {
        $rules = array(
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'city_id' => 'required',
            'town_id' => 'required',
            'email' => 'required|email',
            'FIN' => 'required|min:7|max:7|unique:masters',
            'phone' => 'required|numeric',
            'description' => 'max:500',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(['status' => 200, 'message' => [$messages]]);
        }
        $request['user_id'] = Auth::user()->id;
        $request['is_active'] = 0;
        $res = Master::createMaster($request);
        return \response()->json($res);
    }

    public function postJobIndex()
    {
        $data = [
            'categories' => Category::allCategories(),
            'subcategories' => Category::allSubCategories(),
            'cities' => City::allCities(),
            'towns' => Town::allTowns(),
        ];
        $data = json_decode(json_encode($data), false);
        $data = isset($data) ? $data : [];

        return view('dash::Job.post', compact('data'));
    }

    public function allJobsIndex($service ,Request $request)
    {
        $filter = ($service === 'jobs') ? 0 : (($service === 'services') ? 1 : 0);
        $data['jobs'] = Job::getAllJobs($filter)->original['data'];
        $data['categories'] = Category::allCategories($filter)->original['data'];
        $data['subcategories'] = Category::allSubCategories()->original['data'];
//        return \response()->json($data);
//        $res = isset($res->original['data']) ? $res->original['data'] : [];
        return view('dash::Job.all', compact('data'));
    }

    public function postJob(postJobRequest $request)
    {
        $data = [
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'city_id' => $request->city_id,
            'town_id' => $request->town_id,
            'description' => $request->description,
            'user_id' => \auth()->user()->id,
            'is_service' => auth()->user()->hasRole('user') ? 0 : 1
        ];
        $res = Job::postJob($data);
        return \response()->json($res);
    }

    public function getAllJobs(Request $request)
    {
        $filter = $request->filter;
        $filter = ($filter === 'jobs') ? 0 : (($filter === 'services') ? 1 : 0);
        $res = Job::getAllJobs($filter);
//        $data = json_decode(json_encode($res), false);
//        $data = isset($data) ? $data : [];
        return $res;

    }
}
