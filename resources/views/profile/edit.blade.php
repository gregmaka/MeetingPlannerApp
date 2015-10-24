@extends('app')

@section('content')

    <h2>Profile Edit Page</h2>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('profile.edit') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label class="col-md-4 control-label">New Username</label>
            <div class="col-md-6">
                <input type="username" class="form-control" name="username" value="{{ old('username') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label">New E-Mail Address</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="form-group">
            <button type="submit" value="submitnewinfo" class="btn btn-primary">Submit New Profile Information</button>
        </div>

    </form>

    @if($errors->any())

        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

@stop
