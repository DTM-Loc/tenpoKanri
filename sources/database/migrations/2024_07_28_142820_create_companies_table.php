<?php

// database/migrations/xxxx_xx_xx_create_companies_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id('CompanyCode');
            $table->string('Name', 100)->nullable();
            $table->string('Furigana', 100)->nullable();
            $table->string('Abbreviation', 100)->nullable();
            $table->string('TaxRounding', 20)->nullable();
            $table->string('TaxTransfer', 20)->nullable();
            $table->integer('AccountsPayableBalance')->nullable();
            $table->string('BankCode', 100)->nullable();
            $table->string('PayeeBankName', 100)->nullable();
            $table->string('BankNameFurigana', 100)->nullable();
            $table->string('BranchCode', 100)->nullable();
            $table->string('MainBranchName', 100)->nullable();
            $table->string('BranchNameFurigana', 100)->nullable();
            $table->string('AccountType', 100)->nullable();
            $table->string('AccountNumber', 100)->nullable();
            $table->string('AccountHolder', 100)->nullable();
            $table->string('AccountHolderFurigana', 100)->nullable();
            $table->integer('BreakpointA')->nullable();
            $table->integer('FeeA')->nullable();
            $table->integer('BreakpointB')->nullable();
            $table->integer('FeeB')->nullable();
            $table->integer('BreakpointC')->nullable();
            $table->integer('FeeC')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
