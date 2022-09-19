@extends('Dashboard.Layouts.master')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                @foreach($users as $user)
                    <!--begin::Col-->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b card-stretch">
                            <!--begin::Body-->
                            <div class="card-body pt-4">
                                <!--begin::Toolbar-->
                                <div class="d-flex justify-content-end">
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions"
                                         data-placement="left">
                                        <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ki ki-bold-more-hor"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <!--begin::Navigation-->
                                            <ul class="navi navi-hover">
                                                <li class="navi-header font-weight-bold py-4">
                                                    <span class="font-size-lg">Choose Label:</span>
                                                    <i class="flaticon2-information icon-md text-muted"
                                                       data-toggle="tooltip" data-placement="right"
                                                       title="Click to learn more..."></i>
                                                </li>
                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-success">Customer</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-danger">Partner</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-warning">Suplier</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-primary">Member</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-item">
                                                    <a href="#" class="navi-link">
																		<span class="navi-text">
																			<span
                                                                                class="label label-xl label-inline label-light-dark">Staff</span>
																		</span>
                                                    </a>
                                                </li>
                                                <li class="navi-separator mt-3 opacity-70"></li>
                                                <li class="navi-footer py-4">
                                                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                        <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                </li>
                                            </ul>
                                            <!--end::Navigation-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::User-->
                                <div class="d-flex align-items-end mb-7">
                                    <!--begin::Pic-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Pic-->
                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                            <div class="symbol symbol-circle symbol-lg-75">
                                                <img src="{{ asset('storage/'.$user->image) }}" alt="image"/>
                                            </div>
                                            <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                <span class="font-size-h3 font-weight-boldest">JM</span>
                                            </div>
                                        </div>
                                        <!--end::Pic-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#"
                                               class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">{{ $user->name }}</a>
                                            <span class="text-muted font-weight-bold">{{$user->job_title}}</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::User-->
                                <!--begin::Desc-->
                                <p class="mb-7">

                                    <!--begin::Info-->
                                <div class="mb-7">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{$user->email}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                        <a href="#" class="text-muted text-hover-primary">{{$user->phone}}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                        <span class="text-muted font-weight-bold">{{$user->location}}</span>
                                    </div>
<br>
                                    <a href="{{route('userEdit' , $user)}}" class="btn btn-primary font-weight-bold px-3 font-size-base">Edit User ? {{ $user->name }}</a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Col-->
                @endforeach
            </div>


            <!--begin::Pagination-->
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="d-flex flex-wrap mr-3">
                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-arrow-back icon-xs"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">23</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary active mr-2 my-1">24</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">25</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">26</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">27</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">28</a>
                    <a href="#" class="btn btn-icon btn-sm border-0 btn-hover-primary mr-2 my-1">...</a>
                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-arrow-next icon-xs"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-2 my-1">
                        <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                    </a>
                </div>
                <div class="d-flex align-items-center">
                    <select
                        class="form-control form-control-sm text-primary font-weight-bold mr-4 border-0 bg-light-primary"
                        style="width: 75px;">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="text-muted">Displaying 10 of 230 records</span>
                </div>
            </div>
            <!--end::Pagination-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
