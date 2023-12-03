@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Input <span>Form pengalaman</span></h3>
  </div>
<br>

<div class="card_content">
    <form method="POST" action="/pengalaman/view-pengalaman" enctype="multipart/form-data">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">pengalaman</td>
              <td><input type="text" name="pengalaman"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------->        
      <tr>
              <td class="label1">jabatan</td>
              <td><input type="text" name="jabatan"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">id_alumni</td>
              <td><input type="text" name="id_alumni"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <td class="label1">start</td>
        <td><input type="date" name="start"  class="css_input1"></td>
          </tr>
        <td class="label1">end</td>
        <td><input type="date" name="end"  class="css_input1"></td>
          </tr>
      
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/pengalaman/view-pengalaman" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
                  <button class="button_simpan" type="submit"><i class="fas fa-save"></i> Simpan </button>
              </td>
          </tr>
      <!------------------------------------------------------------------------------------->
        </table>
        <br>
    </form>
</div>
</div>
      

<div class='content'></div>

@endsection