<?php

use App\Project;
use PhpParser\Node\Expr\AssignOp\Mod;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Module;
use App\Http\Requests\ModuleRequest;

class CreatePossiblePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('possible_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->boolean('selected')->nullable();
            $table->boolean('downloaded')->nullable();
            $table->boolean('rejected')->nullable();
            $table->string('url')->nullable();
            $table->integer('parent_image_id')->unsigned();
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
        //
        Schema::drop('possible_photos');
    }
}
