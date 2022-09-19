<?php

use App\Http\Controllers\ConditionalStatements;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;





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
Route::get('/test-view', function () {
    return view('test');
});
Route::get('/custom', function () {
    return view('custom');
});
Route::get('/custom1', function () {
    return 'hello world';
});
Route::redirect('/', '/welcome');
Route::view('/welcome','welcome',['name'=>'sandeep','age'=>'29']);
Route::get('/user/{id}/{sandeep}',function($id,$sandeep){
    return ' User '.$id.' '.$sandeep;
});
Route::get('/user/profile',function(){
  //  
})->name('profile');
Route::get('/user',[UserController::class, 'index']);
Route::get('/conditional-statements',[ConditionalStatements::class, 'conditionalstatements']);
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::controller(DemoController::class)->group(function(){
    Route::get('/about','index')->name('about.page')->middleware('check');
    Route::get('/contact','contactmethod');

});

// Route::get('/about',[DemoController::class,'index']);
// Route::get('contact',[DemoController::class,'contactmethod']);

?>
