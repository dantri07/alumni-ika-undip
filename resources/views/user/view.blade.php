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
		<h3><i class="fas fa-person"></i> List <span>Data  User</span></h3>
	</div>
<br>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/user/view-form" class="btn_tambah"><i class="fas fa-user-plus"></i> Tambah Data</a>
	
	<div class="search-box-container">
		<input type="text" id="myInput_contoh" onkeyup="myFunction()" class="css_input1" placeholder="Search for names..">
	</div>

<div class="scroll">
	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
					<th>No</th>
					<th>Kode_user</th>
					<th>nama</th>
					<th>email</th>
					<th>password</th>
          <th>Action</th>
				</tr>
		</thead>
    <tbody>
                @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
					<td>{{$data->password}}</td>

                    <td>
                      <a href="/user-edit/{{$data ->id}}" class="btn btn-secondary">Edit</a>
                      <form style="display :inline-block" action="/user-delete/{{$data->id}}" method="post">
                      @csrf
                      @method('delete')
                      <button type="submit" class="fas fa-sign-out-alt btn-primary">Delete</button>

                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
</div>
</div>
      <div class='content'></div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>