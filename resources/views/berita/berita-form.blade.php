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
        <a href='home.php?page=view_news'><i class='fas fa-newspaper'></i><span> Data Berita</span></a>
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
    <form method="POST" action="/user/view">
        @csrf
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id" class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">Name</td>
              <td><input type="text" name="name" class="css_input1"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">Email</td>
        <td>
        <input type="text" name="email" class="css_input1">
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">Password</td>
        <td>
        <input type="password" name="password" class="css_input1">
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">Role_id</td>
              <td>
              <select name="role_id" id="role_id" class="form-control" required>
                        <option value="">Select One</option>
                        <option value="admin">Admin</option>
                        <option value="alumni">Alumni</option>
                    </select>
              </td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td>&nbsp;</td>
              <td>
                  <a href="/user/view" class="btn_cancel"> <i class="fas fa-chevron-circle-left"></i> Kembali</a>
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