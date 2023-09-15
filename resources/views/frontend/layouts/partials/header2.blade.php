@php
    $menu = menu('home_menu', '_json');
    $content = Cart::content();
    $number = Cart::count();
    // dd($menu);
@endphp

<header class="position-sticky header-custom" id="header">
    <div class="container-fluid px-0 position-relative">
        <div class="col-lg-12 menu d-flex align-items-center px-0 px-md-2">
            <div class="container px-0">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="main-logo">
                            <a href="{{route('home')}}">
                                <img id="logo-purelac" class="logo" src="{{ Voyager::image(setting('site.logo')) }}"
                                     alt="{{ setting('site.title') }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <nav class="navbar navbar-expand-lg navbar-light pl-0 position-static p-0">
                            <div class="navbar-collapse collapse" id="navbarNav">
                                <ul class="navbar-nav w-100 text-lg-center">
                                    @foreach ($menu as $item)
                                        @if (count($item->children) > 0)
                                            <li class="nav-item px-5 px-lg-0 py-3 position-relative py-lg-2 border-bottom-lg-0 position-relative menu-parent ">
                                                <a href="{{ asset($item->url) }}"
                                                   class="nav-link py-0 px-lg-4 text-uppercase"
                                                   target="{{ $item->target }}">
                                                    {{ $item->translate()->title }}
                                                    <i class="fas fa-angle-down" style="margin-left: 5px;"></i>
                                                </a>
                                                <div class="position-absolute menu-child">
                                                    @foreach ($item->children as $child)
                                                        <a class="nav-link pl-3" href="{{ asset($child->url) }}"
                                                           target="{{ $child->target }}">{{ $child->translate()->title }}</a>
                                                    @endforeach
                                                </div>

                                            </li>
                                        @else
                                            <li class=" nav-item px-5 px-lg-0 py-3 position-relative py-lg-2 border-bottom-lg-0">
                                                <a class="nav-link py-0 px-lg-4 text-uppercase"
                                                   href="{{ asset($item->url) }}"
                                                   target="{{ $item->target }}">{{ $item->translate()->title }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li class="nav-item px-5 py-3 py-lg-2 border-bottom-lg-0">
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
        </div>
    </div>
</header>