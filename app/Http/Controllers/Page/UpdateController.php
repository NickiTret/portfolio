<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Page $page) {

        $data = $request->validated();


        $data['images_src'] = Page::uploadImage($request, $page->images_src);

        $page->update($data);

        $pages = Page::all();

        return view('page.index', compact('page', 'pages'));
    }
}
