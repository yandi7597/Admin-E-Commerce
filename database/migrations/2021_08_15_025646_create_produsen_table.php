<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdusenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produsen', function (Blueprint $table) {
            $table->id();
            $table->string('produsen',100);
            $table->string('alamat',100);
            $table->string('no_hp',15);
            $table->string('website',100);
            $table->string('kontak',100);
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
        Schema::dropIfExists('produsen');
    }
}
