<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    public function portfolios(){
        return $this -> morphedByMany('App\Portfolio', 'skillable');
    }
}
