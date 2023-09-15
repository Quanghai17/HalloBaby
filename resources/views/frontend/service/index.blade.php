@extends('frontend.layouts.default')

@section('content')
<div class="container-fluid py-4 py-lg-5 product" id="list-products">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center bottom-40">
                <h3 class="title font-weight-bold text-uppercase" id="purelac">{{__('HALLO BABY POWDERED MILK - GIVE FULL LOVE')}}</h3>
            </div>
            <div class="col-12 py-0">
                <div class="row milk">
                    @foreach ($services as $service)
                    <div class="col-12 col-md-3 pb-5 py-md-0 text-center milk-two" data-aos="zoom-in" data-aos-duration="700" style="border-top: 1px solid #dbdbdb; padding-bottom: 5px">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function(){
        // swal("Hello world!");
        $('.add-to-cart').click(function(){
             var id = $(this).data('id');
             var cart_id = $('.cart_product_id_' + id).val();
             var cart_name = $('.cart_product_name_' + id).val();
             var cart_price = $('.cart_product_price_' + id).val();
             var cart_qty = $('.cart_product_qty_' + id).val();
             var _token = $('input[name= "_token"]').val();
           
            //  alert( cart_qty );
             $.ajax({
               alert(1);
                url: '{{url('/add-cart-ajax')}}',
                method: 'POST',
                data: {cart_id: cart_id, cart_name: cart_name, cart_price:cart_price, cart_qty:cart_qty, _token: _token},
                success: function(data){
                    alert(data);
                }
             });

            
        });
    });
</script>

@endsection
