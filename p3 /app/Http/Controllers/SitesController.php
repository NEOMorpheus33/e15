<?php        

namespace app\Actions\Sites;     
 
 use\app\models\Sites;  
 use app\CustomClass\stdClass; 
 use stdClass; 

class StoreNewSites {    
    public $results; 
    public function__construct$newSitesData 
   
{

$sites = new Sites();  
{
       
        $sites->title = $newSitesData->title; 
        $sites->description = $newSitesData->description;  
        $sites->body = $newSitesData->body; 
        $sites->sitemapxml = $newSitesData->sitemapxml; 
        $sites->save(); 
   
   $this->results = newstdClass(); 
   $this->results->title=book->title;   

   $action = StoreNewSites();  

}
   
     
