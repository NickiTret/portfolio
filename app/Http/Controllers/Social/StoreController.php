<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Social\StoreRequest;
use App\Models\Group;
use App\Models\Social;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        $data['image_src'] = Social::uploadImage($request);
        // $group = $data['group_id'];
        // unset($data['group_id']);


        $social = Social::create($data);


        return redirect()->route('social.index');

    }
}
