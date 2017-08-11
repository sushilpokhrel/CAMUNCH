<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacancyApplication extends Model
{
    protected $table = "vacancyapplication";

    protected $fillable = ['id','user_id','vacancy_id','cover_letter','resume'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function vacancy(){
        return $this->belongsTo(Vacancy::class,'user_id');
    }
}
