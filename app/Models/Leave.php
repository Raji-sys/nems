<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $fillable = [
        'nature_of_leave',
        'year',
        'start_date',
        'end_date',
        'number_of_days_granted',
        'approval_status',
        'comments'
    ];
    public function bio()
    {
        return $this->belongsToMany(Bio::class);
    }
}
