@extends('layout1')
@section('content')
<br>
<div class="content">
  <div class="title_area">
      <h3>Input <span>Data keahlian</span></h3>
</div>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/keahlian/keahlian-form" class="btn_tambah"><i class="fas fa-newspaper"></i> Tambah Data</a>
	
	<div class="search-box-container">
		<input type="text" id="myInput_contoh" onkeyup="myFunction()" class="css_input1" placeholder="Search for names..">
	</div>

<div class="scroll">
	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
          <th>NO</th>
					<th>ID</th>
					<th>Keahlian</th>
					<th>Id_alumni</th>
					
          <th>Action</th>
				</tr>
		</thead>
    <tbody>
              @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->keahlian}}</td>
                    <td>{{$data->id_alumni}}</td>
                    
                    <td>
                      <a href="/keahlian-edit/{{$data ->id}}" class="btn btn-secondary">Edit</a>
                      <form style="display :inline-block" action="/keahlian-delete/{{$data->id}}" method="post">
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