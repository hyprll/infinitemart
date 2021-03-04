@extends('auth/template/Auth')

@section("title", "Login | InfiniteMart")

@section('content')
<div class="loginContainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card-login">
                    <div class="row">

                        <div class="col-md-6 left">
                            <div class="container">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="img-left">
                                            <img src="{{asset('img/logo_bg-putih.png')}}" alt="">
                                        </div>
                                        <div class="text-right">
                                            <h1 class="fw-bold">Sign In</h1>
                                        </div>
                                    </div>
                                    <div class="signIn-google mt-2">
                                        <h1>Sign In for better experience</h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <span class="text-danger" id="error_something">
                                        {{Session()->get("error_pass")}}
                                    </span>
                                </div>
                                <div class="row mt-3">
                                    <form action="" method="POST" id="form-login">
                                        @csrf
                                        <div class="row">
                                            <div class="inputValue">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" id="email" class="mt-2 form-control"
                                                    autofocus autocomplete="off">
                                            </div>
                                            <small class="validate text-danger">
                                                {{Session::get('email_error_status')}}
                                            </small>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="inputValue">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="password"
                                                    class="mt-2 form-control" autocomplete="off">
                                            </div>
                                            <small class="validate text-danger">
                                                {{Session::get('password_error_status')}}
                                            </small>
                                        </div>


                                        <div class="buttonValue mt-3">
                                            <button type="submit" class="btn btn-Gradient" name="submit">Sign
                                                In</button>
                                        </div>
                                    </form>
                                    <a href="#" class="toRegist">Dont have account? Sign up</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 right">
                            <div class="rightCard">
                                <div class="container">
                                    <div class="row">
                                        <span class="regist-account mt-5">
                                            Dont Have account?<br> Create one now
                                        </span>
                                        <a href="{{route("register")}}" class="btn btn-blueGradient m-3">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                            <img class="anima2 user-select-none" src="{{asset('/img/Character/anima3.png')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection