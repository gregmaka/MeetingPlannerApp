@extends('app')

@section('content')

    <h2>Profile Page</h2>

    <p>Name : {{ $profiles->username }}</p>
    <p>Email Address : {{ $profiles->email }}</p>
    <p>Account Created : {{ $profiles->created_at->format('M j, Y') }}</p>
    <p>Last Updated : {{ $profiles->updated_at->diffForHumans() }}</p>

    <form class="form-group" role="form" method="GET" action="{{ url('profile/edit') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" value="editprofile" class="btn btn-primary">Edit Profile Information</button>
    </form>


@stop
