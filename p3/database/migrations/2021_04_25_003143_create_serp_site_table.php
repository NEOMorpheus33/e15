≈<?php  

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSerpSiteTable extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void 
     */
    public function up() 
    {
        Schema::create('serp_site', function (Blueprint $table) {
            $table->id();
            $table->timestamps();  

     # `book_id` and `user_id` will be foreign keys, so they have to be unsigned 
        #  Note how the field names here correspond to the tables they will connect...
        # `book_id` will reference the `books` table and `user_id` will reference the `users` table.
        $table->bigInteger('serp_id')->unsigned(); 
        $table->bigInteger('site_id')->unsigned(); 

        # Make foreign keys   
        $table->foreign('serp_id')->references('id')->on('serps'); 
        $table->foreign('site_id')->references('id')->on('sites'); 

        # (Optional) Add additional columns for data you want to associate with this relationship 
$table->text('notes')->nullable();   
$table->text('body');  
$table->text('url'); 
$table->text('title');  
$table->text('description');  
    }); 


        } 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     function down()
    {
        Schema::dropIfExists('serp_site');
    } 


