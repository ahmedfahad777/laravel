<?php
/**
 * Created by PhpStorm.
 * User: wakila
 * Date: 2/6/15
 * Time: 8:46 PM
 */

namespace App\Http\Controllers;


class BlogItemController extends Controller {

    public function index(){

        return view('blog-item/show');
    }

} 