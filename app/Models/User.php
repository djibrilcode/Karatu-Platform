<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, SoftDeletes, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendMessage()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receiveMessage()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function ansewrs()
    {
        return $this->hasMany(Answer::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function paiements(){
        return $this->hasMany(Paiement::class);
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isEtudiant()
    {
        return $this->role === 'etudiant';
    }

    public function isEnseignant()
    {
        return $this->role === 'enseignant';
    }

}
