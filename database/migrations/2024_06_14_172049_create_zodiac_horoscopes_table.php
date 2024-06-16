<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZodiacHoroscopesTable extends Migration
{
    public function up()
    {
        Schema::create('zodiac_horoscopes', function (Blueprint $table) {
            $table->id();
            $table->string('sign');
            $table->text('prediction');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zodiac_horoscopes');
    }
}
