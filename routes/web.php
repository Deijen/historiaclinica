<?php
/**
 * Diego es un administrador.
 */
//App\User::create([
 //'name' => 'diego',
 //'email' => 'dipomar@hotmail.com',
 //'password' => bcrypt('12345678'),
 //'role' => 'Admin'

 /**
 * Andres es un paciente.
 */
  //App\User::create([
 //'name' => 'andres',
 //'email' => 'andres@hotmail.com',
 //'password' => bcrypt('12345678'),
 //'role' => 'paciente'


//]);
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

Route::get('/', ['as' => 'home1' ,function(){
   // echo "<a href= ". route('contactos') . "> Contacto </a><br> ";  Ejemplo de como hacer llamado
   return view('welcome');
}]);

Route::get('contactanos', ['as'=>'contactos', function(){  //se le da nombre a la ruta. Nombre: contactos
    return view('saludo');

}]);

Route::get('saludos/{nombre?}', function($nombre = "invitado"){  //el ? es para cuando no se pasa el parametro. Se pasa "invitado" por defecto
    return "hola! $nombre"; 

})->where('nombre', "[A-Za-z]+");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');  //ruta para el logout