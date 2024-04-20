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
        $user = Auth::user();
        $uuid = Str::uuid();
        // dd($request->all());

        JobVacancy::create($request->safe()->merge([
            'uuid' => $uuid,
            'creator_id' => $user->uuid,
        ])->all());
        toast('Job advert posted successfully', 'success');
        return redirect()->back();
    }
}
