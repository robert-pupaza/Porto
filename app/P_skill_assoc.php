<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class P_skill_assoc extends Model
{
    //
    protected $table = 'p_skill_assoc';

    public function skill(){
        return $this->belongsTo('App\P_skill', 'skill_id');
    }
    public function portfolio(){
        return $this->belongsTo('App\Portfolio', 'portfolio_id');
    }
}
