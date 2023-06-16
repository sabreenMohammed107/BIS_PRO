<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_service extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id',
        'paid_service_id',
        'summer_training_file',
        'summer_training_place',
        'fees',
        'notes',
    ];

    public function student(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function service(){
        return $this->belongsTo(Paid_service::class,'paid_service_id');
    }
}
