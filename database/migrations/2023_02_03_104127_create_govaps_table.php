<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Bio;

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
            $table->timestamps();
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        
            $table->foreignIdFor(Bio::class)->constrained()->cascadeOnDelete();
            $table->string('department');
            $table->string('unit');
            $table->date('date_of_first_app');
            $table->string('type_of_appointment');
            $table->string('designation_post');
            $table->string('salary_per_annum_at_date_of_first_app');
            $table->string('salary_scale');
            $table->string('grade_level');
            $table->string('step');
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
