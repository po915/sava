<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('main.index');
    }

    public function program() {
        return view('main.program');
    }

    public function about() {
        return view('main.about');
    }

    public function contact() {
        return view('main.contact');
    }

    public function shop() {
        return view('main.shop');
    }

    public function membership() {
        return view('main.membership');
    }

    public function login() {
        return view('main.login');
    }

    public function signup() {
        return view('main.signup');
    }

    public function schedule() {
        return view('main.schedule');
    }
}
