@extends('header')

@section('content')

    <h1 class="text-center py-5">Login</h1>


    <form class="container w-25" method="POST" action="/authlogin">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        @error('email')
            <p class="text-danger">Email Or Password is Invalid!</p>
        @enderror
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

@endsection
