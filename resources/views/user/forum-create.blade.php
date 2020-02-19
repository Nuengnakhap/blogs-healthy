@extends('user/app')

@section('title-page', 'Forum @ Create New')

@section('main-content')
  <div id="content" class="mb-5 container" style="margin-top: 120px">
    <header>
      <h2 class="page_title">Create new article</h2>
    </header>

    <div class="content-inner">
      <div class="form-wrapper">

        @include('includes.errors')

        <form action="{{route('forum.store')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label class="sr-only">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
          </div>

          <div class="form-group">
            <label class="sr-only">Article</label>
            <textarea class="form-control summernote" placeholder="Article" name="article"></textarea>
          </div>

          <div class="clearfix">
            <button type="submit" class="btn btn-primary float-right">Save / Publish</button>
          </div>

          <div class="form-group">
            <input type="hidden" class="form-control" name="posted_by" value="{{$user->name}}">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('css')
<!-- Custom-Files -->
<link rel="stylesheet" href="{{asset('user/css/bootstrap.css')}}">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('user/css/owl.theme.css')}}" type="text/css" media="all">
<!-- Carousel (for News section) -->
<link rel="stylesheet" href="{{asset('user/css/flexslider.css')}}" type="text/css" media="screen" property="" />
<!-- Flexslider css (for Testimonials) -->
<link rel="stylesheet" href="{{asset('user/css/fontawesome-all.css')}}">
<!-- Font-Awesome-Icons-CSS -->
<link href="{{asset('admin/bootstrap4/bootstrap4-glyphicons-master/css/bootstrap-glyphicons.min.css')}}" rel="stylesheet">
<!-- //Custom-Files -->
<link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css" media="all" />
<link type="text/css" href="{{asset('admin/bootstrap4/chosen_v1.8.7/chosen.min.css')}}" rel="stylesheet">
<link type="text/css" href="{{asset('admin/bootstrap4/fontawesome-free-5.4.1-web/css/fontawesome.min.css')}}" rel="stylesheet">
<link type="text/css" href="{{asset('admin/bootstrap4/summernote-0.8.9-dist/summernote-lite.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/new-article.css')}}" rel="stylesheet">
<link href="{{asset('user/css/default.css')}}" rel="stylesheet">

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
        height: 200,
      });
  </script>
@endsection