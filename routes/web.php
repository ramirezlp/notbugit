<?php

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
    return view('index');
});


Route::post('/contacto', [MailController::class, 'send']);

Route::get('/{locale}', function ($locale) {
    if($locale === 'en')
    App::setLocale($locale);
    else
    App::setLocale('es');
    return view('index');
});