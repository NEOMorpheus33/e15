<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DOMDocument;
use App\Models\Serp;
use App\Models\create;
use App\Models\Site;
use App\Actions\JoeSearch

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class JoeSearchController extends Controller
{
    public function index()
    {
        $sites = Site::orderBy('url', 'ASC')->get();
        $newSites = Site::orderBy('id', 'DESC')->limit(3)->get();
        $newSites = $sites->sortByDesc('id')->take(3);
        $url ='';
        $title='';
        $description='';
        $body='';

        $serps = session('serps');

        return view('index', ['serps' => $serps,'url'=>$url,'title'=>$title,'description'=>$description,'body'=>$body]);
    }

    //  'serps',  // <-- This will be available in the view as $project
    //  $serps  // <-- This will be contained in the $project variable in the view
    
    public function processite() 
    {
        $sites = Site::orderBy('url', 'ASC')->get();
        $newBooks = Book::orderBy('id', 'DESC')->limit(3)->get();
        $newSites = $sites->sortByDesc('id')->take(3);

        $sites = session('sites');

        return view('index', ['sites' => $sites]);
    }
   

    public function create(Request $request)
    {
        $sites = new Site();
        
        $sites->title = $request->title;
        $sites->description = $request->description;
        $sites->body = $request->body;
        $sites->sitemapxml = $request->sitemapxml;
        $sites->save();
        
           
        return view('index', ['serps' => $serps,'url'=>$url,'title'=>$title,'description'=>$description,'body'=>$body]);
    }
}


     function index(Serps $request)
     {
        //serps update not working yet
         $isAccessible = Arr::accessible(['a' => 1, 'b' => 2]);
         $serps::all($id); # Get all the serps
    $serps::find($id); # Find a site by its id
    $serps::delete($id); # Delete my site submitted
    return view('index', ['serps' => $serps,'url'=>$url,
    'title'=>$title,'description'=>$description,'body'=>$body]);
     } 

{
    # Invoke the Eloquent `save` method to generate a new row in the
    # `sites` table, below

     function store(Request $request)
     {
         //new Site object model instantiate an object model right below
    $sites = new Site();
    $request->validate([
    'url'=>'required|max:25',
    'title'=>'required|max:100',
    'description'=>'required|max:200',
    $sites = new Site(['Site added to row' => 'Your Site was added.'])
  //  $sites = Site::find(1);  
    
return view('index', ['serps' => $serps,'url'=>$url,'title'=>$title,'description'
    =>$description,'body'=>$body]);
    
     { 
     
# Set the properties
# Note how each property corresponds to a column in the table
    
    return redirect('CRUD/create')->with(['flash-alert' => 'Your site '.$sites->title.' was added.']);
    
{
     function process(Request $request)
     {
         $startUrl = "https://www.harvard.edu";
         $details = $this->get_details($startUrl);
         //create an empty instance of our model right below
         $serps = new Serp();
         $body = $details['body'];
         $searchTerms = $request->JoeSearch;
//*.Additional Ideas. js,
//*SiteOutboundLinks, PageOutboundLinks
//*InternalLinks, viewport, dlspeed,sitespeed waybackage(site age), sitemapxml, sitemaphtml,
//*# https://www.php.net/manual/en/function.strpos.php
//*# strpos($body, $request->JoeSearch);
//*# https://www.php.net/manual/en/function.substr.php
//*# Search within the $body for the $request->JoeSearch
 //* extra bonus material not required # Find the location of the search terms in the body
//* To get context, get substring to the left and right of the location
        
         $searchTermLocation = strpos($body, $searchTerms);
    
         $serps->url = $details['url'];
         $serps->title = $details['title'];
         $serps->description = $details['description'];
         $serps->body = $details['body'];
         $serps->save();
        
         return redirect('/')->with(['serps' => $serps]);
     }
    
    
   
}

 

 
        // The array that we pass to stream_context_create() to modify our User Agent.
    $options = [
                'http' => [
                'method' => "GET",
                'headers' => "User-Agent: JoeBot/0.1\n"
                ]
            ];
    // Create the stream context.
    $doc = new DOMDocument();
    $context = stream_context_create($options);
    // Create a new instance of PHP's DOMDocument class.
    // Use file_get_contents() to download the page, pass the output of file_get_contents()
    // to PHP's DOMDocument class.
        
        
    @$doc->loadHTML(@file_get_contents($url, false, $context));

    $body = $doc->getElementsByTagName("body");
    $body = $body->item(0)->nodeValue;
    
    // There should only be one <title> on each page, so our array should have only 1 element.
    $title = $doc->getElementsByTagName("title");
    $title = $title->item(0)->nodeValue;

    // Give $description and $keywords no value initially. We do this to prevent errors.
    $description = "";
    $keywords = "";
    // Create an array of all of the pages <meta> tags. There will probably be lots of these.
    $metas = $doc->getElementsByTagName("meta");
    // Loop through all of the <meta> tags we find.
    for ($i = 0; $i < $metas->length; $i++) {
        $meta = $metas->item($i);
        // Get the description and the keywords.
        if (strtolower($meta->getAttribute("name")) == "description") {
            $description = $meta->getAttribute("content");
        }
        if (strtolower($meta->getAttribute("name")) == "keywords") {
            $keywords = $meta->getAttribute("content");
        }
    }
    //Return our JSON string containing the title, description, keywords and URL.
    //Return '{"Title": "'.str_replace("\n", "", $title).'", "Description": "'.str_replace("\n", "", $description).'", "Keywords": "'.str_replace("\n", "", $keywords).'", "URL": "'.$url.'"},';

    return [
            'url' => str_replace("\n", "", $url),
            'title' => str_replace("\n", "", $title),
            'description' => str_replace("\n", "", $description),
            'body' => str_replace("\n", "", $body)
        ];
}
    
     function update(Request $request, $sites)
     {
         $sites = Site::where('sites', '=', $sites)->first();

         $request->validate([
        'title' => 'required',
        'url' => 'required|unique|max:1000',
        'description' => 'required',
        'body' => 'required|max:10000',
        ]);

         $sites->sites = $request->old('sites');
         $url->url = $request->old('url');
         $description->description = $request->old('description');
         $body->body = $request->old('body');
         $sitemapxml->sitemapxml = $request->old('sitemapxml');
         $sites->save();

         return redirect('/CRUD/create'.$sites.'/edit')->with('sites => $sites');
     }
