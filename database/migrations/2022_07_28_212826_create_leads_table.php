<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('first')->nullable();
            $table->string('last')->nullable();
            $table->string('email')->unique();
            $table->string('phone1');
            $table->string('phone2');
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->integer('isCompany');
            $table->string('company')->nullable();
            $table->string('companyAddress')->nullable();
            $table->string('companyEmail')->unique();
            $table->string('companyPhone');
            $table->string('position')->nullable();
             $table->string('website')->nullable();
             $table->string('industry')->nullable();
             $table->string('income')->nullable();
             $table->string('notes')->nullable();
             $table->integer('active')->default(1);
             $table->string('source')->nullable();
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
        Schema::dropIfExists('leads');
    }
}
