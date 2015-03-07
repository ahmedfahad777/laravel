<?php namespace App\Http\Controllers;

class BlogController extends Controller {



    /**
     * Show the application blog to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('blog.index');
    }

}
