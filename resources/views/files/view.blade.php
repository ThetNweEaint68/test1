@extends('layouts.app')

@section('content')
  <div id="wrapper">
   <br>
   <h3 align="center">File Lists</h3>
   <br>
   <div class="table-responsive">
      <table id="user-table" class="table table-bordered table-striped">
         <tr>
            <th>Name</th>
            <th>Url</th>
            <th>Path</th>
            <th>Type</th>
         </tr>
         @foreach($resources as $row)
         <tr>
            <td>{{ $row['name'] }}</td>
            <td>{{ $row['url'] }}</td>
            <td>{{ $row['path'] }}</td>
            <td>{{ $row['type'] }}</td>
         </tr>
          @endforeach
      </table>	
   </div>
</div>
@endsection