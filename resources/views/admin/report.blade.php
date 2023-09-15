@extends('voyager::master')


@section('content')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-buy"></i> Thống kê Voucher
        </h1>
    </div>
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <form class="form-inline" action="/admin/report" method="get">
                            <div class="form-group mb-2">
                                <input class="form-control" type="date" name="start_date" value="{{ $start_date ?? null }}">
                            </div>
                            <div class="form-group mb-2">
                                <input class="form-control" type="date" name="end_date" value="{{ $end_date ?? null }}">
                            </div>
                            <button class="btn btn-primary mb-2" type="submit">Kiểm tra</button>
                        </form>

                        <div class="row list-box">
                            <p class="box">{{ $des }}</p>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="box box1">
                                    <h6>Hallo Baby Mama</h6>
                                    <p>Số lượng: {{ number_format( $data1 ?? 0 ) }}</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="box box2">
                                    <h6>Hallo Baby 1</h6>
                                    <p>Số lượng: {{ number_format( $data2 ?? 0 ) }}</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="box box3">
                                    <h6>Hallo Baby 2</h6>
                                    <p>Số lượng: {{ number_format( $data3 ?? 0 ) }}</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-12">
                                <div class="box box4">
                                    <h6>Hallo Baby 3</h6>
                                    <p>Số lượng: {{ number_format( $data4 ?? 0 ) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        .list-box {
            margin-top: 35px;
        }

        .list-box .box {
            padding: 15px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 15px;
        }

        .list-box .box h6 {
            font-size: 24px;
            font-weight: 600;
        }

        .list-box .box1 {
            background: #1baaa7;
            color: #fff;
        }

        .list-box .box2 {
            background: #20972e;
            color: #fff;
        }

        .list-box .box3 {
            background: #9505d1;
            color: #fff;
        }

        .list-box .box4 {
            background: #ff3434;
            color: #fff;
        }
    </style>

@stop