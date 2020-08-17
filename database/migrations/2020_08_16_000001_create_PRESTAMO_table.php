<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestamoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'PRESTAMO';

    /**
     * Run the migrations.
     * @table PRESTAMO
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->string('NOMBRE_CLIENTE', 45)->nullable();
            $table->integer('CEDULA_CLIENTE')->nullable();
            $table->string('ESTADO_PRESTAMO', 40)->nullable();
            $table->date('FECHA_PRESTAMO')->nullable();
            $table->integer('LIBRO_idLIBROS');

            // $table->index(["LIBRO_idLIBROS"], 'fk_PRESTAMO_LIBRO_idx');


            // $table->foreign('LIBRO_idLIBROS', 'fk_PRESTAMO_LIBRO_idx')
            //     ->references('idLIBROS')->on('LIBRO')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
