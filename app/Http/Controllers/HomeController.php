<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'Home Page',
            'url' => '/'
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'title' => 'About Page',
            'url' => '/about'
        ]);
    }

    public function contact()
    {
        return Inertia::render('Contact', [
            'title' => 'Contact Page',
            'url' => '/contact'
        ]);
    }

    // public function project($id)
    // {
    //     return Inertia::render('Contact', [
    //         'title' => 'Project Page',
    //         'url' => '/contact'
    //     ]);
    // }
}
