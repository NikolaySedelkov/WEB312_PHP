<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function auth(Request $request) {
        /*
        Регистрация

        $admin = new Admin();

        $admin->login      = $request->input('login');
        $admin->password   = hash('sha256', $request->input('password'));

        $admin->save();
        */

        $login      = $request->input('login');
        $password   = hash('sha256', $request->input('password'));

        foreach(Admin::all() as $admin) {
            if($admin['login'] == $login && $admin['password'] == $password) {
                return redirect('admin/panel');
            }
        }
        return redirect('admin');
    }
}
