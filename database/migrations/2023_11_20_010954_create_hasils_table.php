<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('kandidat_id');
            // $table->unsignedBigInteger('pemilih_id');
            $table->foreignId('kandidat_id')->references('id')->on('kandidats')->onDelete('cascade');
            $table->foreignId('pemilih_id')->references('id')->on('pemilihs')->onDelete('cascade');
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasils');
    }
};
