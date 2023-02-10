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
        Schema::create('govaps', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('bio_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignIdFor(Bio::class)->constrained()->cascadeOnDelete();
            $table->string('department');
            $table->string('unit');
            $table->date('date_of_first_app');
            $table->string('type_of_appointment');
            $table->string('designation_post');
            $table->string('salary_per_annum_at_date_of_first_app');
            $table->string('salary_scale');
            $table->string('grade_level');
            $table->string('step');
            $table->string('current_post');
            $table->date('promoted_date');
            $table->date('increment_date');
            $table->date('exec_confirmation_date');
            $table->date('exec_appointment_date');
            $table->string('exec_status_current_out_of_office');
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
        Schema::dropIfExists('govaps');
    }
};
