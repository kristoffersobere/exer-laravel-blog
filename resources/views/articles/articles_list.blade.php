@extends('applayout') <!-- require -->
<!-- same as function -->
@section('title')

	Article List
	

@endsection<!-- end function -->

@section('main_content')
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading text-center">

				<h2><a href="{{url('articles/create')}}"><button class="btn btn-info">Create a New Article</button></a></h2>

			</div>

		<div class="panel-body">
				<h3>List of Articles</h3>

				

				<ul>

					
				@foreach($articles as  $article)
			
				 <div class="panel-group">
				    <div class="panel panel-default">
				      <div class="panel-heading " >
				        <h4 class="panel-title text-center" >
				          <a data-toggle="collapse" href="#{{$article->id}}">{{$article->title}} by {{$article->user->name}}</a>
				          <button class="btn-info"><i class="fas fa-thumbs-up"></i> like</button>
				        </h4>

				      </div>
				      <div id="{{$article->id}}" class="panel-collapse collapse">
				        <div class="panel-body text-right">

				        	<div class="text-left">
				        
				        	<a href='{{url("articles/$article->id")}}'>{{$article->title}} by {{$article->user->name}}</a><br>
				        	@if($article->user->id == Auth::user()->id)
				        	<a href='{{url("articles/$article->id/edit")}}'><button class="btn btn-warning">Edit this Bruhh</button></a>
							<a href='{{url("articles/$article->id/delete")}}'><button class="btn btn-info">Delete this Bruhh</button></a>
							@else 
							
							@endif

					
							</div>

							<div class="text-left">Comments:</div>

							@foreach($article->comment as $comment)
							<div class="panel panel-default">


								<div class="text-left">
								{{$comment->content}}
								@if($comment->user->id == Auth::user()->id)<button class=" btn-warning">edit</button>
								@else 
								<button class="btn-info"><i class="fas fa-thumbs-up"></i> like</button>

								@endif
								</div> 


								
								<small class="text-right"> by {{$comment->user->name}} {{$comment ->updated_at->diffForhumans()}}</small><br>
							</div>
							@endforeach
							

							<form method="POST">
							{{ csrf_field() }}
							<div class="form-group">
							  <label for="comment" class="pull-left">Comment:</label>
							  <textarea class="form-control" rows="5" id="comment" name="comments"></textarea>
							</div>
							<input type="hidden" name="artid" value="{{$article->id}}">
							<input type="submit" name="submit" class="btn btn-warning">
							</form>

						</div>
				        
				      </div>
				    </div>
				  </div>
				@endforeach

				

				</ul>
		</div>

		</div>
	</div>

</div>

@endsection


	<thead></thead>
	<tbody></tbody>
