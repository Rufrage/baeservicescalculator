<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUmzugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umzugs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('vorname');
            $table->string('nachname');
            $table->integer('wohnzimmer_sofa')->default(0);
            $table->integer('wohnzimmer_sitzlandschaft')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('umzugs');
    }
}
