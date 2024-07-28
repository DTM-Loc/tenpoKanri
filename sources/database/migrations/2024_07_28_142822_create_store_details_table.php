<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('store_details', function (Blueprint $table) {
            $table->id('DetailId');
            $table->unsignedBigInteger('StoreCode');
            $table->unsignedBigInteger('CompanyCode');
            $table->dateTime('DeliveryDate');
            $table->string('TaxTransfer', 100)->nullable();
            $table->string('Details', 100)->nullable();
            $table->double('TaxRate')->nullable();
            $table->integer('ExcludingTax')->nullable();
            $table->integer('IncludingTax')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('StoreCode')->references('StoreCode')->on('stores')->onDelete('cascade');
            $table->foreign('CompanyCode')->references('CompanyCode')->on('companies')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('store_details');
    }
}
