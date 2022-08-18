@extends('layouts.master')

@section('title','Mission & Vission')

@section('content')

{{-- @include('component.missionVission') --}}

<header class="py-5 bg-image-full" style="background-image: url('{{asset('assets/images/6.jpg')}}')">
    <div class="text-center my-5">
        <img class="img-fluid mb-4" style="height: 150px;width: 150px; border-radius:50%;" src="{{asset('assets/images/6.jpg')}}" alt="..." />
        <h1 class="text-white fs-3 fw-bolder">Mission & Vission</h1>
        <p class="text-white-50 mb-0">Landing Page Template</p>
    </div>
</header>

@foreach ($missions as $mission)

<section class="section padding-top-70 padding-bottom-0" id="sustainability">

    <div class="container">
        <div class="left-heading">
            <h2 class="section-title">{{optional($mission)->title}}</h2>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="{{asset('images/'.optional($mission)->picture)}}" class="rounded img-fluid d-block mx-auto" alt="Picture">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-text">
                    <p class="text-justify">
                        @php
                        echo optional($mission)->description;
                        @endphp
                    </p>
                    {{-- <p class="text-justify">The vision of Tricot Fashion Ltd is not only to flourish in Bangladesh but also held up itself to be recognizable in the global stage. Tricot Fashion Ltd. Is already exporting its product is Poland, Germany, Japan, France and Portugal. It is also exploring new business opportunities in Latin America.
                        Tricot Fashion Ltd. Believes in bringing perfection in its products by maintaining excellent quality and brand development. Tricot Fashion Ltd. Promotes the best use of human talent and equal opportunities in the most convenient working condition.
                        The prime focus of Tricot Fashion Ltd. Is to meet the buyer’s requirement accurately and punctually. Its major concern is to provide the best quality product which will accomplish full satisfaction of the buyer with no issue of complain. For this purpose, it has set up its own inspection procedure and therefore the best is served.
                    </p> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>

</section>
@endforeach


@endsection
