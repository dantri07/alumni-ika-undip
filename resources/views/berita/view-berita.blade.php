@extends('layout1')
@section('content')
<br>
<div class="content">
  <div class="title_area">
      <h3>Input <span>Data Log Activity</span></h3>
</div>

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
@endsection