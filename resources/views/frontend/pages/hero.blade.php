@php
    $information = \Illuminate\Support\Facades\DB::table('personal_information')->first();
@endphp
<!--// Hero Section Start //-->
<section class="hero-banner" data-scroll-index="1">
    <div id="heroparticles"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 col-md-10 wow fadeInUp">
                <div class="hero-inner">
                    <h1>
                        I'm <br>
                        {{$information->name}}
                    </h1>
                    <h2>
                        Always new beginnings can move the business forward.A user experience is
                        required before service.Now is a great opportunity to work with me and move
                        your brand forward.
                    </h2>
                    <a href="#" data-scroll-nav="4"  class="white-btn">
                        <span class="text">View Works</span>
                        <span class="icon"><i class="fa fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-xl-6 col-md-12 hero-img-resp wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
                <div class="hero-img">
                    <div class="border-line-outer">
                        <div class="border-line-inner">
                            <img src="{{ asset('uploads/personal') }}/{{ $information->photo }}" title="HovyLee phone image" alt="HovyLee phone image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="hero-social-list">
        <li><a href="javascript:void(0)"><i class="fab fa-github"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fab fa-facebook"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
    </ul>
    <a href="mailto:filaous@example.com" class="hero-email-link">filaous@example.com</a>
    <a href="#" data-scroll-nav="2" class="scroll-down-btn">Scroll Down</a>
</section>
<!--// Hero Section End //-->
