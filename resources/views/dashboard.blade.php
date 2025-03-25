<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p>Welcome to the dashboard, {{ Auth::user()->name }}. You have access to exclusive features.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
