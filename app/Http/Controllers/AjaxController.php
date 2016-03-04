<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AjaxController extends BaseController
{
    public function showProject1(){
        return view('ajax.portfolio-ajax-project-1');
    }
    public function showProject2(){
        return view('ajax.portfolio-ajax-project-2');
    }
    public function showProject3(){
        return view('ajax.portfolio-ajax-project-3');
    }
    public function showProject4(){
        return view('ajax.portfolio-ajax-project-4');
    }
    public function showProject5(){
        return view('ajax.portfolio-ajax-project-5');
    }
     public function showProject6(){
        return view('ajax.portfolio-ajax-project-6');
    }
     public function showProject7(){
        return view('ajax.portfolio-ajax-project-7');
    }
}