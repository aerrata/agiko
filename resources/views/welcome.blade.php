@extends('layouts.sterial')

@section('content')
<div class="hero overlay">

    <!-- <div class="img-bg rellax"> -->
        <img src="https://images.unsplash.com/photo-1619179834700-7a886aac80cc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1769&q=80" alt="Image" class="img-fluid"
            style="width: 100%;">
    <!-- </div> -->

    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-5">

                <h1 class="heading" data-aos="fade-up">Alumni Graduan Institusi Korea Kebangsaan</h1>
                <p class="mb-5" data-aos="fade-up">Join our creative network of AGIKO graduates</p>

                {{-- <div data-aos="fade-up">
                    <a href="https://www.youtube.com/watch?v=5n-e6lOhVq0"
                        class="play-button align-items-center d-flex glightbox3">
                        <span class="icon-button me-3">
                            <span class="icon-play"></span>
                        </span>
                        <span class="caption">Watch Video</span>
                    </a>
                </div> --}}
            </div>


        </div>
    </div>


</div>



<div class="section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1551879313-d5cf0505b0ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1752&q=80" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
            <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">The Idea</h2>

                <p data-aos="fade-up" data-aos-delay="200">
                    Malaysia’s Look East Policy was initiated in 1984 and
                    still relevant to the current socio-economic climate in line with the implementation of the
                    New Southern Policy launched by the South Korean government in 2017.
                    The idea of setting up the Malaysia-Korea Technical Institute (MKTI) triggered by
                    discussions with various parties including academicians within AGIKO.
                </p>

                <p data-aos="fade-up" data-aos-delay="300">
                    Currently, there is no specific technical institution
                    in Malaysia that embraces the South
                    Korean technology and positive work culture produces skilled and semi-skilled manpower to
                    meet the demands of technology-based industry players.</p>

                <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read
                        more</a></p>
            </div>
        </div>
    </div>
</div>


