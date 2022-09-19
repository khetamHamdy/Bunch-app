@extends('Dashboard.Layouts.master')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->

                @foreach($datas as $data)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
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
                                <!--begin::Desc-->
                                <p class="mb-7">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Title </a>
                                    <br>
                                    {{ $data->title }}</p>
                                <!--end::Desc-->
                                <!--begin::Desc-->
                                <p class="mb-7">
                                    <a href="#" class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Description </a>
                                    <br>
                                    {{ $data->description }}</p>
                                <!--end::Desc-->


                                <form action="{{route('homeJoinAsDelete' , $data)}}" method="POST">
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
                                <a href="{{route('homeJoinAsEdit' ,$data )}}"
                                   class="btn btn-block btn-sm btn-light-success font-weight-bolder text-uppercase py-4">update
                                    </a>
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
