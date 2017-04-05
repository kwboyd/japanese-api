<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialParticleTable extends Migration
{
  public function up()
    {
        Schema::create('particles', function(Blueprint $table) {
          $table->increments('id');
          $table->string('particle')->default('');
          $table->string('meaning')->default('');
          $table->string('sentence')->default('');
          $table->timestamps();
        });
    }

 public function down()
    {
        Schema::dropIfExists('particles');
    }
}
