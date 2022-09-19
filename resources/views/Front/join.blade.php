@extends('Front/Layouts/master')
@section('content')
    @section('section')
        @include('Front/Layouts/section_slide')
    @endsection
    <section class="section_content_inner">
        <div class="container">
            <div class="sec_head">
                @foreach($joinData as $joinData)
                <h2>{{$joinData->title}}</h2>
                <p>{{$joinData->description}}</p>
                    @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form class="form_st2" enctype="multipart/form-data" method="post" action="{{route('store_join.html')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <select class="form-control" name="projectType">
                                        <option>{{old('projectType')}}</option>
                                        @foreach($projectTypes as $key => $projectType)
                                            <option value="{{$key}}">{{$projectType}}</option>
                                        @endforeach
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phoneNumber" value="{{old('phoneNumber')}}" placeholder="{{__('Mobile number')}}">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="{{old('email')}}" name="email" placeholder="{{__('Email address')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <select class="form-control" name="groupType">
                                        <option>{{old('groupType')}}</option>
                                        @foreach($groupTypes as $key => $groupType)
                                            <option value="{{$key}}">{{$groupType}}</option>
                                        @endforeach
                                    </select>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{__('Full Name') }}"  value="{{old('fullName')}}"
                                           name="fullName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <div class="add_social clearfix">
                                       <i class="zmdi zmdi-plus"></i>
                                        <span>{{__('Add social media')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="{{__('social media')}}" value="{{old('socialMedia')}}" name="socialMedia">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="{{__('Description')}}" name="description"> {{old('description')}}</textarea>
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
            </div>
        </div>
    </section>

@endsection
