@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
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
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h3 class="card-title">User request</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 60px" class="text-center">Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th style="width: 120px" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($users['pending']) < 1)
                                            <tr>
                                                <td colspan="5" class="text-center text-bold text-info">No request
                                                    users</td>
                                            </tr>
                                        @endif
                                        @foreach ($users['pending'] as $user)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td class="text-center"><img src="/img/{{ $user['foto'] }}" alt="error"
                                                        style="width: 50px; height: 50px" class="rounded"></td>
                                                <td>{{ $user['name'] }}</td>
                                                <td>{{ $user['email'] }}</td>
                                                <td>
                                                    @if ($user['is_aktif'])
                                                        <a href="/user64/{{ $user['id'] }}"
                                                            class="btn btn-info btn-block">detail</a>
                                                    @else
                                                        <form action="/user64/{{ $user['id'] }}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success btn-block">
                                                                Accept
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h3 class="card-title">User active</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 60px" class="text-center">Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th style="width: 120px" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($users['active']) < 1)
                                            <tr>
                                                <td colspan="5" class="text-center text-bold text-info">No active
                                                    users</td>
                                            </tr>
                                        @endif
                                        @foreach ($users['active'] as $user)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td class="text-center"><img src="/img/{{ $user['foto'] }}" alt="error"
                                                        style="width: 50px; height: 50px" class="rounded"></td>
                                                <td>{{ $user['name'] }}</td>
                                                <td>{{ $user['email'] }}</td>
                                                <td>
                                                    @if ($user['is_aktif'])
                                                        <a href="/user64/{{ $user['id'] }}"
                                                            class="btn btn-info btn-block">detail</a>
                                                    @else
                                                        <form action="/user64/{{ $user['id'] }}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success btn-block">
                                                                Accept
                                                            </button>
                                                        </form>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
