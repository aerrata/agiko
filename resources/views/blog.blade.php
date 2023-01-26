@extends('layouts.sterial')

@section('content')
<div class="hero overlay">

		<!-- <div class="img-bg rellax"> -->
			
        <img src="https://images.unsplash.com/photo-1619179834700-7a886aac80cc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80" alt="Image" class="img-fluid"
            style="width: 100%;">
		<!-- </div> -->
		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-6 mx-auto text-center">

					<h1 class="heading" data-aos="fade-up">Blog</h1>
					<p class="mb-4" data-aos="fade-up">Stay informed with our regularly updated blog and news page.</p>
				</div>
			</div>
		</div>

		
	</div>



	<div class="section">
		<div class="container">

			
			<div class="row align-items-stretch">
            @foreach ($posts as $post)
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="media-entry">
                    <a href="{{ route('post.show', $post) }}" style="height: 250px;">
                        <img src="{{ $post->getFirstMediaUrl() }}" alt="{{ $post->meta?->title }}" class="img-fluid"
                            style="object-fit: cover; height: 100%; width: 100%;">
                    </a>
                    <div class="bg-white m-body">
                        <span class="date">{{ $post->created_at->format('d M Y') }}</span>
                        <h3><a href="{{ route('post.show', $post) }}">{{ $post->meta?->title }}</a></h3>
                        <p>{{ $post->meta?->description }}</p>

                        <a href="{{ route('post.show', $post) }}" class="more d-flex align-items-center float-start">
                            <span class="label">Read More</span>
                            <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $posts->links() }}
				
			</div>	
		</div>		
	</div>
@endsection
