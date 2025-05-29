<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sous_categorie extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categories::class);
    }
}
