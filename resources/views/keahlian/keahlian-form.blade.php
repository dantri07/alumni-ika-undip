@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Input <span>Form Keahlian</span></h3>
  </div>
<br>

<div class="card_content">
    <form method="POST" action="/keahlian/view-keahlian" enctype="multipart/form-data">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">keahlian</td>
              <td><input type="text" name="keahlian"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">id_alumni</td>
        <td>
        <textarea  rows="4", cols="54"  name="id_alumni" style="resize:none" class="css_input1"></textarea>
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/keahlian/view-keahlian" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
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