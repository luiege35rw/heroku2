<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('news_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('user_id')
                  ->references('id')
                  ->on('user_id')
                  ->onDelete('cascade'); // userが削除されたとき、それに関連するlikeも一気に削除される

            $table->foreign('news_id')
                  ->references('id')
                  ->on('news_id')
                  ->onDelete('cascade'); // newsが削除されたとき、それに関連するlikeも一気に削除される
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
