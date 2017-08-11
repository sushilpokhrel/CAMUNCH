<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = ['id','title','user_id','category','post','isApproved'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
