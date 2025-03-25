<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Welcome to the Home Page, {{ Auth::user()->name }}!</h3>
                    </div>
                    <div class="card-body">
                        <p>You are logged in as <strong>{{ Auth::user()->role }}</strong>.</p>
                        <p>Explore the features of the app and manage your profile.</p>
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
