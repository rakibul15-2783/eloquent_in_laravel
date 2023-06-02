<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $phone = User::find(1);
    $phone = User::find(2)->phone;
    //return $phone;

    $user = Phone::find(2);
   // $user = Phone::find(2)->user;
   // return $user;

   $users = User::all();
   //return $users;

   $comment = Post::find(1);
   $comment = Post::find(1)->comments;
   // $phone = User::find(2)->phone;
    //return $phone;
    //return $comment;

    $post = Comment::find(1);
    $post = Comment::find(2)->post;
    //$comment = Post::find(1)->comments
   // return $post;
  // $posts = Post::with('comments')->get(); 
   //return $post;

   $posts = Post::with('categories')->get();
   //return $posts;
    return view('welcome',compact('posts'));
});
