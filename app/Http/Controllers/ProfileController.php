<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;
use Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $profiles = User::find(Auth::id());

        return view('profile.index', compact('profiles'));
    }

    public function show()
    {
        return view('profile/edit');
    }

    public function store(EditProfileRequest $request)
    {
        $input = $request->all();
        $user = User::find(Auth::id());
        $user->update($input);
        $user->save();


        return redirect('profile');

    }

}
