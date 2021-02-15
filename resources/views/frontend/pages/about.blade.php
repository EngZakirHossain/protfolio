@php
    $information = \Illuminate\Support\Facades\DB::table('personal_information')->first();
    @endphp
<!--// About Section Start //-->
<section class="section" id="about" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s">
                    <img src="{{ asset('uploads/personal') }}/{{ $information->photo }}" alt="About image" title="About image" class="img-fluid">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-inner wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s">
                    <h6>About Me</h6>
                    <h2>I am here with 10 years of user experience</h2>
                    <p>
                        I prevent your loss of time and indecision in the works I have
                        taken and the projects I have done and offer the best solution.
                        Many of my customers and brands express their satisfaction with
                        working with me.We can appeal to a huge audience and grow your business.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="mb-resp-15">
                                <li>
                                    <div class="text">
                                        <h5>Name :</h5>
                                        <p>{{$information->name}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <h5>Country :</h5>
                                        <p>{{$information->country}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <h5>Profession :</h5>
                                        <p>{{$information->profession}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul>
                                <li>
                                    <div class="text">
                                        <h5>Experience :</h5>
                                        <p>{{$information->experience}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <h5>Languages :</h5>
                                        <p>{{$information->language}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="text">
                                        <h5>Address :</h5>
                                        <p>{{$information->address}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @php
                        $resume = \Illuminate\Support\Facades\DB::table('resumes')->first();
                        @endphp
                    <a href="{{ asset('uploads/Resume') }}/{{ $resume->cv }}" class="primary-btn" download="">
                        <span class="text">Download Cv</span>
                        <span class="icon"><i class="fa fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--// About Section End //-->
