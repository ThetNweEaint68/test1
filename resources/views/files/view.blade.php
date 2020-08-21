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
         @foreach($resources as $resource)
         <tr>
            <td>
              <a href="{{ route('resource.show', ['id' => $resource->id]) }}">{{ $resource->name }}</a>
            </td>
         </tr>
          @endforeach
      </table>	
   </div>
</div>
@endsection