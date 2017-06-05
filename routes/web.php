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


/*
|--------------------------------------------------------------------------
| English Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
     $englishes = DB::table('englishes')->get();
     $en_stories = DB::table('en_stories')->get();
    return view('en/home_en', compact('englishes', 'en_stories'));
});

Route::get('/en', function () {
     $englishes = DB::table('englishes')->get();
     $en_stories = DB::table('en_stories')->get();
    return view('en/home_en', compact('englishes', 'en_stories'));
});


Route::get('/contact', function () {
    return view('en/contact');
});

Route::get('/imprint', function () {
    $imprints = DB::table('imprints')->get();
    return view('en/imprint', compact('imprints', 'im'));
});








/*
|--------------------------------------------------------------------------
| Deutsch Routes
|--------------------------------------------------------------------------

*/

Route::get('/de', function () {
     $services = DB::table('services')->get();
     $de_stories = DB::table('de_stories')->get();
    return view('de/home_de', compact('services', 'de_stories'));
});


Route::get('/de/impressum', function () {
    return view('de/impressum');
});

Route::get('/de/contact', function () {
    return view('de/contact_de');
});



/*
|--------------------------------------------------------------------------
| Other Routes
|--------------------------------------------------------------------------

*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/sendmail', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
    $mailer
        ->to('majkicmarko29@yahoo.com')->send(new \App\Mail\MyMail($request->input('name'),$request->input('email'),$request->input('textarea')));

    Session::flash('success', 'We received your request and will get beck to you as soon as possible.');
    Session::flash('success_de', 'Wir haben Ihre Anfrage erhalten und werden Sie sobald wie möglich kontaktieren.');    
        
    return redirect()->back();
})->name('sendmail');

