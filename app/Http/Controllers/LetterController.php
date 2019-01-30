<?php

namespace App\Http\Controllers;

class LetterController extends Controller
{
    public function index() {
        return response()->json(str_split('ABCDEFGHIJKLMNOPQRSTUV'));
    }
}
