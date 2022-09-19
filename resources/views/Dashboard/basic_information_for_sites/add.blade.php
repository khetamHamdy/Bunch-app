@extends('Dashboard.Layouts.master')
@section('content')
    <!--begin::Card-->
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title">Add </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form class="form" method="post" action="{{ route('home_store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <strong>translations</strong>
                    </div>
                    <div class="card-block">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            @foreach (config('app.languages') as $key => $lang)
                                <li class="nav-item">
                                    <a class="nav-link @if ($loop->index == 0) show active in @endif"
                                       id="home-tab" data-toggle="tab" href="#{{ $key }}" role="tab"
                                       aria-controls="home" aria-selected="true">{{ $lang }}</a>
                                </li>
                            @endforeach

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            @foreach (config('app.languages') as $key => $lang)

                                <div class="tab-pane mt-3 fade @if ($loop->index == 0) show active in @endif"
                                     id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">

                                    {{$lang}}

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label text-right">Title:</label>
                                        <div class="col-lg-3">
                                            <input type="text" name="{{$key}}[title]" class="form-control" placeholder="Enter Title" />

                                        </div>
                                    </div>


                                </div>

                            @endforeach
                        </div>
                    </div>


                </div>


                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-right">Example Label</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="image-input image-input-outline image-input-circle" id="kt_image_3">
                            <div class="image-input-wrapper" style="background-image: url(assets/media/users/100_3.jpg)"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="image"  accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="profile_avatar_remove" />
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
															<i class="ki ki-bold-close icon-xs text-muted"></i>
														</span>
                        </div>

                    </div>
                </div>

            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
    <!--end::Card-->
@endsection
