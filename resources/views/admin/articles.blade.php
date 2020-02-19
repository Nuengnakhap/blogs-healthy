@extends('admin.layouts.app')

@section('title-page', 'Admin @ Articles')
@section('article', 'active')

@section('main-content')
	<div id="content">
	  <header class="clearfix">
	    <h2 class="page_title float-left">All articles</h2>
	    <a class="btn btn-xs btn-primary float-right" href="{{route('new-article.create')}}" role="button">Create new article</a>
	  </header>

	  <div class="content-inner">
	    <div class="row search-row">
	      <div class="col-md-12">
	        <div class="input-group">
	          <input type="text" class="form-control search-field" id="search" placeholder="Search for...">
	            <span class="input-group-btn">
	              <button type="button" class="btn btn-primary go">Go!</button>
	            </span>
	        </div>
	      </div>
	    </div>
	    @foreach($posts as $post)
	    <div class="row article-row">
	      <div class="col-2 col-sm-2 col-md-1 status-padding">
	      	@if ($post->status == 1)
	      		<span class="badge badge-success badge-sm">Active</span>
	      	@else
	      		<span class="badge badge-secondary badge-sm">Deactive</span>
	      	@endif
	      </div>


	      <div class="col-10 col-sm-6 col-md-7 article-title">
	        <p name="title">{{$post->title}}</p>
	        <small>{{$post->created_at}}</small>
	      </div>

	      <div class="col-11 col-sm-4 col-md-4 ml-auto">
	        <div class="article-actions">
	          <a class="btn btn-xs btn-secondary" href="{{route('post', $post->title)}}" role="button">
	            <span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;View</span>
	          </a>

	          <a class="btn btn-xs btn-secondary" href="{{route('articles.edit', $post->id)}}" role="button">
	            <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Edit</span>
	          </a>

	          <a class="btn btn-xs btn-secondary" href="" role="button" onclick="
	          	if (confirm('Are you sure, You Want to delete this?'))
	          	{
	          		event.preventDefault();
	          		document.getElementById('delete-form-{{$post->id}}').submit();
	          	}
	          	else
	          	{
	          		event.preventDefault();
	          	}
	          ">
	          	<form id="delete-form-{{$post->id}}" method="post" action="{{route('articles.destroy', $post->id)}}" style="display: none">
	          			{{csrf_field()}}
	          			{{method_field('DELETE')}}
	          	</form>
	            <span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Delete</span>
	          </a>
	        </div>
	      </div>
	    </div>
	    <hr>
	    @endforeach

	    <div class="row">
	      <div class="col-md-12">
	        <nav>
	          <ul class="pagination">
	            <li class="page-item {{ ($posts->currentPage() == 1) ? ' disabled' : '' }}">
	              <a class="page-link" href="{{$posts->previousPageUrl()}}" tabindex="-1">Previous</a>
	            </li>
	            @for ($i = 1; $i <= $posts->lastPage(); $i++)
	            	@if($i >= $posts->currentPage() - 1 && $i <= $posts->currentPage() + 1)
	                <li class="page-item {{ ($posts->currentPage() == $i) ? ' active' : '' }}"><a class="page-link" href="{{$posts->url($i)}}">{{$i}}</a></li>
	              @endif
	            @endfor
	            <li class="page-item {{ ($posts->currentPage() == $posts->lastPage()) ? ' disabled' : '' }}">
	              <a class="page-link" href="{{$posts->nextPageUrl()}}">Next</a>
	            </li>
	          </ul>
	        </nav>
	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('css')
	<link href="{{asset('admin/css/articles.css')}}" rel="stylesheet">
@endsection

@section('js')

@endsection