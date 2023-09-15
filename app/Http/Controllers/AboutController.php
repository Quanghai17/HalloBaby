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

class AboutController extends Controller
{
    public function index()
    {
      $about = \TCG\Voyager\Models\Page::where('slug', 've-chung-toi')->where('status', 'ACTIVE')->first();
      $pageMeta = [
        'title' => 'Giới thiệu',
        ];
      return view(('frontend.about.index'), [
        'post' => $about,   
        'pageMeta' => $pageMeta,   
      ],);
    }

    public function show($slug)
    {
        $about = \TCG\Voyager\Models\Page::where('slug', $slug)->first();
        $title = $about->title ?? "";
        $products = \App\Service::where('status', 'ACTIVE')->get();
        //    dd($recentNew);
        $pageMeta = [
            'title' => $title,
            'meta_description' => $about->meta_description,
            'image' => $about->image,
        ];
        return view('frontend.about.show', compact('about', 'title', 'products', 'pageMeta'));
    }

    public function khuyenmai()
    {
        return view('frontend.about.voucher');
    }


}
