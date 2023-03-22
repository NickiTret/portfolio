<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Social;

class DeleteController extends Controller
{
    public function __invoke(Social $social) {

        $social->delete();

        return redirect()->route('social.index');
    }
}
