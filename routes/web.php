<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/sendmail', 'MailUserController@sendAll')->name('sendAll');

Auth::routes();

Route::get('/pagos/{contra}', 'PaymentsController@payments')->name('payments');
Route::get('/aspirantes/{contra}', 'UserController@aspirants')->name('aspirants');
Route::get('/tutores/{contra}', 'UserController@tutors')->name('tutors');
Route::get('/usuarios/{contra}', 'UserController@users')->name('users');
Route::get('/payments', 'PaymentsController@payments')->name('payments.api');
Route::get('/aspirants', 'UserController@aspirants')->name('aspirants.api');
Route::get('/tutors', 'UserController@tutors')->name('tutors.api');
Route::get('/users', 'UserController@users')->name('users.api');
#region [Profile]
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/user/profile', 'UserController@profile')->name('profile.api');
Route::post('/user/profile/update', 'UserController@profileUpdate')->name('profile.update.api');
#endregion [Profile]
#region [Routes Paypal]
Route::post('user/audition/payment/create', 'PaymentsController@payAuditionC')->name('payment.audition.c');
Route::post('/user/audition/payment/approve', 'PaymentsController@payAuditionA')->name('payment.audition.a');
Route::get('/paypal/config', 'PaymentsController@config')->name('config.api');
#endregion [Routes Paypal]

#region [Routes Public]
Route::resource('user', 'UserController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PublicController@welcome')->name('welcome');
Route::get('/camp', 'PublicController@camp')->name('camp');
Route::get('/tour', 'PublicController@tour')->name('tour');
Route::get('audition/partitura/{title}','PublicController@vistaPreviaPartitura')->name('audition.partitura');
Route::get('audition/document/{title}','PublicController@vistaPreviaDocument')->name('audition.document');
Route::get('/audition', 'PublicController@audition')->name('audition');
#endregion [Routes Public]

Route::get('/artisan/{comand}', function ($comand) {
return Artisan::call($comand);
});
