<?php 

/* Author: (copyright) Joseph Paul Fanning Grad student*/ 
/* Author: & Susan Buck Professor */
/* Harvard University */ 


namespace App\Http\Controllers;   

use Illuminate\Http\Request; 
use DOMDocument;
use App\Models\Serps;

class JoeSearchController extends Controller {  

    public function index() { 

        $serps = session('serps', []); 

        return view('index', ['serps' => $serps]);  
    }    

// 

    public function process(Request $request) { 
        
        $startUrl = "https://www.harvard.edu";
        $details = $this->get_details($startUrl); 

        $serps = new Serps();  

        
        // TODO: Save the other details for this search into the database  
        
        //*.Additional Ideas. ALT Tags, h1, h2, h3, bodytext, js, php, asp, content, body,
        //SiteOutboundLinks, PageInboundLinks, SiteInboundLinks, PageOutboundLinks 
        //InternalLinks, viewport, dlspeed,sitespeed waybackage(site age), sitemapxml, sitemaphtml,
        //robots.txt, pagethemekey,siteupdatefreq, pageupdatefreq *// 
        
        
        $body = $details['body']; 
        
        
        # https://www.php.net/manual/en/function.strpos.php
        # "research"   strpos
        # https://www.php.net/manual/en/function.substr.php 

        strpos($body, $request->JoeSearch);
        
        
        
        
        $serps->title = $details['title'];
        $serps->description = $details['description']; 
        $serps->body = $details['body']; 
       
        $serps->save(); 
        
        return redirect('/')->with(['serps' => $serps]);
    } 
    
    public function get_details($url) { 

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
            if (strtolower($meta->getAttribute("name")) == "description") 
                $description = $meta->getAttribute("content");
            if (strtolower($meta->getAttribute("name")) == "keywords")
                $keywords = $meta->getAttribute("content"); 

        }
        // Return our JSON string containing the title, description, keywords and URL.
        //return '{"Title": "'.str_replace("\n", "", $title).'", "Description": "'.str_replace("\n", "", $description).'", "Keywords": "'.str_replace("\n", "", $keywords).'", "URL": "'.$url.'"},';

        return [
            'title' => str_replace("\n", "", $title),
            'description' => str_replace("\n", "", $description),
            'keywords' => str_replace("\n", "", $keywords),
            'url' => str_replace("\n", "", $url),
            'body' => str_replace("\n", "", $body)
        ];

    }

    




} 


