<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answers";

    protected $fillable = ['id','user_id','question_id','answer'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function question(){
        return $this->belongsTo(Question::class,'question_id');
    }
}
