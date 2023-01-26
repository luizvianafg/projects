<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('nome_principal');
            
            $table->string('cpf');
            $table->integer('ranking');
            $table->string('possivel_renda');
            $table->string('telefone_1');
            $table->string('telefone_2');
            $table->string('telefone_3');
            $table->string('email_1');
            $table->string('email_2');
            $table->string('email_3');
            $table->string('uf');
            $table->string('empresas_ligadas');
            $table->string('cnpj_empresa_ligada');
            $table->unsignedBigInteger('avanttodatab_id');
            $table->foreign('avanttodatab_id')->references('id')->on('avanttodatab');
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
        Schema::dropIfExists('lead');        
    }

};
