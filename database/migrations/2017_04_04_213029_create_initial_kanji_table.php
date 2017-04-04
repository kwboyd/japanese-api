<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialKanjiTable extends Migration
{
     public function up()
       {
           Schema::create('kanjis', function(Blueprint $table) {
             $table->increments('id');
             $table->string('kanji')->default('');
             $table->string('onyomi')->default('');
             $table->string('kunyomi')->default('');
             $table->string('meaning')->default('');
             $table->string('compounds')->default('');
             $table->timestamps();
           });
       }

    public function down()
       {
           Schema::dropIfExists('kanjis');
       }
}
