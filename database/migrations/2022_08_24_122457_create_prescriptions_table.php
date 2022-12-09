<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->string('medicine_type1')->nullable();
            $table->string('medicine_name1')->nullable();
            $table->string('medicine_mg1')->nullable();
            $table->string('medicine_qty1')->nullable();
            $table->string('medicine_timing1')->nullable();
            $table->string('medicine_type2')->nullable();
            $table->string('medicine_name2')->nullable();
            $table->string('medicine_mg2')->nullable();
            $table->string('medicine_qty2')->nullable();
            $table->string('medicine_timing2')->nullable();
            $table->string('medicine_type3')->nullable();
            $table->string('medicine_name3')->nullable();
            $table->string('medicine_mg3')->nullable();
            $table->string('medicine_qty3')->nullable();
            $table->string('medicine_timing3')->nullable();
            $table->string('medicine_type4')->nullable();
            $table->string('medicine_name4')->nullable();
            $table->string('medicine_mg4')->nullable();
            $table->string('medicine_qty4')->nullable();
            $table->string('medicine_timing4')->nullable();
            $table->string('medicine_type5')->nullable();
            $table->string('medicine_name5')->nullable();
            $table->string('medicine_mg5')->nullable();
            $table->string('medicine_qty5')->nullable();
            $table->string('medicine_timing5')->nullable();
            $table->string('medicine_type6')->nullable();
            $table->string('medicine_name6')->nullable();
            $table->string('medicine_mg6')->nullable();
            $table->string('medicine_qty6')->nullable();
            $table->string('medicine_timing6')->nullable();
            $table->string('medicine_type7')->nullable();
            $table->string('medicine_name7')->nullable();
            $table->string('medicine_mg7')->nullable();
            $table->string('medicine_qty7')->nullable();
            $table->string('medicine_timing7')->nullable();
            $table->string('medicine_type8')->nullable();
            $table->string('medicine_name8')->nullable();
            $table->string('medicine_mg8')->nullable();
            $table->string('medicine_qty8')->nullable();
            $table->string('medicine_timing8')->nullable();
            $table->string('medicine_type9')->nullable();
            $table->string('medicine_name9')->nullable();
            $table->string('medicine_mg9')->nullable();
            $table->string('medicine_qty9')->nullable();
            $table->string('medicine_timing9')->nullable();
            $table->string('medicine_type10')->nullable();
            $table->string('medicine_name10')->nullable();
            $table->string('medicine_mg10')->nullable();
            $table->string('medicine_qty10')->nullable();
            $table->string('medicine_timing10')->nullable();
            $table->string('p_complaints')->nullable();
            $table->string('p_bp')->nullable();
            $table->string('p_pulse')->nullable();
            $table->string('p_weight')->nullable();
            $table->string('p_cvs')->nullable();
            $table->string('p_chest')->nullable();
            $table->string('p_ecg')->nullable();
            $table->string('p_comments')->nullable();
            $table->string('p_investigation')->nullable();
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
        Schema::dropIfExists('prescriptions');
    }
}
