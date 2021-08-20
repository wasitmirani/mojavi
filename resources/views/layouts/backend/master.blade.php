<!DOCTYPE html>
<html lang="en">
@include('layouts.backend.component.head')
<body>


		{{-- Preloader start --}}
<div id="main-wrapper">
    @include('layouts.backend.component.navbar')
		<!--**********************************
			Nav header end
		***********************************-->

		<!--**********************************
			Chat box start
		***********************************-->
        @include('layouts.backend.component.chatbox')
		<!--**********************************
			Chat box End
		***********************************-->

		<!--**********************************
			Header start
		***********************************-->
        @include('layouts.backend.component.header')
		<!--**********************************
			Header end ti-comment-alt
		***********************************-->

		<!--**********************************
			Sidebar start
		***********************************-->
        @include('layouts.backend.component.sidebar')
		<!--**********************************
			Sidebar end
		***********************************-->

		<!--**********************************
			Content body start
		***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
						@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
			Content body end
		***********************************-->



		<!--**********************************
			Footer start
		***********************************-->
        @include('layouts.backend.component.footer')
		<!--**********************************
			Footer end
		***********************************-->

		<!--**********************************
		   Support ticket button start
		***********************************-->

		<!--**********************************
		   Support ticket button end
		***********************************-->


</div>
	<!--**********************************
		Main wrapper end
	***********************************-->



	<script src="{{ asset('backend/vendor/global/global.min.js') }}"></script>

	<script src="{{ asset('backend/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

	<!-- Apex Chart -->

	<script src="{{ asset('backend/vendor/apexchart/apexchart.js') }}"></script>


	<!-- Chart piety plugin files -->


	<!-- Dashboard 1 -->
	<script src="{{ asset('backend/js/dashboard/dashboard-1.js') }}"></script>

	<script src="{{ asset('backend/vendor/owl-carousel/owl.carousel.js') }}"></script>
	<script src="{{ asset('backend/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
	<script src="{{ asset('backend/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/js/plugins-init/datatables.init.js') }}"></script>

	<script src="{{ asset('backnd/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

	<script src="{{ asset('backend/js/custom.min.js') }}"></script>
	<script src="{{ asset('backend/js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('backend/js/demo.js') }}"></script>
	<script src="{{ asset('backend/js/styleSwitcher.js') }}"></script>
    
	<script src="{{ asset('backend/vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		function TravlCarousel()
			{

				/*  testimonial one function by = owl.carousel.js */
				jQuery('.front-view-slider').owlCarousel({
					loop:false,
					margin:15,
					nav:true,
					autoplaySpeed: 3000,
					navSpeed: 3000,
					paginationSpeed: 3000,
					slideSpeed: 3000,
					smartSpeed: 3000,
					autoplay: false,
					animateOut: 'fadeOut',
					dots:true,
					navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
					responsive:{
						0:{
							items:1
						},

						768:{
							items:2
						},

						1400:{
							items:2
						},
						1600:{
							items:3
						},
						1750:{
							items:3
						}
					}
				})
			}

			jQuery(window).on('load',function(){
				setTimeout(function(){
					TravlCarousel();
				}, 1000);
			});
	</script>
	<script>
		$(function () {
			$('#datetimepicker').datetimepicker({
				inline: true,
			});
		});

		$(document).ready(function(){
			$(".booking-calender .fa.fa-clock-o").removeClass(this);
			$(".booking-calender .fa.fa-clock-o").addClass('fa-clock');
		});
	</script>

</body>
</html>
