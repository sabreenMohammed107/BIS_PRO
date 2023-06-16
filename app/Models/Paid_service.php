<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paid_service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'semester_id',
        'fees',
        'notes',

    ];

    public function semester(){

            return $this->belongsTo(Semester::class);

    }
}
