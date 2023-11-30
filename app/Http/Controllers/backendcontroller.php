<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use App\models\gallery;
use App\models\berita;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


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
        // itu yang user itu nama panggilan dan di user-edit file itu panggil juga sama goblok
    }
    public function update_user (Request $request, $id)
    {
        $user = user::findOrFail($id);
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

//---------Berita---------------------------
public function view_berita() {
    $view = berita::all();
 
    return view ('berita/view-berita', ['nama'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}

public function create_berita()
    {
        return view ('berita/berita-form');
    }

    public function store_berita(Request $request)
    {   
        $newName = '';
        if($request->file('photo'))
        {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->title.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

            $request['gambar'] = $newName;
            $view = berita::create($request->all());
        
            return redirect('/berita/view-berita');
          
    }

    public function edit_berita(Request $request, $id)
    {
        
        $berita = berita::findOrFail($id); 
        return view ('/berita/berita-edit', ['berita' => $berita]);
        // itu yang user itu nama panggilan dan di user-edit file itu panggil juga sama goblok
    }

    public function update_berita (Request $request, $id)
    {

        $berita = berita::findOrFail($id);
        $newName = '';
        
        if ($berita->gambar) {
            Storage::delete($berita->gambar);
        }

        if($request->file('photo'))
        {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->title.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

            $request['gambar'] = $newName;

        $berita -> title = $request->title;
        $berita -> description = $request -> description;
        $berita -> tanggal = $request -> tanggal;
        $berita -> gambar = $request -> gambar;
        $berita -> save();
        return redirect('/berita/view-berita');
    }

    public function delete_berita ($id)
    {
        $deletedberita = berita::findOrFail($id);
        if ($deletedberita->gambar) {
            Storage::delete($deletedberita->gambar);
        }
        $deletedberita->delete();
        
        return redirect('/berita/view-berita');

    }

//---------gallery---------------------------
public function view_gallery() {
    $view = gallery::all();
 
    return view ('gallery/view-gallery', ['nama'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}

    public function create_gallery()
    {
        return view ('gallery/gallery-form');
    }

    public function store_gallery(Request $request)
    {   
        $newName = '';
        if($request->file('photo'))
        {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->title.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

            $request['images'] = $newName;
            $view = gallery::create($request->all());
        
            return redirect('/gallery/view-gallery');
          
    }

    public function edit_gallery(Request $request, $id)
    {
        
        $gallery = gallery::findOrFail($id); 
        return view ('/gallery/gallery-edit', ['gallery' => $gallery]);
        // itu yang user itu nama panggilan dan di user-edit file itu panggil juga sama goblok
    }

    public function update_gallery (Request $request, $id)
    {

        $gallery = gallery::findOrFail($id);
        $newName = '';
        
        if ($gallery->images) {
            Storage::delete($gallery->images);
        }

        if($request->file('photo'))
        {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $newName = $request->title.'.'.$extension;
            $request->file('photo')->storeAs('photo', $newName);
        }

            $request['images'] = $newName;

        $gallery -> title = $request->title;
        $gallery -> description = $request -> description;
        $gallery -> tanggal = $request -> tanggal;
        $gallery -> type = $request -> type;
        $gallery -> images = $request -> images;
        $gallery -> save();
        return redirect('/gallery/view-gallery');
    }

    public function delete_gallery($id)
    {
        $deletedgallery = gallery::findOrFail($id);
        if ($deletedgallery->images) {
            Storage::delete($deletedgallery->images);
        }
        $deletedgallery->delete();
        
        return redirect('/gallery/view-gallery');

    }
    
}

