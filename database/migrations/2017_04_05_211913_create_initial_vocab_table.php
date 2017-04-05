<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialVocabTable extends Migration
{
  public function up()
    {
        Schema::create('vocabs', function(Blueprint $table) {
          $table->increments('id');
          $table->string('word')->default('');
          $table->string('pronunciation')->default('');
          $table->string('meaning')->default('');
          $table->string('sentence')->default('');
          $table->timestamps();
        });
    }

 public function down()
    {
        Schema::dropIfExists('vocabs');
    }
}
