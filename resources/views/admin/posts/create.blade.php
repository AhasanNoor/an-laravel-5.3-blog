@extends('layouts.app')

@section('styles')
<style type="text/css">
	.panel-body{
		padding: 12px;
	}
</style>
@stop

@section('content')
	<div class="panel-body border rounded">
		<h4 class="text-center font-weight-bold">Create new post.</h4>
		<hr>
		<form action="{{ route('posts.store') }}" method="post">
			{{ csrf_field() }}
		  <div class="form-group">
		    <label for="title">Add Title:</label>
		    <input type="text" class="form-control" name="title" placeholder="Add title here...">
		  </div>
		  <div class="form-group">
		    <label for="content">Add Content:</label>
		    <textarea class="form-control" rows="5" id="content"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="featured">Featured Image:</label>
		    <input type="file" class="form-control-file" name="featured">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@stop