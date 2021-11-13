<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('asset_id');
            $table->string('name')->nullable(); // CryptoPunk #2141
            $table->string('collection_name');
            $table->double('price_eth')->nullable(); // last listed price in eth
            $table->string('token_name')->nullable(); // eth, btc etc..
            $table->string('contract_name');
            $table->string('contract_address');
            $table->foreignId('image_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
