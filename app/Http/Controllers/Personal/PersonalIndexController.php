<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class PersonalIndexController extends Controller
{
    public function __invoke()
    {
        $data['countLikePost'] = Auth::user()->postLikes()->count();
        $data['countComments'] = Auth::user()->comments()->count();

        return view('personal.main.index', compact('data'));
    }
}
