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


// Route::get('view/action_page3.php', function () {
//     return view('action_page3');
// });

// Route::get('view/action_pageradio.php', function () {
//     return view('action_pageradio');
// });
