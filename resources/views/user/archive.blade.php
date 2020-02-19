@extends('user/app')

@section('title-page', 'Archive')

@section('main-content')
	<div class="container mt-3">
      <div class="row">
        @include('user/layouts/sidebar')

        <div class="col-md-8">
          <h1>Archive</h1>

          <article>
            <h3>2018</h3>
            <div class="row">
              <div class="col-md-9"><a href="article">This is my first post</a></div>
              <div class="col-md-3 date">16 Oct 2018</div>
            </div>
            <div class="row">
              <div class="col-md-9"><a href="article">My best article yet!</a></div>
              <div class="col-md-3 date">16 Oct 2018</div>
            </div>
            <hr>
            <h3>2019</h3>
            <div class="row">
              <div class="col-md-9"><a href="article">This is my first post</a></div>
              <div class="col-md-3 date">16 Oct 2019</div>
            </div>
            <div class="row">
              <div class="col-md-9"><a href="article">My best article yet!</a></div>
              <div class="col-md-3 date">16 Oct 2019</div>
            </div>
            <hr>
          </article>
        </div>
      </div>
    </div>
@endsection

@section('css')
  <link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css" media="all" />
<!-- Style-CSS -->
@endsection