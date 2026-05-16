<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pest_id');
            $table->text('prevention')->nullable();
            $table->text('organic_control')->nullable();
            $table->text('chemical_control')->nullable();
            $table->text('biological_control')->nullable();
            $table->foreign('pest_id')->references('id')->on('pests')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('managements');
    }
}
