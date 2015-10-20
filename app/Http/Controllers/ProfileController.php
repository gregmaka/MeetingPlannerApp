<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $authID = Auth::user()->id;

        $profiles = User::find($authID);

        return view('profile.index', compact('profiles'));
    }

    public function update()
    {
        return view('profile.edit');
    }

    public function store()
    {
        $input = Request::all();
        //$input['published_at'] = Carbon::now();

        $authID = Auth::user()->id;

        $user = User::find($authID);

        $user->update($input);

        $user->save();

        return redirect('profile');
    }

}
