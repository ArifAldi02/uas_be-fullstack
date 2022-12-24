@extends('layouts.auth')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>V</b>3421064</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">--LOGIN--</p>
                <form action="/login64" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Passwrod</label>
                        <input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                    <button type="submit" class="btn btn-outline-info btn-block">Login</button>
                    <a href="/register64" class="btn btn-outline-dark btn-block">Register</a>
                </form>
            </div>
        </div>
    </div>
@endsection
