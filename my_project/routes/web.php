
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');


});
Route::get('/sosi', function () {
    return view('user.sosi');


});


Route::resource('students', StudentController::class); 
