<@extends('layout1')
@section('content')
      <!---->
      <div class="content">
  <div class="title_area">
      <h3>edit <span>data user</span></h3>
  </div>
<br>


<div class="card_content">
    <form action="/user-update/{{$user->id}}" method="post">
        @csrf
        @method('PUT')
        <table>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">ID</td>
              <td><input type="text" name="id" class="css_input1" value="{{$user->id}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->        
          <tr>
              <td class="label1">Name</td>
              <td><input type="text" name="name" class="css_input1" value="{{$user->name}}"></td>
          </tr>
      <!------------------------------------------------------------------------------------->
          <tr>
              <td class="label1">Email</td>
        <td>
        <input type="text" name="email" class="css_input1" value="{{$user->email}}">
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">Password</td>
        <td>
        <input type="password" name="pasword" class="css_input1">
        </td>
          </tr>
      <!------------------------------------------------------------------------------------->
      <tr>
              <td class="label1">Role_id</td>
              <td>
              <select name="role_id" id="role_id" class="form-control" required>
                        <option value="{{$user->role_id}}">{{$user->role_id}}</option>
                        @if ($user->role_id =='admin' || 'Admin')
                        <option value="alumni">Alumni</option>
                        @else
                        <option value="admin">Admin</option>
                        @endif
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
      

<div class='content'></div>

@endsection