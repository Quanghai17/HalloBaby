<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function store(Request $request)
    {
        $quick = $request->input('quick', false);

        if (!$quick) {
            $validated = $request->validate([
                'name' => 'required|max:120',
                'phone' => 'required|numeric|min:10'
            ]);
        }

        try {
            $alert = [
                "type" => "success",
                "title" => __("Thành công"),
                "body" => __("Cảm quý khách đã tin tưởng sử dụng Hallo Baby. Chúng tôi sẽ sớm phản hồi cho bạn!")
            ];

            $feedback = new \App\Voucher();
            $feedback->name = $request->name;
            $feedback->phone = $request->phone;
            $feedback->state = $request->state;
            $feedback->district = $request->district;
            $feedback->ward = $request->ward;
            $feedback->address = $request->address;
            $feedback->name_shop = $request->ten_shop;
            $feedback->phone_shop = $request->sdt_shop;
            $feedback->product_mama = "Hallo Baby MAMA";
            $feedback->number = $request->hallo_mama;
            $feedback->product1 = "Hallo Baby 1";
            $feedback->hallo_1 = $request->hallo_1;
            $feedback->product2 = "Hallo Baby 2";
            $feedback->hallo_2 = $request->hallo_2;
            $feedback->product3 = "Hallo Baby 3";
            $feedback->hallo_3 = $request->hallo_3;

            //    dd($feedback);
            $feedback->save();
        } catch (\Exception $e) {
            $alert = [
                "type" => "error",
                "title" => __("Không thành công"),
                "body" => __("Có lỗi đã xảy ra, vui lòng thử lại sau!")
            ];
        }
        return redirect()->back()->with('alert', $alert);
    }
}
