<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewEstudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudents', function (Blueprint $table)
         {
            $table->increments('id');
                $table->integer('ci')->unique()->required();
                $table->string('nombre')->required();
                $table->string('apellido')->required();
                $table->string('genero',['masculino','femenino'])->default('masculino');
                $table->date('fec_nac');
                $table->softDeletes();
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
        Schema::dropIfExists('estudent');
    }
}
