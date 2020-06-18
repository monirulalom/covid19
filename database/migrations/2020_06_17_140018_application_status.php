<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApplicationStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->string('description');
        });
        Schema::create('application_status', function (Blueprint $table) {
            $table->foreignId('application_id');
            $table->foreignId('status_id');

            $table->foreign('application_id')->references('id')->on('applications');
            $table->foreign('status_id')->references('id')->on('statuses');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_status');
        Schema::dropIfExists('statuses');
    }
}
