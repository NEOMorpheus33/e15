<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * First practice example
     * GET /practice/1
     */
    public function practice1()
    {
        dump('This is the first example.');
    }

    /**
     * ANY (GET/POST/PUT/DELETE)
     * /practice/{n?}
     * This method accepts all requests to /practice/ and
     * invokes the appropriate method.
     * http://e15bookmark.loc/practice => Shows a listing of all practice routes
     * http://e15bookmark.loc/practice/1 => Invokes practice1
     * http://e15bookmark.loc/practice/5 => Invokes practice5
     * http://e15bookmark.loc/practice/999 => 404 not found
     */
    public function index(Request $request, $n = null)
    {
        $methods = [];

        # Load the requested `practiceN` method
        if (!is_null($n)) {
            $method = 'practice' . $n; # practice1

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method($request) : abort(404);
        } # If no `n` is specified, show index of all available methods
        else {
            # Build an array of all methods in this class that start with `practice`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'practice')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('practice')->with(['methods' => $methods]);
        }
    }
}

   
   
// Store new sites practice code         

namespace app\Actions\Sites;     
 
 use\app\models\Sites;  
 use app\CustomClass\stdClass; 
 use stdClass; 

class StoreNewSites {    
    public $results; 
    public function__construct($newSitesData)   
   
   {    

$sites = new Sites();  
       
        $sites->title = $newSitesData->title; 
        $sites->description = $newSitesData->description;  
        $sites->body = $newSitesData->body; 
        $sites->sitemapxml = $newSitesData->sitemapxml; 
        $sites->save(); 
   
   $this->results = newstdClass(); 
   $this->results->title=book->title;   

   $action = StoreNewSites();  
   
   }    
} 
