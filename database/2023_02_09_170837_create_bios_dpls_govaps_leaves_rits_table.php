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
        Schema::create('bios_dpls_govaps_leaves_rits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bio_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('dpl_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('govap_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('leave_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('rit_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('bios_dpls_govaps_leaves_rits');
    }
};
