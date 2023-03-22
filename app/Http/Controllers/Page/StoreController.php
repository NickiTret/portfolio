<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Page\StoreRequest;
use App\Models\Group;
use App\Models\Page;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        $data['images_src'] = Page::uploadImage($request);
        // $group = $data['group_id'];
        // unset($data['group_id']);


        $page = Page::create($data);


        return redirect()->route('page.index');

    }
}
