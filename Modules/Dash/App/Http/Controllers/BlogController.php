<?php

namespace Modules\Dash\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{

    public function index()
    {
        $blogModel = new Blog();
        $blogs = $blogModel->list();
        return view('dash::blog/list', ['blogs' => $blogs]);
    }

    public function addBlogView()
    {
        return view('dash::blog/add');
    }

    public function addBlog(Request $request)
    {
        $this->middleware('role::developer,admin,manager');
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            $messages = $validator->messages();
            return response()->json(['status' => 400, 'message' => $messages], 400);
        }
     $res = Blog::addBlog([
         'title' => $request->input('title'),
         'description' => $request->input('description'),
         'publish_start_date' => $request->input('publish_start_date'),
         'publish_end_date' => $request->input('publish_end_date'),
         'creator_id' => auth()->user()->id
        ]);

        return response()->json($res);
    }

    public function details(Request $id)
    {
        return view('dash::blog/details');
    }

}
