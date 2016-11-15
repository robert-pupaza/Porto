<?php
namespace app;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //
    public function skillable(){
        return $this -> morphedTo();
    }
}
