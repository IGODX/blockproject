@extends('layout.app')
@section('content')
    <div class="container" id="main">
        <div class="row">
            <div class="col-3">
            @section('sidebar')
                @foreach ($topics as $topic)
                    <div class="mb-3"><a style="text-decoration: none"
                            href="{{ route('home.index', ['id' => $topic->id]) }}">{{ $topic->title }}</a>
                    </div>
                @endforeach
            @show
        </div>
        <div class="col-1"></div>
        <div class="col-8">
            @foreach ($blocks as $block)
                <div class="mb-5">
                    <h2>{{ $block->title }}</h2>
                    <p>{{ $block->content }}</p>
                    <img src="{{ $block->imagepath }}" alt="{{ $block->imagepath }}">
                </div>
            @endforeach
        </div>
    </div>
@endsection
