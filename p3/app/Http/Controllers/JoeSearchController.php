<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use DOMDocument;
use App\Models\Serp;
use App\Models\create;
use App\Models\Site;
use App\Actions\Sites\StorenewSites;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class JoeSearchController extends Controller
{
    /**
     * GET /
     * The home page
     * Prompts the user to do a search
     * If there are results from a past search, it will show them
     */
    public function index()
    {
        $serps = session('serps');

        return view('index', ['serps' => $serps]);
    }
    
    /**
     * GET /search
     * Processes the search form from the homepage
     * Saves the results in the database
     * Then redirects the user back to the home page where the results are shown
     */
    public function search(Request $request)
    {
        $startUrl = "https://www.harvard.edu";
        $details = $this->get_details($startUrl);
        
        $keywords = $request->keywords;
        
        $serps = new Serp();
        $serps->url = $details['url'];
        $serps->title = $details['title'];
        $serps->description = $details['description'];
        $serps->body = str_replace("\t", "", $details['body']);
        $serps->save();

        return redirect('/')->with(['serps' => $serps]);
    }

    /**
     * GET /history
     * Shows a history of past searches
     */
    public function history(Request $request)
    {
        $searches = Serp::all();

        return view('history', ['searches' => $searches]);
    }

    /**
     * Utility method used by search
     */
    public function get_details($url)
    {
        $options = [
            'http' => [
            'method' => "GET",
            'headers' => "User-Agent: JoeBot/0.1\n"
                ]
        ];

        // Create the stream context
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
       
        return [
            'url' => str_replace("\n", "", $url),
            'title' => str_replace("\n", "", $title),
            'description' => str_replace("\n", "", $description),
            'body' => str_replace("\n", "", $body)
        ];
    }
}