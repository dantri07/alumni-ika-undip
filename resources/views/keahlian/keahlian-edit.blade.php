
<@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Edit <span>Data Keahlian</span></h3>
  </div>
<br>
<div class="card_content">
    <form action="/keahlian-update/{{$keahlian->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id" class="css_input1" value="{{$keahlian->id}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">Keahlian</td>
              <td><input type="text" name="keahlian" class="css_input1" value="{{$keahlian->keahlian}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">Id_alumni</td>
        <td>
        <textarea  rows="4", cols="54"  name="id_alumni" style="resize:none" class="css_input1" value="{{$keahlian->id_alumni}}" >{{$keahlian->id_alumni}}</textarea>
        </td>
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
      
<div class='content'></div>

@endsection