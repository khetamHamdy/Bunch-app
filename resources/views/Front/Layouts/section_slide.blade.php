<section class="section_slide" style="background-image: url({{asset('front/images/slide.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 margin-auto">
                <div id="homeSlider" class="owl-carousel">
                    @foreach($data as $data)
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="slide_txt to-animate">
                                    <h2>{{ $data->title }}</h2>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="slide_thumb to-animate2">
                                    <img src="{{asset('storage/'.$data->image)}}" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="logo-abs">
        <img src="{{asset('front/images/s.png')}}" alt="">
    </div>
</section><!--section_slide-->
