@extends('frontend.layouts.default')

@section('content')

<section class="page">
    <div class="container" style="margin-top: 3rem; margin-bottom: 4rem;"> 
        <div class="wrap_background_aside padding-bottom-40">
            <div class="row">
                <div class="col-xl-1 col-lg-1 col-12">
                </div>
                <div class="col-xl-10 col-lg-10 col-12">
                    <div class="box_advisor_right">
                        <h4 class="title_advisor_2" style="text-align: center;">
                            {{__('Thank you for trusting our products, we will contact you as soon as possible!!!')}}
                        </h4>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                                }

                                td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                                }
                                th {
                                    background-color: #4495e5;
                                    font-weight: 600;
                                }
                            </style>
                        <table>
                            <tr>
                                <th>{{__('Customer name')}}</th>
                                <th>{{__('Phone')}}</th>
                                <th>{{__('Address')}}</th>
                                <th>{{__('Products')}}</th>
                                <th>{{__('Total price')}}</th>
                               
                            </tr>
                            <tr>
                                <td>{{$feedback->name}}</td>
                                <td>{{$feedback->phone}}</td>
                                <td>{{$feedback->address1}}</td>
                                <td>{{$feedback->services}}</td>
                                <td>{{$feedback->subtotal}}VNĐ</td>
                            </tr>
                           
                        </table>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 a-left" style="margin-top: 2rem">
                            <a href="{{route('home')}}"><button type="submit" class="btn btn-primary btn-lienhe">{{__('Return to home page')}}</button></a>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection