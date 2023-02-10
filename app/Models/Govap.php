<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Govap extends Model
{
    use HasFactory;

    protected $fillable = [
        'department',
        'unit',
        'date_of_first_app',
        'type_of_appointment',
        'designation_post',
        'salary_per_annum_at_date_of_first_app',
        'salary_scale',
        'grade_level',
        'step',
        'current_post',
        'promoted_date',
        'increment_date',
        'exec_confirmation_date',
        'exec_appointment_date',
        'exec_status_current_out_of_office'
    ];
    public function bio()
    {
        return $this->belongsToMany(Bio::class,'bio_govap','bio_id','govap_id');
    }
}