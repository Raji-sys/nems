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
        Schema::create('dpls', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('bio_id')->nullable()->casadeOnDelete();
            // $table->foreignId('bio_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('offense');
            $table->longText('decision');
            $table->date('date_of_offense');
            $table->longText('comment');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dpls');
    }
};
