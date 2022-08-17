@extends('layouts.master')

@section('title','About')

@section('content')
{{-- @include('component.about') --}}

@foreach ($abouts as $about)

<section class="section padding-bottom-100" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">{{optional($about)->title}}</h2>
                </div>
                <div class="left-text">
                    <p class="text-justify" style="font-size: 16px;">@php echo optional($about)->description; @endphp</p>
                    {{-- <p class="text-justify">Tricot Fashion Ltd is a 100% export oriented knit based garments factory as a sister concern of <a href="http://www.fakirknit.com"> Fakir Knitwears Ltd</a> (Vertical knit composite set up). The was established in 2015 with all the advanced Technology, Latest computerized machinery and specialist technicians. Experts setup the factory with a space of 86000 square feet with high quality machineries from Japan, Germany, Korea and Singapore. It is located ad BSCIC, Fatullah, Narayangonj. The factory is managed and run by a professional group of dedicated specialists and executives with proven track record for custom made services to ensure premium quality. The Management of the factory has got highly experienced entrepreneurs and has a long track record of running successful business in the relevant fields. The factory has grown by offering consumers high quality products and high value branded apparel & every year it exports a large quantity of readymade garments to our European & American customers.</p> --}}
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="{{asset('images/'.optional($about)->picture)}}" class="rounded img-fluid d-block mx-auto" alt="App">
                {{-- <img src="{{asset('assets/images/_PDB0201.JPG')}}" class="rounded img-fluid d-block mx-auto" alt="App"> --}}
            </div>
        </div>
    </div>
</section>
@endforeach

@include('component.certification')

@endsection
