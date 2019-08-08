<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_acreencia');
            $table->integer('acreencia');
            $table->date('fecha_recibido');
            $table->string('acreedor');
            $table->string('numero_documento')->nullable();
            $table->string('nombre_representante')->nullable();
            $table->string('documento')->nullable();
            $table->string('nombre_apoderado')->nullable();
            $table->string('documento')->nullable();
            $table->string('Nomero_folios')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('Departamento');
            $table->string('ciudad');
            $table->string('Direccion_electronica')->nullable();
            $table->string('telefono')->nullable();
            $table->float('Valor_reclamado',30,2);
            $table->float('Valor_Reclamado',30,2);
            $table->float('Valor_Reclamado_Soportes',30,2);
            $table->float('Valor_Glosa',30,2);
            $table->float('Valor_Reconocido',30,2);
            $table->float('Indemnizacion',30,2);
            $table->float('Valor_Juridica',30,2);
            $table->float('Valor_Valor_Aprovado',30,2);
            $table->string('Tipo');
            $table->string('Tipo_Resolucion');
            $table->string('Usuario');
            $table->string('clave');
            $table->string('correo_Electronico')->nullable();
            $table->string('Notificado');
            $table->date('Fecha_Notificacion')->nullable();
            $table->date('Fecha_Vencimiento')->nullable();
            $table->string('Presencion_Rescurso')->nullable();
            $table->date('Fecha_recurso')->nullable();
            $table->string('Archivo')->nullable();
            $table->string('Estado')->nullable();
            $table->string('Tipo_Presentacion')->nullable();
            $table->string('Observacion')->nullable();
            $table->string('proceso')->nullable();
         }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources');
    }
}
