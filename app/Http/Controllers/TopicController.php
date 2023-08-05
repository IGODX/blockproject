<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        return view("topic.index");
    }
    public function create(): View
    {
        return view("topic.create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            ['title' => 'required|unique:topics|max:100']
        );
        Topic::create($validated);

        return to_route("home.index");
    }
}
