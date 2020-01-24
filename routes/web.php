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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/teste', function () {
    $users = \App\User::all();
    foreach ($users as $user) {
        echo "Usuario: " . $user->name . "<br>";
        foreach ($user->roles as $role) {
            echo "#Role: " . $role->name . "<br>";
            foreach ($role->permissions as $permission) {
                echo "##Permission: " . $permission->name . "<br>";
            }

        }
    }

});
