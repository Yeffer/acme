<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa');
            $table->string('color');
            $table->string('marca');
            $table->enum('tipo', ['Particular', 'Publico'])->default('Publico');
            $table->unsignedBigInteger('conductor_id');
            $table->unsignedBigInteger('propietario_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();  
            
            $table->foreign('conductor_id')
                ->references('id')
                ->on('conductores');

            $table->foreign('propietario_id')
                ->references('id')
                ->on('propietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
