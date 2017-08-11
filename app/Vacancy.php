<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancy';
    protected $fillable = ['id','user_id','companyname','title','number','contact','email','address','requirements','lastdate'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function application(){
        return $this->hasMany(VacancyApplication::class,'user_id');
    }
}
