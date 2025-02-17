<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RestaurantController extends Controller {
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function menu() {
        return view('menu');
    }

    public function book()
    {
        return view('book');
    }

    public function bookForm(Request $request)
    {
        return view('book', ['data' => $request]);
    }
}