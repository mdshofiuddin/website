

@extends('layouts.master')
@section('title','Home')
@section('content')
{{-- @include('component.topSlider') --}}
@include('component.about')
@include('component.missionVission')
@include('component.workingProcess')
@include('component.management')
@include('component.counter')
{{-- @include('component.othersFeatures') --}}
@include('component.certification')

{{-- @include('component.destination') --}}
{{-- @include('component.footer') --}}

@endsection
