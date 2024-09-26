@extends('layout')
@section('content')

<div class="position-absolute top-50 start-50 translate-middle ">
    <form class="" action="{{ route('admin.register') }}" method="POST">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-8">
                <div id="err" style="color: red">
                    @if(session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="username" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Repeat Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Phone</label>
                    <input name="password" type="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </div>
            <div class="col-4 d-flex flex-column justify-content-center align-item-center">
                <button type="submit" class="btn btn-primary">Register</button>
                <p class="text-center mt-5">OR</p>
                <div class="position-relative mt-5 d-flex flex-row">
                    <a href="{{route('google.login')}}" class="start-50 translate-middle position-absolute btn btn-google">
                        <img src="{{URL('storage/icons8-google-24.png')}}" />
                        Google Login
                    </a>
                </div>
            </div>
        </div>


    </form>

</div>

<!-- <div class="card">
    <div class="card-header">Register Form</div>
    <div class="card-body">

        <form action="{{ route('register') }}" method="post">
            {!! csrf_field() !!}
            <label>First Name</label>
            <input type="text" name="name" id="name" class="form-control"> </br>

            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control"> </br>
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control"> </br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div> -->
@stop