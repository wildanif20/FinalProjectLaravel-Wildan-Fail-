<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;
use Session;
use Sentinel;

class SessionsController extends Controller
{
    public function login()
    {
        if ($user = Sentinel::check()) {
            Session::flash('notice', 'Sudah Login' . $user->email);
            return redirect('/');
        }
        return view('users.login');
    }

    public function login_store(SessionRequest $request)
    {
        if ($user = Sentinel::authenticate($request->all())) {
            Session::flash('notice', 'welcome' . $user->email);
            if (Sentinel::getUser()->roles()->first()->slug == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif (Sentinel::getUser()->roles()->first()->slug == 'pelamar') {
                return redirect()->route('pelamar.dashboard');
            }
        } else {
            Session::flash('erro', 'Login fails');
            return view('sessions.login');
        }
    }

    public function logout()
    {
        Sentinel::logout();
        Session::flash('notice', 'Berhasil logout');
        return redirect('/');
    }
}



