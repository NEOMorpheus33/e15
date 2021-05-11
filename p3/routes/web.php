<?php

use App\Http\Controllers\JoeSearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\View\FileViewFinder;
use App\Http\Controllers\PracticeController;

Route::any('/practice/{n?}', [PracticeController::class, 'index']);
Route::get('/', [JoeSearchController::class, 'index']);
Route::get('/process', [JoeSearchController::class, 'process']);
Route::get('/create', [JoeSearchController::class, 'index']);
Route::get('/url', [JoeSearchController::class, 'index']);
Route::get('/CRUD/create', [JoeSearchController::class, 'create']);
Route::get('/CRUD/create', [JoeSearchController::class, 'process']);
Route::get('/add', [JoeSearchController::class, 'index']);
Route::get('/list', [JoeSearchController::class, 'create']);
Route::get('/sites', [JoeSearchController::class, 'process']);
Route::get('/delete', [JoeSearchController::class, 'index']);
Route::get('/already_crawled', [JoeSearchController::class, 'process']);
Route::get('/JoeSearch', [JoeSearchController::class, 'process']);
Route::get('/show', [JoeSearchController::class, 'process']);
Route::get('/CRUD/create', [JoeSearchController::class, 'index']);
Route::get('/JoeBotArrays', [JoeSearchController::class, 'index']);
Route::get('/CRUD/create', [JoeSearchController::class, 'processite']);

Route::get('/debug', function () {
    $debug = [
      'Environment' => App::environment(),
  ];

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the
    database and you need to confirm your credentials. When you're done
    debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
    #$debug['MySQL connection config'] = config('database.connections.mysql');

   



//Route::get('/practice', function () {
//dump(config(''));
//});

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
