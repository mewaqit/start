<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('emp_id');
            $table->integer('user_id')->unsigned();
            $table->string('emp_name',500);
            $table->string('emp_address_1',800);
            $table->date('emp_date_join');
            $table->date('emp_date_left');
            $table->string('emp_title',500);
            $table->enum('emp_gender', ['male', 'female', 'other'])->default('female');
            $table->double('emp_salary', 8, 2)->default('20000');
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
};
