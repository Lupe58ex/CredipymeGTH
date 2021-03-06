<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('references', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname_father',30)->nullable(false);
            $table->string('lastname_mother',30)->nullable(false);
            $table->string('name',50)->nullable(false);
            $table->string('role',150)->nullable(false);
            $table->string('phone_number',30)->nullable();
            $table->string('business',500)->nullable();
            $table->string('commet',1500)->nullable();
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
        Schema::dropIfExists('references');
    }
}
