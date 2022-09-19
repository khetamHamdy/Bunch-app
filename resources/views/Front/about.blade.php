@extends('Front/Layouts/master')
@section('content')
    @section('section')
        @include('Front/Layouts/section_slide')
    @endsection
    <section class="section_content_inner">
        <div class="container">
            <div class="sec_head">
                <h2>{{__('About us')}}</h2>
                <p>
                    {!! __('Lorem') !!}
                </p>
            </div>
            <div class="about_gallery">
                <div class="row">
                    <div class="col-sm-8 margin-auto">
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <div class="box_gallery">
                                    <a href="#">
                                        <img src="{{asset('front/images/a1.png')}}" alt="" class="img-responsive">
                                        <span class="icon_gallery"><i class="icon-picture icons"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="box_gallery">
                                    <a href="#">
                                        <img src="{{asset('front/images/a2.png')}}" alt="" class="img-responsive">
                                        <span class="icon_gallery"><i class="icon-picture icons"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="box_gallery">
                                    <a href="#">
                                        <img src="{{asset('front/images/a3.png')}}" alt="" class="img-responsive">
                                        <span class="icon_gallery"><i class="icon-picture icons"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="box_gallery">
                                    <a href="#">
                                        <img src="{{asset('front/images/a4.png')}}" alt="" class="img-responsive">
                                        <span class="icon_gallery"><i class="icon-picture icons"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="box_gallery">
                                    <a href="#">
                                        <img src="{{asset('front/images/a3.png')}}" alt="" class="img-responsive">
                                        <span class="icon_gallery"><i class="icon-picture icons"></i></span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="box_gallery">
                                    <a href="#">
                                        <img src="{{asset('front/images/a6.png')}}" alt="" class="img-responsive">
                                        <span class="icon_gallery"><i class="icon-picture icons"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
