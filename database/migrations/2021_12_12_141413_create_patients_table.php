<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('mr_no');
            $table->bigInteger('token_no_s')->nullable();
            $table->bigInteger('token_no')->nullable();
            $table->string('first_name');
            $table->string('second_name_type')->nullable();
            $table->string('second_name')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone');
            $table->string('cnic')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('patient_came_with')->nullable();
            $table->string('patient_came_with_name')->nullable();
            $table->integer('reference_id')->nullable();
            $table->string('reference_name')->nullable();
            $table->integer('department_id');
            $table->integer('doctor_id');
            $table->integer('condition_id');
            $table->string('bp')->nullable();
            $table->string('sugar')->nullable();
            $table->string('temperature')->nullable();
            $table->string('discount_type')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->string('status');
            $table->string('closed');
            $table->text('patient_history')->nullable();
            $table->text('hospital_history')->nullable();
            $table->bigInteger('total_fee')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
