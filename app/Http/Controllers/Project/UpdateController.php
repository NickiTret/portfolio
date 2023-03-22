<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Project $project) {

        $data = $request->validated();


        $data['image_src'] = Project::uploadImage($request, $project->image_src);

        $project->update($data);

        $projects = Project::all();

        return view('project.index', compact('project', 'projects'));
    }
}
