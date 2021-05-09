<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use DOMDocument;
use App\Models\Serps;
use App\Models\create;
use App\Models\Site;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class JoeSearchController extends Controller
{
    public function index()
    {
        $sitess = Site::orderBy('title', 'ASC')->get();

        //$newBooks = Book::orderBy('id', 'DESC')->limit(3)->get();
        
        $newSites = $sites->sortByDesc('id')->take(3);

        $serps = session('serps');

        $newSites->sites= $request->sites;

        return view('sites', ['sites' => $sites, 'newSooks' => $newSites]);
    }
   

    public function create(Request $request)
    {
        return view('/CRUD/create');
    }
    
    //public function index(Serps $request)
    //  return view('index', ['Serps' => $serps]);
    // serps update not working yet
    //$isAccessible = Arr::accessible(['a' => 1, 'b' => 2]);
    //Serps::all($id); # Get all the serps
    //serps::find($id); # Find a site by its id
    //serps::delete($id); # Delete my site submitted

    
    public function store(Request $request)
        # Instantiate a new Site Model object
    {
        $sites = new Site();

        $request->validate([
        
            'url'=>'required|max:25',
            'title'=>'required|max:100',
            'description'=>'required|max:200',
            ]);

        $sites->url = 'url';
        $sites->title = 'information';
        $sites->description = 'description';
        $sites->body = 'body';
        $sites->sitemapxml = 'sitemapxml';
     
        # Invoke the Eloquent `save` method to generate a new row in the
        # `sites` table, with the above data
    
        $sites->save();

        return redirect('/books/create')
        ->with(['/' => 'The Sites “'.$sites->title,$sites->url, $sites->description,
        $sites->body, $sites->sitemapxml,
        '” was added.']);

        
        {
        
    }


        # Set the properties
        # Note how each property corresponds to a column in the table
    
        

        return redirect('CRUD/create')->with(['flash-alert' => 'Your site '.$site->title.' was added.']);
    }

    //process Request

    //public function process(Request $request
    //{

    public function process(Request $request)
    {
        $startUrl = "https://www.harvard.edu";
        $details = $this->get_details($startUrl);

        //create an empty instance of our model right below

        $serps = new Serps();
        $body = $details['body'];
        $searchTerms = $request->JoeSearch;

        //*.Additional Ideas. js,
        //SiteOutboundLinks, PageOutboundLinks
        //InternalLinks, viewport, dlspeed,sitespeed waybackage(site age), sitemapxml, sitemaphtml,
        //robots.txt, pagethemekey,siteupdatefreq, pageupdatefreq, stylescore, validate *//
        
        
        # https://www.php.net/manual/en/function.strpos.php
        # "research"   strpos
        # strpos($body, $request->JoeSearch);
        # https://www.php.net/manual/en/function.substr.php

        # Search within the $body for the $request->JoeSearch
        # Found the location of the search terms in the body
        # To get context, get substring to the left and right of the location
        $searchTermLocation = strpos($body, $searchTerms);
        
       
        $serps->url = $details['url'];
        $serps->title = $details['title'];
        $serps->description = $details['description'];
        $serps->body = $details['body'];
        
        $serps->save();
        
        return redirect('/')->with(['serps' => $serps]);
    }
    
    public function get_details($url)
    {

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

        /**
     * PUT /books
    */
    
        function update(Request $request, $sites)
        {
            $sites = Site::where('sites', '=', $slug)->first();

            $request->validate([
            'title' => 'required',
            'url' => 'required|unique:books,url,'.$sites->id.'|max:1000',
            'description' => 'required',
            'body' => 'required|max:10000',
            'sitemapxml' => 'sitemapxml',
    ]);

            $sites->title = $request->title;
            $sites->url = $request->url;
            $book->description = $request->description;
            $book->body = $request->body;
            $book->sitemapxml = $sitemapxml;
            $book->save();

            return redirect('/create'.$sites.'/edit')->with('sites => $sites');
        }
    }
}
