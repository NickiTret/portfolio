<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Social;

class IndexController extends Controller
{
    public function __invoke() {
        $socials = Social::all();
        return view('social.index', compact('socials'));
    }
}
