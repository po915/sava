<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Program;

use function Ramsey\Uuid\v1;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function program()
    {
        $gets = Program::get();

        $programs = array();
        foreach ($gets as $get) {
            $photos = json_decode($get->photos);

            $program = (object)
            [
                'id' => $get->id,
                'name' => $get->name,
                'price' => $get->price,
                'photos' => $photos
            ];
            $programs[] = $program;
        }
        return view('main.program')
            ->with('programs', $programs);
    }

    public function about()
    {
        return view('main.about');
    }

    public function contact()
    {
        return view('main.contact');
    }

    public function shop()
    {
        $gets = Product::get();

        $products = array();
        foreach ($gets as $get) {
            $photos = json_decode($get->photos);

            $product = (object)
            [
                'id' => $get->id,
                'name' => $get->name,
                'price' => $get->price,
                'photos' => $photos
            ];
            $products[] = $product;
        }

        return view('main.shop')
            ->with('products', $products);
    }

    public function membership()
    {
        return view('main.membership');
    }

    public function login()
    {
        return view('main.login');
    }

    public function signup()
    {
        return view('main.signup');
    }

    public function schedule()
    {
        return view('main.schedule');
    }

    public function productDetail($id)
    {
        $get = Product::where('id', $id)->first();
        $photos = json_decode($get->photos);
        $product = (object)
        [
            'id' => $get->id,
            'name' => $get->name,
            'price' => $get->price,
            'desc' => $get->description,
            'spec' => $get->spec,
            'photos' => $photos
        ];

        return view('main.product_detail')
            ->with('product', $product);
    }

    public function programDetail($id)
    {
        $get = Program::where('id', $id)->first();
        $photos = json_decode($get->photos);
        $program = (object)
        [
            'id' => $get->id,
            'name' => $get->name,
            'price' => $get->price,
            'e_desc' => $get->e_description,
            'a_desc' => $get->a_description,
            'photos' => $photos
        ];

        return view('main.program_detail')->with('program', $program);
    }

    public function programCart()
    {
        return view('main.program_cart');
    }

    public function productCart()
    {
        return view('main.product_cart');
    }

    public function checkoutOne()
    {
        return view('main.checkout_one');
    }

    public function checkoutTwo()
    {
        return view('main.checkout_two');
    }

    public function checkoutThree()
    {
        return view('main.checkout_three');
    }

    public function programVenom()
    {
        return view('programs.venom');
    }

    public function programDeadliftPeak()
    {
        return view('programs.deadlift_peak');
    }

    public function programDeadliftFocus()
    {
        return view('programs.deadlift_focus');
    }

    public function programDeadliftBoost()
    {
        return view('programs.deadlift_boost');
    }

    public function fullForce()
    {
        return view('programs.full_force');
    }

    public function reLoad()
    {
        return view('programs.reload');
    }

    public function rage()
    {
        return view('programs.rage');
    }
}
