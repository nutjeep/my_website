<?php

namespace App\Http\Controllers;

use App\Helpers\SEOHelper;
use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    public function index()
    {
        $title  = `Fullstack Web Developer | Muhammad Najib 'Abdulloh`;
        $seo    = new SEOHelper(route('home'));

        return view('home', compact('title', 'seo'));
    }

    public function portfolio()
    {
        $title  = `Portfolio | Muhammad Najib 'Abdulloh`;
        $seo    = new SEOHelper(route('portfolio'));

        return view('portfolio', compact('title', 'seo'));
    }
}
