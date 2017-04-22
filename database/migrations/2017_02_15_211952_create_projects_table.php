<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('caption');     
            $table->mediumText('mini_desc')->nullable();       
            $table->mediumText('desc')->nullable();
            $table->mediumText('img_url')->nullable();
            $table->mediumText('img_urls')->nullable();
            $table->mediumText('floor_plan')->nullable();
            
            $table->boolean('sold')->default(false);   
            $table->boolean('show')->default(true);   

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
