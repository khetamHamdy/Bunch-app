@extends('auth.layouts')
@section('content')
    <!--begin::Login Sign up form-->
    <div class="login-signin">
        <div class="mb-20">
            <h3>Sign Up</h3>
            <p class="opacity-60">Enter your details to create your account</p>
        </div>
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
        <form class="form text-center" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="text" placeholder="Fullname" name="name"/>
            </div>
            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="text" placeholder="Email" name="email" autocomplete="off"/>
            </div>

            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="text" placeholder="location" name="location"/>
            </div>

            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="text" placeholder="phone" name="phone"/>
            </div>
            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="text" placeholder="Job Title" name="job_title"/>
            </div>

            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="file" placeholder="Image" name="image" autocomplete="off"/>
            </div>
            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="password" placeholder="Password" name="password"/>
            </div>
            <div class="form-group">
                <input
                    class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8"
                    type="password" placeholder="Confirm Password" name="password_confirmation"/>
            </div>
            <div class="form-group">
                <button type="submit"
                        class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2">Sign Up
                </button>
                <button id="kt_login_signup_cancel"
                        class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2">
                    <a href="{{route('login')}}" id="kt_login_signup" class="text-white font-weight-bold">Sign In</a>
                </button>
            </div>
        </form>
    </div>
    <!--end::Login Sign up form-->
@endsection
