<?php

// database/migrations/xxxx_xx_xx_create_stores_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id('StoreCode');
            $table->string('StoreName', 100);
            $table->string('Address', 100)->nullable();
            $table->string('PhoneNumber', 100)->nullable();
            $table->string('Notes', 100)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stores');
    }
}

