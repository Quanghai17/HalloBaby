<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

class AdvisesController extends Controller
{
  public function index()
  {
    $services = \App\Service::where('status', 'ACTIVE')->paginate(6);
    $pageMeta = [
      'title' => 'Tư vấn',
      ];
    return view(('frontend.advises.index'), [
      'services' => $services,
      'pageMeta' => $pageMeta,
    ]);
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
        "body" => __("Cảm ơn bạn đã yêu cầu liên hệ tư vấn, chúng tôi sẽ sớm phản hồi cho bạn!")
      ];

      $feedback = new \App\Advise();
      $feedback->name = $request->name;
      $feedback->phone = $request->phone;
      $feedback->content = $request->content;
      $feedback->address = $request->address;
  
      // dd($feedback);
      $feedback->save();
    } catch (\Exception $e) {
      $alert = [
        "type" => "error",
        "title" => __("Không thành công"),
        "body" => __("Có lỗi đã xảy ra, vui lòng thử lại!")
      ];
    }
    return redirect()->back()->with('alert', $alert);
  }
}
