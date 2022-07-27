<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('city_name', 40);
            $table->char('uf', 2);
            $table->string('zip_code', 10)->nullable();
            $table->string('population', 10)->nullable();
            $table->string('region', 20);
            $table->string('country', 40);
            $table->longText('description')->nullable();
            $table->smallInteger('yearFoundation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
