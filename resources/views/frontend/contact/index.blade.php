@extends('frontend.layouts.default')

@section('content')
<div class="container">
    <div class="row cart top bottom">
        <div class="col-12">
            <form action="{{route('advises')}}" method="POST" id="cart-form">
                @csrf
                <div class="row">
                    <div class="col-12 col-lg-2">
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="thong-tin py-2 text-center">
                            <h4 class="font-weight-bold text-white mb-0">{{__('AGENT INFORMATION')}}</h4>
                        </div>
                        <div class="form-group py-2">
                            <div class="my-3">
                                <input type="text" required name="name" value="" class="form-control py-2"
                                    placeholder="{{__('Full name')}}">
                            </div>
                            <div class="my-3">
                                <input type="text" required class="form-control py-2" name="phone"
                                    placeholder="{{__('Phone')}}" value="">
                            </div>
                            <div class="my-3">
                                <input type="text" name="address" class="form-control py-2" placeholder="{{__('Address')}}"
                                    value="">
                            </div>
                            <!-- Thay ghi chu bang ma khuyên mai -->
                            
                        <div class="my-3">
                            <textarea name="content" id="note" class="form-control w-100" placeholder="{{__('Note')}}..."
                                rows="4"></textarea>
                        </div>
                        <div class="pt-3 text-center">
                            <button type="submit" class="py-2 w-100 border-0 addcart font-weight-bold" id="checkout-button">
                                {{__('SEND')}}
                            </button>
                        </div>
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