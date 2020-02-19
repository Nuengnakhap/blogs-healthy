<!DOCTYPE html>
<html>
<head>
	@include('admin.layouts.head')
	@section('css')
		@show
</head>
<body>

	<div class="container-fluid display-table">
	  <div class="row display-table-row">
	    <!-- site menu -->
	    @include('admin.layouts.sidebar')
	    <!-- main content area -->
	    <div class="col-8 col-sm-8 col-md-10 col-lg-10 display-table-cell valign-top">

	    	@include('admin.layouts.header')
	    	@section('main-content')
	        	@show

	        <div class="row">
	          <div id="admin-footer" class="clearfix">
	            <div class="float-left"><b>Copyright </b>&copy; 2018</div>
	            <div class="float-right">admin system</div>
	          </div>
	        </div>
	    </div>
       </div>
    </div>

	@include('admin.layouts.footer')
	@section('js')
		@show

</body>
</html>