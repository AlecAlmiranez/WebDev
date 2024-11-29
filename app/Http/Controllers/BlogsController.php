<?php

namespace App\Http\Controllers;

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

        $result = DB::table('blogs') -> where('status', '!=', 1)->get();

        return $result;

    }

    public function insertBlogsData(){

        $result = DB::table('blogs')->insert([
            'title' => 'sample',
            'description' => 'asdsadsa',
            'status' => 1
        ]);

        return $result;
    }
}
