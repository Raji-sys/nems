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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('nature_of_leave');
            $table->string('year');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('number_of_days_granted');
            $table->string('status');
            $table->longText('comments');
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
        Schema::dropIfExists('leaves');
    }
};
