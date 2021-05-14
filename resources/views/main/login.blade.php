@extends('layout.mainblank')

@section('style')
<style>
    .login-hero {
        max-width: 100%;
        height: 100vh;
        object-fit: cover;
        object-position: 100% 100%;
    }
    .login-logo {
        text-align: center;
        max-width: 250px;
    }
    .form-login .form-control {
        border: 1px solid #fff;
        border-radius: 0px;
        color: #fff;
        font-size: 18px !important;
        height: 48px;
        padding-left: 18px;
        font-size: 13px;
        background: transparent;
    }
    .form-login label {
        font-size: 16px;
        color: #fff;
    }
    .form-login {
        max-width: 550px;
        margin: auto;
    }
    .form-login .border-btn {
        height: 48px;
        padding: 10px 50px;
    }
    .auth-title {
        font-size: 3rem;
        display: block;
        font-weight: 700;
        text-transform: uppercase;
        color: #fff;
        -webkit-text-stroke: .1px #f6f7f8;
        -webkit-text-fill-color: transparent;
    }
    .to-sign {
        color: #fff;
    }
    .to-sign a, .forgot-pwd {
        color: crimson;
    }
    .to-sign a:hover, .forgot-pwd:hover {
        color: rgb(252, 116, 116);
    }

</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <img src="/assets/img/login-hero.png" class="login-hero" alt="">
        </div>
        <div class="col-xl-6 col-lg-6 form-login">
            <div class="text-center">
                <a href="/"><img src="/assets/img/logo/logo.png" class="login-logo mx-auto" alt="logo" /></a>
            </div>
            <div class="text-center">
                <p class="auth-title mt-4 mb-5">Hi, Welcome Back !</p>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Enter password">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <li>
                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                        <label for="styled-checkbox-1">Remember me</label>
                    </li>
                </div>
                <div class="col-sm-6 text-right">
                    <p class="forgot-pwd">Forgot password?</p>
                </div>
            </div>
            
            <p class="to-sign">Don't have an account yet? <a href="/signup"> Create new one!</a> </p>
            <div class="text-center">
                <a href="" class="border-btn mt-3">log in</a>
            </div>
            
        </div>
    </div>
</div>
@endsection