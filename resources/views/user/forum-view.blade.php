@extends('user/app')

@section('title-page', 'Forum')

@section('main-content')
  <div class="super_container">
    <div class="home">
      <div class="home_background parallax-window" data-parallax="scroll" data-speed="0.8"><img class="home_background" src="{{asset('user/images/forum-view.jpg')}}"></div>
      <div class="home_content">
        <div class="post_title" style="font-size: 60px;">{{$post->title}}</div>
        <div class="post_author d-flex flex-row align-items-center justify-content-center">
          <div class="post_meta" style="color: #fff; font-size: 20px;">{{date('F nS, Y - g:iA', strtotime($post->created_at))}}</div>
        </div>
      </div>
    </div>
    <div class="page_content pb-5">
      <div class="container">
        <div class="row">

          <!-- Post Content -->

          <div class="col-lg-10 offset-lg-1">
            <div class="post_content">

              <!-- Post Body -->
              <div class="post_body">
                {!! htmlspecialchars_decode($post->article) !!}
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-10 offset-lg-1 pt-3 post_comment_form_container">
          @include('user/layouts/comment-forum')
        </div>
      </div>
    </div>
  </div>
  
@endsection

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('user/css/post_nosidebar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('user/css/post_nosidebar_responsive.css')}}">
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
@endsection

@section('js')
  <script src="{{asset('user/js/masonry.js')}}"></script>
  <script src="{{asset('user/js/parallax.min.js')}}"></script>
  <script src="{{asset('user/js/post_nosidebar.js')}}"></script>
@endsection
