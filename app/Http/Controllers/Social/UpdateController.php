<?php

namespace App\Http\Controllers\Social;

use App\Http\Controllers\Controller;
use App\Http\Requests\Social\UpdateRequest;
use App\Models\Social;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Social $social) {

        $data = $request->validated();


        $data['image_src'] = Social::uploadImage($request, $social->image_src);

        $social->update($data);

        $socials = Social::all();

        return view('social.index', compact('social', 'socials'));
    }
}
