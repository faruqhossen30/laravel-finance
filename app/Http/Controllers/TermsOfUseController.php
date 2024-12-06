<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsOfUseController extends Controller
{
    public function termsofUse(){
        return view('termsofuse');
    }
}
