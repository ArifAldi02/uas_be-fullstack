@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card card-dark card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="/img/{{ $user['foto'] }}"
                                alt="User profile picture" style="width: 200px; height: 200px">
                        </div>

                        <h3 class="profile-username text-center">{{ $user['name'] }}</h3>
                        <p class="text-muted text-center">{{ $user['email'] }}</p>
                        <form action="/user64/{{ $user['id'] }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="float-right btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>

                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">My profile</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong>Name</strong>
                        <p class="text-muted">
                            {{ $user['name'] }}
                        </p>
                        <hr>
                        <strong>Email</strong>
                        <p class="text-muted">
                            {{ $user['email'] }}
                        </p>
                    </div>
                </div>

                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Detail</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if ($user['detail_data'] != null)
                            <strong>Agama</strong>
                            <p class="text-muted">
                                {{ $user['agama']['nama_agama'] }}
                            </p>
                            <hr>
                            <strong>Alamat</strong>
                            <p class="text-muted">
                                {{ $user['detail_data']['alamat'] }}
                            </p>
                            <hr>
                            <strong>Tempat lahir</strong>
                            <p class="text-muted">
                                {{ $user['detail_data']['tempat_lahir'] }}
                            </p>
                            <hr>
                            <strong>Tanggal lahir</strong>
                            <p class="text-muted">
                                {{ $user['detail_data']['tanggal_lahir'] }}
                            </p>
                            <hr>
                            <strong>Umur</strong>
                            <p class="text-muted">
                                {{ $user['detail_data']['umur'] }}
                            </p>
                            <hr>
                            <strong>Foto ktp</strong>
                            <p class="text-muted">
                                <a href="#" data-toggle="modal" data-target="#ktp">Show photo</a>
                            </p>
                        @else
                            Details have not been added.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($user['detail_data'] != null)
        <div class="modal fade" id="ktp">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Foto ktp</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="/img/{{ $user['detail_data']['foto_ktp'] }}" alt="error"
                            style="width: 400px; height: 300px" class="rounded">
                    </div>
                    <div class="modal-footer justify-content-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
