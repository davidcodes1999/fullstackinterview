@extends('layout')

@section('maincontent')
    <h3>Dashboard</h3>
    <br>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('users')}}">
                    <p>users</p>
                    <div class="row">
                        <div class="col-md-8">
                            {{$usercount}}
                        </div>
                        <div class="col-md-4">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p>Applications</p>
                    <div class="row">
                        <div class="col-md-8">
                            32
                        </div>
                        <div class="col-md-4">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p>Modules</p>
                    <div class="row">
                        <div class="col-md-8">
                            110
                        </div>
                        <div class="col-md-4">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <p>Packages</p>
                    <div class="row">
                        <div class="col-md-8">
                            50
                        </div>
                        <div class="col-md-4">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    
@endsection