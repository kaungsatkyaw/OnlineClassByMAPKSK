<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function pagenews(){
        return $this->hasMany(Pagenew::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
