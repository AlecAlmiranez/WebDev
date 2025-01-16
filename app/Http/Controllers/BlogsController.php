<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlogsController extends Controller
{
    public function index()
    {
        Log::info('======> INDEX START');
        $titleblogs = 'This is blogs Page';
        $test = 'This is a test';
        $blogs = [
            [
                'title' => 'title one',
                'body' => 'This is body one',
                'status' => 1,
            ],
            [
                'title' => 'title two',
                'body' => 'This is body two',
                'status' => 0,
            ],
            [
                'title' => 'title three',
                'body' => 'This is body three',
                'status' => 1,
            ],
            [
                'title' => 'title four',
                'body' => 'This is body four',
                'status' => 1,
            ],
            [
                'title' => 'title five',
                'body' => 'This is body five',
                'status' => 0,
            ],
            [
                'title' => 'title six',
                'body' => 'This is body six',
                'status' => 0,
            ],
            [
                'title' => 'title seven',
                'body' => 'This is body seven',
                'status' => 1,
            ],
        ];
        Log::debug('debug');
        Log::info('info');
        Log::notice('notice');
        Log::error('Error');
        Log::critical('Critical');
        Log::alert('Alert');
        Log::emergency('Emergency');
        return view('common.blogs', compact('titleblogs', 'test', 'blogs'));
    }


    public function getBlogsData(){

        // $result = DB::table('blogs')->get();

        $cards = DB::table('blogs') -> where('status', '!=', 1)->get();

        return $cards;

    }

    public function viewBlogsData(){

        // $result = DB::table('blogs')->get();

        $cards = DB::table('blogs') 
                    -> where('status', '!=', 1)
                    ->get();

        return view('common.viewblogs', compact('cards'));

    }

    public function insertBlogsData(){

        $result = DB::table('blogs')->insert([
            'title' => 'sample',
            'description' => 'asdsadsa',
            'status' => 1
        ]);

        return $result;
    }

    public function updateBlogsData(){

        DB::table('blogs')->update([
            'category_id' => random_int(1,4)
        ]);
    }

    public function deleteBlogsData(){

        DB::table('blogs')->where('id',7)->delete();
    }

    public function retrieveBlogsPerCat(){

        $cards = DB::table('blogs as a')
                    ->join('category as b', 'b.id', '=' , 'a.category_id')
                    ->select('a.title','a.status','a.id','a.description','b.name')
                    ->orderBy('a.id', 'DESC')
                    ->get();

                    return view('common.viewblogs', compact('cards'));
    }

    public function getBlogsModel(){
        
        //$result = MyBlog::all();
        $result = Blog::where('status','1')
        ->get();
        
        return $result;
    }

    public function insertUsingModel(){

        // $blog = new Blog();
        // $blog -> title = 'Sample Using Model';
        // $blog -> description = 'Sample Description Using Model';
        // $blog -> status = 0;
        // $blog -> category_id = 1;

        // $blog -> save();
        
    
    }

    public function modelSamples($id, $title)
    {
        
        // $post = Blog::find($id);
        // $post->title = $title;

        // $post->save();
        
        // return $post;

        // $post = Blog::insert([
        //         [
        //         'title' =>'Sample123',
        //         'description' =>'sampleDescription',
        //         'status' => 0,
        //         'category_id' => 2,
        //         'user_id' => 1
        //         ]
        //         ]);

        // $post = Blog::where('status', '!=', 1)
        //                 ->where('category_id', 2)
        //                 ->update([
        //                     'status' => '1'
        //                 ]);
        //     return $post;

        // $post = Blog::find($id)->delete();
            $post = Blog::onlyTrashed()->get();
        return $post;
        }
    
}
