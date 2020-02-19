@extends('admin.layouts.app')

@section('title-page', 'Admin @ Users')
@section('commenters', 'active')

@section('main-content')
	<div id="content">
	  <header class="clearfix row">
	    <h2 class="page_title col-4 col-sm-3 col-md-3">All commenters</h2>
	  </header>

	  <div class="content-inner">
	    <table class="table table-hover table-responsive-md">
	      <thead>
	        <tr>
	          <th class="hd">#</th>
	          <th class="hd">Full Name</th>
	          <th class="hd">Email</th>
	          <th class="hd">Status</th>
	          <th class="hd">Created</th>
	          <th class="hd">Actions</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@foreach ($users as $user)
		        <tr>
		          <td>{{$loop->index + 1}}</td>
		          <td>{{$user->name}}</td>
		          <td>{{$user->email}}</td>
		          <td><span class="badge badge-success">active</span></td>
		          <td>{{date('F nS, Y - g:iA', strtotime($user->created_at))}}</td>
		          <td>
		          	<!-- <button type="button" class="btn btn-warning btn-xs">edit</button>
		          	<button type="button" class="btn btn-danger btn-xs disabled">delete</button> -->
		          	<a class="btn btn-warning btn-xs" href="{{route('user.edit', $user->id)}}" role="button">
		          	  edit
		          	</a>
		            <a class="btn btn-danger btn-xs" href="" role="button" onclick="
		            	if (confirm('Are you sure, You Want to delete this?'))
		            	{
		            		event.preventDefault();
		            		document.getElementById('delete-form-{{$user->id}}').submit();
		            	}
		            	else
		            	{
		            		event.preventDefault();
		            	}
		            ">
		            	<form id="delete-form-{{$user->id}}" method="post" action="{{route('users.destroy', $user->id)}}" style="display: none">
		            			{{csrf_field()}}
		            			{{method_field('DELETE')}}
		            	</form>
		            	delete
		            </a>
		          </td>
		        </tr>
		      @endforeach
	      </tbody>
	    </table>
	  </div>
	</div>
	<div id="content">
	  <header class="clearfix row">
	    <h2 class="page_title col-4 col-sm-3 col-md-3">All writers</h2>
	    <div class="col-8 col-sm-9 col-md-9">
	      <a class="btn btn-xs btn-primary float-right" href="{{route('users.create')}}" role="button">Create new writer</a>
	    </div>
	  </header>

	  <div class="content-inner">
	    <table class="table table-hover table-responsive-md">
	      <thead>
	        <tr>
	          <th class="hd">#</th>
	          <th class="hd">Full Name</th>
	          <th class="hd">Email</th>
	          <th class="hd">Status</th>
	          <th class="hd">Created</th>
	          <th class="hd">Actions</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@foreach ($admins as $user)
		        <tr>
		          <td>{{$loop->index + 1}}</td>
		          <td>{{$user->name}}</td>
		          <td>{{$user->email}}</td>
		          <td><span class="badge badge-success">active</span></td>
		          <td>{{date('F nS, Y - g:iA', strtotime($user->created_at))}}</td>
		          <td>
		          	<!-- <button type="button" class="btn btn-warning btn-xs">edit</button>
		          	<button type="button" class="btn btn-danger btn-xs disabled">delete</button> -->
		          	<a class="btn btn-warning btn-xs" href="{{route('admin.edit', $user->id)}}" role="button">
		          	  edit
		          	</a>
		            <a class="btn btn-danger btn-xs" href="" role="button" onclick="
		            	if (confirm('Are you sure, You Want to delete this?'))
		            	{
		            		event.preventDefault();
		            		document.getElementById('delete-form-{{$user->id}}').submit();
		            	}
		            	else
		            	{
		            		event.preventDefault();
		            	}
		            ">
		            	<form id="delete-form-{{$user->id}}" method="post" action="{{route('users.destroy', $user->id)}}" style="display: none">
		            			{{csrf_field()}}
		            			{{method_field('DELETE')}}
		            	</form>
		            	delete
		            </a>
		          </td>
		        </tr>
		      @endforeach
	      </tbody>
	    </table>
	  </div>
	</div>
@endsection

@section('css')
	<link href="{{asset('admin/css/commenters.css')}}" rel="stylesheet">
@endsection

@section('js')

@endsection