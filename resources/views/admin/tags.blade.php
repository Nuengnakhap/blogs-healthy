@extends('admin.layouts.app')

@section('title-page', 'Admin @ Tags')
@section('tags', 'active')

@section('main-content')
	<div class="row content-inner">
	  <div class="col-md-4 dashboard-left-cell admin-content-con">
	  	<div>
		    <header>
		      <h5>Create tags</h5>
		    </header>

		    @include('includes.errors')

		    <form action="{{route('tags.store')}}" method="post">
		      {{csrf_field()}}
		      <div class="form-group">
		        <label>Add comma separated tags below</label>
		        <p>
		          <textarea name="tag" id="tag" class="form-control" rows="3" placeholder="e.g test1, tes2, test3"></textarea>
		        </p>
		        <p>
		          <button type="submit" class="btn btn-primary btn-lg btn-block">Save Tags</button>
		        </p>
		      </div>
		    </form>
		  </div>
		  <div class="flash-message">
		      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
		        @if(Session::has('alert-' . $msg))

		        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
		        @endif
		      @endforeach
		  </div>
		  <div id="editTag" style="display: none;">
		    <header>
		      <h5>Edit tags</h5>
		    </header>

		    @include('includes.errors')
		    @php ($tagEdit = 0)
		    <form action="{{route('tags.update', $tagEdit)}}" method="post">
		      {{csrf_field()}}
		      {{method_field('PATCH')}}
		      <div class="form-group">
		        <p>
		          <input name="tagEdit" id="tagEdit" class="form-control" placeholder="Tag Selected..">
		        </p>
		        <p>
		          <input name="tagChange" id="tagChange" class="form-control" placeholder="Tag Change to..">
		        </p>
		        <p>
		          <button type="submit" class="btn btn-primary btn-lg btn-block">Save Tags</button>
		        </p>
		      </div>
		    </form>
		  </div>
	  </div>

	  <div class="col-md-8 dashboard-right-cell">
	    <div class="admin-content-con">
	      <header>
	        <h5>Tags</h5>
	      </header>

	      <table class="table table-striped table-hover table-responsive-sm">
	        <thead>
	          <tr>
	            <th class="hd">Name</th>
	            <th class="hd">Created</th>
	            <th class="hd">Actions</th>
	          </tr>
	        </thead>
	        <tbody>
	          @foreach ($tags as $tag)
		          <tr>
		            <td>{{$tag->name}}</td>
		            <td>{{$tag->created_at}}</td>
		            <td>
		            	<button type="button" class="btn btn-warning btn-xs" onclick="editTag()">edit</button>
		            	<a class="btn btn-xs btn-primary" href="{{route('post', 'tag/'.$tag->name)}}" role="button">view</a>
		              <a class="btn btn-xs btn-danger" href="#" role="button" onclick="
					          	if (confirm('Are you sure, You Want to delete this?'))
					          	{
					          		event.preventDefault();
					          		document.getElementById('delete-form-{{$tag->id}}').submit();
					          	}
					          	else
					          	{
					          		event.preventDefault();
					          	}">
		                	<form id="delete-form-{{$tag->id}}" method="post" action="{{route('tags.destroy', $tag->id)}}" style="display: none">
		                			{{csrf_field()}}
		                			{{method_field('DELETE')}}
		                	</form>
		                del</a>
		            </td>
		          </tr>
		       	@endforeach
	        </tbody>
	      </table>
	    </div>
	  </div>
	</div>
@endsection

@section('css')
	<link href="{{asset('admin/css/tags.css')}}" rel="stylesheet">
@endsection

@section('js')
<script>
	function editTag() {
	    var x = document.getElementById("editTag");
	    if (x.style.display === "none") {
	        x.style.display = "block";
	    } else {
	        x.style.display = "none";
	    }
	} 
</script>
@endsection