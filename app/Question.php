<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "question";

    protected $fillable = ['id','question','user_id','isApproved'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function answers(){
        return $this->hasMany(Answer::class,'question_id');
    }
}
