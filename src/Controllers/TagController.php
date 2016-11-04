<?php

namespace Hwmarcos\Tags\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Hwmarcos\Tags\Models\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tags = ['tag1', 'tag2', 'tag3'];
        return view('tags::index', compact('tags'));
    }

}