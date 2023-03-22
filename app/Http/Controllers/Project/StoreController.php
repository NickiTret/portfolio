<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Project\StoreRequest;
use App\Models\Group;
use App\Models\Project;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        $data['image_src'] = Project::uploadImage($request);
        // $group = $data['group_id'];
        // unset($data['group_id']);


        $project = Project::create($data);


        return redirect()->route('project.index');

    }
}
