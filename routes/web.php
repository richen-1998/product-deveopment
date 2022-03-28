<?php


use App\Http\Controllers\User\User;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});


Auth::routes();

// Route::middleware('auth')->get('/admin/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware'=> 'auth'], function(){
    Route::get('/admin/dashboard','App\Http\Controllers\HomeController@index' )->name('dashboard');
    
    Route::get('/dashboard','App\Http\Controllers\UserController@index')->name('user.welcome');
});


/*......................ADMIN....................*/
//live
Route::resource('/admin/live','App\Http\Controllers\LiveController');

//highlight
Route::resource('/admin/highlight','App\Http\Controllers\HighlightsController');

//archive
Route::resource('/admin/archive','App\Http\Controllers\ArchiveController');

//userRequest
Route::resource('/admin/userRequest','App\Http\Controllers\UserRequestController');

//Block user
Route::resource('/admin/blockuser','App\Http\Controllers\UserBlockController');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





/*..........................USER..................*/

//userlive
Route::resource('/user/userlive','App\Http\Controllers\UserLivedController');

Route::resource('/user/userhome','App\Http\Controllers\UserController');

Route::resource('/user/usercontact','App\Http\Controllers\UserContactUs');

Route::resource('/user/userhelp','App\Http\Controllers\UserHelp');

Route::resource('/user/userhighlight','App\Http\Controllers\UserHighLightController');

Route::resource('/user/usercomment','App\Http\Controllers\CommentController');

Route::resource('/user/userprofile','App\Http\Controllers\UserProfileController');

Route::resource('/user/userrequest','App\Http\Controllers\UserRequestController');