<?php

namespace App\Http\Controllers;

use Cart;
use App\Bookdetail;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Web Routes
Nguyễn Quang Hải
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $pageMeta = [
            'title' => 'Đặt hàng',
        ];
        return view(('frontend.register.index'), compact('pageMeta'));
    }

    public function show()
    {
        $pageMeta = [
            'title' => 'Đặt hàng',
        ];
        return view(('frontend.register.show'), compact('pageMeta'));
    }

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
                "body" => __("Cảm ơn bạn đã đặt phòng, chúng tôi sẽ sớm phản hồi cho bạn!")
            ];

            $feedback = new \App\Book();
            $feedback->name = $request->name;
            $feedback->phone = $request->phone;
            $feedback->address1 = $request->address1;
            $feedback->content = $request->content;
            $feedback->services = $request->services;
            $feedback->subtotal = $request->subtotal;
            $feedback->status = $request->status;
            $feedback->save();

            if (isset($feedback->id)) {
                if (count(Cart::content()) > 0) {
                    foreach (Cart::content() as $cart_detail) {
                        $book_detail = new Bookdetail();
                        $book_detail->id_book = $feedback->id;
                        $book_detail->name = $cart_detail->name;
                        $book_detail->price = $cart_detail->price;
                        $book_detail->qty = $cart_detail->qty;
                        $book_detail->total = (int)$cart_detail->price * (int)$cart_detail->qty;
                        $book_detail->save();
                    }
                }
            }
            Cart::destroy();
            return Redirect::to('/order-success/'.$feedback->id);
        } catch (\Exception $e) {
            $alert = [
                "type" => "error",
                "title" => __("Không thành công"),
                "body" => __("Có lỗi đã xảy ra, vui lòng thử lại!")
            ];
        }
        return back()->with('alert', $alert);
    }

    public function success($id)
    {
        $feedback = \App\Book::find($id);
        $pageMeta = [
            'title' => 'Đặt hàng thành công',
        ];
        return view(('frontend.register.success'), compact('pageMeta', 'feedback'));
    }
}
