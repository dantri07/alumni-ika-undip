@extends('layout1')
@section('content')
<br>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="home.php?page=fs_user" class="btn_tambah"><i class="fas fa-user-plus"></i> Tambah Data</a>
	
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
					<th>username</th>
					<th>password</th>
          <th>Action</th>
				</tr>
		</thead>
    
    </table>
</div>
</div>
</div>
      <div class='content'></div>
@endsection