<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {
    if (! file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
        return redirect('/');
    }

    $post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path)); // 2nd parament = when this cache item will be deleted => 1200s
    // now()->addHour()/addDay()/addDays()/addWeeks()/addMinutes(20) => also allows

    return view('post', ['post' => $post]);
})->where('post', '[A-z_\-]+'); //check if path contains only letters and "-"

// ->whereAlpha('post') => only letters
// ->whereAlphaNumeric('post') => only letters and numbers
// ->whereNumeric('post') => only numbers