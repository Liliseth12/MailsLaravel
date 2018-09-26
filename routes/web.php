<?php
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendMails;
use Illuminate\Support\Facades\Mail;
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

Route::get('send-main', 'HomeController@sendMail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('mail/send', function(){
	Mail::to('liliseth12@gmail.com')->send(new SendMails);
	return view('mails.newmail');
});