<div class="section service-section-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="heading-content" data-aos="fade-up">
                    <h2>Our <span class="d-block">Objectives</span></h2>
                    <p>Our establishment objectives</p>
                    <!-- <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View
                            All</a></p> -->
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-1">
                            <span class="icon">
                                <img src="sterial/images/svg/01.svg" alt="Image" class="img-fluid">
                            </span>
                            <div>
                                <h3>Look East Policy</h3>
                                <p>To sustain the continuity of Look East Policy to South Korea</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-1">
                            <span class="icon">
                                <img src="sterial/images/svg/02.svg" alt="Image" class="img-fluid">
                            </span>
                            <div>
                                <h3>Unite</h3>
                                <p>As the platform for Korean Institutional Graduates to unite</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-1">
                            <span class="icon">
                                <img src="sterial/images/svg/03.svg" alt="Image" class="img-fluid">
                            </span>
                            <div>
                                <h3>Economy Boosts</h3>
                                <p>To contribute to the development of economic, social and wellbeing based on the
                                    motto of "Bersatu untuk Berkhidmat" or "United to Serve"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section section-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row align-items-center justify-content-between  mb-5">
            <div class="col-lg-5" data-aos="fade-up">
                <h2 class="heading mb-3">Discover Hundred of Travel Destinations</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>
            </div>
            <div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
                <div id="destination-controls">
                    <span class="prev me-3" data-controls="prev">
                        <span class="icon-chevron-left"></span>

                    </span>
                    <span class="next" data-controls="next">
                        <span class="icon-chevron-right"></span>

                    </span>
                </div>
            </div>
        </div>

    </div>

    <div class="destination-slider-wrap">
        <div class="destination-slider">
            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-1.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$430</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-2.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$560</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-3.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$490</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-4.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$490</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>


            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-5.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$430</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-6.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$560</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-7.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$490</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="sterial/images/img-4.jpg" alt="Image" class="img-fluid">
                    {{-- <div class="price">$490</div> --}}
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
                <img src="sterial/images/img-1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                <h2 class="heading mb-4">Sweet Memories Come To Life Again</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                    a large language ocean.</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It
                    is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p class="my-4" data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary">Read
                        more</a></p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="section bg-light">




    <h2 class="heading mb-5 text-center">Testimonials</h2>

    <div class="text-center mb-5">
        <div id="prevnext-testimonial">
            <span class="prev me-3" data-controls="prev">
                <span class="icon-chevron-left"></span>

            </span>
            <span class="next" data-controls="next">
                <span class="icon-chevron-right"></span>

            </span>
        </div>
    </div>

    <div class="wide-slider-testimonial-wrap">
        <div class="wide-slider-testimonial">
            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="sterial/images/person_1.jpg" alt="Free template by TemplateUX">
                        <h3>John Doe</h3>
                        <p class="position mb-5">CEO, Founder</p>
                    </div>
                    <p>
                    <div class="quote">&ldquo;</div>
                    &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                    Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="sterial/images/person_2.jpg" alt="Free template by TemplateUX">
                        <h3>James Woodland</h3>
                        <p class="position mb-5">Designer at Facebook</p>
                    </div>
                    <p>
                    <div class="quote">&ldquo;</div>
                    &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the
                    skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her
                    own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her
                    way.&rdquo;</p>

                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="sterial/images/person_3.jpg" alt="Free template by TemplateUX">
                        <h3>Rob Smith</h3>
                        <p class="position mb-5">Product Designer at Twitter</p>
                    </div>
                    <p>
                    <div class="quote">&ldquo;</div>
                    &ldquo;A small river named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                    mouth.&rdquo;</p>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="sterial/images/person_1.jpg" alt="Free template by TemplateUX">
                        <h3>John Doe</h3>
                        <p class="position mb-5">CEO, Founder</p>
                    </div>
                    <p>
                    <div class="quote">&ldquo;</div>
                    &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                    there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                    Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="sterial/images/person_2.jpg" alt="Free template by TemplateUX">
                        <h3>James Woodland</h3>
                        <p class="position mb-5">Designer at Facebook</p>
                    </div>
                    <p>
                    <div class="quote">&ldquo;</div>
                    &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the
                    skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her
                    own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her
                    way.&rdquo;</p>

                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="sterial/images/person_3.jpg" alt="Free template by TemplateUX">
                        <h3>Rob Smith</h3>
                        <p class="position mb-5">Product Designer at Twitter</p>
                    </div>
                    <p>
                    <div class="quote">&ldquo;</div>
                    &ldquo;A small river named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your
                    mouth.&rdquo;</p>
                </blockquote>
            </div>
        </div>
    </div>



</div> -->

