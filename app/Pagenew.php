<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagenew extends Model
{
    protected $fillable = ['title','description','image'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
