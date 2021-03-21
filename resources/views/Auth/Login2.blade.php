@extends('Auth/template/Auth2')
@section('title', 'Sign In | Infinite Mart')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="wrap">
                    <div>
                        <img class="img" src="{{asset('img')}}/bg-1.jpg" style="width: 100%;">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign In</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-facebook"></span></a>
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="text-danger mb-5" id="error_something"></span>
                            </div>
                        </div>
                        <form action="#" class="signin-form" id="form-login">
                            <div class="form-group mt-3">
                                <input type="email" id="email" class="form-control" required>
                                <label class="form-control-placeholder" for="email">Email</label>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" required>
                                <label class="form-control-placeholder" for="password-field">Password</label>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" id="btn-submit-login">Sign
                                    In</button>
                            </div>
                        </form>
                        <p class="text-center">Not a member? <a data-toggle="tab" href="{{url("/register")}}">Sign
                                Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection