<?php

namespace App\Http\Controllers\Career;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobVaccancyFormRequest;
use App\Models\JobVacancy;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class VaccancyController extends Controller
{
    public function postVacancy(StoreJobVaccancyFormRequest $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $uuid = Str::uuid();
        JobVacancy::create($request->safe()->merge([
            'uuid' => $uuid,
            'creator_id' => $user->uuid,
            'description' => "Please visit the application page to view the complete description",
            'requirement' => "Please visit the application page to view the complete requirement",
            'responsibility' => "Please visit the application page to view the complete responsibility",
        ])->all());
        toast('Job advert posted successfully', 'success');
        return redirect()->back();
    }
}
