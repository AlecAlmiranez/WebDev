<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CustomAuthMiddleware;
use App\Http\Requests\LoginRequest;
use App\Models\Credential;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
            return view('common.login');
    }

    public function register(){
        return view('login.register');
    }

    public function registerPost(Request $request){
        $user = new User();

        $password = Hash::make($request->password);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;

        DB::beginTransaction();
        try {
            $user->save();
        } catch (QueryException $e) {
            $message ="ERROR";
            $errorCode = $e->errorInfo[1];

            if($errorCode == 1062){
                $message ='Email is missing';
            }

            return back()->with('error', $message);
        }

        $id = $user->id;
        if($id > 0){
            try {
                $credentials = new Credential();

                $credentials->user_id = $id;
                $credentials->is_deleted=0;
                $credentials->password=$password;

                $credentials->save();
            } catch (QueryException $e) {
                $message ="ERROR";
                DB::rollBack();
                return back()->with('error', $message);
            }
        }

        DB::commit();

        return back()->with('success_register','Register successfully');

    }

    public function login()
    {
        return view('login.login');
    }

    public function loginPost(Request $request)
    {
        Log::info('loginPost');

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $middleware = new CustomAuthMiddleware();
        $response = $middleware->handle($request, function($request){
            Log::info("Nakapasok");
            return redirect()->route('home');
        });

        return view('display');
    }

    public function logOut(Request $request)
    {
        // Returns to login page
        if(Session::has('loginId')){
                $request->session()->flush();
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                redirect()->route('login');
            }

        return redirect()->route('login');
    }
}