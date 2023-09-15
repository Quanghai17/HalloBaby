<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;
use App\Voucher;
use Carbon\Carbon;

class AdminVoucherController extends \TCG\Voyager\Http\Controllers\Controller
{
    public function report(Request $request){
        if (isset($request->start_date) && isset($request->end_date)){
            $start_date= $request->start_date;
            $end_date= $request->end_date;

            $data1= Voucher::whereBetween('created_at', [$start_date, $end_date])->sum('number');
            $data2= Voucher::whereBetween('created_at', [$start_date, $end_date])->sum('hallo_1');
            $data3= Voucher::whereBetween('created_at', [$start_date, $end_date])->sum('hallo_2');
            $data4= Voucher::whereBetween('created_at', [$start_date, $end_date])->sum('hallo_3');
            $des= "Đăng ký voucher nhận được từ ngày ".Carbon::parse($start_date)->format('d-m-Y')." đến ngày ".Carbon::parse($end_date)->format('d/m/Y')."!";
            return view("admin.report", compact('data1', 'data2', 'data3', 'data4', 'des', 'start_date', 'end_date'));
        }else{
            $data1= Voucher::sum('number');
            $data2= Voucher::sum('hallo_1');
            $data3= Voucher::sum('hallo_2');
            $data4= Voucher::sum('hallo_3');
            $des= "Tất cả đăng ký voucher nhận được!";
            return view("admin.report", compact('data1', 'data2', 'data3', 'data4', 'des'));
        }
    }
}