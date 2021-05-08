<?php        

namespace App\Http\Controllers;  
use Illuminate\Support\Facades\URL;       
use Illuminate\Http\Request; 
use DOMDocument;    
use App\Models\Serps;   
use App\Models\create;  
use App\Models\Site;  

class ListController extends JoeSearchController {  

    public function index() { 

        $serps = session('serps', []); 

        return view('index', ['serps' => $serps]);  
    } 

# post /site/{$url/save} 

Route::get('/list', [ListController::class,'Serps']);
Route::post('/list/{url?}/save', [ListController::class, 'save']);
Route::get('/list', [ListController::class,'add']);

$debug = [
    'Environment' => App::environment(),
];

public function save(Request $request, $url)
  
    { 
    
        dd(request)->all(); 
   
    } 

# post site/{$url}/request   

Public function request (Request $request, $url) { 
    $site = Site::findByurl($url); 
    
    
$url = $request->user()->sites()->sortByDesc($site, ('pivot.created_at') 

('list/list', ['sites' => $sites]) 


# get site/{$url}/add 
# to do add validation if possible perhaps add notes 
  
   
{
   function (Request $request, $url)   
  {
    $site = returnsite::findByurl($url);  
    
    return view ('list/add', ['book' => $book]); 
  }
}

(Request , $url) { 
    $site = Site::findByurl($url)
    
    
 = $request->user()->sites()->sortByDesc($site, ('pivot.created_at') 

('list/list', ['sites' => $sites])

 
    
    



  


