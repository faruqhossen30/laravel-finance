<?php

namespace App\Http\Controllers\Admin\Loan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonalLoneController extends Controller
{
    public function personalLoan()
    {

        return view('personal-loan');
    }
}
