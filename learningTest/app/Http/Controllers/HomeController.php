<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    public function Home() {
        return view('Home');
    }
    public function Shop() {
        return view('pages.shop');
    }

    public function Vegetable() {
        return view('pages.vegetable');
    }
    public function About() {
        return view('pages.about');
    }
    public function Contact() {
        return view('pages.contactus');
    }
}
