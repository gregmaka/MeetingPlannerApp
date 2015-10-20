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
        $profiles = User::find(Auth::id());

        return view('profile.index', compact('profiles'));
    }

    public function update()
    {
        return view('profile.edit');
    }

    public function store()
    {
        $input = Request::all();
        
        $user = User::find(Auth::id());

        $user->update($input);

        $user->save();

        return redirect('profile');
    }

}
