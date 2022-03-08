<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('body');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();


            $table->foreign('user_id')
                    ->references('id')->on('users')->onDelete('set null');
                    //->onUpdate('cascade'); //actualizar registro conforme su llave foranea


            $table->foreign('categoria_id')
                    ->references('id')->on('categorias')->onDelete('set null'); 
                    //->onUpdate('cascade'); //actualizar registro conforme su llave foranea

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
        Schema::dropIfExists('posts');
    }
}
