@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Input <span>Form alumni</span></h3>
  </div>
<br>

<div class="card_content">
    <form method="POST" action="/alumni/view-alumni" enctype="multipart/form-data">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">full_name</td>
              <td><input type="text" name="full_name"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">nik</td>
              <td><input type="text" name="nik"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">asal_institusi</td>
              <td><input type="text" name="asal_institusi"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">phone</td>
              <td><input type="text" name="phone"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">email</td>
              <td><input type="text" name="email"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">date_of_birth</td>
             <td> <input type="date" name="date_of_birth"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">address</td>
              <td><input type="text" name="address"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------->        
      <tr>
    <td class="label1">id_kota</td>
    <td>
        <select name="id_kota" class="css_input1">
            <option value="Kabupaten Bintan">Kabupaten Bintan</option>
            <option value="Kabupaten Karimun">Kabupaten Karimun</option>
            <option value="Kabupaten Kepulauan Anambas">Kabupaten Kepulauan Anambas</option>
            <option value="Kabupaten Lingga">Kabupaten Lingga</option>
            <option value="Kabupaten Natuna">Kabupaten Natuna</option>
            <option value="Kota Batam">Kota Batam</option>
            <option value="Kota Tanjung Pinang">Kota Tanjung Pinang</option>
        </select>
    </td>
</tr>
      <!------------------------------------------------------------------------------------->
    <!------------------------------------------------------------------------------------->        
        <tr>
              <td class="label1">pekerjaan</td>
              <td><input type="text" name="pekerjaan"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">status</td>
              <td><input type="text" name="status"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">instansi_pendidikan</td>
              <td><input type="text" name="instansi_pendidikan"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">username</td>
              <td><input type="text" name="username"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">password</td>
              <td><input type="text" name="password"  class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
      
          
      
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/alumni/view-alumni" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
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