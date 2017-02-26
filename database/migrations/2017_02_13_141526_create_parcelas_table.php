<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cpf');
            $table->foreign('cpf')->references('cpf')->on('clientes');

            $table->bigInteger('carne_id')->unsigned();
            $table->foreign('carne_id')->references('id')->on('carne');

            $table->bigInteger('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produtos');

            $table->decimal('quantidade');
            $table->decimal('valorUnitario');
            $table->decimal('entrada')->default('0');
            $table->decimal('desconto')->default('0');
            $table->integer('numParcelas');
            $table->string('vencimento');
            $table->double('valorParcela');
            $table->decimal('total');
            $table->string('status')->default('0');
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
        Schema::drop('parcelas');
    }
}
