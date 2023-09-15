@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body" data-select2-id="5">
                        <!-- GET THE DISPLAY OPTIONS -->
                        <div class="form-group  col-md-6 ">
                            <label class="control-label" for="name">Họ Tên</label>
                            <input type="text" class="form-control" value="{{ $dataTypeContent->name }}" readonly>
                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->
                        <div class="form-group  col-md-6 ">
                            <label class="control-label" for="name">Số điện thoại</label>
                            <input type="text" class="form-control" value="{{ $dataTypeContent->phone }}" readonly>
                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->
                        <div class="form-group  col-md-12 ">
                            <label class="control-label" for="name">Địa chỉ</label>
                            <input type="text" class="form-control" value="{{ $dataTypeContent->address1 }}" readonly>
                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->
                        <div class="form-group  col-md-12 ">
                            <label class="control-label" for="name">Ghi chú</label>
                            <textarea class="form-control" rows="5" readonly>{{ $dataTypeContent->content }}</textarea>
                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->
                        <div class="form-group  col-md-4 ">
                            <label class="control-label" for="name">Tổng chi phí</label>
                            <input type="text" class="form-control" value="{{ $dataTypeContent->subtotal }}" readonly>
                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->
                        <div class="form-group  col-md-4 ">
                            <label class="control-label" for="name">Created At</label>
                            <input type="datetime" class="form-control" value="{{ $dataTypeContent->created_at }}" readonly>
                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-4 ">
                            <label class="control-label" for="name">Trạng thái</label>
                            <select class="form-control" disabled="true">
                                <option value="moi-dat" @if($dataTypeContent->status == 'moi-dat') selected="selected" @endif>Mới đặt</option>
                                <option value="dang-gui" @if($dataTypeContent->status == 'dang-gui') selected="selected" @endif>Đang gửi</option>
                                <option value="da-giao" @if($dataTypeContent->status == 'da-giao') selected="selected" @endif>Hoàn thành</option>
                                <option value="huy-don" @if($dataTypeContent->status == 'huy-don') selected="selected" @endif>Hủy đơn</option>
                            </select>
                        </div>
                        <div class="col-md-12" style="padding-top: 20px;">
                            <h3>Chi tiết đơn hàng</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá tiền</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orderDetail as $key => $detail)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $detail->name }}</td>
                                        <td>{{ number_format($detail->price) }}</td>
                                        <td>{{ $detail->qty }}</td>
                                        <td>{{ number_format((int)$detail->qty * (int)$detail->price) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('head')
    <style>
        .form-group label, .form-group input{
            color: #0b0b0b;
            font-weight: 500;
        }
        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: #fff;
            opacity: 1;
        }
    </style>
@stop


