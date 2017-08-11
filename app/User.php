<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles(){
        return $this->hasMany(Article::class,'user_id');
    }
    public function news(){
        return $this->hasMany(News::class,'user_id');
    }
    public function vacancy(){
        return $this->hasMany(Vacancy::class,'user_id');
    }
    public function questions(){
        return $this->hasMany(Question::class, 'user_id');
    }
    public function answers(){
        return $this->hasMany(Answer::class, 'user_id');
    }
    public function application(){
        return $this->hasMany(VacancyApplication::class,'user_id');
    }
}
