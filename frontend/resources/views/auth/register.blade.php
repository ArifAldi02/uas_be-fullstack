@extends('layouts.auth')
@section('content')
    <div class="register-box">
        <div class="login-logo">
            <a href="#"><b>V</b>3421064</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-body login-card-body">
                <form action="/register64" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Full name</label>
                        <input type="text" class="form-control" placeholder="Full name" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Profile</label>
                        <input type="file" name="foto">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-outline-info btn-block">Register</button>
                        <a href="/login64" class="btn btn-outline-dark btn-block">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
