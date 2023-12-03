@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Input <span>Form kota</span></h3>
  </div>
<br>

<div class="card_content">
    <form method="POST" action="/kota/view-kota" enctype="multipart/form-data">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">name_kota</td>
              <td><input type="text" name="name_kota"  class="css_input1"></td>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/kota/view-kota" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
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