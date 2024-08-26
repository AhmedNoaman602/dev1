<?php

use App\Models\Customer_Reviews;
use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Job;

Route::get('/', function () {
     return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->cursorPaginate(3);

    return view('jobs.index' , [
        'jobs' => $jobs
    ]);
});
Route::get('/jobs/create' , function (){
    return view('jobs.create');
});
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show' , ['job' => $job]);
});

Route::post('/jobs', function () {
    $job = new Job();
    $job->title = request('title');
    $job->salary = request('salary');
    $job->employer_id = 1;
    
    return redirect('/jobs');
});



Route::get('/contact', function () {
    return view('contact');
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
