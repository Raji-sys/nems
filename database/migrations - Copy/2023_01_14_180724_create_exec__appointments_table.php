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
        Schema::create('exec__appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('designation/post');
            $table->date('date_of_appointment');
            $table->string('status_current_out_of_office');
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
        Schema::dropIfExists('exec__appointments');
    }
};
