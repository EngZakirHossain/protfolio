
@include('frontend.layouts.partials.map')
@include('frontend.layouts.partials.footerContent')
</main>
<!--// Main Area End //-->

<a href="#" class="scroll-top-btn" data-scroll-goto="1">
    <i class="fa fa-arrow-up"></i>
</a>
<!--// .scroll-top-btn // -->

<div id="preloader-wrap">
    <div class="preloader-inner">
        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
</div>
<!--// Preloader // -->

</div>
<!--// Page Wrapper End //-->
@include('frontend.layouts.partials.modal')

<!--// #rtlSidebar //-->

<!--// JQuery //-->
<script src="{{asset('frontend/vendor/js/jquery.min.js')}}"></script>
<!--// Popper //-->
<script src="{{asset('frontend/vendor/js/popper.min.js')}}"></script>
<!--// Bootstrap //-->
<script src="{{asset('frontend/vendor/js/bootstrap.min.js')}}"></script>
<!--// Images Loaded Js //-->
<script src="{{asset('frontend/vendor/js/images.loaded.min.js')}}"></script>
<!--// Wow Js //-->
<script src="{{asset('frontend/vendor/js/wow.min.js')}}"></script>
<!--// Magnific Popup //-->
<script src="{{asset('frontend/vendor/js/magnific.popup.min.js')}}"></script>
<!--// Waypoint Js //-->
<script src="{{asset('frontend/vendor/js/waypoint.min.js')}}"></script>
<!--// Counter Up Js //-->
<script src="{{asset('frontend/vendor/js/counter.up.min.js')}}"></script>
<!--// JQuery Easing Functions //-->
<script src="{{asset('frontend/vendor/js/jquery.easing.min.js')}}"></script>
<!--// Owl Carousel //-->
<script src="{{asset('frontend/vendor/js/owl.carousel.min.js')}}"></script>
<!--// Form Validate //-->
<script src="{{asset('frontend/vendor/js/validate.min.js')}}"></script>
<!--// Form Validate //-->
<script src="{{asset('frontend/vendor/js/custom.select.plugin.js')}}"></script>
<!--// Scroll It //-->
<script src="{{asset('frontend/vendor/js/scrollit.min.js')}}"></script>
<!--// Isotope Js //-->
<script src="{{asset('frontend/vendor/js/isotope.min.js')}}"></script>
<!--// Particles Js //-->
<script src="{{asset('frontend/vendor/js/particles.js')}}"></script>
<!--// Main Js //-->
<script src="{{asset('frontend/js/main.js')}}"></script>
@yield('script')
</body>

<!-- Mirrored from aipthemes.com/filaous/index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Feb 2021 07:50:06 GMT -->
</html>
