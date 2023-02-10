<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dpl extends Model
{
    use HasFactory;
    protected $fillable = [
        'offense',
        'decision',
        'date_of_offense',
        'comment'
    ];
    public function bio()
    {
        return $this->belongsToMany(Bio::class);
    }
}
