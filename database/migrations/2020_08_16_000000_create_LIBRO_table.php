<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'LIBRO';

    /**
     * Run the migrations.
     * @table LIBRO
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45)->nullable();
            $table->string('autor', 45)->nullable();
            $table->integer('cantidad_Ejemplares')->nullable();
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
