<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;

use App\Models\Social;

class EditController extends Controller
{
    public function __invoke(Social $social) {
        return view('social.edit', compact('social'));
    }
}
