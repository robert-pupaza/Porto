<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $fillable = ['name', 'description', 'url', 'category_id'];
    public function skills()
    {
        return $this->morphMany('App\Skill', 'skillable');
    }
    public function images()
    {
        return $this->hasMany('App\Image', 'portfolio_id');
    }

}
