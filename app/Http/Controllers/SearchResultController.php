<?php namespace App\Http\Controllers;

class SearchResultController extends Controller {

    public function search()
    {
        return view('searchResult.index');
    }

}