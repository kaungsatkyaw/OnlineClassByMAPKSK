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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('/user/profile', 'HomeController@profile')->name('frontend.profile');
Route::get('/','FrontendController@home');

Route::get('/courses','FrontendController@index')->name('frontend.courses');
Route::get('/news','FrontendController@new')->name('frontend.news');
Route::post('/news','FrontendController@new')->name('frontend.news');

Route::get('/events','FrontendController@event')->name('frontend.event'); 
Route::get('/contact','FrontendController@contact')->name('frontend.contact');
Route::post('/feedbackToAdmin','FrontendController@feedbackAdmin')->name('feedback.admin' );

Route::get('/detail/{id}','FrontendController@detail')->name('frontend.detail');
Route::get('tag/{id}','FrontendController@category')->name('frontend.category');
Route::get('/show/{id}','FrontendController@show')->name('frontend.show');
Route::get('/student/cancel/{id}','StudentController@cancel')->name('student.cancel_req');
Route::get('/about','FrontendController@about')->name('frontend.about');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('category', 'CategoryController');

    Route::resource('pagenew', 'PagenewController');

    Route::resource('teacher', 'TeacherController');

    Route::resource('event', 'EventController');

    Route::resource('feedbackAdmin', 'feedbackAdminController');

    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    })->name('dashboard');
    Route::patch('/adminUpdateProfile/update/','AdminupdateProfileController@update')->name('admin.updateProfile.update');
    Route::patch('/adminUpdateProfile/changePassword/','AdminupdateProfileController@changePassword')->name('admin.updateProfile.changePassword');
    Route::get('/adminUpdateProfile','AdminupdateProfileController@index')->name('admin.updateProfile');

    Route::resource('feedback', 'FeedbackController');
    Route::resource('course', 'CourseController');

    Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

    Route::post('/buy','StudentController@create')->name('student');

    Route::get('/student','StudentController@index')->name('student.index');
    Route::get('/student/accept/{id}','StudentController@accept')->name('student.accept');

    Route::get('/markAsRead',function(){
        auth::user()->unreadNotifications->markAsRead();
    });
});


