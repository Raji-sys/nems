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
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('staff_id');
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name');

            $table->string('title');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('marital_status');
            $table->string('place_of_birth');
            $table->string('nationality');
            $table->string('geo_political_zone');
            $table->string('senatorial_district');
            $table->string('state');
            $table->string('lga');
            $table->string('residential_address');
            $table->string('permanent_home_address');
            $table->string('spouse');
            $table->string('hobbies');
            $table->string('religion');
            $table->integer('number_of_children');
            $table->string('name_of_children');
            $table->date('dob_of_children');
            $table->string('transferred_from');
            $table->date('transfer_date');

            $table->string('next_of_kin_name1');
            $table->string('next_of_kin_phone1');
            $table->string('next_of_kin_email1');
            $table->string('next_of_kin_add1');
            $table->string('next_of_kin_relationship1');

            $table->string('next_of_kin_name2');
            $table->string('next_of_kin_phone2');
            $table->string('next_of_kin_email2');
            $table->string('next_of_kin_add2');
            $table->string('next_of_kin_relationship2');

            $table->string('name_of_primary');
            $table->date('date_obtained_pri');
            $table->string('primary_q_type');

            $table->string('name_of_secondary');
            $table->date('date_obtained_sec');
            $table->string('secondary_q_type');

            $table->string('name_of_tertiary');
            $table->date('date_obtained_ter');
            $table->string('qualification_type');

            $table->string('pro_awarding_ins1');
            $table->string('pro_ins_address1');
            $table->date('date_obtained_pro1');
            $table->string('qualification_obtained1');

            $table->string('pro_awarding_ins2');
            $table->string('pro_ins_address2');
            $table->date('date_obtained_pro2');
            $table->string('qualification_obtained2');

            $table->string('pro_awarding_ins3');
            $table->string('pro_ins_address3');
            $table->date('date_obtained_pro3');
            $table->string('qualification_obtained3');
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
        Schema::dropIfExists('bios');
    }
};
