<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('title');
            $table->string('photos');
            $table->string('description');
            $table->uuid('category_id');
            $table->integer('count');
            $table->string('author_name')->unique();
            $table->string('author_email')->unique();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->enum('status', ['active', 'passive']);
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
       Schema::dropIfExists('notices');
    }
}
