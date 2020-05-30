<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDemoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_demo_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_demo_id');
            $table->string('url');
            $table->timestamps();

            $table->foreign('project_demo_id')->references('id')->on('project_demos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_demo_images');
    }
}
