<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
 

class LoopsController extends Controller
{
    public function loopsexample(){
        if(View::exists('loops')){
            $courses = [
                'Core php',
                'Advance php',
                'Laravel',
                'CodeIgniter',
                'Wordpress'
            ];
        $count=1;
         return View('loops',compact('courses','count'));
        }
        else{
            return 'View Unavialable';
        }

}
}
