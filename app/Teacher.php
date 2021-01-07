<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','email','image', 'position', 'workingat','bio'];

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
