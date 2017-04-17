<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('caption')->nullable();            
            $table->mediumText('desc')->nullable();
            $table->mediumText('img_url')->nullable();
            $table->mediumText('pdf_url')->nullable();

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
        Schema::dropIfExists('mags');
    }
}
