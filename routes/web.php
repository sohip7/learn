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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-me', function () {
    return view("about",['page_desc'=> "pd"]);
});


Route::view('contact-me', "contact", [
    'page_name' => 'Contact Me Page',
    'page_description' => "<script>This Is Description</script>"
]);
// Route::view('URi', "Page File Name", array of data to send it )

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about-me', function () {
    return view("about", []);
});


// (URI, View, Array Of Data)


Route::get('category/{id}', function ($id) {

    // cats As A database
    $cats = [
        '1' => 'Games',
        '2' => 'Programming',
        '3' => 'Books'
    ];

    return view("category", [
        'the_id' => $cats[$id] ?? "This Id Is Not Found"
        //this format used if the cats[$id] not found will compile the statment after ??
    ]);
});

/*

Route::get('/', function () {
    return view('pages.welcome');
  })->name("home");

  Route::get('/about-us', function () {
    return view("pages.about", []);
  })->name("about");

  // (URI, View, Array Of Data)

  Route::view('contact-me', "pages.contact", [
    'page_name' => 'Contact Me Page',
    'page_description' => "<script>This Is Description</script>"
  ])->name("contact");
// هنا الفكرة الجديدة كلها فصة تسمية الراوت واستخدامه في ملف الناف بار عشان اي تغيير هنا يتطبق هناك


  Route::get('category/{id}', function ($id) {
    $cats = [
      '1' => 'Games',
      '2' => 'Programming',
      '3' => 'Books'
    ];

    return view("pages.category", [
      'the_id' => $cats[$id] ?? "This Id Is Not Found"
    ]);
  });
  */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
