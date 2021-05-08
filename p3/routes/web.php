<?php

use App\Http\Controllers\JoeSearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\View\FileViewFinder;

Route::get('/', [JoeSearchController::class, 'index']);
Route::get('/process', [JoeSearchController::class, 'process']);
Route::get('/create', [JoeSearchController::class, 'index']);
Route::get('/url', [JoeSearchController::class, 'index']);
Route::get('CRUD/create', [JoeSearchController::class, 'create']);
Route::get('CRUD/create', [JoeSearchController::class, 'processs'])


 
//Route::get('/debug', function () {

    # List Routes

   

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

    //try {
      //  $databases = DB::select('SHOW DATABASES;');
        //$debug['Database connection test'] = 'PASSED';
        //$debug['Databases'] = array_column($databases, 'Database');
    //} catch (Exception $e) {
      //  $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
   // }

   // dd($debug);
;
