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
        Schema::create('pro__qualifications', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('awarding_institution');
            $table->string('address');
            $table->string('qualification_obtained');
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
        Schema::dropIfExists('pro__qualifications');
    }
};
