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
            // $table->foreignId('bio_id')->nullable()->casadeOnDelete();
            // $table->foreignId('bio_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('nature_of_leave');
            $table->integer('year');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('number_of_days_granted');
            $table->string('approval_status');
            $table->longText('comments');
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
        Schema::dropIfExists('leaves');
    }
};
