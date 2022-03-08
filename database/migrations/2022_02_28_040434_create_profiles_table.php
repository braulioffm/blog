<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('title', 45);
            $table->text('biografia');
            $table->string('website', 45);

            $table->unsignedBigInteger('user_id')->unique()/*->nullabe()*/;
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade') //borrar registro si se borra su llave foranea
                    ->onUpdate('cascade'); //actualizar registro conforme su llave foranea

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
        Schema::dropIfExists('profiles');
    }
}
