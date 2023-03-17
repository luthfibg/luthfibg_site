@extends('layouts.app')

{{-- @section('hdl')
    @include('components.headline')
@endsection --}}

@section('headline')
    @include('components.headline')
@endsection

@section('content')
    @include('components.about')
    @include('components.services')
@endsection