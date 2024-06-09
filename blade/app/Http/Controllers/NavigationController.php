<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function events() {
        return $this->index('event');
    }

    public function school() {
        return $this->index('school');
    }

    function get_randint() : int {
        return random_int(0, 1000);
    }
    
    function index(string $name) {
        return view("page.$name", ['token' => $this->get_randint()]);
    }
}
