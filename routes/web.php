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

use App\User;
use App\comment;
use App\level;
use App\category;
use App\course;
use App\tracnghiem;
use App\cauhoi;
use App\dapan;
require_once 'admin.php';
require_once 'user.php';

Route::get('user/login','UserController@loginuser');
Route::post('user/login','UserController@postloginuser');


Route::get('admin/login','UserController@login');
Route::post('admin/login','UserController@postlogin');

Route::get('admin/logout','UserController@logout');
Route::get('user/logout','UserController@logoutuser');


Route::post('user/comment/{idkh}','commentController@postcomment');

Route::get('user/forgetpassword','emailController@forgetpassword')->name('forgetpassword');
Route::get('user/sendmail','emailController@sendEmail')->name('sendcode');
Route::get('user/update-change-pass','emailController@changepass')->name('changepass');



// Route::get('test', function() {
//       $tracnghiem = tracnghiem::where('idkh',8)->get();
//     for($i=0;$i<$tracnghiem->count();$i++){
//         $cauhoi = cauhoi::where('idtn',$tracnghiem[$i]->idtn)->inRandomOrder()->limit(5)->get();
//         $count = cauhoi::where('idtn',$tracnghiem[$i]->idtn)->inRandomOrder()->limit(5)->count();

//     }
//     echo $cauhoi;


// });


//////login facebook///////
Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider')->name('loginfacebook');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');



///////login google/////////
Route::get('/login/google', 'Auth\LoginController@redirectToProvider1')->name('logingoogle');
Route::get('/login/google/callback', 'Auth\LoginController@handleProviderCallback1');

//// dowload pdf//////////
// Route::get('pdf_form', 'PdfController@pdfForm');
// Route::get('/pdf_download', 'pageController@pdfDownload')->name('dowload');

Route::get('get_download/{idkh}', 'pageController@content_download');
// Route::get('ajax/cauhoi/{idtn}','ajaxController@getcauhoi');





/////////////////chat //////////////////

Route::get('/chatify', 'MessagesController@index')->name(config('chatify.path'));

/**
 *  Fetch info for specific id [user/group]
 */
Route::post('/idInfo', 'MessagesController@idFetchData');

/**
 * Send message route
 */
Route::post('/sendMessage', 'MessagesController@send')->name('send.message');

/**
 * Fetch messages
 */
Route::post('/fetchMessages', 'MessagesController@fetch')->name('fetch.messages');

/**
 * Download attachments route to create a downloadable links
 */
Route::get('/download/{fileName}', 'MessagesController@download')->name(config('chatify.attachments.route'));

/**
 * Authintication for pusher private channels
 */
Route::post('/chat/auth', 'MessagesController@pusherAuth')->name('pusher.auth');

/**
 * Make messages as seen
 */
Route::post('/makeSeen', 'MessagesController@seen')->name('messages.seen');

/**
 * Get contacts
 */
Route::post('/getContacts', 'MessagesController@getContacts')->name('contacts.get');

/**
 * Update contact item data
 */
Route::post('/updateContacts', 'MessagesController@updateContactItem')->name('contacts.update');


/**
 * Star in favorite list
 */
Route::post('/star', 'MessagesController@favorite')->name('star');

/**
 * get favorites list
 */
Route::post('/favorites', 'MessagesController@getFavorites')->name('favorites');

/**
 * Search in messenger
 */
Route::post('/search', 'MessagesController@search')->name('search');

/**
 * Get shared photos
 */
Route::post('/shared', 'MessagesController@sharedPhotos')->name('shared');

/**
 * Delete Conversation
 */
Route::post('/deleteConversation', 'MessagesController@deleteConversation')->name('conversation.delete');

/**
 * Delete Conversation
 */
Route::post('/updateSettings', 'MessagesController@updateSettings')->name('avatar.update');

/**
 * Set active status
 */
Route::post('/setActiveStatus', 'MessagesController@setActiveStatus')->name('activeStatus.set');






/*
* [Group] view by id
*/
Route::get('/group/{id}', 'MessagesController@index')->name('group');

/*
* user view by id.
* Note : If you added routes after the [User] which is the below one,
* it will considered as user id.
*
* e.g. - The commented routes below :
*/
// Route::get('/route', function(){ return 'Munaf'; }); // works as a route
Route::get('/{id}', 'MessagesController@index')->name('user');
