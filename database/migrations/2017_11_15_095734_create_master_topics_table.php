<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            //$table->string()//for slug
            $table->text('image_url');
            $table->integer('added_by');
            $table->integer('updated_by')->default(20);
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
        Schema::dropIfExists('master_topics');
    }
}
