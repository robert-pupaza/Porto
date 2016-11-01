<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class P_skill extends Model
{
    //
    protected $table = 'p_skill';

    public function skills(){
        return $this->hasMany('App\P_skill_assoc', 'skill_id');
    }
}
