<?php

// database/migrations/xxxx_xx_xx_create_store_details_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('store_details', function (Blueprint $table) {
            $table->id('DetailId');
            $table->foreignId('StoreCode')->constrained('stores', 'StoreCode');
            $table->dateTime('DeliveryDate');
            $table->foreignId('CompanyCode')->constrained('companies', 'CompanyCode');
            $table->string('TaxTransfer', 100)->nullable();
            $table->string('Details', 100)->nullable();
            $table->double('TaxRate')->nullable();
            $table->integer('ExcludingTax')->nullable();
            $table->integer('IncludingTax')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('store_details');
    }
}
