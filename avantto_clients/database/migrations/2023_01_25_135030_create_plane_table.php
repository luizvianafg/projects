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
        Schema::create('plane', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marca');
            $table->string('modelo');
            $table->date('ano_fabricacao');
            $table->string('proprietario');
            $table->string('uf');
            $table->string('cpf_cnpj_proprietario');
            $table->string('socio_aeronave_1');
            $table->string('cargo');
            $table->string('cpf');
            $table->string('operador');
            $table->string('uf_operador');
            $table->string('cpf_cnpj_operador');
            $table->string('num_cert_matricula');
            $table->string('num_serie');
            $table->string('categoria');
            $table->string('tipo');
            $table->string('fabricante');
            $table->string('cd_cls');
            $table->string('nr_pmd');
            $table->string('cd_tipo_icao');
            $table->integer('num_tripulacao_min');
            $table->integer('num_passageiros_max');
            $table->integer('num_assentos');
            $table->date('dt_validade_iam');
            $table->date('dt_validade_ca');
            $table->string('observacao');
            $table->string('cep');
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
        Schema::dropIfExists('plane');
    }
};