<div class="section">

    <h2 class="heading mb-5 text-center">AGIKO Engagements</h2>

    @php
    $data = [
        [
            'id' => 1,
            'title' => '15 April 2019',
            'description' => 'Courtesy visit to Datuk Muhd Khair Razman bin Mohamed Annuar, Director General of Manpower Department, Ministry of Human Resources.',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'left'
        ],
        [
            'id' => 2,
            'title' => '15 May 2019',
            'description' => 'Courtesy visit to Datuk Seri Borhan bin Dolah, Director General of Malaysia’s Public Service.',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'right'
        ],
        [
            'id' => 3,
            'title' => '11 June 2019',
            'description' => 'Courtesy visit to The Most Honourable Tun Dr. Mahathir Mohamad, Prime Minister of Malaysia.',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'left'
        ],
        [
            'id' => 4,
            'title' => '13 June 2019',
            'description' => ' News coverage of the AGIKO’s courtesy visit to The Most Honourable Tun Dr. Mahathir Mohamad, Perdana Menteri Malaysia published in South Korea’s newspaper, Hankook',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'right'
        ],
        [
            'id' => 5,
            'title' => '24 June 2019',
            'description' => 'Courtesy visit to Datuk Seri Rina Mohd Harun, Minister of Rural Development.',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'left'
        ],
        [
            'id' => 6,
            'title' => '26 February 2020',
            'description' => 'Korean Language Introductory Class at Kolej Kemahiran Tinggi MARA (KKTM) / MARA High Skills College in Petaling Jaya.',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'right'
        ],
        [
            'id' => 7,
            'title' => '4 May 2021',
            'description' => 'Hybrid talkshow "Annyeong Korea Part-3".',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'left'
        ],
        [
            'id' => 8,
            'title' => '22 June 2021',
            'description' => 'Hybrid talkshow "MEET US" with Education Counselor at Malaysian Embassy in South Korea.',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'right'
        ],
        [
            'id' => 9,
            'title' => '12 November 2021',
            'description' => 'Korean education fair, "Study in Korea" 2021 at Quill City Mall, Kuala Lumpur.',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'left'
        ],
        [
            'id' => 10,
            'title' => '17 January 2022',
            'description' => 'Teh Tarik Session with Samsung Malaysia Electronics (SME) Sdn Bhd and Universiti Kuala Lumpur (UniKL).',
            'images' => [
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.02 AM.png')],
                ['url' => asset('sterial/img/Screenshot 2023-01-20 at 10.38.13 AM.png')]
            ],
            'align' => 'right'
        ],
    ];
    @endphp
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 offset-md-6 mb-4 mb-lg-0 order-lg-2 aos-init aos-animate" data-aos="fade-up">
                <ul class="steps steps-vertical">
                    @foreach($data as $item)
                    <li class="step-item">
                        <div class="card {{ $item['align'] }}" style="overflow: hidden;">
                            <div id="carousel-controls-{{ $item['id'] }}" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($item['images'] as $index => $image)
                                    <div class="carousel-item @if($loop->first) active @endif">
                                        <img class="d-block w-100" alt="" src="{{ $image['url'] }}">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carousel-controls-{{ $item['id'] }}" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-controls-{{ $item['id'] }}" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                            
                            <div class="card-body">
                                <div class="h5 mb-1">{{ $item['title'] }}</div>
                                <div class="text-muted">{{ $item['description'] }}</div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</div>

<div class="section">
    <div class="container">

        <div class="row">
            <div class="col-12" data-aos="fade-up" data-aos-delay="0">
                <h2 class="heading mb-5">Recent Posts</h2>
            </div>
        </div>
        <div class="row align-items-stretch">
            @foreach ($posts as $post)
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
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
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="https://images.unsplash.com/photo-1596883313954-b67579fa3f17?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">

                <h2 class="heading mb-5">Frequently Asked <br> Questions</h2>

                <div class="custom-accordion" id="accordion_1">
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How
                                to download and register?</button>
                        </h2>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                Far far away, behind the word mountains, far from the countries Vokalia and
                                Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                at the coast of the Semantics, a large language ocean.
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How
                                to create your paypal account?</button>
                        </h2>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                A small river named Duden flows by their place and supplies it with the necessary
                                regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                into your mouth.
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How
                                to link your paypal and bank account?</button>
                        </h2>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                When she reached the first hills of the Italic Mountains, she had a last view back
                                on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and
                                the subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                cheek, then she continued her way.
                            </div>
                        </div>

                    </div> <!-- .accordion-item -->


                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">We
                                are better than others?</button>
                        </h2>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                When she reached the first hills of the Italic Mountains, she had a last view back
                                on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and
                                the subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                cheek, then she continued her way.
                            </div>
                        </div>

                    </div> <!-- .accordion-item -->

                </div>
            </div>
        </div>
    </div>
</div>



<div class="py-5 bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mb-3 mb-lg-0 text-lg-start">
                <h3 class="text-white m-0">Join our creative network of AGIKO graduates</h3>
            </div>
            <!-- <div class="col-lg-5 text-center text-lg-end">
                <a href="#" class="btn btn-outline-white">Get started</a>
            </div> -->
        </div>
    </div>
</div>

@endsection

@push('style')
<style>
    .left {
        transform: translate(-107%);
    }

    
</style>
@endpush