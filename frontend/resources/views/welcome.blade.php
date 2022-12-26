@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row ">
            @for ($i = 0; $i <= 11; $i++)
                <div class="col-lg-1 col-6 text-center">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>UAS</h3>
                            <p>V3421064</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-6 text-center">
                    <div class="small-box bg-dark">
                        <div class="inner">
                            <h3>UAS</h3>
                            <p>V3421064</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-6 text-center">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>UAS</h3>
                            <p>V3421064</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-6 text-center">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>UAS</h3>
                            <p>V3421064</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-6 text-center">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>UAS</h3>
                            <p>V3421064</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-6 text-center">
                    <div class="small-box bg-light">
                        <div class="inner">
                            <h3>UAS</h3>
                            <p>V3421064</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
