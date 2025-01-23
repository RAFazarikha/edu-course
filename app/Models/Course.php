<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = ['name', 'description', 'price', 'status', 'student_count'];

    use HasFactory;

    public function students()
    {
        return $this->hasMany(Student::class, 'course_id', 'id');
    }
}
