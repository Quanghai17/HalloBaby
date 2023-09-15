@extends('frontend.layouts.default')

@section('content')
    <main class="site-blogs">
        <section class="blogs-header">
            <div class="container">
                <div class="heading">
                    <h1 class="title" style="text-transform: capitalize">{{ __('ARTICLE - NEWS') }}</h1>
                    <div class="sub-title">
                    </div>
                </div>
                <div class="grid grid--three-columns grid--doubling blog-header-slide">
                    @foreach ($posts_hot as $post)
                        <div class="grid__column">
                            <div class="blog-post blog-post--grid">
                                <div class="thumbnail">
                                    <a href="{{ route('posts.show', $post->slug) }}">
                                        <img class="lazyload"
                                            data-src="{{ Voyager::image($post->thumbnail('medium', 'image')) }}"
                                            alt="{{ $post->title }}">
                                    </a>
                                </div>
                                <h3 class="km-name pb-2"><a href="{{ route('posts.show', $post->slug) }}">{{ $post->translate()->title }}</a>
                                </h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <section class="blogs-content">
            <div class="container container--medium">
                <div class="blogs-container">
                    <div class="blogs-list eight-twelfths">
                        @foreach ($posts as $post)
                            <div class="blog-post">
                                <div class="thumbnail">
                                    <a href="{{ route('posts.show', $post->slug) }}">
                                        <img class="lazyload"
                                            data-src="{{ Voyager::image($post->thumbnail('medium', 'image')) }}"
                                            alt="{{ $post->translate()->title }}">
                                    </a>
                                </div>
                                <h3 class="km-name pb-2"><a
                                        href="{{ route('posts.show', $post->slug) }}">{{ $post->translate()->title }}</a>
                                </h3>
                                <p
                                    style="
                                    display: -webkit-box;
                                    -webkit-line-clamp: 2;
                                    -webkit-box-orient: vertical;  
                                    overflow: hidden;
                                  ">
                                    {{ $post->translate()->excerpt }}</p>
                                <a href="{{ route('posts.show', $post->slug) }}" class="btn"
                                    style="background-color: #ffc107; color: #ffffff;">
                                    {{ __('READ') }}
                                </a>
                            </div>
                        @endforeach
                        <div class="pagination">
                            {{ $posts->links('frontend.layouts.partials.paginate') }}
                        </div>
                    </div>
                    <div class="blogs-sidebar four-twelfths">
                        <div class="disable-max-577">
                            <div class="blogs-sidebar__heading" style="margin-bottom: -7px;">
                                <div class="headingCustom">
                                    {{ __('Search') }}
                                </div>
                            </div>
                        </div>
                        <div class="blogs-sidebar__list disable-max-577" style="margin-bottom: 20px">
                            <div class="send-email" style="background: #302e29; border-radius: 10px;padding: 3px 3px;">
                                <form action="{{ route('search') }}" method="get">                                   
                                    <div class="send-email__wrapper">
                                        <input type="text" name="key"
                                            placeholder="{{__('Key word')}}...">
                                        <button class="btn btn--primary" type="submit" style="background-color: #ffc107;">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="disable-max-577">
                            <div class="blogs-sidebar__heading">
                                <div class="headingCustom">
                                    {{ __('The article is widely read') }}
                                </div>
                            </div>
                        </div>
                        <div class="blogs-sidebar__list disable-max-577">
                            @foreach ($posts_rate as $post)
                                <div class="item">
                                    <div class="thumbnail">
                                        <a href="{{ route('posts.show', $post->slug) }}">
                                            <img class="lazyload"
                                                data-src="{{ Voyager::image($post->thumbnail('medium', 'image')) }}"
                                                alt="{{ $post->translate()->title }}">
                                        </a>
                                    </div>
                                    <div class="title">
                                        <a style="color: #000" href="{{ route('posts.show', $post->slug) }}">
                                            {{ $post->translate()->title }}
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('style')
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;900&amp;family=Roboto:wght@400;500;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"href="{{ asset('assets/assets.comem.vn/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assets.comem.vn/css/maind877.css') }}">
@endsection
