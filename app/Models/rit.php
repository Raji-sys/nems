<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rit extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_retired',
        'status',
    ];
    public function bio()
    {
        return $this->belongsToMany(Bio::class);
    }
}
