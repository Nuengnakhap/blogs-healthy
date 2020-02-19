<!DOCTYPE html>
<html lang="en">
  <head>

    @include('user/layouts/head')
    @section('css')
        @show

  </head>
  <body>

    @include('user/layouts/header')
    <div class="mt-3">
      @section('main-content')
        @show
    </div>
    @section('tags')
        @show
    <footer>
      <div class="padding-w3ls-footer">

        <!-- footer end -->
        <div class="d-flex container" style="min-height: 90px;">
          <!-- footer social icons -->
          <div class="logo2 text-sm-left" style="margin: auto">
            <h2>
              <a href="{{route('home')}}"><img src="{{asset('user/images/healthy_heart.png')}}" width="45px" height="45px" class="mx-3">Healthy</a>
            </h2>
          </div>
          <!-- //footer social icons -->

          <!-- copyright -->
          <div class="col-md-10" style="margin: auto;">
            <p class="float-right" style="font-size: 18px; color: #fff"> &copy; 2018 Healthy Group | Webtech Mini Project 2018</p>
          </div>
          <!-- //copyright -->
        </div>
        <!-- //footer end -->
      </div>
    </footer>
    @include('user/layouts/footer')
    @section('js')
        @show
  </body>
</html>