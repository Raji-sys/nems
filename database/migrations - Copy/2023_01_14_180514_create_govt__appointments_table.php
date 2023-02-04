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
        Schema::create('govt__appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('department/unit');
            $table->string('type_of_appointment');
            $table->string('designation/post');
            $table->string('salary_per_annum_at_gate_of_first_appointment');
            $table->string('salary_scale');
            $table->string('grade_level');
            $table->string('step');
            $table->string('transfer_by');
            $table->date('transfer_date');
            $table->timestamps();
            $table->foreignId('user_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('govt__appointments');
    }
};
