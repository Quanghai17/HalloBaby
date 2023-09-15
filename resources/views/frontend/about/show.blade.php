@extends('frontend.layouts.default')

@section('content')
{{-- @dd($about); --}}
<section class="page py-4 py-lg-5">
    <div class="container">
        <div class="row content-with-sidebar">
            <div class="col-12 col-lg-8  page-detail">
                <div class="pb-2">
                    <h1 class="title">{{$about->translate()->title}}</h1>

                </div>
                <div>
                    <p style="text-align: center;">
                    {!!$about->translate()->body!!}
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-4 pt-4 pt-lg-0 sidebar">
                <div class="row">
                    <div class="col-12">
                        <div id="sticky-slidebar" class="pb-4">
                            <div class="quangcao text-center py-4" style="padding-bottom: 1rem !important;">
                                <p class="text-white mb-0 pt-3" style="padding-top: 0rem !important;">{{__('Products')}}</p>
                            </div>
                            <div>
                                @foreach ($products as $product)
                                    <div class="sp d-flex pt-4 milk-two" style="border-top: 1px solid #dbdbdb; padding-bottom: 5px">
                                        <div>
                                            <div class="bg-img text-center hotprod py-3">
                                                <a href="{{ route('services.show', $product->slug) }}">
                                                    <img class="lazy"
                                                        data-original="{{ Voyager::image($product->image) }}"
                                                        alt="PureLac Royal Plus Stage 2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="motasp milk-one pl-3">
                                            <a href="{{ route('services.show', $product->slug) }}">
                                                <h4 class="name-sp m-0 font-weight-bold font-16 pb-1">{{$product->translate()->title}}</h4>
                                            </a>
                                            <p class="m-0 pb-2" >{{ $product->translate()->desc }}</p>
                                            @if( $product->promotional != "" )
                                                <p class="font-weight-bold text-red mb-4">{{__('Promotional price')}}:
                                                    <b>{{number_format($product->promotional)}} VND</b>
                                                </p>
                                                <p class="font-weight-bold mb-4">{{__('Price')}}:
                                                    <b style="text-decoration: line-through; color: #2a8a2a;">{{number_format($product->price)}} VND</b>
                                                </p>
                                            @else
                                                <p class="font-weight-bold  mb-4">{{__('Price')}}:
                                                    <b style="color: #2a8a2a;">{{number_format($product->price)}} VND</b>
                                                </p>
                                            @endif

                                            <input type="hidden" value="2" name="id">
                                            <button type="submit" class="py-2 px-4 font-weight-bold"><a style="color: #fff" href="{{ route('services.show', $product->slug) }}">{{__('Buy now')}}</a></button>
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