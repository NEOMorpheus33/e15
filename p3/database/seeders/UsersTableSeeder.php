<?php  

namespace Database\Seeders;  

use Illuminate\Database\Seeder;   
use Illuminate\Support\Str; 
use App\Models\Users; # Make our Users  Model accessible  
use Carbon\Carbon; # We’ll use this library to generate timestamps
use Faker\Factory; # We’ll use this library to generate random/fake data

class UsersTableSeeder extends Seeder  
{
    /**
     * This run method is the first method you should have in all your Seeder class files
     * This method will be invoked when we invoke this seeder
     * In this method you should put code that will cause data to be entered into your tables
     * (in this case, that's the `sites` table)
     */
    public function run() 
    {
        # Three different examples of how to add Sites  
        //$this->addOneSite();
        //$this->addAllSitessFromSitesDotJsonFile();
        //$this->addRandomlyGeneratedSitesUsingFaker();
    }

    /**
     *
     */
    private function addOneUsers()
    {
        $Users = new Users(); 
        $site->url = ' '; 
        $site->title = 'website title info'; 
        $site->description = 'Anthony Weir'; 
        $site->body =' ';   
        $site->sitemapxml = 'xml sitemap here';  
        $site->save();
    }

    /** 
     *
     */
    private function addAllSitesFromSitesDotJsonFile() 
    {
        $siteData = file_get_contents(database_path('sites.json'));
        $sites = json_decode($serpsData, true);
    
        $count = count($sites);
        foreach ($sites as $url => $siteData) {
            $sites = new sites();

            # For the timestamps, we're using a class called Carbon that comes with Laravel
            # and provides many date/time methods.
            # Learn more: https://github.com/briannesbitt/Carbon
           # $book->created_at = Carbon::now()->subDays($count)->toDateTimeString();
           # $book->updated_at = Carbon::now()->subDays($count)->toDateTimeString();
           # $book->slug = $slug;
           # $book->title = $bookData['title'];
           # $book->author = $bookData['author'];
           # $book->published_year = $bookData['published_year'];
           # $book->cover_url = $bookData['cover_url'];
           # $book->info_url = $bookData['info_url'];
           # $book->purchase_url = $bookData['purchase_url'];
           # $book->description = $bookData['description'];

            $book->save();
            $count--;
        }
    } 

    /** 
     *
     */ 
    private function addRandomlyGeneratedBooksUsingFaker()
    {
        # For this example, we'll generate random seed data using a package that
        # comes with Laravel called Faker: https://github.com/fzaninotto/Faker
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $book = new Book();

            $title = $faker->words(rand(3, 6), true);
            $book->title = Str::title($title);
            $book->slug = Str::slug($title, '-');
            $book->author = $faker->firstName . ' ' . $faker->lastName;
            $book->published_year = $faker->year;
            $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/cover-placeholder.png';
            $book->info_url = 'https://en.wikipedia.org/wiki/' . $book->slug;
            $book->purchase_url = 'https://www.barnesandnoble.com/' . $book->slug;
            $book->description = $faker->paragraphs(1, true);

            $book->save();
        }
    }
}




   



     
        
    

