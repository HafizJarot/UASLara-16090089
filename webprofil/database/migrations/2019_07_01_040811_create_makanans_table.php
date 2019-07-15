<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanans', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama');
            $table->integer('harga');
            $table->longText('tempat');
            $table->longText('komposisi');
            $table->text('foto')->nullable();
            $table->enum('status',['1', '0']);
            $table->string('created_by', '50')->nullable();
            $table->string('updated_by', '50')->nullable();
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
        Schema::dropIfExists('makanans');
    }
}
