@extends('Front/Layouts/master')
@section('content')
    @section('section')
        @include('Front/Layouts/section_slide')
    @endsection
    <section class="section_content_inner">
        <div class="container">
            <div class="sec_head">
                <h2>{{__('Contact us')}}</h2>
                <p>{{__('Lorem')}}</p>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <form class="form_st2" action="{{route('store_contact.html')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{__('Full Name')}}"  name="name" value="{{old('name')}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="{{__('Mobile number')}}" value="{{old('mobileNumber')}}" name="mobileNumber">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control"  name="message" placeholder="{{__('Description')}}">{{old('message')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn_st2">{{__('Send')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <div id="googleMap2"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
