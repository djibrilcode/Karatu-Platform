<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function quizzs()
    {
        return $this->hasMany(Quizz::class);
    }
    public function progress()
    {
        return $this->hasMany(Progress::class);
    }
}
