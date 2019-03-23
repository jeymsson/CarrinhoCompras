<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cad_pedido_produto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->decimal('valor', 6, 2)->default(0);
            $table->decimal('desconto', 6, 2)->default(0);
            $table->integer('cupom_desconto')->nullable()->unsigned();
            $table->enum('status', ['RE', 'PA', 'CA']);
            $table->timestamps();
            $table->foreign('pedido_id')->references('id')->on('cad_pedido');
            $table->foreign('produto_id')->references('id')->on('cad_produto');
            $table->foreign('cupom_desconto')->references('id')->on('cad_cupom_descontos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_pedido_produto');
    }
}
