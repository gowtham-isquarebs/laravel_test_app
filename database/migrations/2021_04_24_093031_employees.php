<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
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
            $table->string('firstname', 60)->require();
            $table->string('lastname', 60)->require();
            $table->string('middlename', 60)->require();
            $table->string('address', 120)->require();
            $table->bigInteger('department_id');
            $table->foreign('department_id')->require()->references('id')->on('departments');
            $table->bigInteger('city_id');
            $table->foreign('city_id')->require()->references('id')->on('cities');
            $table->bigInteger('state_id');
            $table->foreign('state_id')->require()->references('id')->on('states');
            $table->bigInteger('country_id');
            $table->foreign('country_id')->require()->references('id')->on('countries');
            $table->string('zip', 10)->require();
            $table->date('birthdate');
            $table->date('date_hired');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
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
