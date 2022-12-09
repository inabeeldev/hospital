<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientEchoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_echoes', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->string('weight')->nullable();
            $table->string('heart_rate')->nullable();
            $table->string('indoor_outdoor_no')->nullable();
            $table->string('registration_no_est')->nullable();
            $table->string('echo_no')->nullable();
            $table->string('date')->nullable();
            $table->string('operator')->nullable();
            $table->string('referred_by')->nullable();
            $table->string('bm_aortic_root')->nullable();
            $table->string('annulus_ao')->nullable();
            $table->string('la')->nullable();
            $table->string('la_area')->nullable();
            $table->string('rv')->nullable();
            $table->string('mv_area_planimetry')->nullable();
            $table->string('lvisd')->nullable();
            $table->string('lvpwd')->nullable();
            $table->string('lvidd')->nullable();
            $table->string('lvids')->nullable();
            $table->string('ef')->nullable();
            $table->string('fs')->nullable();
            $table->string('mv_area_pht')->nullable();
            $table->string('mv_pg_p')->nullable();
            $table->string('mv_pg_m')->nullable();
            $table->string('ao_pg')->nullable();
            $table->string('ao_mpg')->nullable();
            $table->string('tv_pg')->nullable();
            $table->string('mean_pap')->nullable();
            $table->string('e_a')->nullable();
            $table->string('dt')->nullable();
            $table->string('e')->nullable();
            $table->string('e_')->nullable();
            $table->string('e_e')->nullable();
            $table->string('rvstdi')->nullable();
            $table->string('comments_1')->nullable();
            $table->string('comments_2')->nullable();
            $table->string('comments_3')->nullable();
            $table->string('optional_remarks')->nullable();
            $table->string('subjective_report')->nullable();
            $table->string('special_comments_1')->nullable();
            $table->string('special_comments_2')->nullable();
            $table->string('special_comments_3')->nullable();
            $table->string('aortic_root')->nullable();
            $table->string('aortic_value')->nullable();
            $table->string('left_atrium')->nullable();
            $table->string('mitral_valve')->nullable();
            $table->string('tricuspid_and_pulmonary_valve')->nullable();
            $table->string('left_ventricle')->nullable();
            $table->string('right_ventricle')->nullable();
            $table->string('ias_ivs')->nullable();
            $table->string('pericardium')->nullable();
            $table->string('ivc')->nullable();
            $table->string('biventricular_systolic_function')->nullable();
            $table->string('c_comment_2')->nullable();
            $table->string('c_comment_3')->nullable();
            $table->string('c_comment_4')->nullable();
            $table->string('c_comment_5')->nullable();
            $table->string('c_comment_6')->nullable();
            $table->string('yes')->nullable();
            $table->string('note')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('patient_echoes');
    }
}
