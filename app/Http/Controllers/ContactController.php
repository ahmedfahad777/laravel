<?php
/**
 * Created by PhpStorm.
 * User: baby
 * Date: 2/6/15
 * Time: 11:27 PM
 */

namespace App\Http\Controllers;


class ContactController extends Controller {

    public function contact()
    {
        return view('contact/index');

    }

} 