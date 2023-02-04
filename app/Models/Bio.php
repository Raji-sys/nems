<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Govap;
class Bio extends Model
{
    use HasFactory;
    protected $fillable=[
        'surname',
        'first_name',
        'middle_name',
        'phone_number',

        'geo_political_zone',
        'state',
        'lga',

        'spouse',
        'date_of_birth',
        'place_of_birth',
        'marital_status',
        'hobbies',
        'religion',
        'senatorial_district',
        'nationality',
        'permanent_home_address',
        'residential_address',
        'name_of_children',
        'number_of_children',
        'dob_of_children',
        'transferred_from',
        'transfer_date',
        'title',
        'staff_id',
        'gender',

        'next_of_kin_name1',
        'next_of_kin_phone1',
        'next_of_kin_email1',
        'next_of_kin_add1',
        'next_of_kin_relationship1',

        'next_of_kin_name2',
        'next_of_kin_phone2',
        'next_of_kin_email2',
        'next_of_kin_add2',
        'next_of_kin_relationship2',

        'name_of_primary',
        'date_obtained_pri',
        'primary_q_type',

        'name_of_secondary',
        'date_obtained_sec',
        'secondary_q_type',

        'name_of_tertiary',
        'date_obtained_ter',
        'qualification_type',

        'pro_awarding_ins1',
        'pro_ins_address1',
        'date_obtained_pro1',
        'qualification_obtained1',

        'pro_awarding_ins2',
        'pro_ins_address2',
        'date_obtained_pro2',
        'qualification_obtained2',

        'pro_awarding_ins3',
        'pro_ins_address3',
        'date_obtained_pro3',
        'qualification_obtained3',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function govaps()
    {
        return $this->hasMany(Govap::class);
    }
}