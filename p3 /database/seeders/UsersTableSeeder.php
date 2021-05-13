<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Users; # Make our Users  Model accessible
use Carbon\Carbon;  # We’ll use this library to generate timestamps
use Faker\Factory;  # We’ll use this library to generate random/fake data
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends seeders
{
    /**
     * This run method is the first method you should have in all your Seeder class files
     * This method will be invoked when we invoke this seeder
     * In this method you should put code that will cause data to be entered into your tables
     * (in this case, that's the `sites` table)
     */
    public function run()
    {
        # Note the use of the `updateOrCreate` Eloquent method
        # This is useful here because the email for each user has to be unique
        $user = User::updateOrCreate(
            ['email' => 'jill@harvard.edu', 'name' => 'Jill Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]
        );
        
        $user = User::updateOrCreate(
            ['email' => 'jamal@harvard.edu', 'name' => 'Jamal Harvard'],
            ['password' => Hash::make('asdfasdf')
        ]
        );
    }

    /**
     *
     */
    private function addOneUsers()
    {
        $users = new Users();
        $users->url = ' ';
        $users->title = 'Harvard University | Ivy League University | Ivy Cambridge MASS';
        $users->description = 'Harvard U Devoted to Excellence in Teaching, learning';
        $users->body =' ';
        $users->sitemapxml = 'xml sitemap here';
        $users->save();
    }

    /**
     *
     */
    private function addAllSitesFromSitesDotJsonFile()
    {
        $sitesData = file_get_contents(database_path('sites.json'));
        $sites = json_decode($sitesData, true);
    
        $count = count($sites);
        foreach ($sites as $url => $sitesData) {
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

            $sites->save();
            $count--;
        }
    }

    /**
     *
     */
    private function addRandomlyGeneratedUsersUsingFaker()
    {
        # For this example, we'll generate random seed data using a package that
        # comes with Laravel called Faker: https://github.com/fzaninotto/Faker
        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $site = new Site();

            $sites = $faker->words(rand(3, 6), true);
            $sites->title = Str::title($title);
            $sites->url = Str::slug($title, '-');
            $sites->user = $faker->firstName . ' ' . $faker->lastName;
            $sites->url = 'https://harvard.edu' . $sites->url;
            $sites->description = $faker->paragraphs(1, true);

            $sites->save();
        }
    }
}
