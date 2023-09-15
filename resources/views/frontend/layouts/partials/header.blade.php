@php
    $menu = menu('home_menu', '_json');
    $content = Cart::content();
    $number = Cart::count();
    // dd($menu);
@endphp

<header class="position-sticky" id="header">
    <div class="container-fluid header position-relative">
        <div class="container px-md-0">
            <div class="row pb-lg-0 menu-mobi">
                <div
                        class="col-6 col-lg-12 d-flex d-lg-block align-items-center text-lg-center py-0 px-0 px-md-2">
                    <h1 class="m-0">
                        <a href="{{route('home')}}">
                            <img id="logo-purelac" class="logo" src="{{ Voyager::image(setting('site.logo')) }}" alt="Logo Purelac">
                        </a>
                    </h1>
                </div>
                <div class="col-6 col-lg-12 py-1 menu d-flex align-items-center px-0 px-md-2 d-lg-none">
                    <div class="container px-0">
                        <div
                                class="navbar navbar-expand-lg navbar-light float-right float-lg-none pl-0 position-static px-0">
                            <button class="navbar-toggler px-0 collapsed border-0" type="button"
                                    data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid px-0 position-relative">
            <div class="col-6 col-lg-12 menu d-flex align-items-center px-0 px-md-2">
                <div class="container px-0">
                    <nav
                        class="navbar navbar-expand-lg navbar-light float-right float-lg-none pl-0 position-static p-0">
                        <div class="navbar-collapse collapse" id="navbarNav">
                            <ul class="navbar-nav w-100 text-lg-center justify-content-center">
                                @foreach ($menu as $item)
                                        @if (count($item->children) > 0)
                                            <li class="nav-item px-lg-0 py-3 position-relative py-lg-2 border-bottom-lg-0 position-relative menu-parent ">
                                                <a href="{{ asset($item->url) }}" class="nav-link py-0 px-lg-4 text-uppercase not-active" target="{{ $item->target }}">
                                                    {{ $item->translate()->title }}
                                                    <i class="fas fa-angle-down" style="margin-left: 5px;"></i>
                                                </a>
                                                <div class="position-absolute menu-child">
                                                    @foreach ($item->children as $child)
                                                        <a class="nav-link pl-3" href="{{ asset($child->url) }}" target="{{ $child->target }}">{{ $child->translate()->title }}</a>
                                                    @endforeach
                                                </div>
                                                
                                            </li>
                                        @else
                                            <li class=" nav-item px-lg-0 py-3 position-relative py-lg-2 border-bottom-lg-0">
                                                <a class="nav-link py-0 px-lg-4 text-uppercase" href="{{ asset($item->url) }}" target="{{ $item->target }}">{{ $item->translate()->title }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                <li class="nav-item py-3 py-lg-2 border-bottom-lg-0">
                                    <a href="{{ route('lang','en') }}">
                                        <img height="18px" src="{{ asset("images/en.png") }}" alt="purelac newZealand">
                                    </a>
                                    <a href="{{ route('lang','vi') }}" style="padding-left: 5px">
                                        <img height="20px" src="{{ asset("images/vn.png") }}" alt="purelac Vietnam">
                                    </a>
                                </li>
                                <li class="nav-item py-3 py-lg-2 border-bottom-lg-0">
                                    <a class="nav-link py-0 border-right-0 position-relative cart-header"
                                        href="{{route('confirm')}}">
                                        <img src="{{ Voyager::image(setting('site.img-cart')) }}" alt="New">
                                        <span class="position-absolute" id="cart-qty">{{$number}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
    </header>