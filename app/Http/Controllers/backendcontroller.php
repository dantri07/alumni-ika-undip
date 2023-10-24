<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class backendcontroller extends Controller
{
    public function view_user() {
        $view = user::all();
     
        return view ('user/view', ['nama'=> $view]);
                    //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
    }
    public function create_user()
    {
        return view ('user/view-form');
    }

    public function store_user(Request $request)
    {
        $user = new user;
        $user -> id = $request -> id;
        $user -> name = $request->name;
        $user -> email = $request -> email;
        $user -> role_id = $request -> role_id;
        $user -> password = Hash::make($request->password);
        $user -> save();
        //$view=user::create($request->all()); 
        // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
          return redirect('/user/view');
          
    }

    public function edit_user(Request $request, $id)
    {
        $user = user::findOrFail($id); 
        return view ('/user/user-edit', ['user' => $user]);
    }
    public function update_user (Request $request, $id)
    {
        $user= user::findOrFail($id);
        $user -> id = $request -> id;
        $user -> name = $request->name;
        $user -> email = $request -> email;
        $user -> role_id = $request -> role_id;
        $user -> password = Hash::make($request->password);
        $user -> save();
        return redirect('/user/view');
    }

    public function delete_user($id)
    {
        $deleteduser = user::findOrFail($id);
        $deleteduser->delete();
        return redirect('/user/view');

    }
}

