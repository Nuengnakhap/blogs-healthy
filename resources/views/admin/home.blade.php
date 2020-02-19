@extends('admin.layouts.app')

@section('title-page', 'Admin')
@section('home', 'active')

@section('main-content')
	<div id="dashboard-con">
	  <div class="row">
	    <div class="col-md-6 dashboard-left-cell">
	      <div class="admin-content-con">
	        <header class="clearfix">
	          <h5 class="float-left">Articles</h5>
	          <a class="btn btn-xs btn-success float-right" href="{{route('new-article.create')}}" role="button">Create new article</a>
	        </header>
	        <table class="table table-striped table-hover table-responsive-md">
	          <thead>
	            <tr>
	              <th class="hd">title</th>
	              <th class="hd">date</th>
	              <th class="hd">actions</th>
	            </tr>
	          </thead>
	          <tbody>
	          	@php ($count = 0)
	          	@foreach($posts->sortByDesc('id') as $post)
		          	@if ($count == 5)
		          		@break
		          	@endif
		            <tr>
		              <td>{{$post->title}}</td>
		              <td>{{$post->created_at}}</td>
		              <td>
		                <a class="btn btn-xs btn-warning" href="{{route('articles.edit', $post->id)}}" role="button">edit</a>
		                <a class="btn btn-xs btn-primary" href="{{route('post', $post->title)}}" role="button">view</a>
		                <a class="btn btn-xs btn-danger" href="#" role="button" onclick="
					          	if (confirm('Are you sure, You Want to delete this?'))
					          	{
					          		event.preventDefault();
					          		document.getElementById('delete-form-{{$post->id}}').submit();
					          	}
					          	else
					          	{
					          		event.preventDefault();
					          	}">
		                	<form id="delete-form-{{$post->id}}" method="post" action="{{route('articles.destroy', $post->id)}}" style="display: none">
		                			{{csrf_field()}}
		                			{{method_field('DELETE')}}
		                	</form>
		                del</a>
		              </td>
		            </tr>
		            @php ($count+=1)
	            @endforeach
	            
	          </tbody>
	        </table>
	        <div class="clearfix">
	          <a href="{{route('articles.index')}}" class="float-right text-link">view all articles</a>
	        </div>
	      </div>
	    </div>

	    <div class="col-md-6 dashboard-right-cell">
	      <div class="admin-content-con">
	        <header>
	          <h5>Comments</h5>
	        </header>
	        @php ($count = 0)
	        @foreach ($comment->sortByDesc('id') as $value)
	        	@if ($count == 3)
	        		@break
	        	@endif
		        <div class="comment-head-dash clearfix">
		          <div class="commenter-name-dash float-left">{{$value->name}}</div>
		          <!-- <div class="days-dash float-right">{{$value->created_at}}</div> -->
		          <a class="btn btn-xs btn-primary float-right" href="{{route('post', $post2->title)}}" role="button">view</a>
		        </div>
		        <p class="comment-dash">{{$value->comment}}</p>
		        <small class="comment-date-dash">{{date('F n d, Y - g:iA', strtotime($value->created_at))}}</small>
		        <hr>
		        @php ($count+=1)
		    @endforeach

	        <div class="clearfix">
	          <a href="{{route('admin-approved')}}" class="float-right text-link">view all comments</a>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div class="row">
	    <div class="col-md-12">
	      <div class="admin-content-con clearfix">
	        <header>
	          <h5>Commenters</h5>
	        </header>

	        <table class="table table-bordered table-responsive-md">
	          <thead>
	            <tr>
	              <th>#</th>
	              <th>Full Name</th>
	              <th>Email</th>
	              <th>Status</th>
	              <th>Created</th>
	              <th>Actions</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr>
	              <td>1</td>
	              <td>Kitrawee</td>
	              <td>60070005@kmitl.ac.th</td>
	              <td><a href="#" class="badge badge-secondary">pending</a></td>
	              <td>Today 5:40pm - 18/10/2018</td>
	              <td><a href="#" class="badge badge-danger">Delete</a></td>
	            </tr>
	            <tr>
	              <td>2</td>
	              <td>Kitrawee</td>
	              <td>60070005@kmitl.ac.th</td>
	              <td><a href="#" class="badge badge-success">active</a></td>
	              <td>Today 5:40pm - 18/10/2018</td>
	              <td><a href="#" class="badge badge-danger">Delete</a></td>
	            </tr>
	            <tr>
	              <td>3</td>
	              <td>Kitrawee</td>
	              <td>60070005@kmitl.ac.th</td>
	              <td><a href="#" class="badge badge-success">active</a></td>
	              <td>Today 5:40pm - 18/10/2018</td>
	              <td><a href="#" class="badge badge-danger">Delete</a></td>
	            </tr>
	            <tr>
	              <td>4</td>
	              <td>Kitrawee</td>
	              <td>60070005@kmitl.ac.th</td>
	              <td><a href="#" class="badge badge-success">active</a></td>
	              <td>Today 5:40pm - 18/10/2018</td>
	              <td><a href="#" class="badge badge-danger">Delete</a></td>
	            </tr>
	          </tbody>
	        </table>

	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('css')
	<link href="{{asset('admin/css/index.css')}}" rel="stylesheet">
@endsection

@section('js')

@endsection