<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\user;
use App\models\gallery;
use App\models\berita;
use App\models\keahlian;
use App\models\kota;
use App\models\pengalaman;
use App\models\alumni;
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
// ------------KEAHLIAN-------------//
public function view_keahlian() {
    $view = keahlian::all();
 
    return view ('keahlian/view-keahlian', ['nama'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}
public function create_keahlian()
{
    return view ('keahlian/keahlian-form');
}

public function store_keahlian(Request $request)
{
    $keahlian = new keahlian;
    $keahlian -> id = $request -> id;
    $keahlian -> keahlian = $request->keahlian;
    $keahlian -> id_alumni = $request ->id_alumni;
    $keahlian -> save();
    //$view=keahlian::create($request->all()); 
    // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
      return redirect('/keahlian/view-keahlian');
      
}

public function edit_keahlian(Request $request, $id)
{
    
    $keahlian = keahlian::findOrFail($id); 
    return view ('/keahlian/keahlian-edit', ['keahlian' => $keahlian]);
    // itu yang keahlian itu nama panggilan dan di keahlian-edit file itu panggil juga sama goblok
}
public function update_keahlian (Request $request, $id)
{
    $keahlian = keahlian::findOrFail($id);
    $keahlian -> id = $request -> id;
    $keahlian -> keahlian = $request->keahlian;
    $keahlian -> id_alumni = $request -> id_alumni;
    $keahlian -> save();
    return redirect('/keahlian/view-keahlian');
}

public function delete_keahlian($id)
{
    $deletedkeahlian = keahlian::findOrFail($id);
    $deletedkeahlian->delete();
    return redirect('/keahlian/view-keahlian');

}

// ------------kota-------------//
public function view_kota() {
    $view = kota::all();
 
    return view ('kota/view-kota', ['nama'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}
public function create_kota()
{
    return view ('kota/kota-form');
}

public function store_kota(Request $request)
{
    $kota = new kota;
    $kota -> id = $request -> id;
    $kota -> name_kota = $request->name_kota;
    $kota -> save();
    //$view=kota::create($request->all()); 
    // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
      return redirect('/kota/view-kota');
      
}

public function edit_kota(Request $request, $id)
{
    
    $kota = kota::findOrFail($id); 
    return view ('/kota/kota-edit', ['kota' => $kota]);
    // itu yang kota itu nama panggilan dan di kota-edit file itu panggil juga sama goblok
}
public function update_kota (Request $request, $id)
{
    $kota = new kota;
    $kota -> id = $request -> id;
    $kota -> name_kota = $request->name_kota;
    $kota -> save();
    return redirect('/kota/view-kota');
}

public function delete_kota($id)
{
    $deletedkota = kota::findOrFail($id);
    $deletedkota->delete();
    return redirect('/kota/view-kota');

}
// ------------pengalaman-------------//
public function view_pengalaman() {
    $view = pengalaman::all();
 
    return view ('pengalaman/view-pengalaman', ['nama'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}
public function create_pengalaman()
{
    return view ('pengalaman/pengalaman-form');
}

public function store_pengalaman(Request $request)
{
    $pengalaman = new pengalaman;
    $pengalaman -> id = $request -> id;
    $pengalaman -> pengalaman = $request->pengalaman;
    $pengalaman -> jabatan = $request->jabatan;
    $pengalaman -> id_alumni = $request ->id_alumni;
    $pengalaman -> start = $request->start;
    $pengalaman -> end = $request->end;
    // $view=pengalaman::create($request->all());
    $pengalaman -> save();
     
   
    // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
      return redirect('/pengalaman/view-pengalaman');
      
}

public function edit_pengalaman(Request $request, $id)
{
    
    $pengalaman = pengalaman::findOrFail($id); 
    return view ('/pengalaman/pengalaman-edit', ['pengalaman' => $pengalaman]);
    
}
public function update_pengalaman (Request $request, $id)
{
    $pengalaman = pengalaman::findOrFail($id);
    $pengalaman -> id = $request -> id;
    $pengalaman -> pengalaman = $request->pengalaman;
    $pengalaman -> jabatan = $request->jabatan;
    $pengalaman -> id_alumni = $request ->id_alumni;
    $pengalaman -> start = $request->start;
    $pengalaman -> end = $request->end;
    $pengalaman -> save();
    return redirect('/pengalaman/view-pengalaman');
}

public function delete_pengalaman($id)
{
    $deletedpengalaman = pengalaman::findOrFail($id);
    $deletedpengalaman->delete();
    return redirect('/pengalaman/view-pengalaman');

}
// ------------ALUMNI-------------//
public function view_alumni() {
    $view = alumni::all();
 
    return view ('alumni/view-alumni', ['nama'=> $view]);
                //diatas (student itu nama file), nama = panggilan untuk di file students atau tersehrah)
}
public function create_alumni()
{
    return view ('alumni/alumni-form');
}

public function store_alumni(Request $request)
{
    $alumni = new alumni;
    $alumni -> id = $request -> id;
    $alumni -> full_name = $request->full_name;
    $alumni -> nik = $request ->nik;
    $alumni -> asal_institusi = $request -> asal_institusi;
    $alumni -> phone = $request->phone;
    $alumni -> email = $request ->email;
    $alumni -> date_of_birth = $request -> date_of_birth;
    $alumni -> address = $request->address;
    $alumni -> id_kota = $request ->id_kota;
    $alumni -> pekerjaan = $request ->pekerjaan;
    $alumni -> status = $request ->status;
    $alumni -> instansi_pendidikan = $request -> instansi_pendidikan;
    $alumni -> username = $request->username;
    $alumni -> password = $request ->password;
    $alumni -> save();
    //$view=alumni::create($request->all()); 
    // yang diatas yg hijau itu untuk semua data kesiman tpi karena butuh hash jdi fk you
      return redirect('/alumni/view-alumni');
      
}

public function edit_alumni(Request $request, $id)
{
    
    $alumni = alumni::findOrFail($id); 
    return view ('/alumni/alumni-edit', ['alumni' => $alumni]);
    // itu yang alumni itu nama panggilan dan di alumni-edit file itu panggil juga sama goblok
}
public function update_alumni (Request $request, $id)
{
    $alumni = alumni::findOrFail($id);
    $alumni -> id = $request -> id;
    $alumni -> full_name = $request->full_name;
    $alumni -> nik = $request ->nik;
    $alumni -> asal_institusi = $request -> asal_institusi;
    $alumni -> phone = $request->phone;
    $alumni -> email = $request ->email;
    $alumni -> date_of_birth = $request -> date_of_birth;
    $alumni -> address = $request->address;
    $alumni -> id_kota = $request ->id_kota;
    $alumni -> pekerjaan = $request ->pekerjaan;
    $alumni -> status = $request ->status;
    $alumni -> instansi_pendidikan = $request -> instansi_pendidikan;
    $alumni -> username = $request->username;
    $alumni -> password = $request ->password;
    $alumni -> save();
    return redirect('/alumni/view-alumni');
}

public function delete_alumni($id)
{
    $deletedalumni = alumni::findOrFail($id);
    $deletedalumni->delete();
    return redirect('/alumni/view-alumni');

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

