<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['student_name', 'course_id', 'enrollment_date', 'payment_status'];

    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
