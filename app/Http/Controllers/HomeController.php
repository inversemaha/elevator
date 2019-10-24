<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Product;
use App\Service;
use App\User;
use App\Category;
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
        /*   $post_count = Post::count();*/
         $category_count = Category::count();
         $product_count = Product::count();
         $feature_count = Feature::count();
         $service_count = Service::count();
         $user_count = User::count();


         return view('admin.pages.home.index')
             ->with('category_count', $category_count)
             ->with('product_count', $product_count)
             ->with('feature_count', $feature_count)
             ->with('service_count', $service_count)
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
