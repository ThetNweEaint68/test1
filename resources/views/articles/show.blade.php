@extends('layouts.app')

@section('content')
  <div id="wrapper">
  	<div id="page" class="content">
  		<div class="title">
  			<h2>{{ $article->title }}</h2>
  		</div>
  		<p>{{ $article->excerpt }}</p>
  		{{ $article->body }}
  	</div>
  	</div>
@endsection