@extends('app')

@section('content')

    <h2>Profile Page</h2>

    <p>Name : {{ $profiles->username }}</p>
    <p>Email Address : {{ $profiles->email }}</p>
    <p>Account Created : {{ $profiles->created_at }}</p>
    <p>Account Updated : {{ $profiles->updated_at }}</p>

    <form class="form-group" role="form" method="POST" action="{{ url('profile/edit') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" value="editprofile" class="btn btn-primary">Edit Profile Information</button>
    </form>


@stop
