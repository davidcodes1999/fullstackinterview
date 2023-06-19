<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $users = DB::table('customers')->get();
    $count = $users->count();
    return view('dashboard')->with('usercount',$count);
});

Route::get('adduser', function () {
    return view('adduser');
});

Route::get('/users', [crudcontroller::class, 'getallusers']);
Route::post('/adduser', [crudcontroller::class, 'postuser']);
Route::post('/updateuser', [crudcontroller::class, 'updateuser']);
Route::post('/deleteuser', [crudcontroller::class, 'deleteuser']);

