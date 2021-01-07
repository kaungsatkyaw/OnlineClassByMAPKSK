<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title','description','image','range','price'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }

    public function feedback(){
        return $this->hasMany(Feedback::class);
    }

    public function student(){
        return $this->hasMany(student::class);
    }
}
