<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($id = 0)
    {
        $topics = Topic::all();
        $id = ($id == 0 ?  $topics[0]->id : $id);
        $blocks = Block::where("topicid", $id)->get();

        if ($blocks === null)
            $blocks = new Block();
        return view("home.index")->with("topics", $topics)->with("blocks", $blocks);
    }
}
