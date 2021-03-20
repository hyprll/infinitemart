@extends('Auth/template/Auth2')
@section('title', 'Sign Up | Infinite Mart')

@section('content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="wrap">
                    <div>
                        <img class="img" src="{{asset('img')}}/bg-1.jpg" style="width: 100%;">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign Up</h3>
                            </div>
                            <div>
                        </div>
                    </div>
                    <form action="#" class="signin-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mt-3">
                                    <input type="email" id="email" class="form-control" required>
                                    <label class="form-control-placeholder" for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mt-3">
                                    <input type="text" id="username" class="form-control" required>
                                    <label class="form-control-placeholder" for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="FirstName" class="form-control" required>
                                    <label class="form-control-placeholder" for="FirstName">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="LastName" class="form-control" required>
                                    <label class="form-control-placeholder" for="LastName">Last Name</label>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="row g-1">
                                        <div class="col-3">
                                            <input type="text"
                                            class="text-center w-100 form-control bg-white"
                                            value="+62" disabled>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" id="PhoneNumber" class="form-control" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                            <label class="form-control-placeholder" for="PhoneNumber">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" id="PostCode" class="form-control" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                                    <label class="form-control-placeholder" for="PostCode">Post Code</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="LastName" class="form-control" required>
                                    <label class="form-control-placeholder" for="LastName">City</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="LastName" class="form-control" required>
                                    <label class="form-control-placeholder" for="LastName">Code Country</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" required>
                                    <label class="form-control-placeholder" for="password-field">Password</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="Address" type="password" class="form-control" required style="resize: none; height: 100px;"></textarea>
                                    <label class="form-control-placeholder" for="Address">Address</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                <input type="checkbox" checked>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="w-50 text-md-right">
                            <a href="#">Forgot Password</a>
                        </div>
                        </div>
                    </form>
                    <p class="text-center">Already have an account? <a data-toggle="tab" href="/login2">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection