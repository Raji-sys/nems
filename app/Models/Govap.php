<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Govap extends Model
{
    use HasFactory;

    protected $fillable = [
        'bio_id',
        'department',
        'unit',
        'date_of_first_app',
        'type_of_appointment',
        'designation_post',
        'salary_per_annum_at_date_of_first_app',
        'salary_scale',
        'grade_level',
        'step',
    ];
    public function bio()
    {
        return $this->belongsTo(Bio::class);
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}