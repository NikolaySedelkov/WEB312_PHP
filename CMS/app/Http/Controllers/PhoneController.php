<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function view(){
        return view('phone.view');
    }

    public function delete(Request $request) {
        $id = $request->input("id");
        Phone::destroy($id);
        return redirect("admin/panel");
    }

    public function save(Request $request) {

        $phone = Phone::updateOrCreate(
            ["id" => $request->input("id")],
            [
                "name" => $request->input("name"),
                "brand" => $request->input("brand"),
                "price" => $request->input("price"),
            ]
        );

        return redirect("admin/panel");
    }

    public function update(Request $request) {
        return $this->form(Phone::find($request->input("id")));
    }

    public function insert() {
        return $this->form(new Phone());
    }

    function form(Phone $phone) {
        return view('phone.updateOrCreate', ['data' => $phone]);
    }

    public function viewContentManager(){
        return view('phone.content-managment');
    }
}
