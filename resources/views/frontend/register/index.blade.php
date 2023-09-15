@extends('frontend.layouts.default')

@section('content')
    <div class="container">
        <div class="row cart top bottom">
            <div class="col-12">
                <form action="https://purelacmall.vn/checkout" method="POST" id="cart-form">
                    <input type="hidden" name="_token" value="nZnHEgcsTWQ1qW9b14AAG1EYKtH44IB35307AzWZ">
                    <div class="row">
                        <div class="col-2 col-lg-2">
                        </div>
                        <div class="col-10 col-lg-10">
                            <div class="thong-tin py-2 text-center">
                                <h4 class="font-weight-bold text-white mb-0">ĐƠN HÀNG </h4>
                            </div>
                            <div class="form-group don-hang px-4 pt-2 pb-3 position-relative mb-0">
                                <div class="cart-item">
                                    <div class="my-3 d-flex" style="justify-content: space-around;">
                                        <div class="cart-img p-2 h-100 d-flex justify-content-center align-items-center">
                                            <img class="lazy"
                                                data-original="https://purelacmall.vn/storage/uploads/anh-san-pham/stage-2-anh-dai-dien-540x540.png"
                                                alt=""
                                                src="https://purelacmall.vn/storage/uploads/anh-san-pham/stage-2-anh-dai-dien-540x540.png"
                                                style="">
                                        </div>
                                        <div class="pl-3">
                                            <p class="font-weight-bold font-16 m-0">PureLac Royal Plus Stage 2</p>
                                            <p class="m-0">Sản phẩm dinh dưỡng cho trẻ 6-12 tháng tuổi</p>
                                            <p class="m-0 font-weight-bold">
                                                850.000 VND</p>
                                        </div>
                                        <div class="d-flex align-items-center position-relative product-qty pt-2 pb-4">
                                            <p class="mb-0 pr-3">Số lượng </p>
                                            <button type="button" class="px-2 decrease update-cart">-</button>
                                            <input type="number" data-product-id="2" min="1" step="1"
                                                value="1" class="qty text-center">
                                            <button type="button" class="px-2 increase update-cart">+</button>
                                            
                                        </div>
                                        <button class="text-center d-flex cart-delete-item position-absolute">
                                            <span class="icon-delete icon"></span>
                                        </button>
                                    </div>
                                    
                                </div>
                             
                                <div>
                                    <p class="d-flex align-items-center font-weight-bold justify-content-between m-0 pb-2 pt-3"
                                        id="total-price-wrapper">
                                        Thành Tiền: <span id="total-price">1.700.000 VND</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-12 col-lg-6">
                        <div class="thong-tin py-2 text-center">
                            <h4 class="font-weight-bold text-white mb-0">THÔNG TIN NGƯỜI MUA HÀNG</h4>
                        </div>
                        <div class="form-group py-2">
                            <div class="my-3">
                                <input type="text" required name="name" value="" class="form-control py-2"
                                    placeholder="Họ tên">
                            </div>
                            <div class="my-3">
                                <input type="text" required class="form-control py-2" name="phone_save_point"
                                    placeholder="Số điện thoại" value="">
                            </div>
                            <div class="my-3">
                                <input type="text" name="address" class="form-control py-2" placeholder="Địa chỉ"
                                    value="">
                            </div>
                            <!-- Thay ghi chu bang ma khuyên mai -->
                            <!--
                        <div class="my-3">
                            <textarea name="note" id="note" class="form-control w-100" placeholder="Ghi chú..."
                                rows="4"></textarea>
                        </div>
                        -->
                            <div class="my-3">
                                <input type="text" name="code" class="form-control py-2"
                                    placeholder="Mã khuyến mãi (nếu có)" value="">
                            </div>

                            <div class="form-check-inline my-3">
                                <label class="form-check-label mr-3">
                                    <input value="COD" type="radio" checked class="form-check-input"
                                        name="payment_method">Giao hàng thu tiền (COD)
                                </label>
                                <label class="form-check-label mr-3">
                                    <input value="VNPAY" type="radio" class="form-check-input"
                                        name="payment_method">VNPay
                                </label>
                            </div>

                        </div>
                    </div> --}}
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
