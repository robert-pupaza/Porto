<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = ['name', 'description', 'url', 'category_id'];
    public function skills()
    {
        return $this->morphToMany('App\Skill', 'portfolio_skill');
    }
    public function images()
    {
        return $this->hasMany('App\Image', 'portfolio_id');
    }

}
