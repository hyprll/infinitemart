@extends('Auth/template/Auth2')
@section('title', 'Seller | Infinite Mart')

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
                                <h3 class="mb-4">Open Shop</h3>
                            </div>
                            <div>
                        </div>
                    </div>
                    <form action="#" class="signin-form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mt-3">
                                    <input type="text" id="ShopName" class="form-control" required>
                                    <label class="form-control-placeholder" for="ShopName">Shop Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="ShopLogo" class="form-control" required>
                                    <label class="form-control-placeholder" for="ShopLogo">Shop Logo</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="ShopBackground" class="form-control" required>
                                    <label class="form-control-placeholder" for="ShopBackground">Shop Background</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="ShopDescription" type="password" class="form-control" required style="resize: none; height: 100px;"></textarea>
                                    <label class="form-control-placeholder" for="ShopDescription">Shop Description</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Submit</button>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection