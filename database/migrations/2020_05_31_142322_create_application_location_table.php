<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_location', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id');
            $table->foreignId('division_id');
            $table->foreignId('district_id');
            $table->foreignId('upazilla_id');

            $table->foreign('application_id')->references('id')->on('applications');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('upazilla_id')->references('id')->on('upazillas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_location');
    }
}
