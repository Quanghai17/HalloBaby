@extends('frontend.layouts.default')

@section('content')
    <div class="container">
        <div class="row cart top bottom">
            <div class="col-12">
                <form action="{{ route('book') }}" method="POST" id="cart-form">
                    <?php
                        $content = Cart::content();
                        $number = Cart::count();
                        // dd($content);
                        ?>
                    @csrf
                    <input type="hidden" value="{{ Cart::subtotal() }}" name="subtotal">
                    <input type="hidden" value="moi-dat" name="status">
                    <input type="hidden" value="@foreach ($content as $key => $value) {{ $value->name }}, @endforeach"
                        name="services">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="thong-tin py-2 text-center">
                                <h4 class="font-weight-bold text-white mb-0">{{__('ORDER')}} </h4>
                            </div>
                            
                            <div class="form-group don-hang px-4 pt-2 pb-3 position-relative mb-0">
                                @if($number > 0)
                                    @foreach ($content as $item)
                                    {{-- @dd( $item); --}}
                                        <div class="cart-item">
                                            <div class="my-3 d-flex">
                                                <div
                                                    class="cart-img p-2 h-100 d-flex justify-content-center align-items-center">
                                                    <img class="lazy"
                                                        data-original="{{ Voyager::image($item->options->image) }}"
                                                        alt="" src="{{ Voyager::image($item->options->image) }}"
                                                        style="">
                                                </div>
                                                <div class="pl-3">
                                                    <p class="font-weight-bold font-16 m-0">{{ $item->name }}</p>
                                                    <p class="m-0">{{$item->desc}}</p>
                                                    <p class="m-0 font-weight-bold">{{ number_format($item->price) }}đ</p>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center position-relative product-qty pt-2 pb-4">
                                                <p class="mb-0 pr-3">{{__('Number')}} </p>
                                                <input type="number" data-product-id="5" min="1"value="{{ $item->qty }}" class="qty text-center" readonly>
                                                <a class="text-center d-flex cart-delete-item position-absolute"
                                                    href="{{ route('delete-cart', $item->rowId) }}">{{__('Delete')}}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <h5>{{__('There are no products in the cart yet')}}</h5>
                                @endif

                                <div>
                                    <p class="d-flex align-items-center font-weight-bold justify-content-between m-0 pb-2 pt-3" id="total-price-wrapper">
                                        {{__('Into money')}}: <span id="total-price">{{Cart::subtotal()}} VND</span>
                                    </p>
                                </div>

                            </div>

                            <div class="pt-3 text-center" style="padding-bottom: 1rem;">
                                <button class="py-2 w-40 border-0 addcart font-weight-bold" id="checkout-button">
                                    <a href="{{route('services')}}" style="color: aliceblue">{{__('CONTINUE SHOPPING')}}</a>
                                </button>
                            </div>
                            
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="thong-tin py-2 text-center">
                                <h4 class="font-weight-bold text-white mb-0">{{__('BUYER INFORMATION')}}</h4>
                            </div>
                            <div class="form-group py-2">
                                <div class="my-3">
                                    <input type="text" name="name" value="" class="form-control py-2"
                                        placeholder="{{__('Full name')}}" required>
                                </div>
                                <div class="my-3">
                                    <input type="text"class="form-control py-2" name="phone"
                                        placeholder="{{__('Phone')}}" value="" required>
                                </div>
                                <div class="my-3">
                                    <input type="text" name="address1" class="form-control py-2" placeholder="{{__('Address')}}"
                                        value="" required>
                                </div>
                                <!-- Thay ghi chu bang ma khuyên mai -->

                                <div class="my-3">
                                    <textarea name="content" id="note" class="form-control w-100" placeholder="{{__('Note')}}..." rows="4"></textarea>
                                </div>
                                @if($number > 0)
                                <div class="pt-3 text-center">
                                    <button type="submit" class="py-2 w-100 border-0 addcart font-weight-bold" id="checkout-button">
                                        {{__('ORDER')}}
                                    </button>
                                </div>
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
@endsection
