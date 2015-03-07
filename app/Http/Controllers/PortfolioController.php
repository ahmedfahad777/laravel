<?php


namespace App\Http\Controllers;


//use Illuminate\Routing\Controller;

class PortfolioController extends Controller{

   public function __construct(){
      $this->middleware('auth');}

    public function portfolio()
    {
        return view('portfolio/index');
    }

} 