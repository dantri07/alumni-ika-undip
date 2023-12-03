<@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>edit<span>data pengalaman</span></h3>
  </div>
<br>


<div class="card_content">
    <form action="/pengalaman-update/{{$pengalaman->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id" class="css_input1" value="{{$pengalaman->id}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">pengalaman</td>
              <td><input type="text" name="pengalaman" class="css_input1" value="{{$pengalaman->pengalaman}}"></td>
          </tr>
          <tr>
              <td class="label1">jabatan</td>
              <td><input type="text" name="jabatan" class="css_input1" value="{{$pengalaman->jabatan}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">Id_alumni</td>
              <td><input type="text" name="id_alumni" class="css_input1" value="{{$pengalaman->id_alumni}}"></td>
        <tr>
              <td class="label1">start</td>
              <td><input type="date" name="start" class="css_input1" value="{{$pengalaman->start}}" ></td>
          </tr>
          <tr>
              <td class="label1">end</td>
              <td><input type="date" name="end" class="css_input1" value="{{$pengalaman->end}}" ></td>
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