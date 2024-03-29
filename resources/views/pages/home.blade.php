@extends('layouts.app')

{{-- @section('hdl')
    @include('components.headline')
@endsection --}}

@section('headline')
    @include('components.headline')
@endsection

@section('content')
    @include('components.about')
    @include('components.education')
    @include('components.skills')
    @include('components.services')
    @include('layouts.portfolio_plain')
    @include('components.messier_3d')
    @include('components.testimonials')
    @include('components.contact')
@endsection