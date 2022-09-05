@extends('layout.app')
    @section('title', 'Admin | Login')
    @section('content')
        <form action="" method="POST" class="container p-6">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <div class="col-md-6 col-12">
                    <input type="text" class="form-control" name="username" placeholder="Username" id="username" required value="{{old('username')}}">
                </div>
                <div class="col-md-6 col-12">
                    <input type="password" class="form-control" name="password" placeholder="Password" id="password" required value="{{old('password')}}">
                </div>
            </div>
            <button class="float-right btn btn-primary p-2 mt-5" type="submit">Login</button>
        </form>
    @endsection