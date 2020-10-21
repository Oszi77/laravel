<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Adatbázis létrehozása.
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //A posts tábla váza alapból egy id és egy timestamps mezővel. Ide tudjuk kézzel megadni a mezőket.
        //a függvény neve a tábla mező típusa.
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->integer("likes")->default(0);
            $table->string("content")->nullable();
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
        Schema::dropIfExists('posts');
    }
}
