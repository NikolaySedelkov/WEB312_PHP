<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageSchool extends Controller
{
    public function index() {
        return view('page.school');
    }
}
