<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Camketsanpham;

class HomeController extends Controller
{
    public function index()
  {
    $homeBanners = \App\Banner::where('type', 'banner')->where('status', 'ACTIVE')->get();
    $promotionBanners = \App\Banner::where('type', 'promotion')->where('status', 'ACTIVE')->get();
    $services = \App\Service::where('status', 'ACTIVE')->get();
    $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 1)->limit(3)->get();
    $posts_promotion = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 3)->get();
    $camket= Camketsanpham::all();
    // dd($banner_middle);
    return view(('frontend.homepage.index'), [
      'homeBanners' => $homeBanners,
      'promotionBanners' => $promotionBanners,
      'services' => $services,
      'posts' => $posts,
      'posts_promotion' => $posts_promotion,
      'camket' => $camket,
    ],);
  }
}
