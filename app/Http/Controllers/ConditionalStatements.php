<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\View;

class ConditionalStatements extends Controller
{
    public function conditionalstatements(){
        $retArr = [
            'laravel',
            'Advance diploma in IT',
            'php framework',

        ];
        if(View::exists('conditional_statements')){
            return View('conditional_statements',compact('retArr'));
            
        }


    }
}
