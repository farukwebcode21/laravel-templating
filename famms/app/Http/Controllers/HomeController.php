<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller {

    public function Home(): View {
        return view('home');
    }
    public function About(): View {
        return view('pages.about');
    }
    public function Testimonial(): View {
        return view('pages.testimonial');
    }
    public function Product(): View {
        return view('pages.product');
    }
    public function Blog(): View {
        return view('pages.blog_list');
    }
    public function Contact(): View {
        return view('pages.contact');
    }

}
