@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Input <span>Form Berita</span></h3>
  </div>
<br>

<div class="card_content">
    <form method="POST" action="/berita/view-berita" enctype="multipart/form-data">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">Title</td>
              <td><input type="text" name="title"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">Description</td>
        <td>
        <textarea  rows="4", cols="54"  name="description" style="resize:none" class="css_input1"></textarea>
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">Tanggal</td>
        <td>
        <input type="date" name="tanggal"  class="css_input1">
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
        <tr>
            <td for="image" class="label1">File</td>
            <td>
            <div class="mb-3 input-group">
                <label for="image" class="form-label"></label>
                <input class="form-control" type="file"  name="photo" id="photo">
            </div>
            </td>
        </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/berita/view-berita" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                  <button class="button_simpan" type="submit"><i class="fas fa-save"></i> Simpan </button>
              </td>
          </tr>
      <!------------------------------------------------------------------------------------->
        </table>
        <br>
    </form>
</div>
</div>
      
</div>
</div>
</div>
      <div class='content'></div>

@endsection