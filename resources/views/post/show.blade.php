@extends('layouts.sterial')

@section('content')
<div class="hero overlay">
    <div class="img-bg rellax">
        <img src="{{ $post->getFirstMediaUrl() }}" alt="{{ $post->meta?->title }}" class="img-fluid"
            style="width: 100%; object-fit: cover;">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 mx-auto text-center">
                <p>By <a href="#">{{ $post->author?->name }}</a> on <a href="#">{{ $post->created_at->format('d M Y')
                        }}</a></p>
                <h1 class="heading" data-aos="fade-up">{{ $post->meta?->title }}</h1>
                <p data-aos="fade-up">{{ $post->meta?->description }}</p>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row" style="display: flex; justify-content: center;">
            <div class="col-12 col-md-8 blog-content pe-5">

                {!! $post->meta?->content !!}

            </div>
        </div>
    </div>
</div>

@endsection