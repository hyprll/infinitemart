@extends('auth/template/Auth')

@section("title", "Register")

@section('content')
<div class="loginContainer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
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
                                    <form action="{{route("regist_proses")}}" method="POST" id="registerAccount">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="inputValue">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email"
                                                        class="mt-2 form-control" value="{{old("email")}}">
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('email_error_status')}}
                                                </small>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputValue">
                                                    <label for="username">Username</label>
                                                    <input type="text" name="username" id="username"
                                                        class="mt-2 form-control" value="{{old("username")}}">
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('username_error_status')}}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="inputValue">
                                                    <label for="firstName">First Name</label>
                                                    <input type="text" name="first_name" id="firstName"
                                                        class="mt-2 form-control" value="{{old("first_name")}}">
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('first_name_error_status')}}
                                                </small>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputValue">
                                                    <label for="lastName">Last Name</label>
                                                    <input type="text" name="last_name" id="lastName"
                                                        class="mt-2 form-control" value="{{old("last_name")}}">
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('last_name_error_status')}}
                                                </small>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-9">
                                                <div class="inputValue">
                                                    <label for="PhoneNumber">Phone Number</label>
                                                    <div class="row g-1">
                                                        <div class="col-3">
                                                            <input type="text"
                                                                class="text-center mt-2 w-100 form-control bg-white"
                                                                value="+62" disabled>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" name="phone"
                                                                class="mt-2 w-100 form-control" autocomplete="off"
                                                                id="phone"
                                                                onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                                value="{{old("phone")}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('phone_error_status')}}
                                                </small>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="inputValue">
                                                    <label for="postal_code">Post Code</label>
                                                    <input type="text" name="postal_code" id="postal_code"
                                                        class="mt-2 form-control" autocomplete="off"
                                                        onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"
                                                        value="{{old("postal_code")}}">
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('postal_code_error_status')}}
                                                </small>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-md-6">
                                                <div class="inputValue">
                                                    <label for="kota">Kota</label>
                                                    <input type="text" name="city" id="kota" class="mt-2 form-control"
                                                        value="{{old("city")}}">
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('city_error_status')}}
                                                </small>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="inputValue">
                                                    <label for="country_code">Code Negara</label>
                                                    <input class="form-control mt-2" list="dataCountry"
                                                        name="country_code" id="country_code" autocomplete="off">
                                                    <datalist id="dataCountry">
                                                        <option value="San Francisco">
                                                        <option value="New York">
                                                        <option value="Seattle">
                                                        <option value="Los Angeles">
                                                        <option value="Chicago">
                                                    </datalist>
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('country_code_error_status')}}
                                                </small>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <div class="inputValue mt-2">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password"
                                                        class="mt-2 form-control" autocomplete="off">
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('password_error_status')}}
                                                </small>
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <div class="inputValue mt-2">
                                                    <label for="address">Alamat</label>
                                                    <textarea name="address" id="address" rows="3"
                                                        class="form-control mt-2" style="resize: none"></textarea>
                                                </div>
                                                <small class="validate text-danger">
                                                    {{Session::get('address_error_status')}}
                                                </small>
                                            </div>
                                        </div>

                                        <div class="buttonValue my-3">
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