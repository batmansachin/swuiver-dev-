<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');//for slug
            $table->text('topic_id');
            $table->date('expiry_date');
            $table->text('banner_url');
            $table->integer('created_by')->default(20);
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
        Schema::dropIfExists('debates');
    }
}
