<?php

use App\Http\Controllers\JoeSearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\View\FileViewFinder;
use App\Http\Controllers\PostController;

Route::any('/practice/{n?}', [JoeSearchController::class, 'index']);

Route::get('/', [JoeSearchController::class, 'index']);
Route::get('/search', [JoeSearchController::class, 'search']);
Route::get('/history', [JoeSearchController::class, 'history']);

Route::get('/createpractice', [JoeSearchController::class,'index'])->middleware('auth');

//* Debug code for removal on production at some point *//
//* Thu night passed test May 13 *//

Route::get('/debug', function () {
    $debug = [
        'Environment' => App::environment(),
    ];

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
