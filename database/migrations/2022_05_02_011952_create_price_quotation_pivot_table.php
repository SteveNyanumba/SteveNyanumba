<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceQuotationPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_quotation', function (Blueprint $table) {
            $table->unsignedBigInteger('price_id')->index();
            $table->foreign('price_id')->references('id')->on('prices')->onDelete('cascade');
            $table->unsignedBigInteger('quotation_id')->index();
            $table->foreign('quotation_id')->references('id')->on('quotations')->onDelete('cascade');
            $table->primary(['price_id', 'quotation_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_quotation');
    }
}
