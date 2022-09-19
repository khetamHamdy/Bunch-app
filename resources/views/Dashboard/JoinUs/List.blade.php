@extends('Dashboard.Layouts.master')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->

                @foreach($JoinUs as $join)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <br>
                                <br>
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-7">

                                    <!--begin::Title-->
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                           class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">FullName
                                            : {{$join->fullName}}</a>

                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::User-->
                                <!--begin::Desc-->
                                <p class="mb-7">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Description </a>
                                    <br>
                                    {{ $join->description }}</p>
                                <!--end::Desc-->
                                <!--begin::Info-->
                                <div class="mb-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark-75 font-weight-bolder mr-2">mobile Number:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{$join->phoneNumber}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                        <span class="text-dark-75 font-weight-bolder mr-2">email:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{$join->email}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Project Type:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{$join->projectType}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Group Type:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{$join->groupType}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Group Type:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{$join->groupType}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Social Media :</span>
                                        <a href="{{$join->socialMedia}}" class="text-muted text-hover-primary">
                                            link </a>

                                    </div>
                                    <form action="{{route('joinListDelete' , $join)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <br>
                                        <button type="submit"
                                                class="btn btn-block btn-sm btn-light-danger font-weight-bolder text-uppercase py-4"
                                                href="">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </button>
                                    </form>
                                    <br>
                                    <!--end::Info-->
                                    <a href="#"
                                       class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">write
                                        message</a>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end:: Card-->
                        </div>
                        <!--end::Col-->
                        @endforeach
                    </div>
                    <!--end::Row-->


            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
@endsection
