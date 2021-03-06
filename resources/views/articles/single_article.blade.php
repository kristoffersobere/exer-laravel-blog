@extends('applayout')
@section('title')
{{$article->title}}
@endsection

@section('main_content')
<h3>{{$article->title}}</h3>
<p>
	{{$article->content}}
</p>

<a href='{{url("articles/$article->id/edit")}}'><button class="btn btn-primary">Edit</button></a>
@endsection