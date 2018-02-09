@extends('applayout')

@section('title')

@endsection

@section('main_content')

	<h1>Create New Article</h1>
	<form method="POST">
	{{ csrf_field() }}{{-- need for post --}}
	Title:	<input type="text" name="title"> <br>
	Content: <textarea name="content"></textarea> <br>
	<input type="submit" name="submit">

	</form>

@endsection