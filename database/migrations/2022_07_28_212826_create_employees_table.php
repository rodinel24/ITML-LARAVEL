<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first');
            $table->string('last');
            $table->string('email');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('street');
            $table->string('city');
            $table->string('address');
            $table->string('state');
            $table->string('zip');
            $table->integer('isCompany');
            $table->string('company');
            $table->string('companyAddress');
            $table->string('companyEmail');
            $table->string('companyPhone');
            $table->string('position');
             $table->string('website');
             $table->string('industry');
             $table->string('income');
             $table->string('notes');
             $table->integer('active')->default(1);
             $table->string('source');

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
        Schema::dropIfExists('employees');
    }
}
