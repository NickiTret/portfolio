<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Message\StoreRequest;
use App\Models\Group;
use App\Models\Message;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        $message = Message::create($data);

        return redirect()->route('message.index');

    }
}
