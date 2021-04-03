@extends('frontend.layouts.app')
@section('content')

@include('frontend.layouts.partials.preloader')
@include('frontend.layouts.header')
@include('frontend.layouts.partials.page-header')


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-posts">
                    @foreach ($posts as $post)
                        @php
                            $featured_data = json_decode($post->featured);
                        @endphp
                        <article class="post-single">
                            <div class="post-info">
                                <h2><a href="#">{{ $post->title }}</a></h2>
                                <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
                            </div>

                            @if ($featured_data->type == 'Gallery')
                                <div class="post-media">
                                    <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                                        <ul class="slides">
                                            @foreach ($featured_data->gallery as $single_gallery)
                                            <li>
                                                <img src="{{ URL::to('') }}/media/posts/{{ $single_gallery }}" alt="">
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            @if ($featured_data->type == 'Image')
                                <div class="post-media">
                                    <a href="#">
                                        <img src="{{ URL::to('') }}/media/posts/{{ $featured_data->image }}">
                                    </a>
                                </div>
                            @endif

                            <div class="post-body">
                                {!! Str::of(htmlspecialchars_decode($post ->content))->words(60)  !!}
                                <p><a href="{{ route('single.blog', $post->id) }}" class="btn btn-color btn-sm">Read More</a>
                                </p>
                            </div>
                        </article>
                    @endforeach

                </div>
                <ul class="pagination">
                    <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="ti-arrow-left"></i></span></a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="ti-arrow-right"></i></span></a>
                    </li>
                </ul>
                <!-- end of pagination-->
            </div>
            @include('frontend.layouts.partials.sidebar')
        </div>
        <!-- end of row-->
    </div>
    <!-- end of container-->
</section>

@include('frontend.layouts.footer')
@endsection
