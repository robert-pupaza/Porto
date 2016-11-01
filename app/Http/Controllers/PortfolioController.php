<?php

namespace App\Http\Controllers;
use App\Portfolio;

use Illuminate\Http\Request;

use App\Http\Requests;

class PortfolioController extends Controller
{
    //
    public function showPortfolio(){


        $portfolio = Portfolio::with('skills', 'images')->get();

        /*print_r($portfolio);*/

        /*return response()->json($portfolio);*/
        return view('pages.portfolio')->with('portfolio', $portfolio);
    }

    public function store(Request $request){
        $portfolio = Portfolio::create([
            'name' => $request->input('name'),
            'description' => $request->input('desc'),
            'url' => $request->input('url'),
            'category_id' => $request->input('categ')
        ]);
        $portfolio->skills()->attach(1);

    }
}


