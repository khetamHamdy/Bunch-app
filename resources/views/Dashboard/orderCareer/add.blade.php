@extends('Dashboard.Layouts.master')
@section('content')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom card-transparent">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first"
                         data-wizard-clickable="true">

                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">
                                        <!--begin::Wizard Form-->
                                        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                                        <form class="form" action="{{route('viewOrderC_store' , $career)}}" method="post">
                                            @csrf
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="my-5 step" data-wizard-type="step-content"
                                                         data-wizard-state="current">
                                                        <h5 class="text-dark font-weight-bold mb-10">User's Profile
                                                            Details:</h5>

                                                        <div class="col-xl-6">
                                                            <!--begin::Select-->
                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <select name="status"
                                                                        class="form-control form-control-solid form-control-lg">
                                                                    @foreach($statusData as $statusKey => $status)
                                                                        <option value="{{$statusKey}}">{{$status}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <!--end::Select-->
                                                        </div>

                                                    </div>
                                                    <!--end::Wizard Step 1-->


                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success font-weight-bolder px-9 py-4">
                                                Submit
                                            </button>
                                        </form>
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
