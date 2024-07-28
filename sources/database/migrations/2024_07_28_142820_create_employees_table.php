<?php

// database/migrations/xxxx_xx_xx_create_employees_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('EmployeeCode');
            $table->string('EmployeeName', 100);
            $table->string('Email', 100)->nullable();
            $table->string('Password', 100);
            $table->string('PasswordHash', 100);
            $table->string('Role', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
