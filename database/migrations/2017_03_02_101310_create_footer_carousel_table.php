<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer_carousels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('page_type')->default('default');
            $table->boolean('primary')->default(false);
            
            $table->mediumText('body')->nullable();
            $table->mediumText('caption')->nullable();
            $table->mediumText('name')->nullable();
            $table->mediumText('img_url')->nullable();

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
        Schema::dropIfExists('footer_carousels');
    }
}
