<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBonusDiscountCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonus__discount__categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250)->nullable(false);
            $table->string('description',2000)->nullable();
            $table->boolean('enabled')->nullable(false);
            $table->char('appears_in',1)->nullable(false);
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
        Schema::dropIfExists('bonus__discount__categories');
    }
}
