<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntregaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'ENTREGA';

    /**
     * Run the migrations.
     * @table ENTREGA
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->integer('telefono1')->nullable();
            $table->integer('cedula_Cliente')->nullable();
            $table->date('fecha_Entrega')->nullable();
          
            // $table->index(["PRESTAMO_idPRESTAMO", "PRESTAMO_LIBRO_idLIBROS"], 'fk_ENTREGA_PRESTAMO1_idx');


            // $table->foreign('PRESTAMO_idPRESTAMO', 'fk_ENTREGA_PRESTAMO1_idx')
            //     ->references('idPRESTAMO')->on('PRESTAMO')
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
