@extends('layout_login')
@section('content')

<div class="position-absolute top-50 start-50 translate-middle ">
    <div class="row">
        <div class="col-6">
            <form class="" action="{{ route('check') }}" method="POST">
                {!! csrf_field() !!}
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
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember" {{old('remember') ? 'checked' : ''}}>
                    <label class="form-check-label" for="remember">{{__('Remember Me')}}</label>
                </div>
                
                <div class="mt-3">
                    <div class="form-group row mb-0">
                        <div class="d-flex flex-row justify-content-between">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request')}}">
                                {{ __('Forgot Your Password? ')}}
                            </a>
                            @endif
                        </div>
                        <div class="mt-3" style="">
                            <button type="submit" class="w-100 rounded-pill btn bg-white border">
                                {{__('Sign in')}}
                            </button>
                        </div>
                        <p class="mt-4 text-center fs-6">
                            Not a member? 
                            <a href="{{route('register')}}">
                                Sign up now
                            </a>
                        </p>
                        <hr class="mt-3">
                        <div class="position-relative mt-3">
                            <a href="{{route('google.login')}}" class="start-50 translate-middle position-absolute btn btn-google">
                                <img src="{{URL('storage/google.png')}}" />
                                Google Login
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6">
            <img src="{{ URL('storage/login.jpg') }}" class="img-thumbnail border-0" alt="...">
        </div>
    </div>

</div>
</body>

</html>

@stop

@push('css')

<style type="text/css">
    body,
    td,
    th {
        color: #000000;

    }

    body {
        background-color: #F0F0F0;

    }

    .style1 {
        font-family: arial, helvetica, sans-serif;
        font-size: 14px;
        padding: 12px;
        line-height: 25px;
        border-radius: 4px;
        text-decoration: none;
    }

    .style2 {
        font-family: arial, helvetica, sans-serif;
        font-size: 17px;
        padding: 12px;
        line-height: 25px;
        border-radius: 4px;
        text-decoration: none;

    }
</style>
@endpush