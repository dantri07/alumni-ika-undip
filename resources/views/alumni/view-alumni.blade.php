@extends('layout1')
@section('content')
<br>
<div class="content">
  <div class="title_area">
      <h3>Input <span>Data alumni</span></h3>
</div>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/alumni/alumni-form" class="btn_tambah"><i class="fas fa-newspaper"></i> Tambah Data</a>
	
	<div class="search-box-container">
		<input type="text" id="myInput_contoh" onkeyup="myFunction()" class="css_input1" placeholder="Search for names..">
	</div>

<div class="scroll">
	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
					<th>ID</th>
					<th>full_name</th>
					<th>nik</th>
                    <th>asal_institusi</th>
					<th>phone</th>
					<th>email</th>
                    <th>date_of_birth</th>
					<th>address</th>
					<th>id_kota</th>
                    <th>status</th>
					<th>instansi_pendidikan</th>
					<th>username</th>
                    <th>password</th>
					
          <th>Action</th>
				</tr>
		</thead>
    <tbody>
              @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->full_name}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->asal_institusi}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->date_of_birth}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->id_kota}}</td>
                    <td>{{$data->status}}</td>
                    <td>{{$data->instansi_pendidikan}}</td>
                    <td>{{$data->username}}</td>
                    <td>{{$data->password}}</td>
             
                    
                    <td>
                      <a href="/alumni-edit/{{$data ->id}}" class="btn btn-secondary">Edit</a>
                      <form style="display :inline-block" action="/alumni-delete/{{$data->id}}" method="post">
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