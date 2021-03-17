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



Route::get('/sendmail', 'MailUserController@sendAll')->name('sendAll');

Auth::routes();

Route::get('/aspirantes/{contra}', 'UserController@aspirants')->name('aspirants');
Route::get('/aspirants', 'UserController@aspirants')->name('aspirants.api');
Route::get('/tutores/{contra}', 'UserController@tutors')->name('tutors');
Route::get('/tutors', 'UserController@tutors')->name('tutors.api');
Route::get('/usuarios/{contra}', 'UserController@users')->name('users');
Route::get('/users', 'UserController@users')->name('users.api');

Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/user/profile', 'UserController@profile')->name('profile.api');
Route::get('/paypal/config', 'PaymentsController@config')->name('config.api');
Route::post('/user/profile/update', 'UserController@profileUpdate')->name('profile.update.api');

Route::post('user/audition/payment/create', 'PaymentsController@payAuditionC')->name('payment.audition.c');

 Route::post('/user/audition/payment/approve', 'PaymentsController@payAuditionA')->name('payment.audition.a');
 



Route::resource('user', 'UserController');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PublicController@welcome')->name('welcome');
Route::get('/camp', 'PublicController@camp')->name('camp');
Route::get('/tour', 'PublicController@tour')->name('tour');
Route::get('audition/partitura/{title}','PublicController@vistaPreviaPartitura')->name('audition.partitura');
Route::get('audition/document/{title}','PublicController@vistaPreviaDocument')->name('audition.document');
Route::get('/audition', 'PublicController@audition')->name('audition');

Route::get('/artisan/{comand}', function ($comand) {
return Artisan::call($comand);
});