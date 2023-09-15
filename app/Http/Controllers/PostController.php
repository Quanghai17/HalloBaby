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

class PostController extends Controller
{
    public function index()
    {
      $posts = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 1)->orderBy('created_at', 'DESC')->paginate(6);
      $posts_hot = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 1)->where('featured', 1)->get();
      $posts_rate = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 1)->orderBy('view', 'DESC')->take(6)->get();

      $pageMeta = [
        'title' => 'Tin tức',
        ];
      return view(('frontend.blogs.index'),compact('posts','pageMeta','posts_hot', 'posts_rate'));
    }

    public function show($slug)
    {

        $post = \TCG\Voyager\Models\Post::where('slug', $slug)->first();
        if ($post){
            $post->view= $post->view+1;
            $post->save();
        }
        $title = $post->title ?? "";
        $products = \App\Service::where('status', 'ACTIVE')->get();
        $pageMeta = [
            'title' => $title,
            'meta_description' => $post->meta_description,
            'image' => $post->image,
        ];
        return view('frontend.blogs.show', compact('post', 'title', 'products', 'pageMeta'));
    }

    public function search(Request $request)
    {
        $key_form = $request->key;
        $key=str_replace(' ','%',$key_form); 
        $posts = \TCG\Voyager\Models\Post::where('title','LIKE','%'.$key.'%')->paginate(6); 
        $posts_hot = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 1)->where('featured', 1)->get();
        $posts_rate = \TCG\Voyager\Models\Post::where('status', 'PUBLISHED')->where('category_id', 1)->orderBy('view', 'DESC')->take(6)->get(); 
        return view('frontend.blogs.index', [
            'posts' => $posts,
            'posts_hot' => $posts_hot,
            'posts_rate' => $posts_rate

        ]);
    }
}
