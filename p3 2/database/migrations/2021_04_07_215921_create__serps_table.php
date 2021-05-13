<?php     

use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 

class CreateSERPSTable extends Migration 
{ 
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('serps', function (Blueprint $table) {
            $table->id(); 
            $table->timestamps();
$table->string('url'); 
$table->string('title'); 
$table->longText('body');        
$table->string('description')->nullable();        
$table->string('already_crawled')->nullable();      
$table->string('geturldetails')->nullable();   
$table->string('streamcontext')->nullable();  
    
$table->string('meta canonical')->nullable();  
$table->string('h1')->nullable();  
$table->string('h2')->nullable(); 
$table->string('h3')->nullable(); 
$table->string('backlinksdofollow')->nullable(); 
$table->string('backlinksnofollow')->nullable(); 
$table->string('alt')->nullable();   
$table->string('sitespeed')->nullable(); 
$table->string('validated')->nullable();  
$table->string('SSL')->nullable(); 
$table->string('wordcountsite')->nullable(); 
$table->string('wordcountpage')->nullable();  
$table->string('duplicatecontent')->nullable(); 
$table->string('spam')->nullable(); 
$table->string('semanticBrainAI')->nullable();  

 
       
    }); 
   
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serps');
    }
} 


