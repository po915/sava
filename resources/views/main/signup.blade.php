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
        max-width: 650px;
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
    .to-sign a, .forgot-pwd, .to-terms {
        color: crimson;
    }
    .to-sign a:hover, .forgot-pwd:hover, .to-terms:hover {
        color: rgb(252, 116, 116);
    }
    
</style>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <img src="/assets/img/signup-hero.jpg" class="login-hero" alt="">
        </div>
        <div class="col-xl-6 col-lg-6 form-login">
            <div class="text-center">
                <a href="/"><img src="/assets/img/logo/logo.png" class="login-logo mx-auto" alt="logo" /></a>
            </div>
            <div class="text-center">
                <p class="auth-title mt-4 mb-5">Hi, Welcome !</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="fullname">First name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="fullname">Last name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter phone number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="password">Confirm password</label>
                        <input type="password" class="form-control" name="confirm_pwd" placeholder="Confirm password">
                    </div>
                </div>
            </div> 
            <li>
                <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                <label for="styled-checkbox-1">I agree to <a href="/terms" class="to-terms">privacy policy & terms</a>. </label>
            </li>
            <p class="to-sign">Already have an account?<a href="/login"> Sign in instead!</a> </p>
            <div class="text-center">
                <a href="" class="border-btn mt-3">sign up</a>
            </div>
        </div>
    </div>
</div>
@endsection