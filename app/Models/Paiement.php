<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paiement extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
