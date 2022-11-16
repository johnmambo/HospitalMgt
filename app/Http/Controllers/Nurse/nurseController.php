<?php

namespace App\Http\Controllers\Nurse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nurseController extends Controller
{
    public function nursedash(){
        return view('nurse.dashboard');
    }
}
