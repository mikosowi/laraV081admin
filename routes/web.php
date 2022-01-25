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
 //If This one's not working just check app\Providers\RouteServiceProvider.php and uncomment ( protected $namespace = 'App\\Http\\Controllers'; )
  Route::get('/', 'PagesController@index'); 
  Route::get('/about1', 'PagesController@FuncFromAnyData'); //Test Only but its working
  Route::get('/about2', 'PagesController@FuncFromAnyData_To_View'); //Test Only but its working
  Route::get('/users/{id}/{company}', 'PagesController@usersinfo'); //Test Only but its working

  route::get('employee', 'EmployeeController@index');//SELECT Newly Created Controller
  route::get('/add-employee', 'EmployeeController@create');//SELECT 
  route::post('store-employee', 'EmployeeController@store');//
  route::get('/edit-employee/{id}', 'EmployeeController@edit');//
  route::put('update-employee/{id}', 'EmployeeController@update');//

  // route::get('delete-employee/{id}', 'EmployeeController@delete');//
  route::delete('delete-employee/{id}', 'EmployeeController@delete');//




//  Below Code is working 
//   Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('About Us');
// });
// Route::get('/users/{id}/{company}', function ($id,$comp) {
//     return 'User is:'.$id.' , Company is :'.$comp;
// });
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
