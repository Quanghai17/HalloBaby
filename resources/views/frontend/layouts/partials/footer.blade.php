@php
   $abouts1 = \TCG\Voyager\Models\Page::where('type', 'thong-tin')->where('status', 'ACTIVE')->limit(3)->get();
   $abouts2 = \TCG\Voyager\Models\Page::where('type', 'ban-hang')->where('status', 'ACTIVE')->limit(3)->get();
   $abouts3 = \TCG\Voyager\Models\Page::where('type', 'khach-hang')->where('status', 'ACTIVE')->limit(3)->get();
@endphp

<footer id="footer">
    <div class="container-fluid footer-info px-0 position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <h3 class="font-weight-bold text-uppercase pb-3 fs-16">{{__('INFO')}}</h3>
                    <ul class="py-3 px-0">
                        @foreach ($abouts1 as $item)
                          <li class="mb-2 font-weight-bold">
                            <a href="{{ route('about.show', $item->slug) }}" target="_self">
                                {{$item->translate()->title}}
                            </a>
                        </li>  
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-3 offset-md-1 px-md-0">
                    <h3 class="font-weight-bold text-uppercase pb-3 fs-16">{{__('SALES POLICY')}}</h3>
                    <ul class="py-3 px-0">
                        @foreach ($abouts2 as $item)
                          <li class="mb-2 font-weight-bold">
                            <a href="{{ route('about.show', $item->slug) }}" target="_self">
                                {{$item->translate()->title}}
                            </a>
                        </li>  
                        @endforeach

                    </ul>
                </div>
                <div class="col-12 col-md-4 offset-md-1">
                    <h3 class="font-weight-bold text-uppercase pb-3 fs-16">{{__('CUSTOMER SUPPORT')}}</h3>
                    <ul class="py-3 px-0">
                        @foreach ($abouts3 as $item)
                          <li class="mb-2 font-weight-bold">
                            <a href="{{ route('about.show', $item->slug) }}" target="_self">
                                {{$item->translate()->title}}
                            </a>
                        </li>  
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="img-milk" style="background-image: url({{ Voyager::image(setting('site.breadcrumb')) }});">
        </div>
        <div class="footer-logo" style="text-align: center;">
            <a href="{{route('home')}}">
                <img  class="img-fluid lazy" data-original="{{ Voyager::image(setting('site.logo')) }}" alt="" src="{{ Voyager::image(setting('site.logo')) }}" style="max-width: 60%;">
            </a>
        </div>
    </div>

    <div class="container-fluid px-0 pb-5 footer-lienhe">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">

                    @if (App::getLocale() == 'vi')
                    <h3>{{setting('site.title')}}</h3>
                    @else
                    <h3>{{setting('site-en.title_en')}}</h3>
                    @endif
                    
                    @if (App::getLocale() == 'vi')
                    <p>Địa chỉ: {{setting('site.address')}}</p>
                    @else
                    <p>{{__('Address')}}: {{setting('site-en.address_en')}}</p>
                    @endif
                    
                    
                    <p>{{__('Business license')}}: {{setting('site.ĐKKD')}}</p>
                    <p>{{__('Date Range')}}: {{setting('site.date')}}</p>

                </div>
                <div class="col-12 col-md-4 pt-4 pt-md-0">
                    <h3>{{__('CONTACT')}}</h3>
                    <p>Hotline: {{setting('site.phone')}}</p>
                    <p>Email: {{setting('site.email')}}</p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p class="text-center mb-0" style="padding:7px 0;">© {{ date('Y') }} @if (App::getLocale() == 'vi')
            {{setting('site.title')}}
            @else
            {{setting('site-en.title_en')}}
            @endif. All Rights Reserved. <a style="color: #0e7e95;" href="http://kennatech.vn" target="_blank">Designed by Kennatech.</a></p>
    </div>
</footer>

<!--chat-->
<div class="fixed-right">
    <a target="_blank" href="{{ setting('site.zalo') }}" title="zalo" class="zalo">
        <img src="{{ asset("images/zalo.png") }}" alt="icon">
    </a>
    <a href="tel:{{ setting('site.phone') }}" title="{{ setting('site.phone') }}" class="phone">
        <img src="{{ asset("images/phone.png") }}" alt="icon">
    </a>
    <a id="gotoTop" class="phone" onclick="javascript:gotoTop();" style="background-color: #ffc107; margin:auto;">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<style>
    #gotoTop i{
        color: #fff;
        font-size: 18px;
        margin-top: 5px;
    }
    .fixed-right {
        position: fixed;
        z-index: 9999;
        right: 5px;
        transform: translateY(-50%);
        top: calc(85% + 10px)!important;
        width: 50px;
        text-align: center;
        overflow: hidden;
    }
    .fixed-right a {
        margin-bottom: 10px;
        width: 40px;
        height: 40px;
        display: inline-block;
    }
    .fixed-right img {
        opacity: 1;
        transition: opacity .3s;
        max-width: 100%;
        height: auto;
    }
    .fixed-right a {
        margin-bottom: 10px;
        width: 40px;
        height: 40px;
        display: inline-block;
    }
    .fixed-right a.phone {
        border-radius: 50%;
        background: #64bc46;
        padding: 6px;
        animation: quick-alo-circle-img-anim 1s infinite ease-in-out;
    }
    @media screen and (min-width: 1px) and (max-width: 1000px) {
        .fixed-right img {
            border: medium none;
            height: auto !important;
            line-height: normal;
            margin: 0;
            max-width: 100% !important;
            padding: 0;
            vertical-align: middle;
            width: auto !important;
            transition: all .2s ease-in;
        }
    }
</style>
<!--end chat-->
    