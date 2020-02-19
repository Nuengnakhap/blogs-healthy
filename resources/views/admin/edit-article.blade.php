@extends('admin.layouts.app')

@section('title-page', 'Admin @ Edit - Article')
@section('article', 'active')

@section('main-content')
	<div id="content">
	  <header>
	    <h2 class="page_title">Edit article</h2>
	  </header>

	  <div class="content-inner">
	    <div class="form-wrapper">

	      @include('includes.errors')

	      <form action="{{route('articles.update', $post->id)}}" method="post" enctype="multipart/form-data">
	      	{{csrf_field()}}
	      	{{method_field('PATCH')}}
	        <div class="form-group">
	          <label class="sr-only">Title</label>
	          <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$post->title}}">
	        </div>

	        <div class="form-group">
	          <label class="sr-only">Tags</label>
	          <select data-placeholder="Select tags" multiple name="tags[]" class="form-control chosen-select">
	          	@php
	          		$tag_selects = explode(' ', $post->tags)
	          	@endphp
	          	@foreach($tag_selects as $tag)
	          		<option selected="selected">{{$tag}}</option>
	          	@endforeach
              @foreach ($tags as $tag)
              	@if (!in_array($tag->name, $tag_selects))
              	{
              		<option>{{$tag->name}}</option>
              	}
              	@endif
    	       	@endforeach
	          </select>
	        </div>

	        <div class="form-group">
	          <label class="sr-only">Article</label>
	          <textarea class="form-control summernote" placeholder="Article" name="article">{{$post->article}}</textarea>
	        </div>

	        <div class="form-group">
	          <label class="sr-only">Description</label>
	          <textarea class="form-control" placeholder="Description" name="description">{{$post->description}}</textarea>
	        </div>

	        <div class="form-group">
            <div class="form-group row" style="margin: 0;">
            	<div>
            		<label for="image">Image Cover</label>
            		<input type="file" class="form-control-file" id="image" name="image">
            	</div>
              <div>
              	<label for="image">Image Title</label>
              	<input type="file" class="form-control-file" id="image_title" name="image_title">
              </div>
            </div>
          </div>

	        <div class="checkbox">
	          <label>
	            <input type="checkbox" name="status" 
	            @if ($post->status == 1) checked @endif
	            > publish article when I click on save
	          </label>
	        </div>

	        <div class="clearfix">
	          <button type="submit" class="btn btn-primary float-right">Save / Publish</button>
	        </div>
	      </form>
	    </div>
	  </div>
	</div>
@endsection

@section('css')
	<link type="text/css" href="{{asset('admin/bootstrap4/chosen_v1.8.7/chosen.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('admin/bootstrap4/fontawesome-free-5.4.1-web/css/fontawesome.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('admin/bootstrap4/summernote-0.8.9-dist/summernote-lite.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/new-article.css')}}" rel="stylesheet">
@endsection
	
@section('js')
	<script src="{{asset('admin/bootstrap4/chosen_v1.8.7/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('admin/bootstrap4/summernote-0.8.9-dist/summernote-lite.js')}}"></script>

	<script type="text/javascript">
	  var config = {
	    '.chosen-select' : {},
	    '.chosen-select-deselect' : {allow_single_deselect: true},
	    '.chosen-select-no-single' : {disable_search_threshold: 10},
	    '.chosen-select-no-result' : {no_results_text: 'Oops, nothing found!'},
	    '.chosen-select-width' : {width: "95%"}
	  }
	  for (var selector in config) {
	    $(selector).chosen(config[selector]);
	  }
	</script>

	<script type="text/javascript">
	    $('.summernote').summernote({
	      height: 200
	    });
	</script>
@endsection