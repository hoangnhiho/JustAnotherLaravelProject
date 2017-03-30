<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('caption');            
            $table->mediumText('desc')->nullable();

            $table->string('prop_type')->default('house');
            $table->string('type')->default('rent');
            $table->decimal('price',10,2)->nullable();
            $table->decimal('bond',10,2)->nullable();

            // $table->integer('company_id')->unsigned();
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            // 'type', 'landsize', 'council_rate', 'water_rate'

            $table->integer('car_no')->unsigned()->default(0);
            $table->integer('bath_no')->unsigned()->default(0);
            $table->integer('bed_no')->unsigned()->default(0);

            $table->integer('landsize')->unsigned()->nullable();
            $table->integer('council_rate')->unsigned()->nullable();
            $table->integer('water_rate')->unsigned()->nullable();

            $table->mediumText('img_url')->nullable();
            $table->mediumText('img_urls')->nullable();

            $table->mediumText('floor_plan')->nullable();

            $table->mediumText('address')->nullable();
            $table->decimal('lng',10,7);
            $table->decimal('lat',10,7);
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
        Schema::dropIfExists('listings');
    }
}
