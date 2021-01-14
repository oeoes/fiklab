<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailableClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('available_classes', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('class_name');
            $table->text('description');
            $table->timestamps();
            $table->text('courses');
            $table->string('head_lab');
            $table->string('technician');
            $table->string('room');
            $table->string('capacity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('available_classes');
    }
}
