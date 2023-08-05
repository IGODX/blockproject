<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Topic;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function create()
    {
        $topics = Topic::all();
        return view("block.create")->with("topics", $topics);
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'title' => 'required|unique:blocks|max:100',
                'content' => 'required|max:300',
                'topicid' => 'required',
                'imagepath' => 'required'
            ]
        );
        Block::create($validated);
        return to_route("home.index");
    }
}
