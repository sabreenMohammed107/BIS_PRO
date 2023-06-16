<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam_result extends Model
{
    use HasFactory;protected $fillable = [
        'user_id',
        'level_id',
        'semester_id',
        'exam_type_id',
        'result_value',
        'result_color',

    ];

    public function user(){

        return $this->belongsTo(User::class);

}

public function level(){

    return $this->belongsTo(Level::class);

}

public function semester(){

    return $this->belongsTo(Semester::class);

}
public function type(){

    return $this->belongsTo(Exam_type::class,'exam_type_id');

}
}
