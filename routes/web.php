<?php

use App\Models\Customer_Reviews;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;
use App\Models\Tag;


Route::get('/', function () {
     return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->get();
    return view('jobs' , [
        'jobs' => $jobs
    ]);
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
  $job = Job::find($id);

return view('job' , ['job' => $job]);

});

Route::get('/customer_reviews', function () {
    return view('customer_reviews' , [
        'customer_reviews' => Customer_Reviews::all()
    ]);
});
Route::get('/customer_reviews/{id}', function ($id) {
    $customer_review = Customer_Reviews::find($id);

    return view('customer_review' , ['customer_review' => $customer_review]);

});



Route::get('/xxx', function () {

    $post = Post::findOrFail(1);

    dd($post->tags->first()->name);

});


Route::get('/xxx2', function () {

    $tag = Tag::findOrFail(1);

    dd($tag->posts->first()->body);

});
