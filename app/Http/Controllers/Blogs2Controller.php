<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class Blogs2Controller extends Controller
{
    

    public function data(){
        // $blogs = Blog::with('category')->get();
        // $categories = Category::find(2)->blog;
        $categories = Category::with('blog')->find(2);
        return $categories;
    }
    
    public function index(){
        $categories = Category::all();
        $blogs = Blog::with('category')
        ->orderBy('id', 'DESC')
        // ->paginate(5);
        ->get();
        return view('docusubmission', compact('categories','blogs'));
    }

    public function blogCreate(Request $request){
        $result = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category'),
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => 1,
            'updated_at'=> date('Y-m-d H:i:s'),
        ];
        $response = Blog::create($result);
        
        $data = '';
        
        if ($response) {
            $data = Blog::with('category')->find($response->id);
        }

        return $data;
    }

}
