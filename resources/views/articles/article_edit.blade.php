@extends('applayout')

@section('title')

@endsection

@section('main_content')

<div class="container well">

	<h1>Edit Article</h1>
	<form method="POST">
	{{ csrf_field() }}{{-- need for post --}}
	Title:	<input type="text" name="title" value="{{$article->title}}"> <br>
	Content: <textarea name="content" >{{$article->content}}</textarea> <br>
	<input type="submit" name="submit" class="btn btn-warning">
	</form>

</div>
@endsection