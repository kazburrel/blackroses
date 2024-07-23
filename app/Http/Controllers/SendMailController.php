<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function mailTeamMemberPost(Request $request)
    {
        dd($request->all());
    }
}
