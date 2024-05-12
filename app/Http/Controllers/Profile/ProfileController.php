<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function updateProfileEdit(StoreUserProfileUpdateRequest $request)
    {
        // dd($request->all());
        $user = Auth::user();
        $userID = User::where('uuid', $user->uuid)->first();
        $file = $request->hasFile('avatar') ? $request->file('avatar')->store('Avatars', 'public') : $userID->avatar;
        $userID->update($request->safe()->merge([
            'avatar' => $file
        ])->all());
        toast('Profile updated successfully', 'success');
        return redirect()->back();
    }
}
