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
            $table->string('nombre_Cliente', 45)->nullable();
            $table->integer('cedula_Cliente')->nullable();
            $table->string('estado_Prestamo', 40)->nullable();
            $table->date('fecha_Prestamo')->nullable();
         

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
