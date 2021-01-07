<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedbackAdmin extends Model
{
    protected $fillable = ['user_id','feedback'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
