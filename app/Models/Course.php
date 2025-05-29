<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sous_categorie()
    {
        return $this->belongsTo(Sous_categorie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
