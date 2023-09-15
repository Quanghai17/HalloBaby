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

class ContactController extends Controller
{
    public function index()
    {
      $pageMeta = [
        'title' => 'Liên hệ',
        ];
        
      return view(('frontend.contact.index'), compact('pageMeta'));
    }
}
