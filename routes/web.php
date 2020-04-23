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

Route::get('/', function () {
    return view('index');
});


// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/features', function () {
    //return view('features');
    $features_halaman='features page baru';
    return view('features',['featuresrouting' => $features_halaman]);
});

Route::get('/pricing', function () {
    $nama_halaman='pricing page baru';
    return view('pricing',['namarouting' => $nama_halaman]);
});

route::get('/mahasiswa', 'MahasiswaController@index');
// route::get('/students', 'StudentsController@index');
// route::get('/students/{student}', 'StudentsController@show');
// route::get('/students/create', 'StudentsController@create');
// route::post('/students', 'StudentsController@store');
Route::resource('/students', 'StudentsController');