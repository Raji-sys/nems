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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('surname');
            // $table->string('first_name');
            // $table->string('middle_name');
            // $table->string('title');
            // $table->string('gender');
            // $table->date('date_of_birth');
            // $table->string('phone_number');
            // $table->string('marital_status');
            // $table->string('place_of_birth');
            // $table->string('nationality');
            // $table->string('geopolitical_zone');
            // $table->string('state_of_orign');
            // $table->string('senatorial_district');
            // $table->string('lga');
            // $table->string('residential_address');
            // $table->string('permanent_home_address');
            // $table->string('spouse');
            // $table->string('hobbies');
            // $table->string('religion');
            // $table->integer('number_of_children');
            // $table->string('name_of_children');
            // $table->string('dob_of_children');
            // $table->string('passport');
            // $table->string('transferred_by');
            // $table->date('transfer_date');
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
        Schema::dropIfExists('personal_details');
    }
};
