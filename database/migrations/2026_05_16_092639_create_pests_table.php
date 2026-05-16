<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->text('symptoms');
            $table->text('management');
            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pests');
    }
}
