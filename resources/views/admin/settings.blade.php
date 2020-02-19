@extends('admin.layouts.app')

@section('title-page', 'Admin @ Settings')

@section('main-content')
	<div id="content">
	  <header class="clearfix">
	    <h2 class="page_title float-left">General blog settings</h2>
	  </header>

	  <div class="content-inner">
	    <div class="row">
	      <div class="col-md-8">
	        <form>
	          <div class="settings-row">
	            <h3>Site name</h3>
	            <p>This is permanently shown on the top left corner of navigations.</p>
	            <div class="form-group">
	              <input type="text" id="input" class="form-control" required="required">
	            </div>
	          </div>

	          <div class="settings-row">
	            <h3>Posts per page</h3>
	            <p>Control total number of blogs shown on the blog indes page.</p>
	            <div class="form-group">
	              <input type="number" id="input" class="form-control small-input" value="10" min="{5"} max="" step="" required="required">
	            </div>
	          </div>

	          <div class="settings-row">
	            <h3>Under maintenance</h3>
	            <p>Redirect all requests to a holding page.</p>
	            <div class="checkbox">
	              <label>
	                <input type="checkbox">
	                blog is under maintenance
	              </label>
	            </div>
	          </div>

	          <div class="settings-row">
	            <h3>Prevent commenting</h3>
	            <p>Prevent or Enable visitors from leaving comments.</p>
	            <select id="input" class="form-control small-input">
	              <option value="">active</option>
	              <option value="">disable</option>
	            </select>
	          </div>

	          <div class="settings-row">
	            <h3>Tags visibility</h3>
	            <p>Enable or Disable tag visibility on all blog posts.</p>
	            <select id="input" class="form-control small-input">
	              <option value="">active</option>
	              <option value="">disable</option>
	            </select>
	          </div>

	          <button type="button" class="btn btn-primary">Save Settings</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('css')
	<link href="{{asset('admin/css/settings.css')}}" rel="stylesheet">
@endsection

@section('js')

@endsection