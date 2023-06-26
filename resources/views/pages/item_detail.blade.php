@extends('layouts.dashboard_layout')
@section('content')
    <section class="df">
        <h2 class="mb-5">{{ __('Item Details of (#'. $item->id).')' }}</h2>
        <h4 class="mb-3">{{ $item->name }}</h2>
        <p class="mb-3">{{ $item->subname }}</p>
        <p class="mb-3">{{ $item->status }}</p>
        <p class="mb-3">{{ $item->description }}</p>
        <div class="mb-3">
            @foreach($item->tags as $tag)
                    <span class="badge rounded-pill text-bg-info me-1 mb-1 badge-tag">{{ $tag->name }}</span>
            @endforeach
        </div>
    </section>
@endsection