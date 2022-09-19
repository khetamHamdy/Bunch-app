@extends('Front/Layouts/master')
@section('content')
    @section('section')
        @include('Front/Layouts/section_slide')
    @endsection
    <section class="section_content_inner">
        <div class="container">
            <div class="sec_head">
                <h2>{{__('Careers')}}</h2>
                <p>{{__('Lorem')}}</p>
            </div>
            <form class="form_st2" action="{{route('store_career.html')}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('post')
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{old('fullName')}}" name="fullName" placeholder="{{__('Full Name')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control" name="Nationality">
                                        <option>{{old('Nationality')}}</option>
                                        @foreach($countries as $code => $name)
                                            <option value="{{ $code }}">
                                                {{ $name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="{{__('Email address')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="Age" class="form-control" placeholder="{{__('Age')}}" value="{{old('Age')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="mobileNumber" class="form-control" value="{{old('mobileNumber')}}" placeholder="{{__('Telephone')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">

                                    <select class="form-control" name="specialization">
                                        <option>{{old('specialization')}}</option>
                                        @foreach($specialization as $key =>$special)
                                            <option value="{{$key}}">{{$special}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control"  name="description" placeholder="{{__('Description')}}">{{old('description')}} </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <div class="upload_box clearfix">
                                <input type="file" class="form-control" name="upload_cv" value="{{old('upload_cv')}}">
                                <div class="upload-label"><img src="{{asset('front/images/Group-up.png')}}" alt=""
                                                               class="img-responsive">{{__('Upload cv')}}
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
    </section>

@endsection
