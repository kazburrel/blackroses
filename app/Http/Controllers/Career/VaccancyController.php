<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VaccancyController extends Controller
{
    public function postVacancy(Request $request)
    {
        dd($request->all());
    }
}
