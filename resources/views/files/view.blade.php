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
         </tr>
         @foreach($resources as $row)
         <tr>
            <td>{{ $row['name'] }}</td>
         </tr>
          @endforeach
      </table>	
   </div>
</div>
@endsection