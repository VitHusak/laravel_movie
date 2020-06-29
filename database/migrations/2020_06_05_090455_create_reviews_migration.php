<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews_migration', function (Blueprint $table) {
            $table->id(); //this will create column id : BIGINT, AUTO_INCREMENT, UNSIGN, PRIMARY KEY
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('movie_id');
            $table->text('text');
            $table->timestamps(); //create both 'created_at' and 'updated_at' columns (datatime)

            $table->unique(['user_id', 'movie_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews_migration');
    }
}
