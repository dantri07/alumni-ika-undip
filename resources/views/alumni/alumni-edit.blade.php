<!DOCTYPE html>
<html>
  <head>
  <link rel="icon web" href="Logo.png">
    <title>Admin</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/icon/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<!---<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>
<body>

<!--------------------------------------------------------------------->
    <input type="checkbox" id="check">
		<header>
    </div>
        <a href="/logout" class="btn_logout">Logout <i class="fas fa-sign-out-alt"></i></a>
		</header>
        "<div class='sidebar'>
      <label for='check'>
          <i class='fas fa-bars' id='sidebar_btn'></i>
          <i id='admin'>Ika Undip</i>
        </label>
        <p></p>
        <a href='/user/view'><i class='fas fa-user'></i><span> Data user</span></a>
        <a href='home.php?page=view_news'><i class='fas fa-newspaper'></i><span> Data berita</span></a>
        <a href='home.php?page=view_news'><i class='fas fa-newspaper'></i><span> Data keahlian</span></a>
        <a href='home.php?page=view_news'><i class='fas fa-industry'></i><span> Data Alumni</span></a>
        <a href='home.php?page=view_trade'><i class='fas fa-tree'></i><span> Data Galeri</span></a>
        <a href='home.php?page=view_news'><i class='fas fa-ship'></i><span> Data lorep ipsum</span></a>
        <a href='home.php?page=view_log_activity'><i class='fas fa-book'></i><span> Log Activity</span></a>
      </div>
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>Input <span>Data Log Activity</span></h3>
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
              <td class="label1">full_name</td>
              <td><input type="text" name="full_name" class="css_input1" value="{{$alumni->full_name}}"></td>
          </tr>
          <tr>
              <td class="label1">nik</td>
              <td><input type="text" name="nik" class="css_input1" value="{{$alumni->nik}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">asal_institusi</td>
              <td><input type="text" name="asal_institusi" class="css_input1" value="{{$alumni->asal_institusi}}"></td>
          </tr>
          <tr>
              <td class="label1">phone</td>
              <td><input type="text" name="phone" class="css_input1" value="{{$alumni->phone}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">email</td>
              <td><input type="text" name="email" class="css_input1" value="{{$alumni->email}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">date_of_birth</td>
        <td>
        <input type="date" name="date_of_birth" class="css_input1" value="{{$berita->date_of_brith}}" >
        </td>
        </tr>
         <!------------------------------------------------------------------------------------->
        
        <tr>
              <td class="label1">address</td>
              <td><input type="text" name="address" class="css_input1" value="{{$alumni->address}}"></td>
          </tr>
          <tr>
              <td class="label1">id_kota</td>
              <td><input type="text" name="id_kota" class="css_input1" value="{{$alumni->id_kota}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">status</td>
              <td><input type="text" name="status" class="css_input1" value="{{$alumni->status}}"></td>
          </tr>
          <tr>
              <td class="label1">instansi_pendidikan</td>
              <td><input type="text" name="instansi_pendidikan" class="css_input1" value="{{$alumni->instansi_pendidikan}}"></td>
          </tr>
          <tr>
              <td class="label1">username</td>
              <td><input type="text" name="username" class="css_input1" value="{{$alumni->username}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">password</td>
              <td><input type="text" name="password" class="css_input1" value="{{$alumni->password}}"></td>
          </tr>
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/gallery/view-gallery" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>