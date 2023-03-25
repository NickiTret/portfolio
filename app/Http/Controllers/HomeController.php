<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Project;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'title' => 'Главная',
            'url' => '/',
            'links' => Page::all(),
            'page' => Page::where('link', '/')->first(),
            'projects' => Project::inRandomOrder()->get(),
            'socials' => Social::all(),
        ]);
    }

    public function about()
    {
        return Inertia::render('About', [
            'title' => 'Обо мне',
            'url' => '/about',
            'links' => Page::all(),
            'page' => Page::where('link', '/about')->first(),
            'socials' => Social::all(),
        ]);
    }

    public function contact()
    {
        return Inertia::render('Contact', [
            'title' => 'Контакты',
            'url' => '/contact',
            'links' => Page::all(),
            'page' => Page::where('link', '/contact')->first(),
            'create_url' => URL::route('message.store'),
            'socials' => Social::all(),
        ]);
    }

    public function project($id)
    {
        return Inertia::render('Project', [
            'title' => 'Project Page',
            'url' => "/projects/$id",
            'links' => Page::all(),
            'project' => Project::where('id', $id)->first(),
            'projects' => Project::where('id', '!=' , $id)->orderBy('id', 'desc')->get(),
            'socials' => Social::all(),
        ]);
    }
}
