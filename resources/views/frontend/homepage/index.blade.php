@extends('frontend.layouts.default')

@section('content')
    <div class="container-fluid mb-0">
        <div class="row banner">
            <div id="carouselExampleIndicators-md" class="carousel slide h-100 w-100 shadow-none d-none d-sm-block"
                 data-ride="carousel">
                <div class="carousel-inner h-100" role="listbox">
                    @if(count($homeBanners)>0)
                        @foreach($homeBanners as $key => $banner)
                            <div class="carousel-item @if($key == 0) active @endif">
                                <div class="h-100 position-relative">
                                    <img class="w-100" src="{{Voyager::image($banner->thumbnail('cropped', 'image'))}}"
                                        alt="{{ $banner->title }}"/>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators-md" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators-md" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="carouselExampleIndicators-xs" class="carousel slide h-100 w-100 shadow-none d-sm-none"
                 data-ride="carousel">
                <div class="carousel-inner h-100" role="listbox">
                    @if(count($homeBanners)>0)
                        @foreach($homeBanners as $key => $banner)
                            <div class="carousel-item @if($key == 0) active @endif">
                                <div class="h-100 position-relative">
                                    <img class="w-100" src="{{Voyager::image($banner->thumbnail('cropped', 'image'))}}"
                                        alt="banner"/>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators-xs" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators-xs" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid problem py-4 py-lg-5">
        <div class="container">
            <div class="row">
                @foreach($camket as $key => $ck)
                    @if($key%2 != 0)
                        <div class="col-12">
                            <div class="row pt-5">
                                <div class="col-12 col-md-6 text-center order-1 order-md-0 text-md-left">
                                    <h3 class="title mb-5 font-weight-bold">{{$ck->translate()->title}} </h3>
                                    @if( $ck->translate()->field1 != "" )
                                        <a href="{{ $ck->link1 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon1!='' ? Voyager::image($ck->icon1) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon1!='' ? Voyager::image($ck->icon1) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field1}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field2 != "" )
                                        <a href="{{ $ck->link2 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon2!='' ? Voyager::image($ck->icon2) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon2!='' ? Voyager::image($ck->icon2) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field2}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field3 != "" )
                                        <a href="{{ $ck->link3 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon3!='' ? Voyager::image($ck->icon3) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon3!='' ? Voyager::image($ck->icon3) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field3}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field4 != "" )
                                        <a href="{{ $ck->link4 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 
                                                    <span class="d-flex align-items-center justify-content-center icon-prb">
                                                        <img class="lazy" data-original="{{ $ck->icon4!='' ? Voyager::image($ck->icon4) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon4!='' ? Voyager::image($ck->icon4) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                    </span>
                                               
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field4}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field5 != "" )
                                        <a href="{{ $ck->link5 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                
                                                    <span class="d-flex align-items-center justify-content-center icon-prb">
                                                        <img class="lazy" data-original="{{ $ck->icon5!='' ? Voyager::image($ck->icon5) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon5!='' ? Voyager::image($ck->icon5) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                    </span>
                                                
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field5}}</span>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                                <div class="col-12 col-md-6 text-center order-0 order-md-1 pb-5 pt-md-5 pb-md-0">
                                    <img class="lazy" data-original="{{ Voyager::image($ck->image) }}"
                                         alt="{{$ck->title}}" data-aos="fade-up" data-aos-duration="2000"
                                         style="max-width: 337px;">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-md-6  mb-5 mb-md-0 text-center">
                                    <img data-original="{{ Voyager::image($ck->image) }}" class="lazy"
                                         alt="{{$ck->translate()->title}}" data-aos="fade-up" data-aos-duration="1000"
                                         style="max-width: 337px;">
                                </div>
                                <div class="col-12 text-center text-md-left col-md-6">
                                    <h3 class="title font-weight-bold mb-5">{{$ck->translate()->title}} </h3>
                                    @if( $ck->translate()->field1 != "" )
                                        <a href="{{ $ck->link1 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon1!='' ? Voyager::image($ck->icon1) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon1!='' ? Voyager::image($ck->icon1) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field1}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field2 != "" )
                                        <a href="{{ $ck->link2 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon2!='' ? Voyager::image($ck->icon2) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon2!='' ? Voyager::image($ck->icon2) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field2}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field3 != "" )
                                        <a href="{{ $ck->link3 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon3!='' ? Voyager::image($ck->icon3) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon3!='' ? Voyager::image($ck->icon3) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field3}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field4 != "" )
                                        <a href="{{ $ck->link4 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon4!='' ? Voyager::image($ck->icon4) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon4!='' ? Voyager::image($ck->icon4) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field4}}</span>
                                            </div>
                                        </a>
                                    @endif
                                    @if( $ck->translate()->field5 != "" )
                                        <a href="{{ $ck->link5 }}">
                                            <div class="my-4 prob aos-init aos-animate" data-aos="fade-right"
                                                 data-aos-duration="1000">
                                                 <span class="d-flex align-items-center justify-content-center icon-prb">
                                                    <img class="lazy" data-original="{{ $ck->icon5!='' ? Voyager::image($ck->icon5) : asset("images/cam-kết-chất-lượng1.png") }}" alt="Icon problem" src="{{ $ck->icon5!='' ? Voyager::image($ck->icon5) : asset("images/cam-kết-chất-lượng1.png") }}" style="">
                                                </span>
                                                <span class="prob-text d-flex align-items-center text-left pl-5 font-weight-bold">{{$ck->translate()->field5}}</span>
                                            </div>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="container-fluid py-4 py-lg-5 product" id="list-products">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center bottom-40">
                    <h3 class="title font-weight-bold text-uppercase"
                        id="purelac">{{__('HALLO BABY POWDERED MILK - GIVE FULL LOVE')}}</h3>
                </div>
                <div class="col-12 py-0">
                    <div class="row milk">
                        @if(count($services)>0)
                            @foreach ($services as $service)
                                <div class="col-12 col-md-3 pb-5 py-md-0 text-center milk-two" data-aos="zoom-in"
                                    data-aos-duration="700">
                                    <div class="bg-img img-product">
                                        <a href="{{ route('services.show', $service->slug) }}" class="d-block">
                                            <img class="lazy"
                                                data-original="{{ Voyager::image($service->image) }}"
                                                alt="{{ $service->translate()->title }}">
                                        </a>
                                    </div>
                                    <div class="text-milk pt-4">
                                        <a href="{{ route('services.show', $service->slug) }}">
                                            <h2>{{ $service->translate()->title }}</h2>
                                        </a>
                                        <p class="m-0 py-2">{{ $service->translate()->desc }}</p>
                                        @if( $service->promotional != "" )
                                            <p class="font-weight-bold text-red mb-4">{{__('Promotional price')}}:
                                                <b>{{number_format($service->promotional)}} VND</b>
                                            </p>
                                            <p class="font-weight-bold mb-4">{{__('Price')}}:
                                                <b style="text-decoration: line-through; color: #2a8a2a;">{{number_format($service->price)}} VND</b>
                                            </p>
                                        @else
                                            <p class="font-weight-bold  mb-4">{{__('Price')}}:
                                                <b style="color: #2a8a2a;">{{number_format($service->price)}} VND</b>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(count($promotionBanners)>0)
        <div class="container-fluid py-4 py-lg-5 vocher" id="vocher" style="background-color: #e9e9e9;">
            <div class="container">
                <div class="row">
                    {{-- <div class="col-12 text-center bottom-40 head">
                        <h3 class="title font-weight-bold text-uppercase" id="purelac">{{__('PROMOTIONS')}}</h3>
                    </div> --}}
                    <div class="col-12">
                        {{-- <div class="row">
                            @foreach($promotionBanners as $key => $promotion)
                                <div class="col">
                                    <a href="{{ $promotion->link }}">
                                        <img width="100%" src="{{Voyager::image($promotion->image)}}"
                                             alt="{{ $promotion->title }}">
                                    </a>
                                </div>
                            @endforeach
                        </div> --}}
                        <div class="row banner">
                            <div id="carouselExampleIndicators-md" class="carousel slide h-100 w-100 shadow-none d-none d-sm-block"
                                 data-ride="carousel">
                                <div class="carousel-inner h-100" role="listbox">
                                    @foreach($promotionBanners as $key => $promotion)
                                        <div class="carousel-item @if($key == 0) active @endif">
                                            <div class="h-100 position-relative" style="text-align: center">
                                                <img class="w-100" src="{{Voyager::image($promotion->image)}}"
                                                     alt="{{ $promotion->title }}"/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators-md" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators-md" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> --}}
                            </div>
                            <div id="carouselExampleIndicators-xs" class="carousel slide h-100 w-100 shadow-none d-sm-none"
                                 data-ride="carousel">
                                <div class="carousel-inner h-100" role="listbox">
                                    @foreach($promotionBanners as $key => $promotion)
                                        <div class="carousel-item @if($key == 0) active @endif">
                                            <div class="h-100 position-relative">
                                                <img class="w-100" src="{{Voyager::image($promotion->image)}}"
                                                     alt="banner"/>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators-xs" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators-xs" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <section class="home-section blog-category page-section py-4 py-lg-5">
        <div class="container">
            <div class="row content-with-sidebar">
                <div class="col-12 col-lg-8">
                    <div class="pb-4" style="background-color: #ffd44c;padding-bottom: 0.2rem !important;">
                        <h2 style="padding: 10px 20px 0px 20px;font-weight: 500;color:#212529;"
                            class="title">{{__('ARTICLE - NEWS')}}</h2>
                    </div>
                    @foreach ($posts as $post)
                        <div class="row py-3">
                            <div class="col-12 col-md-5 pb-3">
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <img src="{{Voyager::image($post->thumbnail('medium', 'image'))}}"
                                         alt="{{$post->translate()->title}}">
                                </a>
                            </div>
                            <div class="col-12 col-md-7">
                                <h3 class="km-name pb-2"><a
                                            href="{{ route('posts.show', $post->slug) }}">{{$post->translate()->title}}</a>
                                </h3>
                                <p style="
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;  
                            overflow: hidden;
                          ">{{$post->translate()->excerpt}}</p>
                                <button class="py-1 px-3 btn-km"><a
                                            href="{{ route('posts.show', $post->slug) }}">{{__('READ')}}</a></button>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="col-12 col-lg-4 pt-4 pt-lg-0 sidebar">
                    <div class="row">
                        <div class="col-12">
                            <div id="sticky-slidebar" class="pb-4">
                                <div class="pb-4" style="background-color: #ffd44c;padding-bottom: 0.2rem !important;">
                                    <h2 style="padding: 10px 20px 0px 20px;font-size: 23px;font-weight: 500;color:#212529;"
                                        class="title">{{__('NOTIFICATION')}}</h2>
                                </div>
                                <div>
                                    @foreach ($posts_promotion as $post)
                                        <div class="sp d-flex pt-4 milk-two">
                                            <div>
                                                <div class="bg-img text-center hotprod">
                                                    <a href="{{ route('posts.show', $post->slug) }}">
                                                        <img src="{{Voyager::image($post->thumbnail('medium', 'image'))}}"
                                                             alt="{{$post->translate()->title}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="motasp milk-one pl-3">
                                                <a href="{{ route('posts.show', $post->slug) }}">
                                                    <h5 class="name-sp m-0 pb-1"
                                                        style="font-weight: 600;">{{$post->translate()->title}}</h5>
                                                </a>
                                                <p style="display: -webkit-box; -webkit-line-clamp: 2;  -webkit-box-orient: vertical;    overflow: hidden; ">{{$post->translate()->excerpt}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
