<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{public function __construct()
     {
         //$this->middleware('auth');
         if (Auth::check()) {
             return Redirect::to('/admin-home');
             echo "yes";
         } else {
             return Redirect::to('/login');
         }
     }

     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Http\Response
      */
     public function login()
     {

         return view('login.login');
     }

     public function index()
     {
        /*   $post_count = Post::count();
         $category_count = Category::count();*/
         $user_count = User::count();


         return view('admin.pages.home.index')
             ->with('user_count', $user_count);
     }

     public function doLogin(Request $request)
     {
         $email = $request['email'];
         $password = $request['password'];
         $remember = true;

         // attempt to do the login
         if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {

             $request->session()->put('id', 1);
             $user = User::where('email', $email)->first();
             $request->session()->put('user_type', $user->user_type);
             return Redirect::to('/admin-home');
         } else {
             return back()->with('failed', "Email or password does not match");

         }
         //Auth::logout(); // log the user out of our application
     }

     public function doLogout()
     {
         Auth::logout(); // log the user out of our application
         return Redirect::to('/');
     }
}
