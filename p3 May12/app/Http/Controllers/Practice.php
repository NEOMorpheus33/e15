<?php
namespace App\Http\Controllers; 
namespace app\Actions\Sites; 
use Illuminate\Http\Request; 
use\app\models\Sites;  
use app\CustomClass\stdClass; 
use stdClass; 


//<--!Skip Buck Fixng this practice controller and output file delete if neccesary
//before handing in. Also delete dd(): , dumps, $debugs --> 


$sites = new Sites();  
       
        $sites->title = $newSitesData->title; 
        $sites->description = $newSitesData->description;  
        $sites->body = $newSitesData->body; 
        $sites->sitemapxml = $newSitesData->sitemapxml; 
        $sites->save(); 
   
   $this->results = newstdClass(); 
   $this->results->title=book->title;   

   $action = StoreNewSites();  
   
       
 