<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;

class DeleteController extends Controller
{
    public function __invoke(Page $page) {

        $page->delete();

        return redirect()->route('page.index');
    }
}
