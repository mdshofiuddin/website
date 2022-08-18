@extends('layouts.master')

@section('title','Mission & Vission')

@section('content')
<header class="py-5 bg-image-full" style="background-image: url('{{asset('assets/images/7.jpg')}}')">
    <div class="text-center my-5">
        <img class="img-fluid mb-4" style="height: 150px;width: 150px; border-radius:50%;" src="{{asset('assets/images/7.jpg')}}" alt="..." />
        <h1 class="text-white fs-3 fw-bolder">Working Process</h1>
        <p class="text-white-50 mb-0">Landing Page Template</p>
    </div>
</header>
@include('component.workingProcess')

@endsection
