<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;


class PersonalIndexController extends Controller
{
    public function __invoke()
    {
        return view('personal.main.index');
    }
}
