<!-- Js files -->
<!-- JavaScript -->
<script src="{{asset('user/js/jquery-2.2.3.min.js')}}"></script>
<!-- Default-JavaScript-File -->

<!-- carousel (for new section) -->
<script src="{{asset('user/js/owl.carousel.js')}}"></script>
<script>
	$(document).ready(function () {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				480: {
					items: 2,
					nav: true,
					loop: false
				},
				736: {
					items: 4,
					nav: true,
					loop: false
				},
				991: {
					items: 4,
					nav: true,
					loop: false,
					margin: 0
				}
			}
		})
	})
</script>
<!-- //carousel (for new section) -->

<!-- flexSlider (for testimonials) -->
<script defer src="{{asset('user/js/jquery.flexslider.js')}}"></script>
<script>
	$(window).load(function () {
		$('.flexslider').flexslider({
			animation: "slide",
			start: function (slider) {
				$('body').removeClass('loading');
			}
		});
	});
</script>
<!-- //flexSlider (for testimonials) -->

<!-- smooth scrolling -->
<script src="{{asset('user/js/SmoothScroll.min.js')}}"></script>
<!-- move-top -->
<script src="{{asset('user/js/move-top.js')}}"></script>
<!-- easing -->
<script src="{{asset('user/js/easing.js')}}"></script>
<!--  necessary snippets for few javascript files -->
<script src="{{asset('user/js/Agro Crop.js')}}"></script>

<script src="{{asset('user/js/bootstrap.js')}}"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->

<script src="{{asset('user/js/masonry.js')}}"></script>
<script src="{{asset('user/js/parallax.min.js')}}"></script>
<script src="{{asset('user/js/post_nosidebar.js')}}"></script>

<!-- //Js files -->
<script>
  $(document).ready(function () {
  
      $('.btn-vertical-slider').on('click', function () {
          
          if ($(this).attr('data-slide') == 'next') {
              $('#myCarousel').carousel('next');
          }
          if ($(this).attr('data-slide') == 'prev') {
              $('#myCarousel').carousel('prev')
          }
  
      });
  });
</script>

<script>
  $(function() {
        $('img').on('click', function() {
        $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
        $('#enlargeImageModal').modal('show');
      });
  });
</script>

@section('footer')
    @show