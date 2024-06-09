<?php

namespace App\Http\Controllers;
use App\Models\myself\Node;

use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function view() {
        return view('model.notes.view');
    } 

    public function delete(Request $request) {
        Node::find($request->input('id'))->delete();
        return redirect('/model/notes');
    }

    public function insert(Request $request) {
        Node::insert(array(
            'text'=>$request->input('text'),
            'priority'=>$request->input('priority')
        ));
        return redirect('/model/notes');
    }

    public function create() {
        return view('model.notes.create');
    }
}