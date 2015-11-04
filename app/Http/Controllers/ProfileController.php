<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditProfileRequest;
use Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return profile page, passing user info to view.
     */

    public function index()
    {
        $profiles = User::find(Auth::id());

        return view('profile.index', compact('profiles'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return profile edit page
     */

    public function show()
    {
        return view('profile/edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     *@param
     *
     * @return Response
     */
    public function store(EditProfileRequest $request)
    {
        $input = $request->all();
        $user = User::find(Auth::id());
        $user->update($input);
        $user->save();


        return redirect('profile');

    }

}
