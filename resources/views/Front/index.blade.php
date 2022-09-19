@extends('Front/Layouts/master')

@section('content')

    @section('section')
        @include('Front/Layouts/section_slide')
    @endsection

    <section class="section_why_us">
        <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
            <div class="container">
                <h2>{{__('Why us')}}</h2>
                <p>{{__('us')}}</p>
            </div>
        </div>
        <div class="sec_warpper">
            <div class="container">
                <div class="download_box wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.600s">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="download_txt">
                                <h2>{{__('Download Application')}}</h2>
                                <p>{{__('Lorem')}}.</p>
                                <ul class="store_btn clearfix">
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-google-play"></i><span>{{__('Android')}}</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="zmdi zmdi-apple"></i><span>IOS</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="download_vedio">
                                <a href="#">
                                    <img src="{{asset('front/images/vedio-thumb.png')}}" alt="" class="img-responsive">
                                    <span class="vedio_icon"><img src="{{asset('front/images/play-icon.svg')}}"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services_list">
                    <div class="row">
                        <div class="col-sm-4 wow slideInUp" data-wow-duration="1s" data-wow-delay="0.700s">
                            <div class="serv_item">
                                <div class="serv_icon">
                                    <img src="{{asset('front/images/Artwork3.svg')}}" alt="">
                                </div>
                                <p>{{__('Artwork1')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow slideInUp" data-wow-duration="1s" data-wow-delay="0.800s">
                            <div class="serv_item">
                                <div class="serv_icon">
                                    <img src="{{asset('front/images/Artwork4.svg')}}" alt="">
                                </div>
                                <p>{{__('Artwork2')}}</p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow slideInUp" data-wow-duration="1s" data-wow-delay="0.900s">
                            <div class="serv_item">
                                <div class="serv_icon">
                                    <img src="{{asset('front/images/Artwork5.svg')}}" alt="">
                                </div>
                                <p>{{__('Artwork3')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--section_why_us-->
    <section class="section_our_client">
        <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
            <div class="container">
                <h2>{{__('Our clients')}}</h2>
                <p>{{__('clients')}}</p>
            </div>
        </div>
        <div class="sec_warpper wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
            <div class="container">
                <div class="owl-carousel" id="client-slider">
                    <div class="item">
                        <div class="client-item">
                            <div class="client-link">
                                <img src="{{asset('front/images/s.png')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-item">
                            <div class="client-link">
                                <img src="{{asset('front/images/slide.png')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-item">
                            <div class="client-link">
                                <img src="{{asset('front/images/c3.png')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-item">
                            <div class="client-link">
                                <img src="{{asset('front/images/c4.png')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-item">
                            <div class="client-link">
                                <img src="{{asset('front/images/c5.png')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-item">
                            <div class="client-link">
                                <img src="{{asset('front/images/c3.png')}}" alt="" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>

                <a href="{{route('clients.html')}}" class="btn_more">{{__('Load more')}}</a>
            </div>
        </div>
        <div class="logo-abs">
            <img src="{{asset('front/images/s.png')}}" alt="">
        </div>
    </section><!--section_our_client-->
    <section class="section_contact">
        <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
            <div class="container">
                <h2>{{__('Contact us')}}</h2>
                <p>{{__('clients')}}</p>
            </div>
        </div>
        <div class="sec_warpper wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 margin-auto">
                        <form class="form_contact" action="{{route('store_contact.html')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control input_child1" name="name"
                                               value="{{old('name')}}"
                                               placeholder="{{__('Name')}}">
                                        <span class="span_line"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control input_child2" name="mobileNumber"
                                               value="{{old('mobileNumber')}}"
                                               placeholder="{{__('Mobile number')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="{{__('Messages')}}">
                                            {{old('message')}}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn_contact"><i class="zmdi zmdi-mail-send"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!--section_contact-->

@endsection
