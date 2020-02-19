@extends('admin.layouts.app')

@section('title-page', 'Admin @ Unapproved')
@section('comments', 'active')

@section('main-content')
	<div id="content">
	  <header class="clearfix">
	    <h2 class="page_title float-left">All approved</h2>
	    <button type="button" class="btn btn-xs btn-primary float-right">Create new article</button>
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

	    <!-- Comments here -->
	    <div class="row app-header">
	      <div class="card-header">
	        <div class="d-none d-sm-none d-md-block col-sm-3 col-md-2 col-lg-1 float-left">
	          <img class="rounded-circle" src="https://fakeimg.pl/70x70/00ced1,128/fff,255">
	        </div>

	        <div class="col-sm-9 col-md-10 col-lg-11 float-left app-title">
	          <div class="row">
	            <div class="col-md-9">
	              <b>Kitrawee</b> posted message on <b>How all things are made...</b><br>
	              <small>Today 2:21 pm - 08/17/2018</small>
	            </div>

	            <div class="col-md-3">
	              <div class="clearfix">
	                <div class="float-right">2 days ago</div>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="card-text app-text">
	          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	          tempor incididunt ut labore et dolore magna aliqua.
	        </div>

	        <div class="clearfix">
	          <div class="app-btn float-right">
	            <a class="btn btn-xs btn-secondary" href="#" role="button">
	              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
	              Approve
	            </a>
	            <a class="btn btn-xs btn-secondary" href="#" role="button">
	              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	              Delete
	            </a>
	          </div>
	        </div>
	      </div>
	    </div>
	    <hr>

	    <div class="row app-header">
	      <div class="card-header">
	        <div class="d-none d-sm-none d-md-block col-sm-3 col-md-2 col-lg-1 float-left">
	          <img class="rounded-circle" src="https://fakeimg.pl/70x70/00ced1,128/fff,255">
	        </div>

	        <div class="col-sm-9 col-md-10 col-lg-11 float-left app-title">
	          <div class="row">
	            <div class="col-md-9">
	              <b>Kitrawee</b> posted message on <b>How all things are made...</b><br>
	              <small>Today 2:21 pm - 08/17/2018</small>
	            </div>

	            <div class="col-md-3">
	              <div class="clearfix">
	                <div class="float-right">2 days ago</div>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="card-text app-text">
	          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	          tempor incididunt ut labore et dolore magna aliqua.
	        </div>

	        <div class="clearfix">
	          <div class="app-btn float-right">
	            <a class="btn btn-xs btn-secondary" href="#" role="button">
	              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
	              Approve
	            </a>
	            <a class="btn btn-xs btn-secondary" href="#" role="button">
	              <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	              Delete
	            </a>
	          </div>
	        </div>
	      </div>
	    </div>
	    <hr>

	    <!-- Next bar -->
	    <div class="row">
	      <div class="col-md-12">
	        <nav>
	          <ul class="pagination">
	            <li class="page-item disabled">
	              <a class="page-link" href="#" tabindex="-1">Previous</a>
	            </li>
	            <li class="page-item"><a class="page-link" href="#">1</a></li>
	            <li class="page-item active">
	              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
	            </li>
	            <li class="page-item"><a class="page-link" href="#">3</a></li>
	            <li class="page-item">
	              <a class="page-link" href="#">Next</a>
	            </li>
	          </ul>
	        </nav>
	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('css')
	<link href="{{asset('admin/css/approved.css')}}" rel="stylesheet">
@endsection

@section('js')

@endsection