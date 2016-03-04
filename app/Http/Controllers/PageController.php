<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PageController extends BaseController
{
    public function showHome(){
        return view('pages.home');
    }
    public function showServices(){
        return view('pages.services');
    }
    public function showPortfolio(){
        return view('pages.portfolio');
    }
    public function showAboutWork(){
        return view('pages.aboutWork');
    }
    public function showAboutMe(){
        return view('pages.aboutMe');
    }
     public function showContact(){
        return view('pages.contact');
    }
}