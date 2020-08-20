@extends('layouts.app')

@section('content')
  <div id="wrapper">
   <br>
   <h3 align="center">User Profile</h3>
   <br>
   <div class="table-responsive">
      <table id="user-table" class="table table-bordered table-striped">
         <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
         </tr>
         @foreach($users as $row)
         <tr>
            <td>{{ $row['name'] }}</td>
            <td>{{ $row['age'] }}</td>
            <td>{{ $row['birthday'] }}</td>
            <td>{{ $row['email'] }}</td>
            <td>{{ $row['address'] }}</td>
            <td>{{ $row['phone'] }}</td>
         </tr>
          @endforeach
      </table>	
   </div>
</div>
@endsection