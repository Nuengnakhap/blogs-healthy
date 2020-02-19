@extends('user/app')

@section('title-page', 'InfoGraphic')

@section('main-content')
  <div class="super_container">
    <div class="home">
      <div class="home_background parallax-window" data-parallax="scroll" data-speed="0.8"><img class="home_background" src="{{asset('user/images/info-1.jpg')}}"></div>
      <div class="home_content">
        <div class="post_title" style="font-size: 100px; color: #000;">InfoGraphics</div>
      </div>
    </div>
    <div class="info_content py-5">
      <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <img src="" class="enlargeImageModalSource" style="width: 100%;">
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div id="columns">
          <figure>
          <img class="info" src="{{asset('user/images/infographics/10_โฉมหน้าโรคแทรกซ้อน_แม่ท้องต้องระวัง.jpg')}}">
          <figcaption style="font-size: 20px">10 โรคแทรกซ้อนที่คนท้องต้องระวัง</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/8_วิธีสังเกต_ภาวะซึมเศร้า_ในผู้สูงอายุ.jpg')}}">
          <figcaption style="font-size: 20px">8 วิธีการสังเกตภาวะซึมเศร้าในผู้สูงอายุ</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/กลุ่มโรค_NCDs_เกิดจากการใช้ชีวิตประจำวันที่มีพฤติกรรมเสี่ยง.jpg')}}">
          <figcaption style="font-size: 20px">กลุ่มโรค NCDs เกิดจากการใช้ชีวิตประจำวันที่มีพฤติกรรมเสี่ยง</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/การนอนหลับ.jpg')}}">
          <figcaption style="font-size: 20px">การนอนหลับ</figcaption>
          </figure>
          
           <figure>
           <img class="info" src="{{asset('user/images/infographics/การป้องกัน_5_โรคพิการแต่กำเนิด.jpg')}}">
          <figcaption style="font-size: 20px">การป้องกัน 5 โรคพิการแต่กำเนิด</figcaption>
          </figure>
          
           <figure>
           <img class="info" src="{{asset('user/images/infographics/ทำไมต้อง_พักตับ.jpg')}}">
          <figcaption style="font-size: 20px">ทำไมต้องพักตับ</figcaption>
          </figure>
          
           <figure>
          <img class="info" src="{{asset('user/images/infographics/ความจริงไขมันทรานส์.jpg')}}">
          <figcaption style="font-size: 20px">ไขมันทรานส์</figcaption>
          </figure>
          
            <figure>
          <img class="info" src="{{asset('user/images/infographics/คุณคือผู้ดื่มแบบไหน.jpg')}}">
            <figcaption style="font-size: 20px">คุณคือผู้ดื่มแบบไหน</figcaption>
          </figure> 
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/กินลดอ้วนด้วยการคุมสัดส่วนอาหารแต่ละมื้อ.jpg')}}">
          <figcaption style="font-size: 20px">การคุมสัดส่วนอาหารแต่ละมื้อ</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/การเลือกจักรยานให้เหมาะสมกับการใช้งาน.jpg')}}">
          <figcaption style="font-size: 20px">การเลือกจักรยานให้เหมาะสมกับการใช้งาน</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/ซิตี้รัน_เท่ากับ_วิ่งสมาธิ.jpg')}}">
          <figcaption style="font-size: 20px">ซิตี้รันเท่ากับวิ่งสมาธิ</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/ต่อมทอมซิลในเด็ก_ควรตัดหรือเปล่า.jpg')}}">
          <figcaption style="font-size: 20px">ต่อมทอมซิลในเด็กควรตัดหรือเปล่า</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/ต่อมลูกหมากโต_.jpg')}}">
          <figcaption style="font-size: 20px">ต่อมลูกหมากโต</figcaption>
          </figure>
          
            <figure>
          <img class="info" src="{{asset('user/images/infographics/ตรวจสอบความพร้อมก่อนใช้จักรยาน.jpg')}}">
          <figcaption style="font-size: 20px">ตรวจสอบความพร้อมก่อนใช้จักรยาน</figcaption>
          </figure>
          
            <figure>
          <img class="info" src="{{asset('user/images/infographics/ตรวจสอบตัวเองก่อน_ลดพุง_ลดโรค.jpg')}}">
          <figcaption style="font-size: 20px">ตรวจสอบตัวเองก่อน_ลดพุง_ลดโรค</figcaption>
          </figure>
          
            <figure>
          <img class="info" src="{{asset('user/images/infographics/ปวดศีรษะแบบไหน__ไม่ธรรมดา.jpg')}}">
          <figcaption style="font-size: 20px">ปวดศีรษะแบบไหนไม่ธรรมดา</figcaption>
          </figure>
          
          <figure>
          <img class="info" src="{{asset('user/images/infographics/ประจำเดือนไม่มา_หรือมาไม่ตรง.jpg')}}">
          <figcaption style="font-size: 20px">ประจำเดือนไม่มาหรือมาไม่ตรง</figcaption>
          </figure>
          
            <figure>
          <img class="info" src="{{asset('user/images/infographics/ปวดเข่า_เข่าเสื่อม__ปัจจัยอะไรที่ทำให้บางคนเป็น_บางคนไม่เป็น_.jpg')}}">
          <figcaption style="font-size: 20px">ปวดเข่า เข่าเสื่อม ปัจจัยอะไรที่ทำให้บางคนเป็น บางคนไม่เป็น</figcaption>
          </figure>
          
            <figure>
          <img class="info" src="{{asset('user/images/infographics/ปอดอักเสบในผู้สูงอายุ_โรคยอดฮิตพิชิตวัยชรา.jpg')}}">
          <figcaption style="font-size: 20px">ปอดอักเสบในผู้สูงอายุ</figcaption>
          </figure>
          
          <small>Art &copy; <a href="//www.thaihealth.or.th">สสส.</a></small>
        </div> 
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
<link rel="stylesheet" href="{{asset('user/css/simpleGridTemplate.css')}}" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('user/css/post_nosidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/css/post_nosidebar_responsive.css')}}">
@endsection

@section('js')
  <script src="{{asset('user/js/masonry.js')}}"></script>
  <script src="{{asset('user/js/parallax.min.js')}}"></script>
  <script src="{{asset('user/js/post_nosidebar.js')}}"></script>
@endsection
