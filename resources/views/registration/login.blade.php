@extends('registration.master')
@section('content')
    <div class="container mt-3 login">
        <h1 class="text-center">Login Here</h1>
        <hr>
        <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="" placeholder="Enter Your Password here">
              </div>
              <button type="submit" class="btn btn-success btn-lg">Login</button>
        </form>
    </div>
@endsection