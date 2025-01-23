<?php

use App\Http\Controllers\Act4docuController;
use App\Http\Controllers\Blogs2Controller;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/act2', function () {
    return view('activity2');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', function () {
        return view('layout.master');
    })->name('home');

    Route::get('/user/{id}/{name}', function ($id, $name) {
        return "<a href = '" . route('settingsPage', ['id' => $id, 'name' => $name]) . "'>" . 'Settings</a>';
    });

    Route::get('/about', function () {
        return 'about Page';
    })->name('aboutPage');

    Route::get('/settings/{id}/{name}', function ($id, $name) {
        return $id . ' ' . $name;
    })->name('settingsPage');
});

// ACT 3
Route::group(['prefix' => 'act3'], function () {
    Route::get('/about', function () {
        $about = 'This is about Page';
        //$test = 'This is a test';
        //return view('common.about', ['aboutPage' => $about]);
        return view('common.about', compact('about', 'test'));
    })->name('act3about');
    Route::get('/home', function () {
        // $titleblogs = 'This is home Page';
        $test = 'This is a test';
        $cards = [
            [
                'title' => 'Anjanath',
                'body' => 'A large and aggressive monster that can be found in the Ancient Forest.',
                'source' => asset('storage/anjanath.jpg'),
                'url' => 'https://monsterhunterworld.wiki.fextralife.com/Anjanath',
                'status' => 1,
            ],
            [
                'title' => 'Kulu-Ya-Ku',
                'body' => 'A bird wyvern known for its distinctive appearance and behavior.',
                'source' => asset('storage/kulu.jpg'),
                'url' => 'https://monsterhunterworld.wiki.fextralife.com/Kulu-Ya-Ku',
                'status' => 1,
            ],
            [
                'title' => 'Pukei-Pukei',
                'body' => 'Known for its vibrant feathers, chameleon-like abilities, and toxic attacks.',
                'source' => asset('storage/pukei.jpg'),
                'url' => 'https://monsterhunterworld.wiki.fextralife.com/Pukei-Pukei',
                'status' => 1,
            ],
            [
                'title' => 'Tobi-Kadachi',
                'body' => 'tends to be relatively non-aggressive unless provoked.',
                'source' => asset('storage/tobi.jpg'),
                'url' => 'https://monsterhunterworld.wiki.fextralife.com/Tobi-Kadachi',
                'status' => 1,
            ],
            [
                'title' => '???',
                'body' => 'Discover this terrifying monster by progressing the story.',
                'source' => asset('storage/safi.jpg'),
                'url' => '',
                'status' => 0,
            ],
            [
                'title' => '???',
                'body' => 'Discover this terrifying monster by progressing the story.',
                'source' => asset('storage/shara.jpg'),
                'url' => '',
                'status' => 0,
            ],
        ];
        return view('common.home', compact( 'test', 'cards'));
    })->name('act3home');

    Route::get('/contact', function () {
        $contact = 'This is contact Page';
        $test = 'This is a test';
        return view('common.contact', compact('contact', 'test'));
    })->name('act3contact');

    Route::get('/blogs', [BlogsController::class, 'index'])->name('act3blogs');
});

//ACT 4
// Route::get('/login', function () {
//     return view('common/login');
// });

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/loginsubmit', [LoginController::class, 'loginSubmit'])->name('login.submit');
Route::resource('home1', HomeController::class);

Route::get('/get-blogs',[BlogsController::class,'getBlogsData']);
Route::get('/insert-blogs',[BlogsController::class,'insertBlogsData']);

Route::get('/viewblogs', [BlogsController::class, 'viewBlogsData']);

Route::get('/updateblogs', [BlogsController::class, 'updateBlogsData']);

Route::get('/deleteblogs', [BlogsController::class, 'deleteBlogsData']);

Route::get('/retrieve', [BlogsController::class, 'retrieveBlogsPerCat']);

Route::get('/getBlogs', [BlogsController::class, 'getBlogsModel']);

Route::get('/insertusemodel', [BlogsController::class, 'insertUsingModel']);

Route::get('/modelsamples/{id}/{title}', [BlogsController::class, 'modelSamples']);

//Activity 4 [Finals]

    Route::get('/act4',[Act4docuController::class, 'displayPage']);


Route::get('/data', [Blogs2Controller::class, 'data']);

Route::get('/datasubmission', [Blogs2Controller::class, 'index']);
Route::post('/datasubmission', [Blogs2Controller::class, 'blogCreate']) ->name('blog.create');


Route::fallback(function () {
    //return '<img src="' . asset('storage/404pic.jpg') . '" style="width: 100%; height: auto;" />';
    //return redirect()->route('home');
    return view('404');
});
