@extends('user/app')

@section('title-page', 'Posts')

@section('main-content')
	<!-- Page Content -->
  <div class="super-container mt-5 pt-2">
    <div class="home">
      <div id="carouselExampleIndicators" class="home_background parallax-window carousel slide" data-parallax="scroll" data-speed="0.8" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" style="background-size: cover;background-position: 50% 50%;" src="{{asset('user/images/11.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="background-size: cover;background-position: 50% 50%;" src="{{asset('user/images/alexis-brown-85793-unsplash.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" style="background-size: cover;background-position: 50% 50%;" src="{{asset('user/images/brooke-cagle-193476-unsplash.jpg')}}" alt="Third slide">
          </div>
        </div>
      </div>
      <div class="content-flex content-flex--home">
        <div class="search">
          <div class="search__row search__row--home">
            <div class="search__col">
              <p class="search__title">
                ค้นหาบทความอื่นๆ ได้ที่นี่
              </p>
              <div action="" class="search__group">
                <form class="search__group" action="{{route('post.search')}}" method="post">
                  {{csrf_field()}}
                    <input type="text" class="inputHome search__input" name="search" placeholder="ค้นหา ..." maxlength="100">
                    <button class="main-button main-button--search" type="submit">ค้นหา</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

	<div class="container">
    <div class="row">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="500000000">
        <!-- Carousel items -->
        <div class="carousel-inner vertical">
        	@for ($k = 0; $k < count($posts); $k++)
        		@if (count($posts) > 3)
              @if ($k == (count($posts) - 2))
                @if (count($posts[$k+1]) == 3)
                  @break
                @endif
              @endif
	        		@if (count($posts[$k+1]) < 3)
	        			@break
	        		@endif
              <div class="carousel-item {{ ($k == 0) ? ' active' : '' }}">
                @for ($i = $k; $i < min(3+$k, count($posts)); $i++)
                <div class="docket row">
                  @foreach ($posts[$i] as $post)
                  <div class="docket_ticket col-md-4">
                    <div class="docket__cart">
                      <div class="docket__inner">
                        <div class="docket__basic">
                          <a class="docket__image" href="{{route('post', $post->title)}}"><img class="docket__image lazyloaded" src="{{asset($post->image)}}">
                            <p class="meta">
                              <span class="day">{{date('d', strtotime($post->created_at))}}</span>
                              <span class="month">{{date('M', strtotime($post->created_at))}}</span>
                            </p>
                          </a>
                          <div class="docket__description">
                            <div class="docket__info">
                              <a class="docket__text" href="{{route('post', $post->title)}}" style="font-size: 22px">{{$post->title}}</a>
                              <p class="docket__text docket__text--second" style="font-size: 20px">{{$post->description}}</p>
                            </div>
                            <div class="docket__item">
                              <a class="docket__link" href="{{route('post', $post->title)}}">อ่านเพิ่มเติม</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                @endfor
              </div>
        		@elseif (count($posts) == 3)
              <div class="carousel-item {{ ($k == 0) ? ' active' : '' }}">
                @for ($i = 0; $i < 3; $i++)
                <div class="docket row">
                  @foreach ($posts[$i] as $post)
                  <div class="docket_ticket col-md-4">
                    <div class="docket__cart">
                      <div class="docket__inner">
                        <div class="docket__basic">
                          <a class="docket__image" href="{{route('post', $post->title)}}"><img class="docket__image lazyloaded" src="{{asset($post->image)}}">
                            <p class="meta">
                              <span class="day">{{date('d', strtotime($post->created_at))}}</span>
                              <span class="month">{{date('M', strtotime($post->created_at))}}</span>
                            </p>
                          </a>
                          <div class="docket__description">
                            <div class="docket__info">
                              <a class="docket__text" href="{{route('post', $post->title)}}" style="font-size: 22px">{{$post->title}}</a>
                              <p class="docket__text docket__text--second" style="font-size: 20px">{{$post->description}}</p>
                            </div>
                            <div class="docket__item">
                              <a class="docket__link" href="{{route('post', $post->title)}}">อ่านเพิ่มเติม</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                @endfor
                @break
              </div>
            @elseif (count($posts) == 2)
              <div class="carousel-item {{ ($k == 0) ? ' active' : '' }}">
                @for ($i = 0; $i < 2; $i++)
                <div class="docket row">
                  @foreach ($posts[$i] as $post)
                  <div class="docket_ticket col-md-4">
                    <div class="docket__cart">
                      <div class="docket__inner">
                        <div class="docket__basic">
                          <a class="docket__image" href="{{route('post', $post->title)}}"><img class="docket__image lazyloaded" src="{{asset($post->image)}}">
                            <p class="meta">
                              <span class="day">{{date('d', strtotime($post->created_at))}}</span>
                              <span class="month">{{date('M', strtotime($post->created_at))}}</span>
                            </p>
                          </a>
                          <div class="docket__description">
                            <div class="docket__info">
                              <a class="docket__text" href="{{route('post', $post->title)}}" style="font-size: 22px">{{$post->title}}</a>
                              <p class="docket__text docket__text--second" style="font-size: 20px">{{$post->description}}</p>
                            </div>
                            <div class="docket__item">
                              <a class="docket__link" href="{{route('post', $post->title)}}">อ่านเพิ่มเติม</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                @endfor
                @break
              </div>
            @elseif (count($posts) == 1)
              <div class="carousel-item {{ ($k == 0) ? ' active' : '' }}">
                @for ($i = 0; $i < 1; $i++)
                <div class="docket row">
                  @foreach ($posts[$i] as $post)
                  <div class="docket_ticket col-md-4">
                    <div class="docket__cart">
                      <div class="docket__inner">
                        <div class="docket__basic">
                          <a class="docket__image" href="{{route('post', $post->title)}}"><img class="docket__image lazyloaded" src="{{asset($post->image)}}">
                            <p class="meta">
                              <span class="day">{{date('d', strtotime($post->created_at))}}</span>
                              <span class="month">{{date('M', strtotime($post->created_at))}}</span>
                            </p>
                          </a>
                          <div class="docket__description">
                            <div class="docket__info">
                              <a class="docket__text" href="{{route('post', $post->title)}}" style="font-size: 22px">{{$post->title}}</a>
                              <p class="docket__text docket__text--second" style="font-size: 20px">{{$post->description}}</p>
                            </div>
                            <div class="docket__item">
                              <a class="docket__link" href="{{route('post', $post->title)}}">อ่านเพิ่มเติม</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                @endfor
                @break
              </div>
            @endif
        	
        	<!--/item-->
        	@endfor
        	
        	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        	  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color: Black; font-size: 30px"></span>
        	  <span class="sr-only">Previous</span>
        	</a>
        	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        	  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color: Black; font-size: 30px"></span>
        	  <span class="sr-only">Next</span>
        	</a>
        </div>
      </div>
    </div>
	</div>
	<!-- /.container -->
@endsection

@section('css')
<!-- Custom-Files -->
<link rel="stylesheet" href="{{asset('user/css/bootstrap.css')}}">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('user/css/owl.theme.css')}}" type="text/css" media="all">
<!-- Carousel (for News section) -->
<link rel="stylesheet" href="{{asset('user/css/flexslider.css')}}" type="text/css" media="screen" property="">
<!-- Flexslider css (for Testimonials) -->
<link rel="stylesheet" href="{{asset('user/css/fontawesome-all.css')}}">
<!-- Font-Awesome-Icons-CSS -->
<link href="{{asset('admin/bootstrap4/bootstrap4-glyphicons-master/css/bootstrap-glyphicons.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('user/css/style.css')}}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="{{asset('user/css/post_nosidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/css/post_nosidebar_responsive.css')}}">
<!-- //Custom-Files -->
@endsection

@section('js')
  <script src="{{asset('user/js/masonry.js')}}"></script>
  <script src="{{asset('user/js/parallax.min.js')}}"></script>
  <script src="{{asset('user/js/post_nosidebar.js')}}"></script>
  <script>$('.carousel').carousel()</script>
@endsection

@section('tags')
<div class="card container mb-5" style="padding: 0px;">
  <h5 class="card-header">Tag Clouds</h5>
  <div class="card-body">
    <div class="row">
      @foreach ($tags as $tag)
        <a href="{{route('post.tag', $tag->name)}}" class="border tags">{{$tag->name}}</a>
      @endforeach
    </div>
  </div>
</div>
@endsection