<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChineseHoroscopesTable extends Migration
{
    public function up()
    {
        Schema::create('chinese_horoscopes', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->string('animal');
            $table->text('prediction');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chinese_horoscopes');
    }
}

