@extends('Front/Layouts/master')
@section('content')
    @section('section')
        @include('Front/Layouts/section_slide')
    @endsection
    @foreach($search_cr as $s)
        <section class="section_contact">
            <div class="sec_head wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.500s">
                <div class="container">
                    <h2>FullName: {{$s->fullName}}</h2>
                    <p>Nationality: {{$s->Nationality}}</p>
                    <p>Description: {{$s->description}}</p>
                </div>
            </div>
        </section>
    @endforeach

@endsection
