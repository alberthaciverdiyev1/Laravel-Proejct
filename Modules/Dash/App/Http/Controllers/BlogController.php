<?php

namespace Modules\Dash\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

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
        $validator = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|string',
        ]);
        return response()->json($validator);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors(),
            ], 422);
        }

     $res = Blog::addBlog([
         'title' => $request->input('title'),
         'description' => $request->input('description'),
         'publish_start_date' => $request->input('publish_start_date'),
         'publish_end_date' => $request->input('publish_end_date'),
        ]);

        return response()->json($res);
    }

    public function details(Request $id)
    {
        return view('dash::blog/details');
    }

}
