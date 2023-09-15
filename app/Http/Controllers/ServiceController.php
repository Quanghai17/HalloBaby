<?php

namespace App\Http\Controllers;

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
use Cart;
use Illuminate\Support\Facades\Redirect;
use App\Question;

class ServiceController extends Controller
{
  public function index()
  {
    $services = \App\Service::where('status', 'ACTIVE')->paginate(6);
    return view(('frontend.service.index'), [
      'services' => $services,
    ]);
  }

  public function show($slug)
  {
    $service = \App\Service::with('questions')->where('slug', $slug)->first();
    $services = \App\Service::where('status', 'ACTIVE')->get();

    return view('frontend.service.show', compact('service', 'services'));
  }

  public function save_cart(Request $request)
  {

    $productId = $request->id;
    $quantity = $request->qty;
    $product_info = \App\Service::where('id', $productId)->get();
    // dd($product_info[0]->promotional);

    $data['id'] = $product_info[0]->id;
    $data['name'] = $product_info[0]->title;
    $data['qty'] = $quantity; 
    if( $product_info[0]->promotional != "") :
      $data['price'] = $product_info[0]->promotional;
    else:
      $data['price'] = $product_info[0]->price;
    endif;
    $data['weight'] = $product_info[0]->id;
    $data['options']['image'] = $product_info[0]->image;

    Cart::add($data);

    return Redirect::to('/confirm');
  }

  public function show_cart(Request $request)
  {

    return view('frontend.register.index');
  }

  public function delete_cart(Request $request, $rowId)
  {

    Cart::remove($rowId);
    return redirect()->route('confirm');
  }
}
