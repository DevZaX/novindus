<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture');
            $table->string('title');
            $table->string('new_price');
            $table->string('old_price');
            $table->integer('disponibilitie');
            $table->text('description');
            $table->integer("titre_id")->undigned();
            $table->foreign('titre_id')->references('id')->on('titres');
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
        Schema::dropIfExists('arts');
    }
}
