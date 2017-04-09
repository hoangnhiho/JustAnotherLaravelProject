<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('caption')->nullable();            
            $table->mediumText('role')->nullable();
            $table->mediumText('qual')->nullable();
            $table->mediumText('skills')->nullable();

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
        Schema::dropIfExists('careers');
    }
}
