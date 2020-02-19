@extends('user/app')

@section('title-page', 'Healthy all day')

@section('main-content')
  <!-- banner bottom -->
  <div class="about py-5">
    <div class="py-xl-5 py-lg-3">
      <div class="d-flex py-xl-5 py-lg-3">
        <div class="col-lg-5 agileits_works-grid" style="padding: 3em 2em 0 12em;">
          <h3 class="tittle mb-3 text-dark"> <span class="text-uppercase">HEALTHY ALL DAY</span>สุขภาพดีได้ทุกวัน</h3>
          <p style="font-size: 22px; color: #000"> &nbsp; &nbsp; &nbsp; การใช้ชีวิตที่เร่งรีบในปัจจุบัน อาจทำหลาย ๆ คนละเลยการดูแลสุขภาพไป ไม่ว่าจะเรื่อง อาหารการกิน สภาพจิตใจ การออกกำลังกาย และการพักผ่อนให้เพียงพอ จึงเป็นสาเหตุที่ทำให้สุขภาพไม่แข็งแรง หรือมีปัญหาด้านสุขภาพ การได้รับรู้ข้อมูลต่าง ๆ ที่เป็นประโยชน์ในการป้องกัน หรือรักษาสุขภาพ จะช่วยคุณสร้างภูมิคุ้มกันให้กับตนเองมากขึ้น บางโรค ก็สามารถป้องกันได้ง่ายๆ ด้วยการใช้ชีวิตอย่างมีสมดุลในทุกๆ ด้าน</p>
          <p style="font-size: 22px; color: #000"> &nbsp; &nbsp; &nbsp; Healthy All Day จึงได้รวบรวมสาระน่ารู้เกี่ยวกับการดูแลสุขภาพ  เพื่อให้ท่านมีสุขภาพที่ดี พร้อมมีความสุขในการดำเนินชีวิต</p>
        </div>
        <div class="col-lg-7 agileits_works-grid1 p-0 text-right mt-lg-0 mt-5">
          <img src="{{asset('user/images/bg.png')}}" alt="" class="img-fluid first-img" />
          <img src="{{asset('user/images/health_food.jpg')}}" alt="" class="img-fluid img-posi-2" />
        </div>
      </div>
    </div>
  </div>
  
  <!-- blogs -->
  <div class="blogs py-5">
    <div class="container py-xl-5 py-lg-3">
      <div class="blogs-main offset-lg-2">
        <h3 class="tittle mb-xl-5 mb-4 text-dark">
          <span class="text-uppercase text-white">Advice</span>แนะนำ
        </h3>
        <section class="slider">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <div class="inner-blogs-w3ls">
                  <img src="{{asset('user/images/n1.jpg')}}" alt=" " class="img-fluid" />
                  <div class="blogs-info-wthree text-center">
                    <p>ร่วมกันแบ่งปันความรู้ของคุณ</p>
                    <h5 class="para-w3-agileits text-dark mt-3 mb-5">ช่วยกันเสริมสร้างสุขภาพ เขียนบทความดี ๆ ไปกับเรา</h5>
                    <a href="{{route('forum.index')}}" class="button-w3ls">เริ่มเขียนกันเลย</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li>
                <div class="inner-blogs-w3ls">
                  <img src="{{asset('user/images/n3.jpg')}}" alt=" " class="img-fluid" />
                  <div class="blogs-info-wthree text-center">
                    <p>Article</p>
                    <h5 class="para-w3-agileits text-dark mt-3 mb-5">บทความ/ข่าวสารความรู้<br>ด้านสุขภาพที่เราคัดสรรมา<br>นำเสนอคุณ</h5>
                    <a href="{{route('post.index')}}" class="button-w3ls">อ่านเลย</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
              <li>
                <div class="inner-blogs-w3ls">
                  <img src="{{asset('user/images/n2.jpg')}}" alt=" " class="img-fluid" />
                  <div class="blogs-info-wthree text-center">
                    <p>Infographic</p>
                    <h5 class="para-w3-agileits text-dark mt-3 mb-5">Infographic<br>ด้านสุขภาพที่เราคัดสรรมา<br>นำเสนอคุณ</h5>
                    <a href="{{route('info')}}" class="button-w3ls">เลือกเลย</a>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </div>
    </div>

  </div>
  <!-- //blogs -->
  <!-- news -->
  <section class="banner-bottom-w3ls pt-5 mb-5" id="news">
    <div style="width: 90%; margin-left: auto; margin-right: auto;">
      <!-- <div class=" about-right slider-right-con">
          <h3 class="tittle mb-xl-5 mb-4 text-dark">
            <span class="text-uppercase">Thai!</span>Latest Articles</h3>
        </div> -->
      <h3 class="tittle mb-xl-5 mb-4 text-dark">
        <span class="text-uppercase">HEALTHY!</span>Latest Articles
      </h3>
      <div class="d-flex">
        <div class="col-lg-12 left-slider p-lg-0 mt-lg-0 mt-sm-5 mt-4">
          <div class="owl-carousel owl-theme">
            @foreach ($posts as $post)
              <div class="item">
                <div class="item-review">
                  <a href="{{route('post', $post->title)}}"><img src="{{asset($post->image)}}" class="img-fluid" alt="" /></a>
                  <a href="{{route('post', $post->title)}}" class="mt-3 text-dark" style="font-size: 20px">{{$post->title}}</a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //news -->
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
@endsection