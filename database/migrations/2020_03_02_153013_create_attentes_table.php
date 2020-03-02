<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attentes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('attente_id')->unsigned();
            $table->foreign('attente_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->boolean('priorite_attente');
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
        Schema::dropIfExists('attentes');
    }
}
