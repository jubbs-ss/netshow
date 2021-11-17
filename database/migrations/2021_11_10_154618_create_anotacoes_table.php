<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnotacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->string('nome',250)->nullable();
            $table->string('placa',250)->nullable();
            $table->string('chassi',250)->nullable();
            $table->string('renavam',250)->nullable();
            $table->string('montadora',250)->nullable();
            $table->string('modelo',250)->nullable();
            $table->string('cor',250)->nullable();
            $table->date('data_locacao')->nullable();
            $table->date('data_devolucao')->nullable();
            $table->text('msg_alteracao')->nullable();
            $table->string('condutor',250)->nullable();
            $table->string('email_condutor',250)->nullable();
            $table->string('canal_de_vendas',250)->nullable();
            $table->integer('status');
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
        //Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('cotacaos');
        //Schema::enableForeignKeyConstraints();
    }
}
