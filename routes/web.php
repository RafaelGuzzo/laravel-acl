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

Route::resource('usuarios', 'Admin\UserController');
Route::get('/usuarios/role/{user}', 'Admin\UserController@role')->name('usuarios.role');
Route::post('/usuarios/role/{user}', 'Admin\UserController@roleStore')->name('usuarios.role.store');
Route::delete('/usuarios/role/{user}/{role}', 'Admin\UserController@roleDestroy')->name('usuarios.role.destroy');

Route::resource('roles', 'Admin\RoleController');
Route::get('/roles/permission/{role}', 'Admin\RoleController@permission')->name('roles.permission');
Route::post('/roles/permission/{role}', 'Admin\RoleController@permissionStore')->name('roles.permission.store');
Route::delete('/roles/permission/{role}/{permission}', 'Admin\RoleController@permissionDestroy')->name('roles.permission.destroy');

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
