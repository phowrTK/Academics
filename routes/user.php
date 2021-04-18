<?php

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

Route::group(['prefix' => 'user'], function () {


    // Route::group(['prefix' => 'ajax'], function() {

    //     Route::get('/course/{idtn}','ajaxController@getcauhoi')->name('hihi');

    // });


    Route::get('/login','accountController@loginuser');
    Route::post('/login','accountController@postloginuser');


    Route::get('/index2','pageController@index2')->name('index2');
    Route::get('/courses1/{idkh}','pageController@courses1');
    Route::post('/courses1/{idkh}','pageController@logincourses1');


    Route::get('/level/{idlevel}','pageController@level');
    Route::post('/level/{idlevel}','pageController@loginlevel');


    Route::post('/course/dich','pageController@postdich')->name('dich');
    Route::get('/course/{idkh}','pageController@coursesdetail');
    Route::post('/course/{idkh}','pageController@logincoursesdetail');

    Route::get('/allcourse','pageController@allcourse');


    Route::get('/register','pageController@register')->name('register');
    Route::post('/register','pageController@postregister');

    Route::get('/profile','pageController@profile')->name('profile');
    Route::post('/profile','pageController@updateprofile');


    Route::get('/quyen','pageController@quyen');
    Route::post('/quyen','pageController@postquyen');


    Route::get('/dangkhoahoc','pageController@dangkhoahoc');
    Route::post('/dangkhoahoc','pageController@postdangkhoahoc');


    Route::group(['prefix' => 'ajax'], function() {

        Route::get('level/{idlevel}','ajaxController@getlevel');

    });






   Route::get('/index', function () {
       return view('User.index');
   });

    Route::get('/index3', function () {
        return view('User.index3');
    });
    Route::get('/index4', function () {
        return view('User.index4');
    });




    Route::get('/courses3', function () {
        return view('User.courses3');
    });

    Route::get('/grammar1', function () {
        return view('User.grammar1');
    });
    Route::get('/grammar2', function () {
        return view('User.grammar2');
    });
    Route::get('/grammar3', function () {
        return view('User.grammar3');
    });
    Route::get('/grammar1-detail', function () {
        return view('User.grammar1-detail');
    });
});




