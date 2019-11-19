<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use DB;
use Sentinel;
use Session;

class UsersController extends Controller
{
    public function signup()
    { 
        return view('users.signup');
    }

    public function signup_store(UserRequest $request)
    {
        DB::beginTransaction();
        try {
            $role = Sentinel::findRoleBySlug('pelamar'); //search role writer
            $role_id = $role->id;
            $credentials = [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'min_age' => $request->input('min_age')
            ];


            $user = Sentinel::registerAndActivate($credentials);
            $user->roles()->attach($role_id);
            Session::flash('flash_message', 'Berhasil mendaftar');
            DB::commit(); 
        } catch (\Trowable $error) {
            DB::rollBack();
            Session::flash('error', $error);
        }
    }
}
