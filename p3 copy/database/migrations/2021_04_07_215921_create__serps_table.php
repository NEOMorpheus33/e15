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
            $table->string('title');     
            $table->text('body');        
            $table->string('description')->nullable();     
            $table->string('already_crawled')->nullable();  
            $table->string('crawling')->nullable(); 
            $table->string('geturldetails')->nullable(); 
            $table->string('StartUrl')->nullable(); 
            $table->string('optionsarray')->nullable(); 
            $table->string('domdoc')->nullable();
            $table->string('docloadhtml')->nullable();
            $table->string('streamcontext')->nullable();
            $table->string('titlenodevalue')->nullable();
            $table->string('keywords')->nullable();
            $table->string('metas')->nullable(); 
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


