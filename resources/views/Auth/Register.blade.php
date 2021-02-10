@extends('auth/template/Auth')

@section("title", "Register")

@section('content')
<div class="loginContainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-login">
                    <div class="row">

                        <div class="col-md-6 right">
                            <div class="rightCard">
                                <div class="container">
                                    <div class="row">
                                        <span class="regist-account mt-5">
                                            Have account?
                                        </span>
                                        <a href="{{route("login")}}" class="btn btn-blueGradient m-3">Sign Up</a>
                                    </div>
                                </div>
                            </div>
                            <img class="anima2 user-select-none" src="{{asset('/img/Character/anima1.png')}}">
                        </div>

                        <div class="col-md-6 left">
                            <div class="container">
                                <div class="row">
                                    <div class="d-flex">
                                        <div class="img-left">
                                            <img src="{{asset('/img/logo_bg-putih.png')}}" alt="">
                                        </div>
                                        <div class="text-right">
                                            <h1 class="fw-bold">Sign Up</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <form action="#" method="POST">
                                        <div class="inputValue">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="mt-2 form-control"
                                                autofocus autocomplete="off">
                                        </div>
                                        <div class="inputValue">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username" class="mt-2 form-control"
                                                autofocus autocomplete="off">
                                        </div>
                                        <div class="inputValue mt-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password"
                                                class="mt-2 form-control" autocomplete="off">
                                        </div>
                                        <div class="inputValue">
                                            <label for="PhoneNumber">Phone Number</label>
                                            <div class="row g-3">
                                                <div class="col-3">
                                                    <input type="text"
                                                        class="text-center mt-2 w-100 form-control bg-white" value="+62"
                                                        disabled>
                                                </div>
                                                <div class="col-9">
                                                    <input type="text" name="PhoneNumber"
                                                        class="mt-2 w-100 form-control" autocomplete="off" id="phone"
                                                        onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttonValue mt-3">
                                            <button type="submit" class="btn btn-Gradient" name="submit">Sign
                                                Up</button>
                                        </div>
                                    </form>
                                    <a href="{{route("login")}}" class="toRegist">Dont have account? Sign up</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection