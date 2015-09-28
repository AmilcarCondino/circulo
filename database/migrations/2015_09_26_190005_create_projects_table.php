<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('authors')->nullable();
            $table->integer('projected_total_modules');
            $table->integer('projected_total_pages');
            $table->string('format')->nullable();
            $table->string('alternative_format')->nullable();
            $table->text('complementary_materials')->nullable();
            $table->text('notes')->nullable();
            $table->integer('isbn_number')->nullable();
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
        Schema::drop('projects');
    }
}
