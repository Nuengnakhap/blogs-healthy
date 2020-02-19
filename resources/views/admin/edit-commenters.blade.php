@extends('admin.layouts.app')

@section('title-page', 'Admin @ Edit - User')
@section('commenters', 'active')

@section('main-content')
  <div id="content">
    <header>
      <h2 class="page_title">Edit user</h2>
    </header>

    <div class="content-inner">
      <div class="form-wrapper">

        @include('includes.errors')

        <form action="{{route('user.update', $users->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          {{method_field('PUT')}}
          <div class="form-group">
            <label class="sr-only">Name</label>
            <input type="text" class="form-control" name="name" id="title" placeholder="Name" value="{{$users->name}}">
          </div>

          <div class="form-group">
            <label class="sr-only">Email</label>
            <input type="email" class="form-control" name="email" id="title" placeholder="E-Mail Address" value="{{$users->email}}">
          </div>

          <div class="form-group">
            <label class="sr-only">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div>

          <div class="form-group">
            <label class="sr-only">Confirm Password</label>
            <input type="password" class="form-control" name="con_password" id="con_password" placeholder="Confirm Password">
          </div>

          <div class="clearfix">
            <button type="submit" class="btn btn-primary float-right">Save</button>
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