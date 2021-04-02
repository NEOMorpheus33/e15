<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GradeCalculatorController;

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

Route::get('/', [GradeCalculatorController::class, 'index']); 
Route::get('/process', [GradeCalculatorController::class, 'process']); 
Route::get('css/style.css', [GradeCalculatorController::class, 'process']); 
Route::get('css/style.css', [GradeCalculatorController::class, 'style.css']);  





 





