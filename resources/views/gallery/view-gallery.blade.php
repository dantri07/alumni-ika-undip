@extends('layout1')
@section('content')
      
      <div class="content">
	<div class="title_area">
		<h3><i class="fas fa-image"></i> List <span>Data  Gallery</span></h3>
	</div>
<br>

<?php 
	///include 'message.php';
?>

<br><br><br>

<div class="card_content">
	<a href="/gallery/gallery-form" class="btn_tambah"><i class="fas fa-image -plus"></i> Tambah Data</a>
	
	<div class="search-box-container">
		<input type="text" id="myInput_contoh" onkeyup="myFunction()" class="css_input1" placeholder="Search for names..">
	</div>

<div class="scroll">
	<table id="myTable_contoh" class="styled-table">    
		<!----------------------------------------------------------------------->
		<thead>		
				<tr>
					<th>No</th>
          <th>Image</th>
					<th>Title</th>
					<th>Description</th>
					<th>Date</th>
					<th>type</th>
          <th>action</th>

				</tr>
		</thead>
    <tbody>
                @foreach ($nama as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                    <img src="{{asset('storage/photo/' .$data->images)}}" width="100px">
                    </td>
                  
                  
                    <td>{{$data->title}}</td>
                    <td>{{$data->description}}</td>
                    <td>{{$data->tanggal}}
                    <td>{{$data->type}}</td>

                  <td>
                      <a href="/gallery-edit/{{$data ->id}}" class="btn btn-secondary">Edit</a>
                      <form style="display :inline-block" action="/gallery-delete/{{$data->id}}" method="post">
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