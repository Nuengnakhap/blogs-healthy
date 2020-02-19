@extends('user/app')

@section('title-page', 'Forum')

@section('main-content')
  <div class="home_background parallax-window forum_background" data-parallax="scroll" data-speed="0.8"><img class="home_background" src="{{asset('user/images/forum-show.jpg')}}"></div>
  <div id="content" class="container">
    <header class="clearfix">
      <h2 class="page_title float-left">พื้นที่แบ่งปันความรู้</h2>
      <a class="btn btn-xs btn-primary float-right" href="{{route('forum.create')}}" role="button">Create new article</a>
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
      @foreach($posts as $post)
      <div class="row article-row">
        <div class="col-10 col-sm-8 col-md-8 article-title">
          <a href="{{route('forum.show', $post->title)}}" name="title" style="font-size: 20px; color: #000">{{$post->title}}</a><br>
          <small style="color: #1ab394">{{$post->created_at}} Posted By {{$post->posted_by}}</small>
        </div>

        <div class="col-2 col-sm-4 col-md-4 ml-auto">
          <div class="article-actions">
            <a class="btn btn-xs btn-secondary" href="{{route('forum.show', $post->title)}}" role="button">
              <span class="glyphicon glyphicon-folder-open" aria-hidden="true">&nbsp;View</span>
            </a>
            @if ($user->name == $post->posted_by)
              <a class="btn btn-xs btn-secondary" href="{{route('forum.edit', $post->id)}}" role="button">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true">&nbsp;Edit</span>
              </a>

              <a class="btn btn-xs btn-secondary" href="" role="button" onclick="
                if (confirm('Are you sure, You Want to delete this?'))
                {
                  event.preventDefault();
                  document.getElementById('delete-form-{{$post->id}}').submit();
                }
                else
                {
                  event.preventDefault();
                }
              ">
                <form id="delete-form-{{$post->id}}" method="post" action="{{route('forum.destroy', $post->id)}}" style="display: none">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                </form>
                <span class="glyphicon glyphicon-remove" aria-hidden="true">&nbsp;Delete</span>
              </a>
            @endif
          </div>
        </div>
      </div>
      <hr>
      @endforeach

      <div class="row">
        <div class="col-md-12">
          <nav>
            <ul class="pagination">
              <li class="page-item {{ ($posts->currentPage() == 1) ? ' disabled' : '' }}">
                <a class="page-link" href="{{$posts->previousPageUrl()}}" tabindex="-1">Previous</a>
              </li>
              @for ($i = 1; $i <= $posts->lastPage(); $i++)
                @if($i >= $posts->currentPage() - 1 && $i <= $posts->currentPage() + 1)
                  <li class="page-item {{ ($posts->currentPage() == $i) ? ' active' : '' }}"><a class="page-link" href="{{$posts->url($i)}}">{{$i}}</a></li>
                @endif
              @endfor
              <li class="page-item {{ ($posts->currentPage() == $posts->lastPage()) ? ' disabled' : '' }}">
                <a class="page-link" href="{{$posts->nextPageUrl()}}">Next</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('css')
<!-- Custom-Files -->
<link href="{{asset('admin/bootstrap4/bootstrap-4.1.3-dist/css/bootstrap.min.css')}}" rel="stylesheet">
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
<link href="{{asset('admin/css/articles.css')}}" rel="stylesheet">
<link href="{{asset('user/css/default.css')}}" rel="stylesheet">

@endsection