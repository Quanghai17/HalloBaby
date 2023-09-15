<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <!--------------------DEFAULT--------------------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <title>{{ $pageMeta['title'] ?? setting('site.title') }}</title>--}}

    <link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}" type="image/png" sizes="16x16">
    <meta property="og:image"
        content="{{ !empty($og_image) ? Voyager::image($og_image) : Voyager::image(setting('site.logo')) }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $title ?? setting('site.title') }}" />
    <meta property="og:description" content="{{ $description ?? setting('site.description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}" type="image/png">
    	<!-- Build Main CSS -->

	<link rel="icon" href="{{ Voyager::image(setting('site.logo')) }}"
		type="image/x-icon" />
	<!-- LD JSON -->

    <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "LocalBusiness",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "",
                    "addressRegion": "",
                    "postalCode":"",
                    "streetAddress": ""
                },
                "description": "",
                "name": "",
                "telephone": "",
                "openingHours": "Mo,Tu,We,Th,Fr,Sa,Su 08:00-18:00",
                "geo": {
                    "@type": "GeoCoordinates",
                    "latitude": "",
                    "longitude": ""
                },
                "image": "https://purelacmall.vn/storage/uploads/logo.png",
                "priceRange": "$30-$50"
            }
        </script>
    <style>
        .owl-carousel,
        .owl-carousel .owl-item {
            -webkit-tap-highlight-color: transparent;
            position: relative
        }

        .owl-carousel {
            display: none;
            width: 100%;
            z-index: 1
        }

        .owl-carousel .owl-stage {
            position: relative;
            touch-action: manipulation;
            -moz-backface-visibility: hidden
        }

        .owl-carousel .owl-stage:after {
            content: ".";
            display: block;
            clear: both;
            visibility: hidden;
            line-height: 0;
            height: 0
        }

        .owl-carousel .owl-stage-outer {
            position: relative;
            overflow: hidden;
            -webkit-transform: translateZ(0)
        }

        .owl-carousel .owl-item,
        .owl-carousel .owl-wrapper {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            -ms-transform: translateZ(0)
        }

        .owl-carousel .owl-item {
            min-height: 1px;
            float: left;
            -webkit-backface-visibility: hidden;
            -webkit-touch-callout: none
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 100%
        }

        .owl-carousel .owl-dots.disabled,
        .owl-carousel .owl-nav.disabled {
            display: none
        }

        .no-js .owl-carousel,
        .owl-carousel.owl-loaded {
            display: block
        }

        .owl-carousel .owl-dot,
        .owl-carousel .owl-nav .owl-next,
        .owl-carousel .owl-nav .owl-prev {
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel .owl-nav button.owl-next,
        .owl-carousel .owl-nav button.owl-prev,
        .owl-carousel button.owl-dot {
            background: 0 0;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit
        }

        .owl-carousel.owl-loading {
            opacity: 0;
            display: block
        }

        .owl-carousel.owl-hidden {
            opacity: 0
        }

        .owl-carousel.owl-refresh .owl-item {
            visibility: hidden
        }

        .owl-carousel.owl-drag .owl-item {
            touch-action: pan-y;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .owl-carousel.owl-grab {
            cursor: move;
            cursor: -webkit-grab;
            cursor: grab
        }

        .owl-carousel.owl-rtl {
            direction: rtl
        }

        .owl-carousel.owl-rtl .owl-item {
            float: right
        }

        .owl-carousel .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .owl-carousel .owl-animated-in {
            z-index: 0
        }

        .owl-carousel .owl-animated-out {
            z-index: 1
        }

        .owl-carousel .fadeOut {
            -webkit-animation-name: fadeOut;
            animation-name: fadeOut
        }

        @-webkit-keyframes fadeOut {
            0% {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        @keyframes fadeOut {
            0% {
                opacity: 1
            }

            to {
                opacity: 0
            }
        }

        .owl-height {
            transition: height .5s ease-in-out
        }

        .owl-carousel .owl-item .owl-lazy {
            opacity: 0;
            transition: opacity .4s ease
        }

        .owl-carousel .owl-item .owl-lazy:not([src]),
        .owl-carousel .owl-item .owl-lazy[src^=""] {
            max-height: 0
        }

        .owl-carousel .owl-item img.owl-lazy {
            transform-style: preserve-3d
        }

        .owl-carousel .owl-video-wrapper {
            position: relative;
            height: 100%;
            background: #000
        }

        .owl-carousel .owl-video-play-icon {
            position: absolute;
            height: 80px;
            width: 80px;
            left: 50%;
            top: 50%;
            margin-left: -40px;
            margin-top: -40px;
            background: url(images/owl.video.playb40e.png?4a37f8008959c75f619bf0a3a4e2d7a2) no-repeat;
            cursor: pointer;
            z-index: 1;
            -webkit-backface-visibility: hidden;
            transition: transform .1s ease
        }

        .owl-carousel .owl-video-play-icon:hover {
            transform: scale(1.3)
        }

        .owl-carousel .owl-video-playing .owl-video-play-icon,
        .owl-carousel .owl-video-playing .owl-video-tn {
            display: none
        }

        .owl-carousel .owl-video-tn {
            opacity: 0;
            height: 100%;
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: contain;
            transition: opacity .4s ease
        }

        .owl-carousel .owl-video-frame {
            position: relative;
            z-index: 1;
            height: 100%;
            width: 100%
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: local("Roboto-Regular"), local("Roboto"), url({{ asset('assets/fonts/Roboto-Regular8107.ttf?11eabca2251325cfc5589c9c6fb57b46') }}) format("truetype")
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 500;
            font-display: swap;
            /* src: local("Roboto-Medium"), local("Roboto-Medium"), url('fonts/Roboto-Mediumbdf9.ttf?58aef543c97bbaf6a9896e8484456d98') format("truetype") */
        }

        @font-face {
            font-family: Roboto;
            font-style: normal;
            font-weight: 700;
            font-display: swap;
            /* src: local("Roboto-Bold"), local("Roboto-Bold"), url('fonts/Roboto-Boldeed6.ttf?e07df86cef2e721115583d61d1fb68a6') format("truetype") */
        }

        /*!
        * Font Awesome Free 5.8.2 by @fontawesome - https://fontawesome.com
        * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
        */
        .fa,
        .fab,
        .fal,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-lg {
            font-size: 1.3333333333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-xs {
            font-size: .75em
        }

        .fa-sm {
            font-size: .875em
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit
        }

        .fa-border {
            border: .08em solid #eee;
            border-radius: .1em;
            padding: .2em .25em .15em
        }

        .fa-pull-left {
            float: left
        }

        .fa-pull-right {
            float: right
        }

        .fa.fa-pull-left,
        .fab.fa-pull-left,
        .fal.fa-pull-left,
        .far.fa-pull-left,
        .fas.fa-pull-left {
            margin-right: .3em
        }

        .fa.fa-pull-right,
        .fab.fa-pull-right,
        .fal.fa-pull-right,
        .far.fa-pull-right,
        .fas.fa-pull-right {
            margin-left: .3em
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s linear infinite;
            animation: fa-spin 2s linear infinite
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s steps(8) infinite;
            animation: fa-spin 1s steps(8) infinite
        }

        @-webkit-keyframes fa-spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        @keyframes fa-spin {
            0% {
                transform: rotate(0deg)
            }

            to {
                transform: rotate(1turn)
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            transform: scaleX(-1)
        }

        .fa-flip-vertical {
            transform: scaleY(-1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical,
        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            transform: scale(-1)
        }

        :root .fa-flip-both,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270 {
            filter: none
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            line-height: 2em;
            position: relative;
            vertical-align: middle;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            left: 0;
            position: absolute;
            text-align: center;
            width: 100%
        }

        .fa-stack-1x {
            line-height: inherit
        }

        .fa-stack-2x {
            font-size: 2em
        }

        .fa-inverse {
            color: #fff
        }

        .fa-500px:before {
            content: "\F26E"
        }

        .fa-accessible-icon:before {
            content: "\F368"
        }

        .fa-accusoft:before {
            content: "\F369"
        }

        .fa-acquisitions-incorporated:before {
            content: "\F6AF"
        }

        .fa-ad:before {
            content: "\F641"
        }

        .fa-address-book:before {
            content: "\F2B9"
        }

        .fa-address-card:before {
            content: "\F2BB"
        }

        .fa-adjust:before {
            content: "\F042"
        }

        .fa-adn:before {
            content: "\F170"
        }

        .fa-adobe:before {
            content: "\F778"
        }

        .fa-adversal:before {
            content: "\F36A"
        }

        .fa-affiliatetheme:before {
            content: "\F36B"
        }

        .fa-air-freshener:before {
            content: "\F5D0"
        }

        .fa-airbnb:before {
            content: "\F834"
        }

        .fa-algolia:before {
            content: "\F36C"
        }

        .fa-align-center:before {
            content: "\F037"
        }

        .fa-align-justify:before {
            content: "\F039"
        }

        .fa-align-left:before {
            content: "\F036"
        }

        .fa-align-right:before {
            content: "\F038"
        }

        .fa-alipay:before {
            content: "\F642"
        }

        .fa-allergies:before {
            content: "\F461"
        }

        .fa-amazon:before {
            content: "\F270"
        }

        .fa-amazon-pay:before {
            content: "\F42C"
        }

        .fa-ambulance:before {
            content: "\F0F9"
        }

        .fa-american-sign-language-interpreting:before {
            content: "\F2A3"
        }

        .fa-amilia:before {
            content: "\F36D"
        }

        .fa-anchor:before {
            content: "\F13D"
        }

        .fa-android:before {
            content: "\F17B"
        }

        .fa-angellist:before {
            content: "\F209"
        }

        .fa-angle-double-down:before {
            content: "\F103"
        }

        .fa-angle-double-left:before {
            content: "\F100"
        }

        .fa-angle-double-right:before {
            content: "\F101"
        }

        .fa-angle-double-up:before {
            content: "\F102"
        }

        .fa-angle-down:before {
            content: "\F107"
        }

        .fa-angle-left:before {
            content: "\F104"
        }

        .fa-angle-right:before {
            content: "\F105"
        }

        .fa-angle-up:before {
            content: "\F106"
        }

        .fa-angry:before {
            content: "\F556"
        }

        .fa-angrycreative:before {
            content: "\F36E"
        }

        .fa-angular:before {
            content: "\F420"
        }

        .fa-ankh:before {
            content: "\F644"
        }

        .fa-app-store:before {
            content: "\F36F"
        }

        .fa-app-store-ios:before {
            content: "\F370"
        }

        .fa-apper:before {
            content: "\F371"
        }

        .fa-apple:before {
            content: "\F179"
        }

        .fa-apple-alt:before {
            content: "\F5D1"
        }

        .fa-apple-pay:before {
            content: "\F415"
        }

        .fa-archive:before {
            content: "\F187"
        }

        .fa-archway:before {
            content: "\F557"
        }

        .fa-arrow-alt-circle-down:before {
            content: "\F358"
        }

        .fa-arrow-alt-circle-left:before {
            content: "\F359"
        }

        .fa-arrow-alt-circle-right:before {
            content: "\F35A"
        }

        .fa-arrow-alt-circle-up:before {
            content: "\F35B"
        }

        .fa-arrow-circle-down:before {
            content: "\F0AB"
        }

        .fa-arrow-circle-left:before {
            content: "\F0A8"
        }

        .fa-arrow-circle-right:before {
            content: "\F0A9"
        }

        .fa-arrow-circle-up:before {
            content: "\F0AA"
        }

        .fa-arrow-down:before {
            content: "\F063"
        }

        .fa-arrow-left:before {
            content: "\F060"
        }

        .fa-arrow-right:before {
            content: "\F061"
        }

        .fa-arrow-up:before {
            content: "\F062"
        }

        .fa-arrows-alt:before {
            content: "\F0B2"
        }

        .fa-arrows-alt-h:before {
            content: "\F337"
        }

        .fa-arrows-alt-v:before {
            content: "\F338"
        }

        .fa-artstation:before {
            content: "\F77A"
        }

        .fa-assistive-listening-systems:before {
            content: "\F2A2"
        }

        .fa-asterisk:before {
            content: "\F069"
        }

        .fa-asymmetrik:before {
            content: "\F372"
        }

        .fa-at:before {
            content: "\F1FA"
        }

        .fa-atlas:before {
            content: "\F558"
        }

        .fa-atlassian:before {
            content: "\F77B"
        }

        .fa-atom:before {
            content: "\F5D2"
        }

        .fa-audible:before {
            content: "\F373"
        }

        .fa-audio-description:before {
            content: "\F29E"
        }

        .fa-autoprefixer:before {
            content: "\F41C"
        }

        .fa-avianex:before {
            content: "\F374"
        }

        .fa-aviato:before {
            content: "\F421"
        }

        .fa-award:before {
            content: "\F559"
        }

        .fa-aws:before {
            content: "\F375"
        }

        .fa-baby:before {
            content: "\F77C"
        }

        .fa-baby-carriage:before {
            content: "\F77D"
        }

        .fa-backspace:before {
            content: "\F55A"
        }

        .fa-backward:before {
            content: "\F04A"
        }

        .fa-bacon:before {
            content: "\F7E5"
        }

        .fa-balance-scale:before {
            content: "\F24E"
        }

        .fa-ban:before {
            content: "\F05E"
        }

        .fa-band-aid:before {
            content: "\F462"
        }

        .fa-bandcamp:before {
            content: "\F2D5"
        }

        .fa-barcode:before {
            content: "\F02A"
        }

        .fa-bars:before {
            content: "\F0C9"
        }

        .fa-baseball-ball:before {
            content: "\F433"
        }

        .fa-basketball-ball:before {
            content: "\F434"
        }

        .fa-bath:before {
            content: "\F2CD"
        }

        .fa-battery-empty:before {
            content: "\F244"
        }

        .fa-battery-full:before {
            content: "\F240"
        }

        .fa-battery-half:before {
            content: "\F242"
        }

        .fa-battery-quarter:before {
            content: "\F243"
        }

        .fa-battery-three-quarters:before {
            content: "\F241"
        }

        .fa-battle-net:before {
            content: "\F835"
        }

        .fa-bed:before {
            content: "\F236"
        }

        .fa-beer:before {
            content: "\F0FC"
        }

        .fa-behance:before {
            content: "\F1B4"
        }

        .fa-behance-square:before {
            content: "\F1B5"
        }

        .fa-bell:before {
            content: "\F0F3"
        }

        .fa-bell-slash:before {
            content: "\F1F6"
        }

        .fa-bezier-curve:before {
            content: "\F55B"
        }

        .fa-bible:before {
            content: "\F647"
        }

        .fa-bicycle:before {
            content: "\F206"
        }

        .fa-bimobject:before {
            content: "\F378"
        }

        .fa-binoculars:before {
            content: "\F1E5"
        }

        .fa-biohazard:before {
            content: "\F780"
        }

        .fa-birthday-cake:before {
            content: "\F1FD"
        }

        .fa-bitbucket:before {
            content: "\F171"
        }

        .fa-bitcoin:before {
            content: "\F379"
        }

        .fa-bity:before {
            content: "\F37A"
        }

        .fa-black-tie:before {
            content: "\F27E"
        }

        .fa-blackberry:before {
            content: "\F37B"
        }

        .fa-blender:before {
            content: "\F517"
        }

        .fa-blender-phone:before {
            content: "\F6B6"
        }

        .fa-blind:before {
            content: "\F29D"
        }

        .fa-blog:before {
            content: "\F781"
        }

        .fa-blogger:before {
            content: "\F37C"
        }

        .fa-blogger-b:before {
            content: "\F37D"
        }

        .fa-bluetooth:before {
            content: "\F293"
        }

        .fa-bluetooth-b:before {
            content: "\F294"
        }

        .fa-bold:before {
            content: "\F032"
        }

        .fa-bolt:before {
            content: "\F0E7"
        }

        .fa-bomb:before {
            content: "\F1E2"
        }

        .fa-bone:before {
            content: "\F5D7"
        }

        .fa-bong:before {
            content: "\F55C"
        }

        .fa-book:before {
            content: "\F02D"
        }

        .fa-book-dead:before {
            content: "\F6B7"
        }

        .fa-book-medical:before {
            content: "\F7E6"
        }

        .fa-book-open:before {
            content: "\F518"
        }

        .fa-book-reader:before {
            content: "\F5DA"
        }

        .fa-bookmark:before {
            content: "\F02E"
        }

        .fa-bootstrap:before {
            content: "\F836"
        }

        .fa-bowling-ball:before {
            content: "\F436"
        }

        .fa-box:before {
            content: "\F466"
        }

        .fa-box-open:before {
            content: "\F49E"
        }

        .fa-boxes:before {
            content: "\F468"
        }

        .fa-braille:before {
            content: "\F2A1"
        }

        .fa-brain:before {
            content: "\F5DC"
        }

        .fa-bread-slice:before {
            content: "\F7EC"
        }

        .fa-briefcase:before {
            content: "\F0B1"
        }

        .fa-briefcase-medical:before {
            content: "\F469"
        }

        .fa-broadcast-tower:before {
            content: "\F519"
        }

        .fa-broom:before {
            content: "\F51A"
        }

        .fa-brush:before {
            content: "\F55D"
        }

        .fa-btc:before {
            content: "\F15A"
        }

        .fa-buffer:before {
            content: "\F837"
        }

        .fa-bug:before {
            content: "\F188"
        }

        .fa-building:before {
            content: "\F1AD"
        }

        .fa-bullhorn:before {
            content: "\F0A1"
        }

        .fa-bullseye:before {
            content: "\F140"
        }

        .fa-burn:before {
            content: "\F46A"
        }

        .fa-buromobelexperte:before {
            content: "\F37F"
        }

        .fa-bus:before {
            content: "\F207"
        }

        .fa-bus-alt:before {
            content: "\F55E"
        }

        .fa-business-time:before {
            content: "\F64A"
        }

        .fa-buysellads:before {
            content: "\F20D"
        }

        .fa-calculator:before {
            content: "\F1EC"
        }

        .fa-calendar:before {
            content: "\F133"
        }

        .fa-calendar-alt:before {
            content: "\F073"
        }

        .fa-calendar-check:before {
            content: "\F274"
        }

        .fa-calendar-day:before {
            content: "\F783"
        }

        .fa-calendar-minus:before {
            content: "\F272"
        }

        .fa-calendar-plus:before {
            content: "\F271"
        }

        .fa-calendar-times:before {
            content: "\F273"
        }

        .fa-calendar-week:before {
            content: "\F784"
        }

        .fa-camera:before {
            content: "\F030"
        }

        .fa-camera-retro:before {
            content: "\F083"
        }

        .fa-campground:before {
            content: "\F6BB"
        }

        .fa-canadian-maple-leaf:before {
            content: "\F785"
        }

        .fa-candy-cane:before {
            content: "\F786"
        }

        .fa-cannabis:before {
            content: "\F55F"
        }

        .fa-capsules:before {
            content: "\F46B"
        }

        .fa-car:before {
            content: "\F1B9"
        }

        .fa-car-alt:before {
            content: "\F5DE"
        }

        .fa-car-battery:before {
            content: "\F5DF"
        }

        .fa-car-crash:before {
            content: "\F5E1"
        }

        .fa-car-side:before {
            content: "\F5E4"
        }

        .fa-caret-down:before {
            content: "\F0D7"
        }

        .fa-caret-left:before {
            content: "\F0D9"
        }

        .fa-caret-right:before {
            content: "\F0DA"
        }

        .fa-caret-square-down:before {
            content: "\F150"
        }

        .fa-caret-square-left:before {
            content: "\F191"
        }

        .fa-caret-square-right:before {
            content: "\F152"
        }

        .fa-caret-square-up:before {
            content: "\F151"
        }

        .fa-caret-up:before {
            content: "\F0D8"
        }

        .fa-carrot:before {
            content: "\F787"
        }

        .fa-cart-arrow-down:before {
            content: "\F218"
        }

        .fa-cart-plus:before {
            content: "\F217"
        }

        .fa-cash-register:before {
            content: "\F788"
        }

        .fa-cat:before {
            content: "\F6BE"
        }

        .fa-cc-amazon-pay:before {
            content: "\F42D"
        }

        .fa-cc-amex:before {
            content: "\F1F3"
        }

        .fa-cc-apple-pay:before {
            content: "\F416"
        }

        .fa-cc-diners-club:before {
            content: "\F24C"
        }

        .fa-cc-discover:before {
            content: "\F1F2"
        }

        .fa-cc-jcb:before {
            content: "\F24B"
        }

        .fa-cc-mastercard:before {
            content: "\F1F1"
        }

        .fa-cc-paypal:before {
            content: "\F1F4"
        }

        .fa-cc-stripe:before {
            content: "\F1F5"
        }

        .fa-cc-visa:before {
            content: "\F1F0"
        }

        .fa-centercode:before {
            content: "\F380"
        }

        .fa-centos:before {
            content: "\F789"
        }

        .fa-certificate:before {
            content: "\F0A3"
        }

        .fa-chair:before {
            content: "\F6C0"
        }

        .fa-chalkboard:before {
            content: "\F51B"
        }

        .fa-chalkboard-teacher:before {
            content: "\F51C"
        }

        .fa-charging-station:before {
            content: "\F5E7"
        }

        .fa-chart-area:before {
            content: "\F1FE"
        }

        .fa-chart-bar:before {
            content: "\F080"
        }

        .fa-chart-line:before {
            content: "\F201"
        }

        .fa-chart-pie:before {
            content: "\F200"
        }

        .fa-check:before {
            content: "\F00C"
        }

        .fa-check-circle:before {
            content: "\F058"
        }

        .fa-check-double:before {
            content: "\F560"
        }

        .fa-check-square:before {
            content: "\F14A"
        }

        .fa-cheese:before {
            content: "\F7EF"
        }

        .fa-chess:before {
            content: "\F439"
        }

        .fa-chess-bishop:before {
            content: "\F43A"
        }

        .fa-chess-board:before {
            content: "\F43C"
        }

        .fa-chess-king:before {
            content: "\F43F"
        }

        .fa-chess-knight:before {
            content: "\F441"
        }

        .fa-chess-pawn:before {
            content: "\F443"
        }

        .fa-chess-queen:before {
            content: "\F445"
        }

        .fa-chess-rook:before {
            content: "\F447"
        }

        .fa-chevron-circle-down:before {
            content: "\F13A"
        }

        .fa-chevron-circle-left:before {
            content: "\F137"
        }

        .fa-chevron-circle-right:before {
            content: "\F138"
        }

        .fa-chevron-circle-up:before {
            content: "\F139"
        }

        .fa-chevron-down:before {
            content: "\F078"
        }

        .fa-chevron-left:before {
            content: "\F053"
        }

        .fa-chevron-right:before {
            content: "\F054"
        }

        .fa-chevron-up:before {
            content: "\F077"
        }

        .fa-child:before {
            content: "\F1AE"
        }

        .fa-chrome:before {
            content: "\F268"
        }

        .fa-chromecast:before {
            content: "\F838"
        }

        .fa-church:before {
            content: "\F51D"
        }

        .fa-circle:before {
            content: "\F111"
        }

        .fa-circle-notch:before {
            content: "\F1CE"
        }

        .fa-city:before {
            content: "\F64F"
        }

        .fa-clinic-medical:before {
            content: "\F7F2"
        }

        .fa-clipboard:before {
            content: "\F328"
        }

        .fa-clipboard-check:before {
            content: "\F46C"
        }

        .fa-clipboard-list:before {
            content: "\F46D"
        }

        .fa-clock:before {
            content: "\F017"
        }

        .fa-clone:before {
            content: "\F24D"
        }

        .fa-closed-captioning:before {
            content: "\F20A"
        }

        .fa-cloud:before {
            content: "\F0C2"
        }

        .fa-cloud-download-alt:before {
            content: "\F381"
        }

        .fa-cloud-meatball:before {
            content: "\F73B"
        }

        .fa-cloud-moon:before {
            content: "\F6C3"
        }

        .fa-cloud-moon-rain:before {
            content: "\F73C"
        }

        .fa-cloud-rain:before {
            content: "\F73D"
        }

        .fa-cloud-showers-heavy:before {
            content: "\F740"
        }

        .fa-cloud-sun:before {
            content: "\F6C4"
        }

        .fa-cloud-sun-rain:before {
            content: "\F743"
        }

        .fa-cloud-upload-alt:before {
            content: "\F382"
        }

        .fa-cloudscale:before {
            content: "\F383"
        }

        .fa-cloudsmith:before {
            content: "\F384"
        }

        .fa-cloudversify:before {
            content: "\F385"
        }

        .fa-cocktail:before {
            content: "\F561"
        }

        .fa-code:before {
            content: "\F121"
        }

        .fa-code-branch:before {
            content: "\F126"
        }

        .fa-codepen:before {
            content: "\F1CB"
        }

        .fa-codiepie:before {
            content: "\F284"
        }

        .fa-coffee:before {
            content: "\F0F4"
        }

        .fa-cog:before {
            content: "\F013"
        }

        .fa-cogs:before {
            content: "\F085"
        }

        .fa-coins:before {
            content: "\F51E"
        }

        .fa-columns:before {
            content: "\F0DB"
        }

        .fa-comment:before {
            content: "\F075"
        }

        .fa-comment-alt:before {
            content: "\F27A"
        }

        .fa-comment-dollar:before {
            content: "\F651"
        }

        .fa-comment-dots:before {
            content: "\F4AD"
        }

        .fa-comment-medical:before {
            content: "\F7F5"
        }

        .fa-comment-slash:before {
            content: "\F4B3"
        }

        .fa-comments:before {
            content: "\F086"
        }

        .fa-comments-dollar:before {
            content: "\F653"
        }

        .fa-compact-disc:before {
            content: "\F51F"
        }

        .fa-compass:before {
            content: "\F14E"
        }

        .fa-compress:before {
            content: "\F066"
        }

        .fa-compress-arrows-alt:before {
            content: "\F78C"
        }

        .fa-concierge-bell:before {
            content: "\F562"
        }

        .fa-confluence:before {
            content: "\F78D"
        }

        .fa-connectdevelop:before {
            content: "\F20E"
        }

        .fa-contao:before {
            content: "\F26D"
        }

        .fa-cookie:before {
            content: "\F563"
        }

        .fa-cookie-bite:before {
            content: "\F564"
        }

        .fa-copy:before {
            content: "\F0C5"
        }

        .fa-copyright:before {
            content: "\F1F9"
        }

        .fa-couch:before {
            content: "\F4B8"
        }

        .fa-cpanel:before {
            content: "\F388"
        }

        .fa-creative-commons:before {
            content: "\F25E"
        }

        .fa-creative-commons-by:before {
            content: "\F4E7"
        }

        .fa-creative-commons-nc:before {
            content: "\F4E8"
        }

        .fa-creative-commons-nc-eu:before {
            content: "\F4E9"
        }

        .fa-creative-commons-nc-jp:before {
            content: "\F4EA"
        }

        .fa-creative-commons-nd:before {
            content: "\F4EB"
        }

        .fa-creative-commons-pd:before {
            content: "\F4EC"
        }

        .fa-creative-commons-pd-alt:before {
            content: "\F4ED"
        }

        .fa-creative-commons-remix:before {
            content: "\F4EE"
        }

        .fa-creative-commons-sa:before {
            content: "\F4EF"
        }

        .fa-creative-commons-sampling:before {
            content: "\F4F0"
        }

        .fa-creative-commons-sampling-plus:before {
            content: "\F4F1"
        }

        .fa-creative-commons-share:before {
            content: "\F4F2"
        }

        .fa-creative-commons-zero:before {
            content: "\F4F3"
        }

        .fa-credit-card:before {
            content: "\F09D"
        }

        .fa-critical-role:before {
            content: "\F6C9"
        }

        .fa-crop:before {
            content: "\F125"
        }

        .fa-crop-alt:before {
            content: "\F565"
        }

        .fa-cross:before {
            content: "\F654"
        }

        .fa-crosshairs:before {
            content: "\F05B"
        }

        .fa-crow:before {
            content: "\F520"
        }

        .fa-crown:before {
            content: "\F521"
        }

        .fa-crutch:before {
            content: "\F7F7"
        }

        .fa-css3:before {
            content: "\F13C"
        }

        .fa-css3-alt:before {
            content: "\F38B"
        }

        .fa-cube:before {
            content: "\F1B2"
        }

        .fa-cubes:before {
            content: "\F1B3"
        }

        .fa-cut:before {
            content: "\F0C4"
        }

        .fa-cuttlefish:before {
            content: "\F38C"
        }

        .fa-d-and-d:before {
            content: "\F38D"
        }

        .fa-d-and-d-beyond:before {
            content: "\F6CA"
        }

        .fa-dashcube:before {
            content: "\F210"
        }

        .fa-database:before {
            content: "\F1C0"
        }

        .fa-deaf:before {
            content: "\F2A4"
        }

        .fa-delicious:before {
            content: "\F1A5"
        }

        .fa-democrat:before {
            content: "\F747"
        }

        .fa-deploydog:before {
            content: "\F38E"
        }

        .fa-deskpro:before {
            content: "\F38F"
        }

        .fa-desktop:before {
            content: "\F108"
        }

        .fa-dev:before {
            content: "\F6CC"
        }

        .fa-deviantart:before {
            content: "\F1BD"
        }

        .fa-dharmachakra:before {
            content: "\F655"
        }

        .fa-dhl:before {
            content: "\F790"
        }

        .fa-diagnoses:before {
            content: "\F470"
        }

        .fa-diaspora:before {
            content: "\F791"
        }

        .fa-dice:before {
            content: "\F522"
        }

        .fa-dice-d20:before {
            content: "\F6CF"
        }

        .fa-dice-d6:before {
            content: "\F6D1"
        }

        .fa-dice-five:before {
            content: "\F523"
        }

        .fa-dice-four:before {
            content: "\F524"
        }

        .fa-dice-one:before {
            content: "\F525"
        }

        .fa-dice-six:before {
            content: "\F526"
        }

        .fa-dice-three:before {
            content: "\F527"
        }

        .fa-dice-two:before {
            content: "\F528"
        }

        .fa-digg:before {
            content: "\F1A6"
        }

        .fa-digital-ocean:before {
            content: "\F391"
        }

        .fa-digital-tachograph:before {
            content: "\F566"
        }

        .fa-directions:before {
            content: "\F5EB"
        }

        .fa-discord:before {
            content: "\F392"
        }

        .fa-discourse:before {
            content: "\F393"
        }

        .fa-divide:before {
            content: "\F529"
        }

        .fa-dizzy:before {
            content: "\F567"
        }

        .fa-dna:before {
            content: "\F471"
        }

        .fa-dochub:before {
            content: "\F394"
        }

        .fa-docker:before {
            content: "\F395"
        }

        .fa-dog:before {
            content: "\F6D3"
        }

        .fa-dollar-sign:before {
            content: "\F155"
        }

        .fa-dolly:before {
            content: "\F472"
        }

        .fa-dolly-flatbed:before {
            content: "\F474"
        }

        .fa-donate:before {
            content: "\F4B9"
        }

        .fa-door-closed:before {
            content: "\F52A"
        }

        .fa-door-open:before {
            content: "\F52B"
        }

        .fa-dot-circle:before {
            content: "\F192"
        }

        .fa-dove:before {
            content: "\F4BA"
        }

        .fa-download:before {
            content: "\F019"
        }

        .fa-draft2digital:before {
            content: "\F396"
        }

        .fa-drafting-compass:before {
            content: "\F568"
        }

        .fa-dragon:before {
            content: "\F6D5"
        }

        .fa-draw-polygon:before {
            content: "\F5EE"
        }

        .fa-dribbble:before {
            content: "\F17D"
        }

        .fa-dribbble-square:before {
            content: "\F397"
        }

        .fa-dropbox:before {
            content: "\F16B"
        }

        .fa-drum:before {
            content: "\F569"
        }

        .fa-drum-steelpan:before {
            content: "\F56A"
        }

        .fa-drumstick-bite:before {
            content: "\F6D7"
        }

        .fa-drupal:before {
            content: "\F1A9"
        }

        .fa-dumbbell:before {
            content: "\F44B"
        }

        .fa-dumpster:before {
            content: "\F793"
        }

        .fa-dumpster-fire:before {
            content: "\F794"
        }

        .fa-dungeon:before {
            content: "\F6D9"
        }

        .fa-dyalog:before {
            content: "\F399"
        }

        .fa-earlybirds:before {
            content: "\F39A"
        }

        .fa-ebay:before {
            content: "\F4F4"
        }

        .fa-edge:before {
            content: "\F282"
        }

        .fa-edit:before {
            content: "\F044"
        }

        .fa-egg:before {
            content: "\F7FB"
        }

        .fa-eject:before {
            content: "\F052"
        }

        .fa-elementor:before {
            content: "\F430"
        }

        .fa-ellipsis-h:before {
            content: "\F141"
        }

        .fa-ellipsis-v:before {
            content: "\F142"
        }

        .fa-ello:before {
            content: "\F5F1"
        }

        .fa-ember:before {
            content: "\F423"
        }

        .fa-empire:before {
            content: "\F1D1"
        }

        .fa-envelope:before {
            content: "\F0E0"
        }

        .fa-envelope-open:before {
            content: "\F2B6"
        }

        .fa-envelope-open-text:before {
            content: "\F658"
        }

        .fa-envelope-square:before {
            content: "\F199"
        }

        .fa-envira:before {
            content: "\F299"
        }

        .fa-equals:before {
            content: "\F52C"
        }

        .fa-eraser:before {
            content: "\F12D"
        }

        .fa-erlang:before {
            content: "\F39D"
        }

        .fa-ethereum:before {
            content: "\F42E"
        }

        .fa-ethernet:before {
            content: "\F796"
        }

        .fa-etsy:before {
            content: "\F2D7"
        }

        .fa-euro-sign:before {
            content: "\F153"
        }

        .fa-evernote:before {
            content: "\F839"
        }

        .fa-exchange-alt:before {
            content: "\F362"
        }

        .fa-exclamation:before {
            content: "\F12A"
        }

        .fa-exclamation-circle:before {
            content: "\F06A"
        }

        .fa-exclamation-triangle:before {
            content: "\F071"
        }

        .fa-expand:before {
            content: "\F065"
        }

        .fa-expand-arrows-alt:before {
            content: "\F31E"
        }

        .fa-expeditedssl:before {
            content: "\F23E"
        }

        .fa-external-link-alt:before {
            content: "\F35D"
        }

        .fa-external-link-square-alt:before {
            content: "\F360"
        }

        .fa-eye:before {
            content: "\F06E"
        }

        .fa-eye-dropper:before {
            content: "\F1FB"
        }

        .fa-eye-slash:before {
            content: "\F070"
        }

        .fa-facebook:before {
            content: "\F09A"
        }

        .fa-facebook-f:before {
            content: "\F39E"
        }

        .fa-facebook-messenger:before {
            content: "\F39F"
        }

        .fa-facebook-square:before {
            content: "\F082"
        }

        .fa-fantasy-flight-games:before {
            content: "\F6DC"
        }

        .fa-fast-backward:before {
            content: "\F049"
        }

        .fa-fast-forward:before {
            content: "\F050"
        }

        .fa-fax:before {
            content: "\F1AC"
        }

        .fa-feather:before {
            content: "\F52D"
        }

        .fa-feather-alt:before {
            content: "\F56B"
        }

        .fa-fedex:before {
            content: "\F797"
        }

        .fa-fedora:before {
            content: "\F798"
        }

        .fa-female:before {
            content: "\F182"
        }

        .fa-fighter-jet:before {
            content: "\F0FB"
        }

        .fa-figma:before {
            content: "\F799"
        }

        .fa-file:before {
            content: "\F15B"
        }

        .fa-file-alt:before {
            content: "\F15C"
        }

        .fa-file-archive:before {
            content: "\F1C6"
        }

        .fa-file-audio:before {
            content: "\F1C7"
        }

        .fa-file-code:before {
            content: "\F1C9"
        }

        .fa-file-contract:before {
            content: "\F56C"
        }

        .fa-file-csv:before {
            content: "\F6DD"
        }

        .fa-file-download:before {
            content: "\F56D"
        }

        .fa-file-excel:before {
            content: "\F1C3"
        }

        .fa-file-export:before {
            content: "\F56E"
        }

        .fa-file-image:before {
            content: "\F1C5"
        }

        .fa-file-import:before {
            content: "\F56F"
        }

        .fa-file-invoice:before {
            content: "\F570"
        }

        .fa-file-invoice-dollar:before {
            content: "\F571"
        }

        .fa-file-medical:before {
            content: "\F477"
        }

        .fa-file-medical-alt:before {
            content: "\F478"
        }

        .fa-file-pdf:before {
            content: "\F1C1"
        }

        .fa-file-powerpoint:before {
            content: "\F1C4"
        }

        .fa-file-prescription:before {
            content: "\F572"
        }

        .fa-file-signature:before {
            content: "\F573"
        }

        .fa-file-upload:before {
            content: "\F574"
        }

        .fa-file-video:before {
            content: "\F1C8"
        }

        .fa-file-word:before {
            content: "\F1C2"
        }

        .fa-fill:before {
            content: "\F575"
        }

        .fa-fill-drip:before {
            content: "\F576"
        }

        .fa-film:before {
            content: "\F008"
        }

        .fa-filter:before {
            content: "\F0B0"
        }

        .fa-fingerprint:before {
            content: "\F577"
        }

        .fa-fire:before {
            content: "\F06D"
        }

        .fa-fire-alt:before {
            content: "\F7E4"
        }

        .fa-fire-extinguisher:before {
            content: "\F134"
        }

        .fa-firefox:before {
            content: "\F269"
        }

        .fa-first-aid:before {
            content: "\F479"
        }

        .fa-first-order:before {
            content: "\F2B0"
        }

        .fa-first-order-alt:before {
            content: "\F50A"
        }

        .fa-firstdraft:before {
            content: "\F3A1"
        }

        .fa-fish:before {
            content: "\F578"
        }

        .fa-fist-raised:before {
            content: "\F6DE"
        }

        .fa-flag:before {
            content: "\F024"
        }

        .fa-flag-checkered:before {
            content: "\F11E"
        }

        .fa-flag-usa:before {
            content: "\F74D"
        }

        .fa-flask:before {
            content: "\F0C3"
        }

        .fa-flickr:before {
            content: "\F16E"
        }

        .fa-flipboard:before {
            content: "\F44D"
        }

        .fa-flushed:before {
            content: "\F579"
        }

        .fa-fly:before {
            content: "\F417"
        }

        .fa-folder:before {
            content: "\F07B"
        }

        .fa-folder-minus:before {
            content: "\F65D"
        }

        .fa-folder-open:before {
            content: "\F07C"
        }

        .fa-folder-plus:before {
            content: "\F65E"
        }

        .fa-font:before {
            content: "\F031"
        }

        .fa-font-awesome:before {
            content: "\F2B4"
        }

        .fa-font-awesome-alt:before {
            content: "\F35C"
        }

        .fa-font-awesome-flag:before {
            content: "\F425"
        }

        .fa-font-awesome-logo-full:before {
            content: "\F4E6"
        }

        .fa-fonticons:before {
            content: "\F280"
        }

        .fa-fonticons-fi:before {
            content: "\F3A2"
        }

        .fa-football-ball:before {
            content: "\F44E"
        }

        .fa-fort-awesome:before {
            content: "\F286"
        }

        .fa-fort-awesome-alt:before {
            content: "\F3A3"
        }

        .fa-forumbee:before {
            content: "\F211"
        }

        .fa-forward:before {
            content: "\F04E"
        }

        .fa-foursquare:before {
            content: "\F180"
        }

        .fa-free-code-camp:before {
            content: "\F2C5"
        }

        .fa-freebsd:before {
            content: "\F3A4"
        }

        .fa-frog:before {
            content: "\F52E"
        }

        .fa-frown:before {
            content: "\F119"
        }

        .fa-frown-open:before {
            content: "\F57A"
        }

        .fa-fulcrum:before {
            content: "\F50B"
        }

        .fa-funnel-dollar:before {
            content: "\F662"
        }

        .fa-futbol:before {
            content: "\F1E3"
        }

        .fa-galactic-republic:before {
            content: "\F50C"
        }

        .fa-galactic-senate:before {
            content: "\F50D"
        }

        .fa-gamepad:before {
            content: "\F11B"
        }

        .fa-gas-pump:before {
            content: "\F52F"
        }

        .fa-gavel:before {
            content: "\F0E3"
        }

        .fa-gem:before {
            content: "\F3A5"
        }

        .fa-genderless:before {
            content: "\F22D"
        }

        .fa-get-pocket:before {
            content: "\F265"
        }

        .fa-gg:before {
            content: "\F260"
        }

        .fa-gg-circle:before {
            content: "\F261"
        }

        .fa-ghost:before {
            content: "\F6E2"
        }

        .fa-gift:before {
            content: "\F06B"
        }

        .fa-gifts:before {
            content: "\F79C"
        }

        .fa-git:before {
            content: "\F1D3"
        }

        .fa-git-alt:before {
            content: "\F841"
        }

        .fa-git-square:before {
            content: "\F1D2"
        }

        .fa-github:before {
            content: "\F09B"
        }

        .fa-github-alt:before {
            content: "\F113"
        }

        .fa-github-square:before {
            content: "\F092"
        }

        .fa-gitkraken:before {
            content: "\F3A6"
        }

        .fa-gitlab:before {
            content: "\F296"
        }

        .fa-gitter:before {
            content: "\F426"
        }

        .fa-glass-cheers:before {
            content: "\F79F"
        }

        .fa-glass-martini:before {
            content: "\F000"
        }

        .fa-glass-martini-alt:before {
            content: "\F57B"
        }

        .fa-glass-whiskey:before {
            content: "\F7A0"
        }

        .fa-glasses:before {
            content: "\F530"
        }

        .fa-glide:before {
            content: "\F2A5"
        }

        .fa-glide-g:before {
            content: "\F2A6"
        }

        .fa-globe:before {
            content: "\F0AC"
        }

        .fa-globe-africa:before {
            content: "\F57C"
        }

        .fa-globe-americas:before {
            content: "\F57D"
        }

        .fa-globe-asia:before {
            content: "\F57E"
        }

        .fa-globe-europe:before {
            content: "\F7A2"
        }

        .fa-gofore:before {
            content: "\F3A7"
        }

        .fa-golf-ball:before {
            content: "\F450"
        }

        .fa-goodreads:before {
            content: "\F3A8"
        }

        .fa-goodreads-g:before {
            content: "\F3A9"
        }

        .fa-google:before {
            content: "\F1A0"
        }

        .fa-google-drive:before {
            content: "\F3AA"
        }

        .fa-google-play:before {
            content: "\F3AB"
        }

        .fa-google-plus:before {
            content: "\F2B3"
        }

        .fa-google-plus-g:before {
            content: "\F0D5"
        }

        .fa-google-plus-square:before {
            content: "\F0D4"
        }

        .fa-google-wallet:before {
            content: "\F1EE"
        }

        .fa-gopuram:before {
            content: "\F664"
        }

        .fa-graduation-cap:before {
            content: "\F19D"
        }

        .fa-gratipay:before {
            content: "\F184"
        }

        .fa-grav:before {
            content: "\F2D6"
        }

        .fa-greater-than:before {
            content: "\F531"
        }

        .fa-greater-than-equal:before {
            content: "\F532"
        }

        .fa-grimace:before {
            content: "\F57F"
        }

        .fa-grin:before {
            content: "\F580"
        }

        .fa-grin-alt:before {
            content: "\F581"
        }

        .fa-grin-beam:before {
            content: "\F582"
        }

        .fa-grin-beam-sweat:before {
            content: "\F583"
        }

        .fa-grin-hearts:before {
            content: "\F584"
        }

        .fa-grin-squint:before {
            content: "\F585"
        }

        .fa-grin-squint-tears:before {
            content: "\F586"
        }

        .fa-grin-stars:before {
            content: "\F587"
        }

        .fa-grin-tears:before {
            content: "\F588"
        }

        .fa-grin-tongue:before {
            content: "\F589"
        }

        .fa-grin-tongue-squint:before {
            content: "\F58A"
        }

        .fa-grin-tongue-wink:before {
            content: "\F58B"
        }

        .fa-grin-wink:before {
            content: "\F58C"
        }

        .fa-grip-horizontal:before {
            content: "\F58D"
        }

        .fa-grip-lines:before {
            content: "\F7A4"
        }

        .fa-grip-lines-vertical:before {
            content: "\F7A5"
        }

        .fa-grip-vertical:before {
            content: "\F58E"
        }

        .fa-gripfire:before {
            content: "\F3AC"
        }

        .fa-grunt:before {
            content: "\F3AD"
        }

        .fa-guitar:before {
            content: "\F7A6"
        }

        .fa-gulp:before {
            content: "\F3AE"
        }

        .fa-h-square:before {
            content: "\F0FD"
        }

        .fa-hacker-news:before {
            content: "\F1D4"
        }

        .fa-hacker-news-square:before {
            content: "\F3AF"
        }

        .fa-hackerrank:before {
            content: "\F5F7"
        }

        .fa-hamburger:before {
            content: "\F805"
        }

        .fa-hammer:before {
            content: "\F6E3"
        }

        .fa-hamsa:before {
            content: "\F665"
        }

        .fa-hand-holding:before {
            content: "\F4BD"
        }

        .fa-hand-holding-heart:before {
            content: "\F4BE"
        }

        .fa-hand-holding-usd:before {
            content: "\F4C0"
        }

        .fa-hand-lizard:before {
            content: "\F258"
        }

        .fa-hand-middle-finger:before {
            content: "\F806"
        }

        .fa-hand-paper:before {
            content: "\F256"
        }

        .fa-hand-peace:before {
            content: "\F25B"
        }

        .fa-hand-point-down:before {
            content: "\F0A7"
        }

        .fa-hand-point-left:before {
            content: "\F0A5"
        }

        .fa-hand-point-right:before {
            content: "\F0A4"
        }

        .fa-hand-point-up:before {
            content: "\F0A6"
        }

        .fa-hand-pointer:before {
            content: "\F25A"
        }

        .fa-hand-rock:before {
            content: "\F255"
        }

        .fa-hand-scissors:before {
            content: "\F257"
        }

        .fa-hand-spock:before {
            content: "\F259"
        }

        .fa-hands:before {
            content: "\F4C2"
        }

        .fa-hands-helping:before {
            content: "\F4C4"
        }

        .fa-handshake:before {
            content: "\F2B5"
        }

        .fa-hanukiah:before {
            content: "\F6E6"
        }

        .fa-hard-hat:before {
            content: "\F807"
        }

        .fa-hashtag:before {
            content: "\F292"
        }

        .fa-hat-wizard:before {
            content: "\F6E8"
        }

        .fa-haykal:before {
            content: "\F666"
        }

        .fa-hdd:before {
            content: "\F0A0"
        }

        .fa-heading:before {
            content: "\F1DC"
        }

        .fa-headphones:before {
            content: "\F025"
        }

        .fa-headphones-alt:before {
            content: "\F58F"
        }

        .fa-headset:before {
            content: "\F590"
        }

        .fa-heart:before {
            content: "\F004"
        }

        .fa-heart-broken:before {
            content: "\F7A9"
        }

        .fa-heartbeat:before {
            content: "\F21E"
        }

        .fa-helicopter:before {
            content: "\F533"
        }

        .fa-highlighter:before {
            content: "\F591"
        }

        .fa-hiking:before {
            content: "\F6EC"
        }

        .fa-hippo:before {
            content: "\F6ED"
        }

        .fa-hips:before {
            content: "\F452"
        }

        .fa-hire-a-helper:before {
            content: "\F3B0"
        }

        .fa-history:before {
            content: "\F1DA"
        }

        .fa-hockey-puck:before {
            content: "\F453"
        }

        .fa-holly-berry:before {
            content: "\F7AA"
        }

        .fa-home:before {
            content: "\F015"
        }

        .fa-hooli:before {
            content: "\F427"
        }

        .fa-hornbill:before {
            content: "\F592"
        }

        .fa-horse:before {
            content: "\F6F0"
        }

        .fa-horse-head:before {
            content: "\F7AB"
        }

        .fa-hospital:before {
            content: "\F0F8"
        }

        .fa-hospital-alt:before {
            content: "\F47D"
        }

        .fa-hospital-symbol:before {
            content: "\F47E"
        }

        .fa-hot-tub:before {
            content: "\F593"
        }

        .fa-hotdog:before {
            content: "\F80F"
        }

        .fa-hotel:before {
            content: "\F594"
        }

        .fa-hotjar:before {
            content: "\F3B1"
        }

        .fa-hourglass:before {
            content: "\F254"
        }

        .fa-hourglass-end:before {
            content: "\F253"
        }

        .fa-hourglass-half:before {
            content: "\F252"
        }

        .fa-hourglass-start:before {
            content: "\F251"
        }

        .fa-house-damage:before {
            content: "\F6F1"
        }

        .fa-houzz:before {
            content: "\F27C"
        }

        .fa-hryvnia:before {
            content: "\F6F2"
        }

        .fa-html5:before {
            content: "\F13B"
        }

        .fa-hubspot:before {
            content: "\F3B2"
        }

        .fa-i-cursor:before {
            content: "\F246"
        }

        .fa-ice-cream:before {
            content: "\F810"
        }

        .fa-icicles:before {
            content: "\F7AD"
        }

        .fa-id-badge:before {
            content: "\F2C1"
        }

        .fa-id-card:before {
            content: "\F2C2"
        }

        .fa-id-card-alt:before {
            content: "\F47F"
        }

        .fa-igloo:before {
            content: "\F7AE"
        }

        .fa-image:before {
            content: "\F03E"
        }

        .fa-images:before {
            content: "\F302"
        }

        .fa-imdb:before {
            content: "\F2D8"
        }

        .fa-inbox:before {
            content: "\F01C"
        }

        .fa-indent:before {
            content: "\F03C"
        }

        .fa-industry:before {
            content: "\F275"
        }

        .fa-infinity:before {
            content: "\F534"
        }

        .fa-info:before {
            content: "\F129"
        }

        .fa-info-circle:before {
            content: "\F05A"
        }

        .fa-instagram:before {
            content: "\F16D"
        }

        .fa-intercom:before {
            content: "\F7AF"
        }

        .fa-internet-explorer:before {
            content: "\F26B"
        }

        .fa-invision:before {
            content: "\F7B0"
        }

        .fa-ioxhost:before {
            content: "\F208"
        }

        .fa-italic:before {
            content: "\F033"
        }

        .fa-itch-io:before {
            content: "\F83A"
        }

        .fa-itunes:before {
            content: "\F3B4"
        }

        .fa-itunes-note:before {
            content: "\F3B5"
        }

        .fa-java:before {
            content: "\F4E4"
        }

        .fa-jedi:before {
            content: "\F669"
        }

        .fa-jedi-order:before {
            content: "\F50E"
        }

        .fa-jenkins:before {
            content: "\F3B6"
        }

        .fa-jira:before {
            content: "\F7B1"
        }

        .fa-joget:before {
            content: "\F3B7"
        }

        .fa-joint:before {
            content: "\F595"
        }

        .fa-joomla:before {
            content: "\F1AA"
        }

        .fa-journal-whills:before {
            content: "\F66A"
        }

        .fa-js:before {
            content: "\F3B8"
        }

        .fa-js-square:before {
            content: "\F3B9"
        }

        .fa-jsfiddle:before {
            content: "\F1CC"
        }

        .fa-kaaba:before {
            content: "\F66B"
        }

        .fa-kaggle:before {
            content: "\F5FA"
        }

        .fa-key:before {
            content: "\F084"
        }

        .fa-keybase:before {
            content: "\F4F5"
        }

        .fa-keyboard:before {
            content: "\F11C"
        }

        .fa-keycdn:before {
            content: "\F3BA"
        }

        .fa-khanda:before {
            content: "\F66D"
        }

        .fa-kickstarter:before {
            content: "\F3BB"
        }

        .fa-kickstarter-k:before {
            content: "\F3BC"
        }

        .fa-kiss:before {
            content: "\F596"
        }

        .fa-kiss-beam:before {
            content: "\F597"
        }

        .fa-kiss-wink-heart:before {
            content: "\F598"
        }

        .fa-kiwi-bird:before {
            content: "\F535"
        }

        .fa-korvue:before {
            content: "\F42F"
        }

        .fa-landmark:before {
            content: "\F66F"
        }

        .fa-language:before {
            content: "\F1AB"
        }

        .fa-laptop:before {
            content: "\F109"
        }

        .fa-laptop-code:before {
            content: "\F5FC"
        }

        .fa-laptop-medical:before {
            content: "\F812"
        }

        .fa-laravel:before {
            content: "\F3BD"
        }

        .fa-lastfm:before {
            content: "\F202"
        }

        .fa-lastfm-square:before {
            content: "\F203"
        }

        .fa-laugh:before {
            content: "\F599"
        }

        .fa-laugh-beam:before {
            content: "\F59A"
        }

        .fa-laugh-squint:before {
            content: "\F59B"
        }

        .fa-laugh-wink:before {
            content: "\F59C"
        }

        .fa-layer-group:before {
            content: "\F5FD"
        }

        .fa-leaf:before {
            content: "\F06C"
        }

        .fa-leanpub:before {
            content: "\F212"
        }

        .fa-lemon:before {
            content: "\F094"
        }

        .fa-less:before {
            content: "\F41D"
        }

        .fa-less-than:before {
            content: "\F536"
        }

        .fa-less-than-equal:before {
            content: "\F537"
        }

        .fa-level-down-alt:before {
            content: "\F3BE"
        }

        .fa-level-up-alt:before {
            content: "\F3BF"
        }

        .fa-life-ring:before {
            content: "\F1CD"
        }

        .fa-lightbulb:before {
            content: "\F0EB"
        }

        .fa-line:before {
            content: "\F3C0"
        }

        .fa-link:before {
            content: "\F0C1"
        }

        .fa-linkedin:before {
            content: "\F08C"
        }

        .fa-linkedin-in:before {
            content: "\F0E1"
        }

        .fa-linode:before {
            content: "\F2B8"
        }

        .fa-linux:before {
            content: "\F17C"
        }

        .fa-lira-sign:before {
            content: "\F195"
        }

        .fa-list:before {
            content: "\F03A"
        }

        .fa-list-alt:before {
            content: "\F022"
        }

        .fa-list-ol:before {
            content: "\F0CB"
        }

        .fa-list-ul:before {
            content: "\F0CA"
        }

        .fa-location-arrow:before {
            content: "\F124"
        }

        .fa-lock:before {
            content: "\F023"
        }

        .fa-lock-open:before {
            content: "\F3C1"
        }

        .fa-long-arrow-alt-down:before {
            content: "\F309"
        }

        .fa-long-arrow-alt-left:before {
            content: "\F30A"
        }

        .fa-long-arrow-alt-right:before {
            content: "\F30B"
        }

        .fa-long-arrow-alt-up:before {
            content: "\F30C"
        }

        .fa-low-vision:before {
            content: "\F2A8"
        }

        .fa-luggage-cart:before {
            content: "\F59D"
        }

        .fa-lyft:before {
            content: "\F3C3"
        }

        .fa-magento:before {
            content: "\F3C4"
        }

        .fa-magic:before {
            content: "\F0D0"
        }

        .fa-magnet:before {
            content: "\F076"
        }

        .fa-mail-bulk:before {
            content: "\F674"
        }

        .fa-mailchimp:before {
            content: "\F59E"
        }

        .fa-male:before {
            content: "\F183"
        }

        .fa-mandalorian:before {
            content: "\F50F"
        }

        .fa-map:before {
            content: "\F279"
        }

        .fa-map-marked:before {
            content: "\F59F"
        }

        .fa-map-marked-alt:before {
            content: "\F5A0"
        }

        .fa-map-marker:before {
            content: "\F041"
        }

        .fa-map-marker-alt:before {
            content: "\F3C5"
        }

        .fa-map-pin:before {
            content: "\F276"
        }

        .fa-map-signs:before {
            content: "\F277"
        }

        .fa-markdown:before {
            content: "\F60F"
        }

        .fa-marker:before {
            content: "\F5A1"
        }

        .fa-mars:before {
            content: "\F222"
        }

        .fa-mars-double:before {
            content: "\F227"
        }

        .fa-mars-stroke:before {
            content: "\F229"
        }

        .fa-mars-stroke-h:before {
            content: "\F22B"
        }

        .fa-mars-stroke-v:before {
            content: "\F22A"
        }

        .fa-mask:before {
            content: "\F6FA"
        }

        .fa-mastodon:before {
            content: "\F4F6"
        }

        .fa-maxcdn:before {
            content: "\F136"
        }

        .fa-medal:before {
            content: "\F5A2"
        }

        .fa-medapps:before {
            content: "\F3C6"
        }

        .fa-medium:before {
            content: "\F23A"
        }

        .fa-medium-m:before {
            content: "\F3C7"
        }

        .fa-medkit:before {
            content: "\F0FA"
        }

        .fa-medrt:before {
            content: "\F3C8"
        }

        .fa-meetup:before {
            content: "\F2E0"
        }

        .fa-megaport:before {
            content: "\F5A3"
        }

        .fa-meh:before {
            content: "\F11A"
        }

        .fa-meh-blank:before {
            content: "\F5A4"
        }

        .fa-meh-rolling-eyes:before {
            content: "\F5A5"
        }

        .fa-memory:before {
            content: "\F538"
        }

        .fa-mendeley:before {
            content: "\F7B3"
        }

        .fa-menorah:before {
            content: "\F676"
        }

        .fa-mercury:before {
            content: "\F223"
        }

        .fa-meteor:before {
            content: "\F753"
        }

        .fa-microchip:before {
            content: "\F2DB"
        }

        .fa-microphone:before {
            content: "\F130"
        }

        .fa-microphone-alt:before {
            content: "\F3C9"
        }

        .fa-microphone-alt-slash:before {
            content: "\F539"
        }

        .fa-microphone-slash:before {
            content: "\F131"
        }

        .fa-microscope:before {
            content: "\F610"
        }

        .fa-microsoft:before {
            content: "\F3CA"
        }

        .fa-minus:before {
            content: "\F068"
        }

        .fa-minus-circle:before {
            content: "\F056"
        }

        .fa-minus-square:before {
            content: "\F146"
        }

        .fa-mitten:before {
            content: "\F7B5"
        }

        .fa-mix:before {
            content: "\F3CB"
        }

        .fa-mixcloud:before {
            content: "\F289"
        }

        .fa-mizuni:before {
            content: "\F3CC"
        }

        .fa-mobile:before {
            content: "\F10B"
        }

        .fa-mobile-alt:before {
            content: "\F3CD"
        }

        .fa-modx:before {
            content: "\F285"
        }

        .fa-monero:before {
            content: "\F3D0"
        }

        .fa-money-bill:before {
            content: "\F0D6"
        }

        .fa-money-bill-alt:before {
            content: "\F3D1"
        }

        .fa-money-bill-wave:before {
            content: "\F53A"
        }

        .fa-money-bill-wave-alt:before {
            content: "\F53B"
        }

        .fa-money-check:before {
            content: "\F53C"
        }

        .fa-money-check-alt:before {
            content: "\F53D"
        }

        .fa-monument:before {
            content: "\F5A6"
        }

        .fa-moon:before {
            content: "\F186"
        }

        .fa-mortar-pestle:before {
            content: "\F5A7"
        }

        .fa-mosque:before {
            content: "\F678"
        }

        .fa-motorcycle:before {
            content: "\F21C"
        }

        .fa-mountain:before {
            content: "\F6FC"
        }

        .fa-mouse-pointer:before {
            content: "\F245"
        }

        .fa-mug-hot:before {
            content: "\F7B6"
        }

        .fa-music:before {
            content: "\F001"
        }

        .fa-napster:before {
            content: "\F3D2"
        }

        .fa-neos:before {
            content: "\F612"
        }

        .fa-network-wired:before {
            content: "\F6FF"
        }

        .fa-neuter:before {
            content: "\F22C"
        }

        .fa-newspaper:before {
            content: "\F1EA"
        }

        .fa-nimblr:before {
            content: "\F5A8"
        }

        .fa-nintendo-switch:before {
            content: "\F418"
        }

        .fa-node:before {
            content: "\F419"
        }

        .fa-node-js:before {
            content: "\F3D3"
        }

        .fa-not-equal:before {
            content: "\F53E"
        }

        .fa-notes-medical:before {
            content: "\F481"
        }

        .fa-npm:before {
            content: "\F3D4"
        }

        .fa-ns8:before {
            content: "\F3D5"
        }

        .fa-nutritionix:before {
            content: "\F3D6"
        }

        .fa-object-group:before {
            content: "\F247"
        }

        .fa-object-ungroup:before {
            content: "\F248"
        }

        .fa-odnoklassniki:before {
            content: "\F263"
        }

        .fa-odnoklassniki-square:before {
            content: "\F264"
        }

        .fa-oil-can:before {
            content: "\F613"
        }

        .fa-old-republic:before {
            content: "\F510"
        }

        .fa-om:before {
            content: "\F679"
        }

        .fa-opencart:before {
            content: "\F23D"
        }

        .fa-openid:before {
            content: "\F19B"
        }

        .fa-opera:before {
            content: "\F26A"
        }

        .fa-optin-monster:before {
            content: "\F23C"
        }

        .fa-osi:before {
            content: "\F41A"
        }

        .fa-otter:before {
            content: "\F700"
        }

        .fa-outdent:before {
            content: "\F03B"
        }

        .fa-page4:before {
            content: "\F3D7"
        }

        .fa-pagelines:before {
            content: "\F18C"
        }

        .fa-pager:before {
            content: "\F815"
        }

        .fa-paint-brush:before {
            content: "\F1FC"
        }

        .fa-paint-roller:before {
            content: "\F5AA"
        }

        .fa-palette:before {
            content: "\F53F"
        }

        .fa-palfed:before {
            content: "\F3D8"
        }

        .fa-pallet:before {
            content: "\F482"
        }

        .fa-paper-plane:before {
            content: "\F1D8"
        }

        .fa-paperclip:before {
            content: "\F0C6"
        }

        .fa-parachute-box:before {
            content: "\F4CD"
        }

        .fa-paragraph:before {
            content: "\F1DD"
        }

        .fa-parking:before {
            content: "\F540"
        }

        .fa-passport:before {
            content: "\F5AB"
        }

        .fa-pastafarianism:before {
            content: "\F67B"
        }

        .fa-paste:before {
            content: "\F0EA"
        }

        .fa-patreon:before {
            content: "\F3D9"
        }

        .fa-pause:before {
            content: "\F04C"
        }

        .fa-pause-circle:before {
            content: "\F28B"
        }

        .fa-paw:before {
            content: "\F1B0"
        }

        .fa-paypal:before {
            content: "\F1ED"
        }

        .fa-peace:before {
            content: "\F67C"
        }

        .fa-pen:before {
            content: "\F304"
        }

        .fa-pen-alt:before {
            content: "\F305"
        }

        .fa-pen-fancy:before {
            content: "\F5AC"
        }

        .fa-pen-nib:before {
            content: "\F5AD"
        }

        .fa-pen-square:before {
            content: "\F14B"
        }

        .fa-pencil-alt:before {
            content: "\F303"
        }

        .fa-pencil-ruler:before {
            content: "\F5AE"
        }

        .fa-penny-arcade:before {
            content: "\F704"
        }

        .fa-people-carry:before {
            content: "\F4CE"
        }

        .fa-pepper-hot:before {
            content: "\F816"
        }

        .fa-percent:before {
            content: "\F295"
        }

        .fa-percentage:before {
            content: "\F541"
        }

        .fa-periscope:before {
            content: "\F3DA"
        }

        .fa-person-booth:before {
            content: "\F756"
        }

        .fa-phabricator:before {
            content: "\F3DB"
        }

        .fa-phoenix-framework:before {
            content: "\F3DC"
        }

        .fa-phoenix-squadron:before {
            content: "\F511"
        }

        .fa-phone:before {
            content: "\F095"
        }

        .fa-phone-slash:before {
            content: "\F3DD"
        }

        .fa-phone-square:before {
            content: "\F098"
        }

        .fa-phone-volume:before {
            content: "\F2A0"
        }

        .fa-php:before {
            content: "\F457"
        }

        .fa-pied-piper:before {
            content: "\F2AE"
        }

        .fa-pied-piper-alt:before {
            content: "\F1A8"
        }

        .fa-pied-piper-hat:before {
            content: "\F4E5"
        }

        .fa-pied-piper-pp:before {
            content: "\F1A7"
        }

        .fa-piggy-bank:before {
            content: "\F4D3"
        }

        .fa-pills:before {
            content: "\F484"
        }

        .fa-pinterest:before {
            content: "\F0D2"
        }

        .fa-pinterest-p:before {
            content: "\F231"
        }

        .fa-pinterest-square:before {
            content: "\F0D3"
        }

        .fa-pizza-slice:before {
            content: "\F818"
        }

        .fa-place-of-worship:before {
            content: "\F67F"
        }

        .fa-plane:before {
            content: "\F072"
        }

        .fa-plane-arrival:before {
            content: "\F5AF"
        }

        .fa-plane-departure:before {
            content: "\F5B0"
        }

        .fa-play:before {
            content: "\F04B"
        }

        .fa-play-circle:before {
            content: "\F144"
        }

        .fa-playstation:before {
            content: "\F3DF"
        }

        .fa-plug:before {
            content: "\F1E6"
        }

        .fa-plus:before {
            content: "\F067"
        }

        .fa-plus-circle:before {
            content: "\F055"
        }

        .fa-plus-square:before {
            content: "\F0FE"
        }

        .fa-podcast:before {
            content: "\F2CE"
        }

        .fa-poll:before {
            content: "\F681"
        }

        .fa-poll-h:before {
            content: "\F682"
        }

        .fa-poo:before {
            content: "\F2FE"
        }

        .fa-poo-storm:before {
            content: "\F75A"
        }

        .fa-poop:before {
            content: "\F619"
        }

        .fa-portrait:before {
            content: "\F3E0"
        }

        .fa-pound-sign:before {
            content: "\F154"
        }

        .fa-power-off:before {
            content: "\F011"
        }

        .fa-pray:before {
            content: "\F683"
        }

        .fa-praying-hands:before {
            content: "\F684"
        }

        .fa-prescription:before {
            content: "\F5B1"
        }

        .fa-prescription-bottle:before {
            content: "\F485"
        }

        .fa-prescription-bottle-alt:before {
            content: "\F486"
        }

        .fa-print:before {
            content: "\F02F"
        }

        .fa-procedures:before {
            content: "\F487"
        }

        .fa-product-hunt:before {
            content: "\F288"
        }

        .fa-project-diagram:before {
            content: "\F542"
        }

        .fa-pushed:before {
            content: "\F3E1"
        }

        .fa-puzzle-piece:before {
            content: "\F12E"
        }

        .fa-python:before {
            content: "\F3E2"
        }

        .fa-qq:before {
            content: "\F1D6"
        }

        .fa-qrcode:before {
            content: "\F029"
        }

        .fa-question:before {
            content: "\F128"
        }

        .fa-question-circle:before {
            content: "\F059"
        }

        .fa-quidditch:before {
            content: "\F458"
        }

        .fa-quinscape:before {
            content: "\F459"
        }

        .fa-quora:before {
            content: "\F2C4"
        }

        .fa-quote-left:before {
            content: "\F10D"
        }

        .fa-quote-right:before {
            content: "\F10E"
        }

        .fa-quran:before {
            content: "\F687"
        }

        .fa-r-project:before {
            content: "\F4F7"
        }

        .fa-radiation:before {
            content: "\F7B9"
        }

        .fa-radiation-alt:before {
            content: "\F7BA"
        }

        .fa-rainbow:before {
            content: "\F75B"
        }

        .fa-random:before {
            content: "\F074"
        }

        .fa-raspberry-pi:before {
            content: "\F7BB"
        }

        .fa-ravelry:before {
            content: "\F2D9"
        }

        .fa-react:before {
            content: "\F41B"
        }

        .fa-reacteurope:before {
            content: "\F75D"
        }

        .fa-readme:before {
            content: "\F4D5"
        }

        .fa-rebel:before {
            content: "\F1D0"
        }

        .fa-receipt:before {
            content: "\F543"
        }

        .fa-recycle:before {
            content: "\F1B8"
        }

        .fa-red-river:before {
            content: "\F3E3"
        }

        .fa-reddit:before {
            content: "\F1A1"
        }

        .fa-reddit-alien:before {
            content: "\F281"
        }

        .fa-reddit-square:before {
            content: "\F1A2"
        }

        .fa-redhat:before {
            content: "\F7BC"
        }

        .fa-redo:before {
            content: "\F01E"
        }

        .fa-redo-alt:before {
            content: "\F2F9"
        }

        .fa-registered:before {
            content: "\F25D"
        }

        .fa-renren:before {
            content: "\F18B"
        }

        .fa-reply:before {
            content: "\F3E5"
        }

        .fa-reply-all:before {
            content: "\F122"
        }

        .fa-replyd:before {
            content: "\F3E6"
        }

        .fa-republican:before {
            content: "\F75E"
        }

        .fa-researchgate:before {
            content: "\F4F8"
        }

        .fa-resolving:before {
            content: "\F3E7"
        }

        .fa-restroom:before {
            content: "\F7BD"
        }

        .fa-retweet:before {
            content: "\F079"
        }

        .fa-rev:before {
            content: "\F5B2"
        }

        .fa-ribbon:before {
            content: "\F4D6"
        }

        .fa-ring:before {
            content: "\F70B"
        }

        .fa-road:before {
            content: "\F018"
        }

        .fa-robot:before {
            content: "\F544"
        }

        .fa-rocket:before {
            content: "\F135"
        }

        .fa-rocketchat:before {
            content: "\F3E8"
        }

        .fa-rockrms:before {
            content: "\F3E9"
        }

        .fa-route:before {
            content: "\F4D7"
        }

        .fa-rss:before {
            content: "\F09E"
        }

        .fa-rss-square:before {
            content: "\F143"
        }

        .fa-ruble-sign:before {
            content: "\F158"
        }

        .fa-ruler:before {
            content: "\F545"
        }

        .fa-ruler-combined:before {
            content: "\F546"
        }

        .fa-ruler-horizontal:before {
            content: "\F547"
        }

        .fa-ruler-vertical:before {
            content: "\F548"
        }

        .fa-running:before {
            content: "\F70C"
        }

        .fa-rupee-sign:before {
            content: "\F156"
        }

        .fa-sad-cry:before {
            content: "\F5B3"
        }

        .fa-sad-tear:before {
            content: "\F5B4"
        }

        .fa-safari:before {
            content: "\F267"
        }

        .fa-salesforce:before {
            content: "\F83B"
        }

        .fa-sass:before {
            content: "\F41E"
        }

        .fa-satellite:before {
            content: "\F7BF"
        }

        .fa-satellite-dish:before {
            content: "\F7C0"
        }

        .fa-save:before {
            content: "\F0C7"
        }

        .fa-schlix:before {
            content: "\F3EA"
        }

        .fa-school:before {
            content: "\F549"
        }

        .fa-screwdriver:before {
            content: "\F54A"
        }

        .fa-scribd:before {
            content: "\F28A"
        }

        .fa-scroll:before {
            content: "\F70E"
        }

        .fa-sd-card:before {
            content: "\F7C2"
        }

        .fa-search:before {
            content: "\F002"
        }

        .fa-search-dollar:before {
            content: "\F688"
        }

        .fa-search-location:before {
            content: "\F689"
        }

        .fa-search-minus:before {
            content: "\F010"
        }

        .fa-search-plus:before {
            content: "\F00E"
        }

        .fa-searchengin:before {
            content: "\F3EB"
        }

        .fa-seedling:before {
            content: "\F4D8"
        }

        .fa-sellcast:before {
            content: "\F2DA"
        }

        .fa-sellsy:before {
            content: "\F213"
        }

        .fa-server:before {
            content: "\F233"
        }

        .fa-servicestack:before {
            content: "\F3EC"
        }

        .fa-shapes:before {
            content: "\F61F"
        }

        .fa-share:before {
            content: "\F064"
        }

        .fa-share-alt:before {
            content: "\F1E0"
        }

        .fa-share-alt-square:before {
            content: "\F1E1"
        }

        .fa-share-square:before {
            content: "\F14D"
        }

        .fa-shekel-sign:before {
            content: "\F20B"
        }

        .fa-shield-alt:before {
            content: "\F3ED"
        }

        .fa-ship:before {
            content: "\F21A"
        }

        .fa-shipping-fast:before {
            content: "\F48B"
        }

        .fa-shirtsinbulk:before {
            content: "\F214"
        }

        .fa-shoe-prints:before {
            content: "\F54B"
        }

        .fa-shopping-bag:before {
            content: "\F290"
        }

        .fa-shopping-basket:before {
            content: "\F291"
        }

        .fa-shopping-cart:before {
            content: "\F07A"
        }

        .fa-shopware:before {
            content: "\F5B5"
        }

        .fa-shower:before {
            content: "\F2CC"
        }

        .fa-shuttle-van:before {
            content: "\F5B6"
        }

        .fa-sign:before {
            content: "\F4D9"
        }

        .fa-sign-in-alt:before {
            content: "\F2F6"
        }

        .fa-sign-language:before {
            content: "\F2A7"
        }

        .fa-sign-out-alt:before {
            content: "\F2F5"
        }

        .fa-signal:before {
            content: "\F012"
        }

        .fa-signature:before {
            content: "\F5B7"
        }

        .fa-sim-card:before {
            content: "\F7C4"
        }

        .fa-simplybuilt:before {
            content: "\F215"
        }

        .fa-sistrix:before {
            content: "\F3EE"
        }

        .fa-sitemap:before {
            content: "\F0E8"
        }

        .fa-sith:before {
            content: "\F512"
        }

        .fa-skating:before {
            content: "\F7C5"
        }

        .fa-sketch:before {
            content: "\F7C6"
        }

        .fa-skiing:before {
            content: "\F7C9"
        }

        .fa-skiing-nordic:before {
            content: "\F7CA"
        }

        .fa-skull:before {
            content: "\F54C"
        }

        .fa-skull-crossbones:before {
            content: "\F714"
        }

        .fa-skyatlas:before {
            content: "\F216"
        }

        .fa-skype:before {
            content: "\F17E"
        }

        .fa-slack:before {
            content: "\F198"
        }

        .fa-slack-hash:before {
            content: "\F3EF"
        }

        .fa-slash:before {
            content: "\F715"
        }

        .fa-sleigh:before {
            content: "\F7CC"
        }

        .fa-sliders-h:before {
            content: "\F1DE"
        }

        .fa-slideshare:before {
            content: "\F1E7"
        }

        .fa-smile:before {
            content: "\F118"
        }

        .fa-smile-beam:before {
            content: "\F5B8"
        }

        .fa-smile-wink:before {
            content: "\F4DA"
        }

        .fa-smog:before {
            content: "\F75F"
        }

        .fa-smoking:before {
            content: "\F48D"
        }

        .fa-smoking-ban:before {
            content: "\F54D"
        }

        .fa-sms:before {
            content: "\F7CD"
        }

        .fa-snapchat:before {
            content: "\F2AB"
        }

        .fa-snapchat-ghost:before {
            content: "\F2AC"
        }

        .fa-snapchat-square:before {
            content: "\F2AD"
        }

        .fa-snowboarding:before {
            content: "\F7CE"
        }

        .fa-snowflake:before {
            content: "\F2DC"
        }

        .fa-snowman:before {
            content: "\F7D0"
        }

        .fa-snowplow:before {
            content: "\F7D2"
        }

        .fa-socks:before {
            content: "\F696"
        }

        .fa-solar-panel:before {
            content: "\F5BA"
        }

        .fa-sort:before {
            content: "\F0DC"
        }

        .fa-sort-alpha-down:before {
            content: "\F15D"
        }

        .fa-sort-alpha-up:before {
            content: "\F15E"
        }

        .fa-sort-amount-down:before {
            content: "\F160"
        }

        .fa-sort-amount-up:before {
            content: "\F161"
        }

        .fa-sort-down:before {
            content: "\F0DD"
        }

        .fa-sort-numeric-down:before {
            content: "\F162"
        }

        .fa-sort-numeric-up:before {
            content: "\F163"
        }

        .fa-sort-up:before {
            content: "\F0DE"
        }

        .fa-soundcloud:before {
            content: "\F1BE"
        }

        .fa-sourcetree:before {
            content: "\F7D3"
        }

        .fa-spa:before {
            content: "\F5BB"
        }

        .fa-space-shuttle:before {
            content: "\F197"
        }

        .fa-speakap:before {
            content: "\F3F3"
        }

        .fa-speaker-deck:before {
            content: "\F83C"
        }

        .fa-spider:before {
            content: "\F717"
        }

        .fa-spinner:before {
            content: "\F110"
        }

        .fa-splotch:before {
            content: "\F5BC"
        }

        .fa-spotify:before {
            content: "\F1BC"
        }

        .fa-spray-can:before {
            content: "\F5BD"
        }

        .fa-square:before {
            content: "\F0C8"
        }

        .fa-square-full:before {
            content: "\F45C"
        }

        .fa-square-root-alt:before {
            content: "\F698"
        }

        .fa-squarespace:before {
            content: "\F5BE"
        }

        .fa-stack-exchange:before {
            content: "\F18D"
        }

        .fa-stack-overflow:before {
            content: "\F16C"
        }

        .fa-stackpath:before {
            content: "\F842"
        }

        .fa-stamp:before {
            content: "\F5BF"
        }

        .fa-star:before {
            content: "\F005"
        }

        .fa-star-and-crescent:before {
            content: "\F699"
        }

        .fa-star-half:before {
            content: "\F089"
        }

        .fa-star-half-alt:before {
            content: "\F5C0"
        }

        .fa-star-of-david:before {
            content: "\F69A"
        }

        .fa-star-of-life:before {
            content: "\F621"
        }

        .fa-staylinked:before {
            content: "\F3F5"
        }

        .fa-steam:before {
            content: "\F1B6"
        }

        .fa-steam-square:before {
            content: "\F1B7"
        }

        .fa-steam-symbol:before {
            content: "\F3F6"
        }

        .fa-step-backward:before {
            content: "\F048"
        }

        .fa-step-forward:before {
            content: "\F051"
        }

        .fa-stethoscope:before {
            content: "\F0F1"
        }

        .fa-sticker-mule:before {
            content: "\F3F7"
        }

        .fa-sticky-note:before {
            content: "\F249"
        }

        .fa-stop:before {
            content: "\F04D"
        }

        .fa-stop-circle:before {
            content: "\F28D"
        }

        .fa-stopwatch:before {
            content: "\F2F2"
        }

        .fa-store:before {
            content: "\F54E"
        }

        .fa-store-alt:before {
            content: "\F54F"
        }

        .fa-strava:before {
            content: "\F428"
        }

        .fa-stream:before {
            content: "\F550"
        }

        .fa-street-view:before {
            content: "\F21D"
        }

        .fa-strikethrough:before {
            content: "\F0CC"
        }

        .fa-stripe:before {
            content: "\F429"
        }

        .fa-stripe-s:before {
            content: "\F42A"
        }

        .fa-stroopwafel:before {
            content: "\F551"
        }

        .fa-studiovinari:before {
            content: "\F3F8"
        }

        .fa-stumbleupon:before {
            content: "\F1A4"
        }

        .fa-stumbleupon-circle:before {
            content: "\F1A3"
        }

        .fa-subscript:before {
            content: "\F12C"
        }

        .fa-subway:before {
            content: "\F239"
        }

        .fa-suitcase:before {
            content: "\F0F2"
        }

        .fa-suitcase-rolling:before {
            content: "\F5C1"
        }

        .fa-sun:before {
            content: "\F185"
        }

        .fa-superpowers:before {
            content: "\F2DD"
        }

        .fa-superscript:before {
            content: "\F12B"
        }

        .fa-supple:before {
            content: "\F3F9"
        }

        .fa-surprise:before {
            content: "\F5C2"
        }

        .fa-suse:before {
            content: "\F7D6"
        }

        .fa-swatchbook:before {
            content: "\F5C3"
        }

        .fa-swimmer:before {
            content: "\F5C4"
        }

        .fa-swimming-pool:before {
            content: "\F5C5"
        }

        .fa-symfony:before {
            content: "\F83D"
        }

        .fa-synagogue:before {
            content: "\F69B"
        }

        .fa-sync:before {
            content: "\F021"
        }

        .fa-sync-alt:before {
            content: "\F2F1"
        }

        .fa-syringe:before {
            content: "\F48E"
        }

        .fa-table:before {
            content: "\F0CE"
        }

        .fa-table-tennis:before {
            content: "\F45D"
        }

        .fa-tablet:before {
            content: "\F10A"
        }

        .fa-tablet-alt:before {
            content: "\F3FA"
        }

        .fa-tablets:before {
            content: "\F490"
        }

        .fa-tachometer-alt:before {
            content: "\F3FD"
        }

        .fa-tag:before {
            content: "\F02B"
        }

        .fa-tags:before {
            content: "\F02C"
        }

        .fa-tape:before {
            content: "\F4DB"
        }

        .fa-tasks:before {
            content: "\F0AE"
        }

        .fa-taxi:before {
            content: "\F1BA"
        }

        .fa-teamspeak:before {
            content: "\F4F9"
        }

        .fa-teeth:before {
            content: "\F62E"
        }

        .fa-teeth-open:before {
            content: "\F62F"
        }

        .fa-telegram:before {
            content: "\F2C6"
        }

        .fa-telegram-plane:before {
            content: "\F3FE"
        }

        .fa-temperature-high:before {
            content: "\F769"
        }

        .fa-temperature-low:before {
            content: "\F76B"
        }

        .fa-tencent-weibo:before {
            content: "\F1D5"
        }

        .fa-tenge:before {
            content: "\F7D7"
        }

        .fa-terminal:before {
            content: "\F120"
        }

        .fa-text-height:before {
            content: "\F034"
        }

        .fa-text-width:before {
            content: "\F035"
        }

        .fa-th:before {
            content: "\F00A"
        }

        .fa-th-large:before {
            content: "\F009"
        }

        .fa-th-list:before {
            content: "\F00B"
        }

        .fa-the-red-yeti:before {
            content: "\F69D"
        }

        .fa-theater-masks:before {
            content: "\F630"
        }

        .fa-themeco:before {
            content: "\F5C6"
        }

        .fa-themeisle:before {
            content: "\F2B2"
        }

        .fa-thermometer:before {
            content: "\F491"
        }

        .fa-thermometer-empty:before {
            content: "\F2CB"
        }

        .fa-thermometer-full:before {
            content: "\F2C7"
        }

        .fa-thermometer-half:before {
            content: "\F2C9"
        }

        .fa-thermometer-quarter:before {
            content: "\F2CA"
        }

        .fa-thermometer-three-quarters:before {
            content: "\F2C8"
        }

        .fa-think-peaks:before {
            content: "\F731"
        }

        .fa-thumbs-down:before {
            content: "\F165"
        }

        .fa-thumbs-up:before {
            content: "\F164"
        }

        .fa-thumbtack:before {
            content: "\F08D"
        }

        .fa-ticket-alt:before {
            content: "\F3FF"
        }

        .fa-times:before {
            content: "\F00D"
        }

        .fa-times-circle:before {
            content: "\F057"
        }

        .fa-tint:before {
            content: "\F043"
        }

        .fa-tint-slash:before {
            content: "\F5C7"
        }

        .fa-tired:before {
            content: "\F5C8"
        }

        .fa-toggle-off:before {
            content: "\F204"
        }

        .fa-toggle-on:before {
            content: "\F205"
        }

        .fa-toilet:before {
            content: "\F7D8"
        }

        .fa-toilet-paper:before {
            content: "\F71E"
        }

        .fa-toolbox:before {
            content: "\F552"
        }

        .fa-tools:before {
            content: "\F7D9"
        }

        .fa-tooth:before {
            content: "\F5C9"
        }

        .fa-torah:before {
            content: "\F6A0"
        }

        .fa-torii-gate:before {
            content: "\F6A1"
        }

        .fa-tractor:before {
            content: "\F722"
        }

        .fa-trade-federation:before {
            content: "\F513"
        }

        .fa-trademark:before {
            content: "\F25C"
        }

        .fa-traffic-light:before {
            content: "\F637"
        }

        .fa-train:before {
            content: "\F238"
        }

        .fa-tram:before {
            content: "\F7DA"
        }

        .fa-transgender:before {
            content: "\F224"
        }

        .fa-transgender-alt:before {
            content: "\F225"
        }

        .fa-trash:before {
            content: "\F1F8"
        }

        .fa-trash-alt:before {
            content: "\F2ED"
        }

        .fa-trash-restore:before {
            content: "\F829"
        }

        .fa-trash-restore-alt:before {
            content: "\F82A"
        }

        .fa-tree:before {
            content: "\F1BB"
        }

        .fa-trello:before {
            content: "\F181"
        }

        .fa-tripadvisor:before {
            content: "\F262"
        }

        .fa-trophy:before {
            content: "\F091"
        }

        .fa-truck:before {
            content: "\F0D1"
        }

        .fa-truck-loading:before {
            content: "\F4DE"
        }

        .fa-truck-monster:before {
            content: "\F63B"
        }

        .fa-truck-moving:before {
            content: "\F4DF"
        }

        .fa-truck-pickup:before {
            content: "\F63C"
        }

        .fa-tshirt:before {
            content: "\F553"
        }

        .fa-tty:before {
            content: "\F1E4"
        }

        .fa-tumblr:before {
            content: "\F173"
        }

        .fa-tumblr-square:before {
            content: "\F174"
        }

        .fa-tv:before {
            content: "\F26C"
        }

        .fa-twitch:before {
            content: "\F1E8"
        }

        .fa-twitter:before {
            content: "\F099"
        }

        .fa-twitter-square:before {
            content: "\F081"
        }

        .fa-typo3:before {
            content: "\F42B"
        }

        .fa-uber:before {
            content: "\F402"
        }

        .fa-ubuntu:before {
            content: "\F7DF"
        }

        .fa-uikit:before {
            content: "\F403"
        }

        .fa-umbrella:before {
            content: "\F0E9"
        }

        .fa-umbrella-beach:before {
            content: "\F5CA"
        }

        .fa-underline:before {
            content: "\F0CD"
        }

        .fa-undo:before {
            content: "\F0E2"
        }

        .fa-undo-alt:before {
            content: "\F2EA"
        }

        .fa-uniregistry:before {
            content: "\F404"
        }

        .fa-universal-access:before {
            content: "\F29A"
        }

        .fa-university:before {
            content: "\F19C"
        }

        .fa-unlink:before {
            content: "\F127"
        }

        .fa-unlock:before {
            content: "\F09C"
        }

        .fa-unlock-alt:before {
            content: "\F13E"
        }

        .fa-untappd:before {
            content: "\F405"
        }

        .fa-upload:before {
            content: "\F093"
        }

        .fa-ups:before {
            content: "\F7E0"
        }

        .fa-usb:before {
            content: "\F287"
        }

        .fa-user:before {
            content: "\F007"
        }

        .fa-user-alt:before {
            content: "\F406"
        }

        .fa-user-alt-slash:before {
            content: "\F4FA"
        }

        .fa-user-astronaut:before {
            content: "\F4FB"
        }

        .fa-user-check:before {
            content: "\F4FC"
        }

        .fa-user-circle:before {
            content: "\F2BD"
        }

        .fa-user-clock:before {
            content: "\F4FD"
        }

        .fa-user-cog:before {
            content: "\F4FE"
        }

        .fa-user-edit:before {
            content: "\F4FF"
        }

        .fa-user-friends:before {
            content: "\F500"
        }

        .fa-user-graduate:before {
            content: "\F501"
        }

        .fa-user-injured:before {
            content: "\F728"
        }

        .fa-user-lock:before {
            content: "\F502"
        }

        .fa-user-md:before {
            content: "\F0F0"
        }

        .fa-user-minus:before {
            content: "\F503"
        }

        .fa-user-ninja:before {
            content: "\F504"
        }

        .fa-user-nurse:before {
            content: "\F82F"
        }

        .fa-user-plus:before {
            content: "\F234"
        }

        .fa-user-secret:before {
            content: "\F21B"
        }

        .fa-user-shield:before {
            content: "\F505"
        }

        .fa-user-slash:before {
            content: "\F506"
        }

        .fa-user-tag:before {
            content: "\F507"
        }

        .fa-user-tie:before {
            content: "\F508"
        }

        .fa-user-times:before {
            content: "\F235"
        }

        .fa-users:before {
            content: "\F0C0"
        }

        .fa-users-cog:before {
            content: "\F509"
        }

        .fa-usps:before {
            content: "\F7E1"
        }

        .fa-ussunnah:before {
            content: "\F407"
        }

        .fa-utensil-spoon:before {
            content: "\F2E5"
        }

        .fa-utensils:before {
            content: "\F2E7"
        }

        .fa-vaadin:before {
            content: "\F408"
        }

        .fa-vector-square:before {
            content: "\F5CB"
        }

        .fa-venus:before {
            content: "\F221"
        }

        .fa-venus-double:before {
            content: "\F226"
        }

        .fa-venus-mars:before {
            content: "\F228"
        }

        .fa-viacoin:before {
            content: "\F237"
        }

        .fa-viadeo:before {
            content: "\F2A9"
        }

        .fa-viadeo-square:before {
            content: "\F2AA"
        }

        .fa-vial:before {
            content: "\F492"
        }

        .fa-vials:before {
            content: "\F493"
        }

        .fa-viber:before {
            content: "\F409"
        }

        .fa-video:before {
            content: "\F03D"
        }

        .fa-video-slash:before {
            content: "\F4E2"
        }

        .fa-vihara:before {
            content: "\F6A7"
        }

        .fa-vimeo:before {
            content: "\F40A"
        }

        .fa-vimeo-square:before {
            content: "\F194"
        }

        .fa-vimeo-v:before {
            content: "\F27D"
        }

        .fa-vine:before {
            content: "\F1CA"
        }

        .fa-vk:before {
            content: "\F189"
        }

        .fa-vnv:before {
            content: "\F40B"
        }

        .fa-volleyball-ball:before {
            content: "\F45F"
        }

        .fa-volume-down:before {
            content: "\F027"
        }

        .fa-volume-mute:before {
            content: "\F6A9"
        }

        .fa-volume-off:before {
            content: "\F026"
        }

        .fa-volume-up:before {
            content: "\F028"
        }

        .fa-vote-yea:before {
            content: "\F772"
        }

        .fa-vr-cardboard:before {
            content: "\F729"
        }

        .fa-vuejs:before {
            content: "\F41F"
        }

        .fa-walking:before {
            content: "\F554"
        }

        .fa-wallet:before {
            content: "\F555"
        }

        .fa-warehouse:before {
            content: "\F494"
        }

        .fa-water:before {
            content: "\F773"
        }

        .fa-wave-square:before {
            content: "\F83E"
        }

        .fa-waze:before {
            content: "\F83F"
        }

        .fa-weebly:before {
            content: "\F5CC"
        }

        .fa-weibo:before {
            content: "\F18A"
        }

        .fa-weight:before {
            content: "\F496"
        }

        .fa-weight-hanging:before {
            content: "\F5CD"
        }

        .fa-weixin:before {
            content: "\F1D7"
        }

        .fa-whatsapp:before {
            content: "\F232"
        }

        .fa-whatsapp-square:before {
            content: "\F40C"
        }

        .fa-wheelchair:before {
            content: "\F193"
        }

        .fa-whmcs:before {
            content: "\F40D"
        }

        .fa-wifi:before {
            content: "\F1EB"
        }

        .fa-wikipedia-w:before {
            content: "\F266"
        }

        .fa-wind:before {
            content: "\F72E"
        }

        .fa-window-close:before {
            content: "\F410"
        }

        .fa-window-maximize:before {
            content: "\F2D0"
        }

        .fa-window-minimize:before {
            content: "\F2D1"
        }

        .fa-window-restore:before {
            content: "\F2D2"
        }

        .fa-windows:before {
            content: "\F17A"
        }

        .fa-wine-bottle:before {
            content: "\F72F"
        }

        .fa-wine-glass:before {
            content: "\F4E3"
        }

        .fa-wine-glass-alt:before {
            content: "\F5CE"
        }

        .fa-wix:before {
            content: "\F5CF"
        }

        .fa-wizards-of-the-coast:before {
            content: "\F730"
        }

        .fa-wolf-pack-battalion:before {
            content: "\F514"
        }

        .fa-won-sign:before {
            content: "\F159"
        }

        .fa-wordpress:before {
            content: "\F19A"
        }

        .fa-wordpress-simple:before {
            content: "\F411"
        }

        .fa-wpbeginner:before {
            content: "\F297"
        }

        .fa-wpexplorer:before {
            content: "\F2DE"
        }

        .fa-wpforms:before {
            content: "\F298"
        }

        .fa-wpressr:before {
            content: "\F3E4"
        }

        .fa-wrench:before {
            content: "\F0AD"
        }

        .fa-x-ray:before {
            content: "\F497"
        }

        .fa-xbox:before {
            content: "\F412"
        }

        .fa-xing:before {
            content: "\F168"
        }

        .fa-xing-square:before {
            content: "\F169"
        }

        .fa-y-combinator:before {
            content: "\F23B"
        }

        .fa-yahoo:before {
            content: "\F19E"
        }

        .fa-yammer:before {
            content: "\F840"
        }

        .fa-yandex:before {
            content: "\F413"
        }

        .fa-yandex-international:before {
            content: "\F414"
        }

        .fa-yarn:before {
            content: "\F7E3"
        }

        .fa-yelp:before {
            content: "\F1E9"
        }

        .fa-yen-sign:before {
            content: "\F157"
        }

        .fa-yin-yang:before {
            content: "\F6AD"
        }

        .fa-yoast:before {
            content: "\F2B1"
        }

        .fa-youtube:before {
            content: "\F167"
        }

        .fa-youtube-square:before {
            content: "\F431"
        }

        .fa-zhihu:before {
            content: "\F63F"
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            margin: 0
        }

        /*!
        * Font Awesome Free 5.8.2 by @fontawesome - https://fontawesome.com
        * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
        */
        @font-face {
            font-family: Font Awesome\ 5 Free;
            font-style: normal;
            font-weight: 400;
            font-display: auto;
            src: url('{{ asset('assets/fonts/fa-regular-400.eot') }}');
            src: url('{{ asset('assets/fonts/fonts/fa-regular-400d41d.eot?#iefix') }}') format("embedded-opentype"), url('{{ asset('assets/fonts/fa-regular-400.woff2') }}') format("woff2"), url('{{ asset('assets/fonts/fa-regular-400.woff') }}') format("woff"), url('{{ asset('assets/fonts/fa-regular-400.ttf') }}') format("truetype"), url('{{ asset('assets/fonts/fa-regular-400.svg#fontawesome') }}') format("svg")
        }

        .far {
            font-weight: 400
        }

        /*!
        * Font Awesome Free 5.8.2 by @fontawesome - https://fontawesome.com
        * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
        */
        @font-face {
            font-family: Font Awesome\ 5 Free;
            font-style: normal;
            font-weight: 900;
            font-display: auto;
            src: url('{{ asset('assets/fonts/fa-solid-900.eot') }}');
            src: url('{{ asset('assets/fonts/fa-solid-900d41d.eot?#iefix') }}') format("embedded-opentype"), url('{{ asset('assets/fonts/fa-solid-900.woff2') }}') format("woff2"), url('{{ asset('assets/fonts/fa-solid-900.woff') }}') format("woff"), url('{{ asset('assets/fonts/fa-solid-900.ttf') }}') format("truetype"), url('{{ asset('assets/fonts/fa-solid-900.svg#fontawesome') }}') format("svg")
        }

        .fa,
        .far,
        .fas {
            font-family: Font Awesome\ 5 Free
        }

        .fa,
        .fas {
            font-weight: 900
        }

        /*!
        * Font Awesome Free 5.8.2 by @fontawesome - https://fontawesome.com
        * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
        */
        @font-face {
            font-family: Font Awesome\ 5 Brands;
            font-style: normal;
            font-weight: 400;
            font-display: auto;
            src: url('{{ asset('assets/fonts/fa-brands-400.eot') }}');
            src: url('{{ asset('assets/fonts/fa-brands-400d41d.eot?#iefix') }}') format("embedded-opentype"), url('{{ asset('assets/fonts/fa-brands-400.woff2') }}') format("woff2"), url('{{ asset('assets/fonts/fa-brands-400.woff') }}') format("woff"), url('{{ asset('assets/fonts/fa-brands-400.ttf') }}') format("truetype"), url('{{ asset('assets/fonts/fa-brands-400.svg#fontawesome') }}') format("svg")
        }

        .fab {
            font-family: Font Awesome\ 5 Brands
        }

        .fs-10 {
            font-size: 10px !important
        }

        .fs-11 {
            font-size: 11px !important
        }

        .fs-12 {
            font-size: 12px !important
        }

        .fs-13 {
            font-size: 13px !important
        }

        .fs-14 {
            font-size: 14px !important
        }

        .fs-15 {
            font-size: 15px !important
        }

        .fs-16 {
            font-size: 16px !important
        }

        .fs-17 {
            font-size: 17px !important
        }

        .fs-18 {
            font-size: 18px !important
        }

        .fs-19 {
            font-size: 19px !important
        }

        .fs-20 {
            font-size: 20px !important
        }

        .fs-21 {
            font-size: 21px !important
        }

        .fs-22 {
            font-size: 22px !important
        }

        .fs-23 {
            font-size: 23px !important
        }

        .fs-24 {
            font-size: 24px !important
        }

        .fs-25 {
            font-size: 25px !important
        }

        .fs-26 {
            font-size: 26px !important
        }

        .fs-27 {
            font-size: 27px !important
        }

        .fs-28 {
            font-size: 28px !important
        }

        .fs-29 {
            font-size: 29px !important
        }

        .fs-30 {
            font-size: 30px !important
        }

        .fs-3 {
            font-size: 3rem
        }

        .fs-4 {
            font-size: 4rem
        }

        .fs-5 {
            font-size: 5rem
        }

        @font-face {
            font-family: icomoon;
            src: url('{{ asset('assets/fonts/icomoon605c.ttf?57c90ac9c80062cefd24d92e21d20cea') }}') format("truetype");
            font-weight: 400;
            font-style: normal;
            font-display: block
        }

        [class*=" icon-"],
        [class^=icon-] {
            font-family: icomoon !important;
            speak: none;
            font-style: normal;
            font-weight: 400;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .icon-doi_hang:before {
            content: "\E900"
        }

        .icon-giao_hang:before {
            content: "\E901"
        }

        .icon-dam_bao:before {
            content: "\E902"
        }

        .icon-delete:before {
            content: "\E91F";
            color: #767676
        }

        .icon-success1:before {
            content: "\E91D"
        }

        .icon-feeding-bottle .path1:before {
            content: "\E90E";
            color: #000
        }

        .icon-feeding-bottle .path2:before {
            content: "\E90F";
            margin-left: -1em;
            color: #fff
        }

        .icon-feeding-bottle .path3:before {
            content: "\E910";
            margin-left: -1em;
            color: #fff
        }

        .icon-feeding-bottle .path4:before {
            content: "\E911";
            margin-left: -1em;
            color: #fff
        }

        .icon-feeding-bottle .path5:before {
            content: "\E912";
            margin-left: -1em;
            color: #fff
        }

        .icon-feeding-bottle .path6:before {
            content: "\E913";
            margin-left: -1em;
            color: #fff
        }

        .icon-feeding-bottle .path7:before {
            content: "\E914";
            margin-left: -1em;
            color: #fff
        }

        .icon-feeding-bottle .path8:before {
            content: "\E915";
            margin-left: -1em;
            color: #fff
        }

        .icon-feeding-bottle .path9:before {
            content: "\E916";
            margin-left: -1em;
            color: #d9d9d9
        }

        .icon-feeding-bottle .path10:before {
            content: "\E917";
            margin-left: -1em;
            color: #d9d9d9
        }

        .icon-feeding-bottle .path11:before {
            content: "\E918";
            margin-left: -1em;
            color: #d9d9d9
        }

        .icon-feeding-bottle .path12:before {
            content: "\E919";
            margin-left: -1em;
            color: #d9d9d9
        }

        .icon-feeding-bottle .path13:before {
            content: "\E91A";
            margin-left: -1em;
            color: #d9d9d9
        }

        .icon-feeding-bottle .path14:before {
            content: "\E91B";
            margin-left: -1em;
            color: #d9d9d9
        }

        .icon-gdpr:before {
            content: "\E91C"
        }

        .icon-next_left:before {
            content: "\E903"
        }

        .icon-next_right:before {
            content: "\E904"
        }

        .icon-down:before {
            content: "\E905"
        }

        .icon-menu:before {
            content: "\E906"
        }

        .icon-riview_1:before {
            content: "\E907"
        }

        .icon-review:before {
            content: "\E908"
        }

        .icon-mesenger:before {
            content: "\E909"
        }

        .icon-cart:before {
            content: "\E90A"
        }

        .icon-cancel:before {
            content: "\E90B"
        }

        .icon-nguon_goc:before {
            content: "\E90C"
        }

        .icon-da_day:before {
            content: "\E90D"
        }

        .icon-cam_ket:before {
            content: "\E91E"
        }

        .icon-tao_bon:before {
            content: "\E929"
        }

        .icon-menu-mobile:before {
            content: "\E92A"
        }

        .icon-Polygon:before {
            content: "\E92B"
        }

        .icon-shopping-cart:before {
            content: "\E92C"
        }

        .icon-success:before {
            content: "\E92D"
        }

        /*!
        * Bootstrap v3.4.1 (https://getbootstrap.com/)
        * Copyright 2011-2019 Twitter, Inc.
        * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
        */
        *,
        :after,
        :before {
            box-sizing: border-box
        }

        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5;
            text-align: left
        }

        [tabindex="-1"]:focus:not(:focus-visible) {
            outline: 0 !important
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        abbr[data-original-title],
        abbr[title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none
        }

        address {
            font-style: normal;
            line-height: inherit
        }

        address,
        dl,
        ol,
        ul {
            margin-bottom: 1rem
        }

        dl,
        ol,
        ul {
            margin-top: 0
        }

        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0
        }

        dt {
            font-weight: 700
        }

        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }

        blockquote {
            margin: 0 0 1rem
        }

        b,
        strong {
            font-weight: bolder
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        a {
            background-color: transparent
        }

        a:not([href]):not([class]),
        a:not([href]):not([class]):hover {
            color: inherit;
            text-decoration: none
        }

        code,
        kbd,
        pre,
        samp {
            font-size: 1em
        }

        pre {
            margin-top: 0;
            margin-bottom: 1rem;
            overflow: auto;
            -ms-overflow-style: scrollbar
        }

        figure {
            margin: 0 0 1rem
        }

        img {
            border-style: none
        }

        img,
        svg {
            vertical-align: middle
        }

        svg {
            overflow: hidden
        }

        table {
            border-collapse: collapse
        }

        caption {
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #6c757d;
            text-align: left;
            caption-side: bottom
        }

        th {
            text-align: inherit;
            text-align: -webkit-match-parent
        }

        label {
            display: inline-block;
            margin-bottom: .5rem
        }

        button {
            border-radius: 0
        }

        button:focus:not(:focus-visible) {
            outline: 0
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        [role=button] {
            cursor: pointer
        }

        select {
            word-wrap: normal
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button
        }

        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }

        input[type=checkbox],
        input[type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        textarea {
            overflow: auto;
            resize: vertical
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0
        }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: .5rem;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal
        }

        progress {
            vertical-align: baseline
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            outline-offset: -2px;
            -webkit-appearance: none
        }

        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }

        output {
            display: inline-block
        }

        summary {
            display: list-item;
            cursor: pointer
        }

        template {
            display: none
        }

        [hidden] {
            display: none !important
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            line-height: 1.2
        }

        .lead {
            font-size: 1.25rem
        }

        .display-1,
        .display-2,
        .display-3,
        .display-4,
        .lead {
            font-weight: 300
        }

        hr {
            border: 0
        }

        .list-inline,
        .list-unstyled {
            padding-left: 0;
            list-style: none
        }

        .list-inline-item {
            display: inline-block
        }

        .list-inline-item:not(:last-child) {
            margin-right: .5rem
        }

        .initialism {
            font-size: 90%;
            text-transform: uppercase
        }

        .blockquote {
            margin-bottom: 1rem
        }

        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #6c757d
        }

        .blockquote-footer:before {
            content: "\2014\A0"
        }

        .img-fluid,
        .img-thumbnail {
            max-width: 100%;
            height: auto
        }

        .img-thumbnail {
            border: 1px solid #dee2e6
        }

        .figure {
            display: inline-block
        }

        .figure-img {
            line-height: 1
        }

        .container,
        .container-fluid,
        .container-lg,
        .container-md,
        .container-sm,
        .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (max-width:576px){
            .col-12 {
                max-width: 40%;
                flex: 1;
            }

            img {
                max-width: 36%;
            }
        }

        @media (min-width:576px) {

            .container,
            .container-sm {
                max-width: 540px
            }
        }

        @media (min-width:768px) {

            .container,
            .container-md,
            .container-sm {
                max-width: 720px
            }
        }

        @media (min-width:992px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1140px
            }
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .no-gutters {
            margin-right: 0;
            margin-left: 0
        }

        .no-gutters>.col,
        .no-gutters>[class*=col-] {
            padding-right: 0;
            padding-left: 0
        }

        .col,
        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .row-cols-1>* {
            flex: 0 0 100%;
            max-width: 100%
        }

        .row-cols-2>* {
            flex: 0 0 50%;
            max-width: 50%
        }

        .row-cols-3>* {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%
        }

        .row-cols-4>* {
            flex: 0 0 25%;
            max-width: 25%
        }

        .row-cols-5>* {
            flex: 0 0 20%;
            max-width: 20%
        }

        .row-cols-6>* {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%
        }

        .col-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-1 {
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%
        }

        .col-2 {
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%
        }

        .col-3 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%
        }

        .col-5 {
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%
        }

        .col-6 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-7 {
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%
        }

        .col-8 {
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%
        }

        .col-9 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%
        }

        .col-11 {
            flex: 0 0 91.6666666667%;
            max-width: 91.6666666667%
        }

        .col-12 {
            flex: 0 0 100%;
            max-width: 100%
        }

        .order-first {
            order: -1
        }

        .order-last {
            order: 13
        }

        .order-0 {
            order: 0
        }

        .order-1 {
            order: 1
        }

        .order-2 {
            order: 2
        }

        .order-3 {
            order: 3
        }

        .order-4 {
            order: 4
        }

        .order-5 {
            order: 5
        }

        .order-6 {
            order: 6
        }

        .order-7 {
            order: 7
        }

        .order-8 {
            order: 8
        }

        .order-9 {
            order: 9
        }

        .order-10 {
            order: 10
        }

        .order-11 {
            order: 11
        }

        .order-12 {
            order: 12
        }

        .offset-1 {
            margin-left: 8.3333333333%
        }

        .offset-2 {
            margin-left: 16.6666666667%
        }

        .offset-3 {
            margin-left: 25%
        }

        .offset-4 {
            margin-left: 33.3333333333%
        }

        .offset-5 {
            margin-left: 41.6666666667%
        }

        .offset-6 {
            margin-left: 50%
        }

        .offset-7 {
            margin-left: 58.3333333333%
        }

        .offset-8 {
            margin-left: 66.6666666667%
        }

        .offset-9 {
            margin-left: 75%
        }

        .offset-10 {
            margin-left: 83.3333333333%
        }

        .offset-11 {
            margin-left: 91.6666666667%
        }

        @media (min-width:576px) {
            .col-sm {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-sm-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-sm-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-sm-3>* {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .row-cols-sm-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-sm-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-sm-6>* {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-sm-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-sm-1 {
                flex: 0 0 8.3333333333%;
                max-width: 8.3333333333%
            }

            .col-sm-2 {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-sm-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-sm-4 {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .col-sm-5 {
                flex: 0 0 41.6666666667%;
                max-width: 41.6666666667%
            }

            .col-sm-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-sm-7 {
                flex: 0 0 58.3333333333%;
                max-width: 58.3333333333%
            }

            .col-sm-8 {
                flex: 0 0 66.6666666667%;
                max-width: 66.6666666667%
            }

            .col-sm-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-sm-10 {
                flex: 0 0 83.3333333333%;
                max-width: 83.3333333333%
            }

            .col-sm-11 {
                flex: 0 0 91.6666666667%;
                max-width: 91.6666666667%
            }

            .col-sm-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-sm-first {
                order: -1
            }

            .order-sm-last {
                order: 13
            }

            .order-sm-0 {
                order: 0
            }

            .order-sm-1 {
                order: 1
            }

            .order-sm-2 {
                order: 2
            }

            .order-sm-3 {
                order: 3
            }

            .order-sm-4 {
                order: 4
            }

            .order-sm-5 {
                order: 5
            }

            .order-sm-6 {
                order: 6
            }

            .order-sm-7 {
                order: 7
            }

            .order-sm-8 {
                order: 8
            }

            .order-sm-9 {
                order: 9
            }

            .order-sm-10 {
                order: 10
            }

            .order-sm-11 {
                order: 11
            }

            .order-sm-12 {
                order: 12
            }

            .offset-sm-0 {
                margin-left: 0
            }

            .offset-sm-1 {
                margin-left: 8.3333333333%
            }

            .offset-sm-2 {
                margin-left: 16.6666666667%
            }

            .offset-sm-3 {
                margin-left: 25%
            }

            .offset-sm-4 {
                margin-left: 33.3333333333%
            }

            .offset-sm-5 {
                margin-left: 41.6666666667%
            }

            .offset-sm-6 {
                margin-left: 50%
            }

            .offset-sm-7 {
                margin-left: 58.3333333333%
            }

            .offset-sm-8 {
                margin-left: 66.6666666667%
            }

            .offset-sm-9 {
                margin-left: 75%
            }

            .offset-sm-10 {
                margin-left: 83.3333333333%
            }

            .offset-sm-11 {
                margin-left: 91.6666666667%
            }
        }

        @media (min-width:768px) {
            .col-md {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-md-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-md-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-md-3>* {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .row-cols-md-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-md-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-md-6>* {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-md-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-md-1 {
                flex: 0 0 8.3333333333%;
                max-width: 8.3333333333%
            }

            .col-md-2 {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-md-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-md-4 {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .col-md-5 {
                flex: 0 0 41.6666666667%;
                max-width: 41.6666666667%
            }

            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-md-7 {
                flex: 0 0 58.3333333333%;
                max-width: 58.3333333333%
            }

            .col-md-8 {
                flex: 0 0 66.6666666667%;
                max-width: 66.6666666667%
            }

            .col-md-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-md-10 {
                flex: 0 0 83.3333333333%;
                max-width: 83.3333333333%
            }

            .col-md-11 {
                flex: 0 0 91.6666666667%;
                max-width: 91.6666666667%
            }

            .col-md-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-md-first {
                order: -1
            }

            .order-md-last {
                order: 13
            }

            .order-md-0 {
                order: 0
            }

            .order-md-1 {
                order: 1
            }

            .order-md-2 {
                order: 2
            }

            .order-md-3 {
                order: 3
            }

            .order-md-4 {
                order: 4
            }

            .order-md-5 {
                order: 5
            }

            .order-md-6 {
                order: 6
            }

            .order-md-7 {
                order: 7
            }

            .order-md-8 {
                order: 8
            }

            .order-md-9 {
                order: 9
            }

            .order-md-10 {
                order: 10
            }

            .order-md-11 {
                order: 11
            }

            .order-md-12 {
                order: 12
            }

            .offset-md-0 {
                margin-left: 0
            }

            .offset-md-1 {
                margin-left: 8.3333333333%
            }

            .offset-md-2 {
                margin-left: 16.6666666667%
            }

            .offset-md-3 {
                margin-left: 25%
            }

            .offset-md-4 {
                margin-left: 33.3333333333%
            }

            .offset-md-5 {
                margin-left: 41.6666666667%
            }

            .offset-md-6 {
                margin-left: 50%
            }

            .offset-md-7 {
                margin-left: 58.3333333333%
            }

            .offset-md-8 {
                margin-left: 66.6666666667%
            }

            .offset-md-9 {
                margin-left: 75%
            }

            .offset-md-10 {
                margin-left: 83.3333333333%
            }

            .offset-md-11 {
                margin-left: 91.6666666667%
            }
        }

        @media (min-width:992px) {
            .col-lg {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-lg-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-lg-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-lg-3>* {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .row-cols-lg-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-lg-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-lg-6>* {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-lg-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-lg-1 {
                flex: 0 0 8.3333333333%;
                max-width: 8.3333333333%
            }

            .col-lg-2 {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-lg-4 {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .col-lg-5 {
                flex: 0 0 41.6666666667%;
                max-width: 41.6666666667%
            }

            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-lg-7 {
                flex: 0 0 58.3333333333%;
                max-width: 58.3333333333%
            }

            .col-lg-8 {
                flex: 0 0 66.6666666667%;
                max-width: 66.6666666667%
            }

            .col-lg-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-lg-10 {
                flex: 0 0 83.3333333333%;
                max-width: 83.3333333333%
            }

            .col-lg-11 {
                flex: 0 0 91.6666666667%;
                max-width: 91.6666666667%
            }

            .col-lg-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-lg-first {
                order: -1
            }

            .order-lg-last {
                order: 13
            }

            .order-lg-0 {
                order: 0
            }

            .order-lg-1 {
                order: 1
            }

            .order-lg-2 {
                order: 2
            }

            .order-lg-3 {
                order: 3
            }

            .order-lg-4 {
                order: 4
            }

            .order-lg-5 {
                order: 5
            }

            .order-lg-6 {
                order: 6
            }

            .order-lg-7 {
                order: 7
            }

            .order-lg-8 {
                order: 8
            }

            .order-lg-9 {
                order: 9
            }

            .order-lg-10 {
                order: 10
            }

            .order-lg-11 {
                order: 11
            }

            .order-lg-12 {
                order: 12
            }

            .offset-lg-0 {
                margin-left: 0
            }

            .offset-lg-1 {
                margin-left: 8.3333333333%
            }

            .offset-lg-2 {
                margin-left: 16.6666666667%
            }

            .offset-lg-3 {
                margin-left: 25%
            }

            .offset-lg-4 {
                margin-left: 33.3333333333%
            }

            .offset-lg-5 {
                margin-left: 41.6666666667%
            }

            .offset-lg-6 {
                margin-left: 50%
            }

            .offset-lg-7 {
                margin-left: 58.3333333333%
            }

            .offset-lg-8 {
                margin-left: 66.6666666667%
            }

            .offset-lg-9 {
                margin-left: 75%
            }

            .offset-lg-10 {
                margin-left: 83.3333333333%
            }

            .offset-lg-11 {
                margin-left: 91.6666666667%
            }
        }

        @media (min-width:1200px) {
            .col-xl {
                flex-basis: 0;
                flex-grow: 1;
                max-width: 100%
            }

            .row-cols-xl-1>* {
                flex: 0 0 100%;
                max-width: 100%
            }

            .row-cols-xl-2>* {
                flex: 0 0 50%;
                max-width: 50%
            }

            .row-cols-xl-3>* {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .row-cols-xl-4>* {
                flex: 0 0 25%;
                max-width: 25%
            }

            .row-cols-xl-5>* {
                flex: 0 0 20%;
                max-width: 20%
            }

            .row-cols-xl-6>* {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-xl-auto {
                flex: 0 0 auto;
                width: auto;
                max-width: 100%
            }

            .col-xl-1 {
                flex: 0 0 8.3333333333%;
                max-width: 8.3333333333%
            }

            .col-xl-2 {
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%
            }

            .col-xl-3 {
                flex: 0 0 25%;
                max-width: 25%
            }

            .col-xl-4 {
                flex: 0 0 33.3333333333%;
                max-width: 33.3333333333%
            }

            .col-xl-5 {
                flex: 0 0 41.6666666667%;
                max-width: 41.6666666667%
            }

            .col-xl-6 {
                flex: 0 0 50%;
                max-width: 50%
            }

            .col-xl-7 {
                flex: 0 0 58.3333333333%;
                max-width: 58.3333333333%
            }

            .col-xl-8 {
                flex: 0 0 66.6666666667%;
                max-width: 66.6666666667%
            }

            .col-xl-9 {
                flex: 0 0 75%;
                max-width: 75%
            }

            .col-xl-10 {
                flex: 0 0 83.3333333333%;
                max-width: 83.3333333333%
            }

            .col-xl-11 {
                flex: 0 0 91.6666666667%;
                max-width: 91.6666666667%
            }

            .col-xl-12 {
                flex: 0 0 100%;
                max-width: 100%
            }

            .order-xl-first {
                order: -1
            }

            .order-xl-last {
                order: 13
            }

            .order-xl-0 {
                order: 0
            }

            .order-xl-1 {
                order: 1
            }

            .order-xl-2 {
                order: 2
            }

            .order-xl-3 {
                order: 3
            }

            .order-xl-4 {
                order: 4
            }

            .order-xl-5 {
                order: 5
            }

            .order-xl-6 {
                order: 6
            }

            .order-xl-7 {
                order: 7
            }

            .order-xl-8 {
                order: 8
            }

            .order-xl-9 {
                order: 9
            }

            .order-xl-10 {
                order: 10
            }

            .order-xl-11 {
                order: 11
            }

            .order-xl-12 {
                order: 12
            }

            .offset-xl-0 {
                margin-left: 0
            }

            .offset-xl-1 {
                margin-left: 8.3333333333%
            }

            .offset-xl-2 {
                margin-left: 16.6666666667%
            }

            .offset-xl-3 {
                margin-left: 25%
            }

            .offset-xl-4 {
                margin-left: 33.3333333333%
            }

            .offset-xl-5 {
                margin-left: 41.6666666667%
            }

            .offset-xl-6 {
                margin-left: 50%
            }

            .offset-xl-7 {
                margin-left: 58.3333333333%
            }

            .offset-xl-8 {
                margin-left: 66.6666666667%
            }

            .offset-xl-9 {
                margin-left: 75%
            }

            .offset-xl-10 {
                margin-left: 83.3333333333%
            }

            .offset-xl-11 {
                margin-left: 91.6666666667%
            }
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529
        }

        .table td,
        .table th {
            vertical-align: top;
            border-top: 1px solid #dee2e6
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6
        }

        .table-bordered,
        .table-bordered td,
        .table-bordered th {
            border: 1px solid #dee2e6
        }

        .table-bordered thead td,
        .table-bordered thead th {
            border-bottom-width: 2px
        }

        .table-borderless tbody+tbody,
        .table-borderless td,
        .table-borderless th,
        .table-borderless thead th {
            border: 0
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05)
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, .075)
        }

        .table-primary tbody+tbody,
        .table-primary td,
        .table-primary th,
        .table-primary thead th {
            border-color: #7abaff
        }

        .table-secondary tbody+tbody,
        .table-secondary td,
        .table-secondary th,
        .table-secondary thead th {
            border-color: #b3b7bb
        }

        .table-success tbody+tbody,
        .table-success td,
        .table-success th,
        .table-success thead th {
            border-color: #8fd19e
        }

        .table-info tbody+tbody,
        .table-info td,
        .table-info th,
        .table-info thead th {
            border-color: #86cfda
        }

        .table-warning tbody+tbody,
        .table-warning td,
        .table-warning th,
        .table-warning thead th {
            border-color: #ffdf7e
        }

        .table-danger tbody+tbody,
        .table-danger td,
        .table-danger th,
        .table-danger thead th {
            border-color: #ed969e
        }

        .table-light tbody+tbody,
        .table-light td,
        .table-light th,
        .table-light thead th {
            border-color: #fbfcfc
        }

        .table-dark tbody+tbody,
        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #95999c
        }

        .table-dark.table-bordered {
            border: 0
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff
        }

        @media (max-width:575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-sm>.table-bordered {
                border: 0
            }
        }

        @media (max-width:767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-md>.table-bordered {
                border: 0
            }
        }

        @media (max-width:991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-lg>.table-bordered {
                border: 0
            }
        }

        @media (max-width:1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch
            }

            .table-responsive-xl>.table-bordered {
                border: 0
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch
        }

        .table-responsive>.table-bordered {
            border: 0
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            background-clip: padding-box
        }

        @media (prefers-reduced-motion:reduce) {
            .form-control {
                transition: none
            }
        }

        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }

        .form-control:-moz-focusring {
            color: transparent;
            text-shadow: 0 0 0 #495057
        }

        .form-control:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .form-control::-moz-placeholder {
            opacity: 1
        }

        .form-control:-ms-input-placeholder {
            opacity: 1
        }

        .form-control::placeholder {
            opacity: 1
        }

        .form-control:disabled,
        .form-control[readonly] {
            opacity: 1
        }

        input[type=date].form-control,
        input[type=datetime-local].form-control,
        input[type=month].form-control,
        input[type=time].form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        .form-control-file,
        .form-control-range {
            display: block;
            width: 100%
        }

        .col-form-label {
            margin-bottom: 0;
            font-size: inherit
        }

        .form-control-plaintext {
            display: block;
            width: 100%;
            padding: .375rem 0;
            margin-bottom: 0;
            font-size: 1rem;
            color: #212529;
            background-color: transparent;
            border: solid transparent;
            border-width: 1px 0
        }

        .form-control-plaintext.form-control-lg,
        .form-control-plaintext.form-control-sm,
        .input-group-lg>.form-control-plaintext.form-control,
        .input-group-lg>.input-group-append>.form-control-plaintext.btn,
        .input-group-lg>.input-group-append>.form-control-plaintext.input-group-text,
        .input-group-lg>.input-group-middle>.form-control-plaintext.input-group-text,
        .input-group-lg>.input-group-prepend>.form-control-plaintext.btn,
        .input-group-lg>.input-group-prepend>.form-control-plaintext.input-group-text,
        .input-group-sm>.form-control-plaintext.form-control,
        .input-group-sm>.input-group-append>.form-control-plaintext.btn,
        .input-group-sm>.input-group-append>.form-control-plaintext.input-group-text,
        .input-group-sm>.input-group-middle>.form-control-plaintext.input-group-text,
        .input-group-sm>.input-group-prepend>.form-control-plaintext.btn,
        .input-group-sm>.input-group-prepend>.form-control-plaintext.input-group-text {
            padding-right: 0;
            padding-left: 0
        }

        .form-control-sm,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-append>.btn,
        .input-group-sm>.input-group-append>.input-group-text,
        .input-group-sm>.input-group-middle>.input-group-text,
        .input-group-sm>.input-group-prepend>.btn,
        .input-group-sm>.input-group-prepend>.input-group-text {
            height: calc(1.5em + .5rem + 2px)
        }

        .form-control-lg,
        .input-group-lg>.form-control,
        .input-group-lg>.input-group-append>.btn,
        .input-group-lg>.input-group-append>.input-group-text,
        .input-group-lg>.input-group-middle>.input-group-text,
        .input-group-lg>.input-group-prepend>.btn,
        .input-group-lg>.input-group-prepend>.input-group-text {
            height: calc(1.5em + 1rem + 2px)
        }

        select.form-control[multiple],
        select.form-control[size],
        textarea.form-control {
            height: auto
        }

        .form-text {
            display: block
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px
        }

        .form-row>.col,
        .form-row>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }

        .form-check {
            position: relative;
            display: block
        }

        .form-check-input {
            position: absolute
        }

        .form-check-input:disabled~.form-check-label,
        .form-check-input[disabled]~.form-check-label {
            color: #6c757d
        }

        .form-check-label {
            margin-bottom: 0
        }

        .form-check-inline {
            display: inline-flex;
            align-items: center;
            padding-left: 0
        }

        .form-check-inline .form-check-input {
            position: static;
            margin-top: 0;
            margin-left: 0
        }

        .valid-feedback {
            display: none;
            width: 100%
        }

        .valid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(40, 167, 69, .9);
            border-radius: .25rem
        }

        .form-row>.col>.valid-tooltip,
        .form-row>[class*=col-]>.valid-tooltip {
            left: 5px
        }

        .is-valid~.valid-feedback,
        .is-valid~.valid-tooltip,
        .was-validated :valid~.valid-feedback,
        .was-validated :valid~.valid-tooltip {
            display: block
        }

        .form-control.is-valid,
        .was-validated .form-control:valid {
            border-color: #28a745;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-valid:focus,
        .was-validated .form-control:valid:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .was-validated textarea.form-control:valid,
        textarea.form-control.is-valid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .custom-select.is-valid,
        .was-validated .custom-select:valid {
            border-color: #28a745;
            padding-right: calc(.75em + 2.3125rem);
            background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") right .75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3E%3C/svg%3E") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat
        }

        .custom-select.is-valid:focus,
        .was-validated .custom-select:valid:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .form-check-input.is-valid~.valid-feedback,
        .form-check-input.is-valid~.valid-tooltip,
        .was-validated .form-check-input:valid~.valid-feedback,
        .was-validated .form-check-input:valid~.valid-tooltip {
            display: block
        }

        .custom-control-input.is-valid~.custom-control-label:before,
        .was-validated .custom-control-input:valid~.custom-control-label:before {
            border-color: #28a745
        }

        .custom-control-input.is-valid:checked~.custom-control-label:before,
        .was-validated .custom-control-input:valid:checked~.custom-control-label:before {
            border-color: #34ce57
        }

        .custom-control-input.is-valid:focus~.custom-control-label:before,
        .was-validated .custom-control-input:valid:focus~.custom-control-label:before {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label:before,
        .was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label:before {
            border-color: #28a745
        }

        .custom-file-input.is-valid:focus~.custom-file-label,
        .was-validated .custom-file-input:valid:focus~.custom-file-label {
            border-color: #28a745;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .25)
        }

        .invalid-feedback {
            display: none;
            width: 100%
        }

        .invalid-tooltip {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 5;
            display: none;
            max-width: 100%;
            padding: .25rem .5rem;
            margin-top: .1rem;
            font-size: .875rem;
            line-height: 1.5;
            color: #fff;
            background-color: rgba(220, 53, 69, .9);
            border-radius: .25rem
        }

        .form-row>.col>.invalid-tooltip,
        .form-row>[class*=col-]>.invalid-tooltip {
            left: 5px
        }

        .is-invalid~.invalid-feedback,
        .is-invalid~.invalid-tooltip,
        .was-validated :invalid~.invalid-feedback,
        .was-validated :invalid~.invalid-tooltip {
            display: block
        }

        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            border-color: #dc3545;
            padding-right: calc(1.5em + .75rem);
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem)
        }

        .form-control.is-invalid:focus,
        .was-validated .form-control:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .was-validated textarea.form-control:invalid,
        textarea.form-control.is-invalid {
            padding-right: calc(1.5em + .75rem);
            background-position: top calc(.375em + .1875rem) right calc(.375em + .1875rem)
        }

        .custom-select.is-invalid,
        .was-validated .custom-select:invalid {
            border-color: #dc3545;
            padding-right: calc(.75em + 2.3125rem);
            background: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5'%3E%3Cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3E%3C/svg%3E") right .75rem center/8px 10px no-repeat, #fff url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545'%3E%3Ccircle cx='6' cy='6' r='4.5'/%3E%3Cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3E%3Ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3E%3C/svg%3E") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat
        }

        .custom-select.is-invalid:focus,
        .was-validated .custom-select:invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .form-check-input.is-invalid~.invalid-feedback,
        .form-check-input.is-invalid~.invalid-tooltip,
        .was-validated .form-check-input:invalid~.invalid-feedback,
        .was-validated .form-check-input:invalid~.invalid-tooltip {
            display: block
        }

        .custom-control-input.is-invalid~.custom-control-label:before,
        .was-validated .custom-control-input:invalid~.custom-control-label:before {
            border-color: #dc3545
        }

        .custom-control-input.is-invalid:checked~.custom-control-label:before,
        .was-validated .custom-control-input:invalid:checked~.custom-control-label:before {
            border-color: #e4606d
        }

        .custom-control-input.is-invalid:focus~.custom-control-label:before,
        .was-validated .custom-control-input:invalid:focus~.custom-control-label:before {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label:before,
        .was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label:before {
            border-color: #dc3545
        }

        .custom-file-input.is-invalid:focus~.custom-file-label,
        .was-validated .custom-file-input:invalid:focus~.custom-file-label {
            border-color: #dc3545;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .25)
        }

        .form-inline {
            display: flex;
            flex-flow: row wrap;
            align-items: center
        }

        .form-inline .form-check {
            width: 100%
        }

        @media (min-width:576px) {
            .form-inline label {
                justify-content: center
            }

            .form-inline .form-group,
            .form-inline label {
                display: flex;
                align-items: center;
                margin-bottom: 0
            }

            .form-inline .form-group {
                flex: 0 0 auto;
                flex-flow: row wrap
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle
            }

            .form-inline .form-control-plaintext {
                display: inline-block
            }

            .form-inline .custom-select,
            .form-inline .input-group {
                width: auto
            }

            .form-inline .form-check {
                display: flex;
                align-items: center;
                justify-content: center;
                width: auto;
                padding-left: 0
            }

            .form-inline .form-check-input {
                position: relative;
                flex-shrink: 0;
                margin-top: 0;
                margin-right: .25rem;
                margin-left: 0
            }

            .form-inline .custom-control {
                align-items: center;
                justify-content: center
            }

            .form-inline .custom-control-label {
                margin-bottom: 0
            }
        }

        .btn {
            display: inline-block;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent
        }

        @media (prefers-reduced-motion:reduce) {
            .btn {
                transition: none
            }
        }

        .btn:hover {
            color: #212529;
            text-decoration: none
        }

        .btn.focus,
        .btn:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .btn.disabled,
        .btn:disabled {
            opacity: .65
        }

        .btn:not(:disabled):not(.disabled) {
            cursor: pointer
        }

        a.btn.disabled,
        fieldset:disabled a.btn {
            pointer-events: none
        }

        .btn-primary.focus,
        .btn-primary:focus,
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc
        }

        .btn-primary.focus,
        .btn-primary:focus {
            color: #fff;
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            background-color: #0062cc;
            border-color: #005cbf
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
        }

        .btn-secondary.focus,
        .btn-secondary:focus,
        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62
        }

        .btn-secondary.focus,
        .btn-secondary:focus {
            color: #fff;
            box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            color: #fff
        }

        .btn-secondary:not(:disabled):not(.disabled).active,
        .btn-secondary:not(:disabled):not(.disabled):active,
        .show>.btn-secondary.dropdown-toggle {
            background-color: #545b62;
            border-color: #4e555b
        }

        .btn-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-secondary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(130, 138, 145, .5)
        }

        .btn-success.focus,
        .btn-success:focus,
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34
        }

        .btn-success.focus,
        .btn-success:focus {
            color: #fff;
            box-shadow: 0 0 0 .2rem rgba(72, 180, 97, .5)
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #fff
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show>.btn-success.dropdown-toggle {
            background-color: #1e7e34;
            border-color: #1c7430
        }

        .btn-success:not(:disabled):not(.disabled).active:focus,
        .btn-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(72, 180, 97, .5)
        }

        .btn-info.focus,
        .btn-info:focus,
        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b
        }

        .btn-info.focus,
        .btn-info:focus {
            color: #fff;
            box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
        }

        .btn-info.disabled,
        .btn-info:disabled {
            color: #fff
        }

        .btn-info:not(:disabled):not(.disabled).active,
        .btn-info:not(:disabled):not(.disabled):active,
        .show>.btn-info.dropdown-toggle {
            background-color: #117a8b;
            border-color: #10707f
        }

        .btn-info:not(:disabled):not(.disabled).active:focus,
        .btn-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(58, 176, 195, .5)
        }

        .btn-warning.focus,
        .btn-warning:focus,
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00
        }

        .btn-warning.focus,
        .btn-warning:focus {
            color: #212529;
            box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            color: #212529
        }

        .btn-warning:not(:disabled):not(.disabled).active,
        .btn-warning:not(:disabled):not(.disabled):active,
        .show>.btn-warning.dropdown-toggle {
            background-color: #d39e00;
            border-color: #c69500
        }

        .btn-warning:not(:disabled):not(.disabled).active:focus,
        .btn-warning:not(:disabled):not(.disabled):active:focus,
        .show>.btn-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(222, 170, 12, .5)
        }

        .btn-danger.focus,
        .btn-danger:focus,
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130
        }

        .btn-danger.focus,
        .btn-danger:focus {
            color: #fff;
            box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            color: #fff
        }

        .btn-danger:not(:disabled):not(.disabled).active,
        .btn-danger:not(:disabled):not(.disabled):active,
        .show>.btn-danger.dropdown-toggle {
            background-color: #bd2130;
            border-color: #b21f2d
        }

        .btn-danger:not(:disabled):not(.disabled).active:focus,
        .btn-danger:not(:disabled):not(.disabled):active:focus,
        .show>.btn-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(225, 83, 97, .5)
        }

        .btn-light.focus,
        .btn-light:focus,
        .btn-light:hover {
            background-color: #e2e6ea;
            border-color: #dae0e5
        }

        .btn-light.focus,
        .btn-light:focus {
            color: #212529;
            box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
        }

        .btn-light.disabled,
        .btn-light:disabled {
            color: #212529
        }

        .btn-light:not(:disabled):not(.disabled).active,
        .btn-light:not(:disabled):not(.disabled):active,
        .show>.btn-light.dropdown-toggle {
            background-color: #dae0e5;
            border-color: #d3d9df
        }

        .btn-light:not(:disabled):not(.disabled).active:focus,
        .btn-light:not(:disabled):not(.disabled):active:focus,
        .show>.btn-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(216, 217, 219, .5)
        }

        .btn-dark.focus,
        .btn-dark:focus,
        .btn-dark:hover {
            background-color: #23272b;
            border-color: #1d2124
        }

        .btn-dark.focus,
        .btn-dark:focus {
            color: #fff;
            box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            color: #fff
        }

        .btn-dark:not(:disabled):not(.disabled).active,
        .btn-dark:not(:disabled):not(.disabled):active,
        .show>.btn-dark.dropdown-toggle {
            background-color: #1d2124;
            border-color: #171a1d
        }

        .btn-dark:not(:disabled):not(.disabled).active:focus,
        .btn-dark:not(:disabled):not(.disabled):active:focus,
        .show>.btn-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(82, 88, 93, .5)
        }

        .btn-outline-primary.focus,
        .btn-outline-primary:focus,
        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        .btn-outline-secondary.focus,
        .btn-outline-secondary:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-secondary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }

        .btn-outline-success.focus,
        .btn-outline-success:focus,
        .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .btn-outline-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-success.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        .btn-outline-info.focus,
        .btn-outline-info:focus,
        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-info.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        .btn-outline-warning.focus,
        .btn-outline-warning:focus,
        .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-warning.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        .btn-outline-danger.focus,
        .btn-outline-danger:focus,
        .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-danger.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        .btn-outline-light {
            color: #f8f9fa
        }

        .btn-outline-light.focus,
        .btn-outline-light:focus,
        .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .btn-outline-light:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-light.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        .btn-outline-dark.focus,
        .btn-outline-dark:focus,
        .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-dark.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .btn-link {
            text-decoration: none
        }

        .btn-link.disabled,
        .btn-link:disabled {
            color: #6c757d;
            pointer-events: none
        }

        .btn-block {
            display: block;
            width: 100%
        }

        input[type=button].btn-block,
        input[type=reset].btn-block,
        input[type=submit].btn-block {
            width: 100%
        }

        @media (prefers-reduced-motion:reduce) {
            .fade {
                transition: none
            }
        }

        .fade:not(.show) {
            opacity: 0
        }

        .collapse:not(.show) {
            display: none
        }

        .collapsing {
            position: relative;
            height: 0;
            overflow: hidden
        }

        @media (prefers-reduced-motion:reduce) {
            .collapsing {
                transition: none
            }
        }

        .dropdown,
        .dropleft,
        .dropright,
        .dropup {
            position: relative
        }

        .dropdown-toggle {
            white-space: nowrap
        }

        .dropdown-toggle:after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }

        .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            display: none;
            float: left;
            text-align: left;
            list-style: none;
            background-clip: padding-box
        }

        .dropdown-menu-left {
            right: auto;
            left: 0
        }

        .dropdown-menu-right {
            right: 0;
            left: auto
        }

        @media (min-width:576px) {
            .dropdown-menu-sm-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-sm-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:768px) {
            .dropdown-menu-md-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-md-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:992px) {
            .dropdown-menu-lg-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-lg-right {
                right: 0;
                left: auto
            }
        }

        @media (min-width:1200px) {
            .dropdown-menu-xl-left {
                right: auto;
                left: 0
            }

            .dropdown-menu-xl-right {
                right: 0;
                left: auto
            }
        }

        .dropup .dropdown-menu {
            top: auto;
            bottom: 100%;
            margin-top: 0
        }

        .dropup .dropdown-toggle:after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: 0;
            border-right: .3em solid transparent;
            border-bottom: .3em solid;
            border-left: .3em solid transparent
        }

        .dropup .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropright .dropdown-menu {
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0
        }

        .dropright .dropdown-toggle:after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid
        }

        .dropright .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropright .dropdown-toggle:after {
            vertical-align: 0
        }

        .dropleft .dropdown-menu {
            top: 0;
            right: 100%;
            left: auto;
            margin-top: 0
        }

        .dropleft .dropdown-toggle:after {
            display: inline-block;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            display: none
        }

        .dropleft .dropdown-toggle:before {
            display: inline-block;
            margin-right: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid transparent;
            border-right: .3em solid;
            border-bottom: .3em solid transparent
        }

        .dropleft .dropdown-toggle:empty:after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle:before {
            vertical-align: 0
        }

        .dropdown-menu[x-placement^=bottom],
        .dropdown-menu[x-placement^=left],
        .dropdown-menu[x-placement^=right],
        .dropdown-menu[x-placement^=top] {
            right: auto;
            bottom: auto
        }

        .dropdown-item {
            display: block;
            width: 100%;
            clear: both;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }

        .dropdown-item.active,
        .dropdown-item:active,
        .dropdown-item:focus,
        .dropdown-item:hover {
            text-decoration: none
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            pointer-events: none;
            background-color: transparent
        }

        .dropdown-menu.show {
            display: block
        }

        .dropdown-header {
            display: block;
            margin-bottom: 0;
            white-space: nowrap
        }

        .dropdown-item-text {
            display: block;
            padding: .25rem 1.5rem;
            color: #212529
        }

        .btn-group,
        .btn-group-vertical {
            position: relative;
            display: inline-flex;
            vertical-align: middle
        }

        .btn-group-vertical>.btn,
        .btn-group>.btn {
            position: relative;
            flex: 1 1 auto
        }

        .btn-group-vertical>.btn.active,
        .btn-group-vertical>.btn:active,
        .btn-group-vertical>.btn:focus,
        .btn-group-vertical>.btn:hover,
        .btn-group>.btn.active,
        .btn-group>.btn:active,
        .btn-group>.btn:focus,
        .btn-group>.btn:hover {
            z-index: 1
        }

        .btn-toolbar {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start
        }

        .btn-toolbar .input-group {
            width: auto
        }

        .btn-group>.btn-group:not(:first-child),
        .btn-group>.btn:not(:first-child) {
            margin-left: -1px
        }

        .dropdown-toggle-split:after,
        .dropright .dropdown-toggle-split:after,
        .dropup .dropdown-toggle-split:after {
            margin-left: 0
        }

        .dropleft .dropdown-toggle-split:before {
            margin-right: 0
        }

        .btn-group-vertical {
            flex-direction: column;
            align-items: flex-start;
            justify-content: center
        }

        .btn-group-vertical>.btn,
        .btn-group-vertical>.btn-group {
            width: 100%
        }

        .btn-group-vertical>.btn-group:not(:first-child),
        .btn-group-vertical>.btn:not(:first-child) {
            margin-top: -1px
        }

        .btn-group-toggle>.btn,
        .btn-group-toggle>.btn-group>.btn {
            margin-bottom: 0
        }

        .btn-group-toggle>.btn-group>.btn input[type=checkbox],
        .btn-group-toggle>.btn-group>.btn input[type=radio],
        .btn-group-toggle>.btn input[type=checkbox],
        .btn-group-toggle>.btn input[type=radio] {
            position: absolute;
            clip: rect(0, 0, 0, 0);
            pointer-events: none
        }

        .input-group {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            width: 100%
        }

        .input-group>.custom-file,
        .input-group>.custom-select,
        .input-group>.form-control,
        .input-group>.form-control-plaintext {
            position: relative;
            flex: 1 1 auto;
            width: 1%;
            min-width: 0;
            margin-bottom: 0
        }

        .input-group>.custom-file+.custom-file,
        .input-group>.custom-file+.custom-select,
        .input-group>.custom-file+.form-control,
        .input-group>.custom-select+.custom-file,
        .input-group>.custom-select+.custom-select,
        .input-group>.custom-select+.form-control,
        .input-group>.form-control+.custom-file,
        .input-group>.form-control+.custom-select,
        .input-group>.form-control+.form-control,
        .input-group>.form-control-plaintext+.custom-file,
        .input-group>.form-control-plaintext+.custom-select,
        .input-group>.form-control-plaintext+.form-control {
            margin-left: -1px
        }

        .input-group>.custom-file .custom-file-input:focus~.custom-file-label,
        .input-group>.custom-select:focus,
        .input-group>.form-control:focus {
            z-index: 3
        }

        .input-group>.custom-file .custom-file-input:focus {
            z-index: 4
        }

        .input-group>.custom-file {
            display: flex;
            align-items: center
        }

        .input-group>.custom-file:not(:first-child) .custom-file-label,
        .input-group>.custom-file:not(:last-child) .custom-file-label {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group.has-validation>.custom-file:nth-last-child(n+3) .custom-file-label:after,
        .input-group.has-validation>.custom-select:nth-last-child(n+3),
        .input-group.has-validation>.form-control:nth-last-child(n+3),
        .input-group:not(.has-validation)>.custom-file:not(:last-child) .custom-file-label:after,
        .input-group:not(.has-validation)>.custom-select:not(:last-child),
        .input-group:not(.has-validation)>.form-control:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group-append,
        .input-group-prepend {
            display: flex
        }

        .input-group-append .btn,
        .input-group-prepend .btn {
            position: relative;
            z-index: 2
        }

        .input-group-append .btn:focus,
        .input-group-prepend .btn:focus {
            z-index: 3
        }

        .input-group-text {
            display: flex;
            align-items: center;
            padding: .375rem .75rem;
            margin-bottom: 0;
            text-align: center;
            white-space: nowrap
        }

        .input-group-text input[type=checkbox],
        .input-group-text input[type=radio] {
            margin-top: 0
        }

        .input-group-lg>.custom-select,
        .input-group-lg>.form-control:not(textarea) {
            height: calc(1.5em + 1rem + 2px)
        }

        .input-group-lg>.custom-select,
        .input-group-lg>.form-control,
        .input-group-lg>.input-group-append>.btn,
        .input-group-lg>.input-group-append>.input-group-text,
        .input-group-lg>.input-group-prepend>.btn,
        .input-group-lg>.input-group-prepend>.input-group-text {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .input-group-sm>.custom-select,
        .input-group-sm>.form-control:not(textarea) {
            height: calc(1.5em + .5rem + 2px)
        }

        .input-group-sm>.custom-select,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-append>.btn,
        .input-group-sm>.input-group-append>.input-group-text,
        .input-group-sm>.input-group-prepend>.btn,
        .input-group-sm>.input-group-prepend>.input-group-text {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .input-group-lg>.custom-select,
        .input-group-sm>.custom-select {
            padding-right: 1.75rem
        }

        .input-group.has-validation>.input-group-append:nth-last-child(n+3)>.btn,
        .input-group.has-validation>.input-group-append:nth-last-child(n+3)>.input-group-text,
        .input-group:not(.has-validation)>.input-group-append:not(:last-child)>.btn,
        .input-group:not(.has-validation)>.input-group-append:not(:last-child)>.input-group-text,
        .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
        .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
        .input-group>.input-group-prepend>.btn,
        .input-group>.input-group-prepend>.input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav-link {
            display: block
        }

        .nav-link:focus,
        .nav-link:hover {
            text-decoration: none
        }

        .nav-link.disabled {
            pointer-events: none;
            cursor: default
        }

        .nav-tabs .nav-link {
            margin-bottom: -1px
        }

        .nav-tabs .nav-link.disabled {
            background-color: transparent;
            border-color: transparent
        }

        .nav-fill .nav-item,
        .nav-fill>.nav-link {
            flex: 1 1 auto;
            text-align: center
        }

        .nav-justified .nav-item,
        .nav-justified>.nav-link {
            flex-basis: 0;
            flex-grow: 1;
            text-align: center
        }

        .tab-content>.tab-pane {
            display: none
        }

        .tab-content>.active {
            display: block
        }

        .navbar {
            position: relative
        }

        .navbar,
        .navbar .container,
        .navbar .container-fluid,
        .navbar .container-lg,
        .navbar .container-md,
        .navbar .container-sm,
        .navbar .container-xl {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between
        }

        .navbar-brand {
            display: inline-block;
            line-height: inherit;
            white-space: nowrap
        }

        .navbar-brand:focus,
        .navbar-brand:hover {
            text-decoration: none
        }

        .navbar-nav {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-nav .dropdown-menu {
            position: static;
            float: none
        }

        .navbar-text {
            display: inline-block
        }

        .navbar-collapse {
            flex-basis: 100%;
            flex-grow: 1;
            align-items: center
        }

        .navbar-toggler {
            line-height: 1;
            background-color: transparent
        }

        .navbar-toggler:focus,
        .navbar-toggler:hover {
            text-decoration: none
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: 50%/100% 100% no-repeat
        }

        .navbar-nav-scroll {
            max-height: 75vh;
            overflow-y: auto
        }

        @media (max-width:575.98px) {

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid,
            .navbar-expand-sm>.container-lg,
            .navbar-expand-sm>.container-md,
            .navbar-expand-sm>.container-sm,
            .navbar-expand-sm>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:576px) {
            .navbar-expand-sm {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-sm .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-sm .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-sm>.container,
            .navbar-expand-sm>.container-fluid,
            .navbar-expand-sm>.container-lg,
            .navbar-expand-sm>.container-md,
            .navbar-expand-sm>.container-sm,
            .navbar-expand-sm>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-sm .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-sm .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-sm .navbar-toggler {
                display: none
            }
        }

        @media (max-width:767.98px) {

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid,
            .navbar-expand-md>.container-lg,
            .navbar-expand-md>.container-md,
            .navbar-expand-md>.container-sm,
            .navbar-expand-md>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:768px) {
            .navbar-expand-md {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-md .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-md .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-md>.container,
            .navbar-expand-md>.container-fluid,
            .navbar-expand-md>.container-lg,
            .navbar-expand-md>.container-md,
            .navbar-expand-md>.container-sm,
            .navbar-expand-md>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-md .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-md .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-md .navbar-toggler {
                display: none
            }
        }

        @media (max-width:991.98px) {

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid,
            .navbar-expand-lg>.container-lg,
            .navbar-expand-lg>.container-md,
            .navbar-expand-lg>.container-sm,
            .navbar-expand-lg>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:992px) {
            .navbar-expand-lg {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-lg>.container,
            .navbar-expand-lg>.container-fluid,
            .navbar-expand-lg>.container-lg,
            .navbar-expand-lg>.container-md,
            .navbar-expand-lg>.container-sm,
            .navbar-expand-lg>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-lg .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-lg .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }

        @media (max-width:1199.98px) {

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid,
            .navbar-expand-xl>.container-lg,
            .navbar-expand-xl>.container-md,
            .navbar-expand-xl>.container-sm,
            .navbar-expand-xl>.container-xl {
                padding-right: 0;
                padding-left: 0
            }
        }

        @media (min-width:1200px) {
            .navbar-expand-xl {
                flex-flow: row nowrap;
                justify-content: flex-start
            }

            .navbar-expand-xl .navbar-nav {
                flex-direction: row
            }

            .navbar-expand-xl .navbar-nav .dropdown-menu {
                position: absolute
            }

            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }

            .navbar-expand-xl>.container,
            .navbar-expand-xl>.container-fluid,
            .navbar-expand-xl>.container-lg,
            .navbar-expand-xl>.container-md,
            .navbar-expand-xl>.container-sm,
            .navbar-expand-xl>.container-xl {
                flex-wrap: nowrap
            }

            .navbar-expand-xl .navbar-nav-scroll {
                overflow: visible
            }

            .navbar-expand-xl .navbar-collapse {
                display: flex !important;
                flex-basis: auto
            }

            .navbar-expand-xl .navbar-toggler {
                display: none
            }
        }

        .navbar-expand {
            flex-flow: row nowrap;
            justify-content: flex-start
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid,
        .navbar-expand>.container-lg,
        .navbar-expand>.container-md,
        .navbar-expand>.container-sm,
        .navbar-expand>.container-xl {
            padding-right: 0;
            padding-left: 0
        }

        .navbar-expand .navbar-nav {
            flex-direction: row
        }

        .navbar-expand .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand>.container,
        .navbar-expand>.container-fluid,
        .navbar-expand>.container-lg,
        .navbar-expand>.container-md,
        .navbar-expand>.container-sm,
        .navbar-expand>.container-xl {
            flex-wrap: nowrap
        }

        .navbar-expand .navbar-nav-scroll {
            overflow: visible
        }

        .navbar-expand .navbar-collapse {
            display: flex !important;
            flex-basis: auto
        }

        .navbar-expand .navbar-toggler {
            display: none
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30'%3E%3Cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125)
        }

        .card>hr {
            margin-right: 0;
            margin-left: 0
        }

        .card>.list-group {
            border-top: inherit;
            border-bottom: inherit
        }

        .card>.list-group:first-child {
            border-top-width: 0;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card>.list-group:last-child {
            border-bottom-width: 0;
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        .card>.card-header+.list-group,
        .card>.list-group+.card-footer {
            border-top: 0
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px
        }

        .card-subtitle,
        .card-text:last-child {
            margin-bottom: 0
        }

        .card-link:hover {
            text-decoration: none
        }

        .card-header {
            padding: .75rem 1.25rem;
            margin-bottom: 0;
            border-bottom: 1px solid rgba(0, 0, 0, .125)
        }

        .card-footer {
            padding: .75rem 1.25rem;
            border-top: 1px solid rgba(0, 0, 0, .125)
        }

        .card-header-tabs {
            margin-right: -.625rem;
            margin-bottom: -.75rem;
            margin-left: -.625rem
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: calc(.25rem - 1px)
        }

        .card-img,
        .card-img-bottom,
        .card-img-top {
            flex-shrink: 0;
            width: 100%
        }

        .card-img,
        .card-img-top {
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card-img,
        .card-img-bottom {
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        @media (min-width:576px) {
            .card-deck {
                display: flex;
                flex-flow: row wrap;
                margin-right: -15px;
                margin-left: -15px
            }

            .card-deck .card {
                flex: 1 0 0%;
                margin-right: 15px;
                margin-bottom: 0;
                margin-left: 15px
            }
        }

        .card-group>.card {
            margin-bottom: 15px
        }

        @media (min-width:576px) {
            .card-group {
                display: flex;
                flex-flow: row wrap
            }

            .card-group>.card {
                flex: 1 0 0%;
                margin-bottom: 0
            }

            .card-group>.card+.card {
                margin-left: 0;
                border-left: 0
            }

            .card-group>.card:not(:last-child) {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-header,
            .card-group>.card:not(:last-child) .card-img-top {
                border-top-right-radius: 0
            }

            .card-group>.card:not(:last-child) .card-footer,
            .card-group>.card:not(:last-child) .card-img-bottom {
                border-bottom-right-radius: 0
            }

            .card-group>.card:not(:first-child) {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-header,
            .card-group>.card:not(:first-child) .card-img-top {
                border-top-left-radius: 0
            }

            .card-group>.card:not(:first-child) .card-footer,
            .card-group>.card:not(:first-child) .card-img-bottom {
                border-bottom-left-radius: 0
            }
        }

        @media (min-width:576px) {
            .card-columns {
                -moz-column-count: 3;
                column-count: 3;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem;
                orphans: 1;
                widows: 1
            }

            .card-columns .card {
                display: inline-block;
                width: 100%
            }
        }

        .accordion {
            overflow-anchor: none
        }

        .accordion>.card {
            overflow: hidden
        }

        .accordion>.card:not(:last-of-type) {
            border-bottom: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .accordion>.card:not(:first-of-type) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .accordion>.card>.card-header {
            border-radius: 0;
            margin-bottom: -1px
        }

        .pagination {
            display: flex
        }

        .page-link {
            position: relative;
            display: block;
            margin-left: -1px;
            border: 1px solid #dee2e6
        }

        .page-link:hover {
            z-index: 2;
            color: #0056b3;
            text-decoration: none;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .page-link:focus {
            z-index: 3;
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .page-item:last-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem
        }

        .page-item.active .page-link {
            z-index: 3
        }

        .page-item.disabled .page-link {
            pointer-events: none;
            cursor: auto
        }

        .badge {
            display: inline-block;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        @media (prefers-reduced-motion:reduce) {
            .badge {
                transition: none
            }
        }

        a.badge:focus,
        a.badge:hover {
            text-decoration: none
        }

        .badge:empty {
            display: none
        }

        .btn .badge {
            position: relative;
            top: -1px
        }

        a.badge-primary:focus,
        a.badge-primary:hover {
            color: #fff;
            background-color: #0062cc
        }

        a.badge-primary.focus,
        a.badge-primary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .5)
        }

        a.badge-secondary:focus,
        a.badge-secondary:hover {
            color: #fff;
            background-color: #545b62
        }

        a.badge-secondary.focus,
        a.badge-secondary:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(108, 117, 125, .5)
        }

        a.badge-success:focus,
        a.badge-success:hover {
            color: #fff;
            background-color: #1e7e34
        }

        a.badge-success.focus,
        a.badge-success:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(40, 167, 69, .5)
        }

        a.badge-info:focus,
        a.badge-info:hover {
            color: #fff;
            background-color: #117a8b
        }

        a.badge-info.focus,
        a.badge-info:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(23, 162, 184, .5)
        }

        a.badge-warning:focus,
        a.badge-warning:hover {
            color: #212529;
            background-color: #d39e00
        }

        a.badge-warning.focus,
        a.badge-warning:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(255, 193, 7, .5)
        }

        a.badge-danger:focus,
        a.badge-danger:hover {
            color: #fff;
            background-color: #bd2130
        }

        a.badge-danger.focus,
        a.badge-danger:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(220, 53, 69, .5)
        }

        a.badge-light:focus,
        a.badge-light:hover {
            color: #212529;
            background-color: #dae0e5
        }

        a.badge-light.focus,
        a.badge-light:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(248, 249, 250, .5)
        }

        a.badge-dark:focus,
        a.badge-dark:hover {
            color: #fff;
            background-color: #1d2124
        }

        a.badge-dark.focus,
        a.badge-dark:focus {
            outline: 0;
            box-shadow: 0 0 0 .2rem rgba(52, 58, 64, .5)
        }

        .alert {
            position: relative;
            border: 1px solid transparent
        }

        .alert-heading {
            color: inherit
        }

        .alert-dismissible {
            padding-right: 4rem
        }

        .alert-dismissible .close {
            position: absolute;
            z-index: 2;
            color: inherit
        }

        .alert-primary {
            color: #004085;
            background-color: #cce5ff;
            border-color: #b8daff
        }

        .alert-primary hr {
            border-top-color: #9fcdff
        }

        .alert-primary .alert-link {
            color: #002752
        }

        .alert-secondary {
            color: #383d41;
            background-color: #e2e3e5;
            border-color: #d6d8db
        }

        .alert-secondary hr {
            border-top-color: #c8cbcf
        }

        .alert-secondary .alert-link {
            color: #202326
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb
        }

        .alert-success hr {
            border-top-color: #b1dfbb
        }

        .alert-success .alert-link {
            color: #0b2e13
        }

        .alert-info {
            color: #0c5460;
            background-color: #d1ecf1;
            border-color: #bee5eb
        }

        .alert-info hr {
            border-top-color: #abdde5
        }

        .alert-info .alert-link {
            color: #062c33
        }

        .alert-warning {
            color: #856404;
            background-color: #fff3cd;
            border-color: #ffeeba
        }

        .alert-warning hr {
            border-top-color: #ffe8a1
        }

        .alert-warning .alert-link {
            color: #533f03
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb
        }

        .alert-danger hr {
            border-top-color: #f1b0b7
        }

        .alert-danger .alert-link {
            color: #491217
        }

        .alert-light {
            color: #818182;
            background-color: #fefefe;
            border-color: #fdfdfe
        }

        .alert-light hr {
            border-top-color: #ececf6
        }

        .alert-light .alert-link {
            color: #686868
        }

        .alert-dark {
            color: #1b1e21;
            background-color: #d6d8d9;
            border-color: #c6c8ca
        }

        .alert-dark hr {
            border-top-color: #b9bbbe
        }

        .alert-dark .alert-link {
            color: #040505
        }

        .media {
            display: flex;
            align-items: flex-start
        }

        .media-body {
            flex: 1
        }

        .list-group {
            display: flex;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            border-radius: .25rem
        }

        .list-group-item-action {
            width: 100%;
            text-align: inherit
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            z-index: 1;
            text-decoration: none
        }

        .list-group-item {
            position: relative;
            display: block
        }

        .list-group-item:first-child {
            border-top-left-radius: inherit;
            border-top-right-radius: inherit
        }

        .list-group-item:last-child {
            border-bottom-right-radius: inherit;
            border-bottom-left-radius: inherit
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            pointer-events: none
        }

        .list-group-item.active {
            z-index: 2
        }

        .list-group-item+.list-group-item {
            border-top-width: 0
        }

        .list-group-item+.list-group-item.active {
            margin-top: -1px;
            border-top-width: 1px
        }

        .list-group-horizontal {
            flex-direction: row
        }

        .list-group-horizontal>.list-group-item:first-child {
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0
        }

        .list-group-horizontal>.list-group-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-left-radius: 0
        }

        .list-group-horizontal>.list-group-item.active {
            margin-top: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item {
            border-top-width: 1px;
            border-left-width: 0
        }

        .list-group-horizontal>.list-group-item+.list-group-item.active {
            margin-left: -1px;
            border-left-width: 1px
        }

        @media (min-width:576px) {
            .list-group-horizontal-sm {
                flex-direction: row
            }

            .list-group-horizontal-sm>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-sm>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:768px) {
            .list-group-horizontal-md {
                flex-direction: row
            }

            .list-group-horizontal-md>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-md>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-md>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-md>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:992px) {
            .list-group-horizontal-lg {
                flex-direction: row
            }

            .list-group-horizontal-lg>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-lg>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        @media (min-width:1200px) {
            .list-group-horizontal-xl {
                flex-direction: row
            }

            .list-group-horizontal-xl>.list-group-item:first-child {
                border-bottom-left-radius: .25rem;
                border-top-right-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item:last-child {
                border-top-right-radius: .25rem;
                border-bottom-left-radius: 0
            }

            .list-group-horizontal-xl>.list-group-item.active {
                margin-top: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item {
                border-top-width: 1px;
                border-left-width: 0
            }

            .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
                margin-left: -1px;
                border-left-width: 1px
            }
        }

        .list-group-flush {
            border-radius: 0
        }

        .list-group-flush>.list-group-item {
            border-width: 0 0 1px
        }

        .list-group-flush>.list-group-item:last-child {
            border-bottom-width: 0
        }

        .list-group-item-primary.list-group-item-action:focus,
        .list-group-item-primary.list-group-item-action:hover {
            color: #004085;
            background-color: #9fcdff
        }

        .list-group-item-primary.list-group-item-action.active {
            color: #fff;
            background-color: #004085;
            border-color: #004085
        }

        .list-group-item-secondary.list-group-item-action:focus,
        .list-group-item-secondary.list-group-item-action:hover {
            color: #383d41;
            background-color: #c8cbcf
        }

        .list-group-item-secondary.list-group-item-action.active {
            color: #fff;
            background-color: #383d41;
            border-color: #383d41
        }

        .list-group-item-success.list-group-item-action:focus,
        .list-group-item-success.list-group-item-action:hover {
            color: #155724;
            background-color: #b1dfbb
        }

        .list-group-item-success.list-group-item-action.active {
            color: #fff;
            background-color: #155724;
            border-color: #155724
        }

        .list-group-item-info.list-group-item-action:focus,
        .list-group-item-info.list-group-item-action:hover {
            color: #0c5460;
            background-color: #abdde5
        }

        .list-group-item-info.list-group-item-action.active {
            color: #fff;
            background-color: #0c5460;
            border-color: #0c5460
        }

        .list-group-item-warning.list-group-item-action:focus,
        .list-group-item-warning.list-group-item-action:hover {
            color: #856404;
            background-color: #ffe8a1
        }

        .list-group-item-warning.list-group-item-action.active {
            color: #fff;
            background-color: #856404;
            border-color: #856404
        }

        .list-group-item-danger.list-group-item-action:focus,
        .list-group-item-danger.list-group-item-action:hover {
            color: #721c24;
            background-color: #f1b0b7
        }

        .list-group-item-danger.list-group-item-action.active {
            color: #fff;
            background-color: #721c24;
            border-color: #721c24
        }

        .list-group-item-light.list-group-item-action:focus,
        .list-group-item-light.list-group-item-action:hover {
            color: #818182;
            background-color: #ececf6
        }

        .list-group-item-light.list-group-item-action.active {
            color: #fff;
            background-color: #818182;
            border-color: #818182
        }

        .list-group-item-dark.list-group-item-action:focus,
        .list-group-item-dark.list-group-item-action:hover {
            color: #1b1e21;
            background-color: #b9bbbe
        }

        .list-group-item-dark.list-group-item-action.active {
            color: #fff;
            background-color: #1b1e21;
            border-color: #1b1e21
        }

        .close {
            float: right;
            line-height: 1;
            opacity: .5
        }

        .close:hover {
            color: #000;
            text-decoration: none
        }

        .close:not(:disabled):not(.disabled):focus,
        .close:not(:disabled):not(.disabled):hover {
            opacity: .75
        }

        button.close {
            padding: 0;
            background-color: transparent;
            border: 0
        }

        a.close.disabled {
            pointer-events: none
        }

        .modal-open {
            overflow: hidden
        }

        .modal-open .modal {
            overflow-x: hidden;
            overflow-y: auto
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            width: 100%;
            height: 100%;
            overflow: hidden;
            outline: 0
        }

        .modal-dialog {
            position: relative;
            width: auto;
            pointer-events: none
        }

        .modal.fade .modal-dialog {
            transform: translateY(-50px)
        }

        @media (prefers-reduced-motion:reduce) {
            .modal.fade .modal-dialog {
                transition: none
            }
        }

        .modal.show .modal-dialog {
            transform: none
        }

        .modal.modal-static .modal-dialog {
            transform: scale(1.02)
        }

        .modal-dialog-scrollable {
            display: flex;
            max-height: calc(100% - 1rem)
        }

        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 1rem);
            overflow: hidden
        }

        .modal-dialog-scrollable .modal-footer,
        .modal-dialog-scrollable .modal-header {
            flex-shrink: 0
        }

        .modal-dialog-scrollable .modal-body {
            overflow-y: auto
        }

        .modal-dialog-centered {
            display: flex;
            align-items: center
        }

        .modal-dialog-centered:before {
            display: block;
            height: calc(100vh - 1rem);
            height: -webkit-min-content;
            height: -moz-min-content;
            height: min-content;
            content: ""
        }

        .modal-dialog-centered.modal-dialog-scrollable {
            flex-direction: column;
            justify-content: center;
            height: 100%
        }

        .modal-dialog-centered.modal-dialog-scrollable .modal-content {
            max-height: none
        }

        .modal-dialog-centered.modal-dialog-scrollable:before {
            content: none
        }

        .modal-content {
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            pointer-events: auto;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            outline: 0
        }

        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh
        }

        .modal-backdrop.fade {
            opacity: 0
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }

        .modal-header .close {
            padding: 1rem;
            margin: -1rem -1rem -1rem auto
        }

        .modal-title {
            margin-bottom: 0
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto
        }

        .modal-footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            padding: .75rem;
            border-bottom-right-radius: calc(.3rem - 1px);
            border-bottom-left-radius: calc(.3rem - 1px)
        }

        .modal-footer>* {
            margin: .25rem
        }

        .modal-scrollbar-measure {
            position: absolute;
            top: -9999px;
            width: 50px;
            height: 50px;
            overflow: scroll
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-scrollable {
                max-height: calc(100% - 3.5rem)
            }

            .modal-dialog-scrollable .modal-content {
                max-height: calc(100vh - 3.5rem)
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem)
            }

            .modal-dialog-centered:before {
                height: calc(100vh - 3.5rem);
                height: -webkit-min-content;
                height: -moz-min-content;
                height: min-content
            }

            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width:992px) {

            .modal-lg,
            .modal-xl {
                max-width: 800px
            }
        }

        @media (min-width:1200px) {
            .modal-xl {
                max-width: 1140px
            }
        }

        .carousel {
            position: relative
        }

        .carousel.pointer-event {
            touch-action: pan-y
        }

        .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .carousel-inner:after {
            display: block;
            clear: both;
            content: ""
        }

        .carousel-item {
            position: relative;
            display: none;
            float: left;
            width: 100%;
            margin-right: -100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-item {
                transition: none
            }
        }

        .carousel-item-next,
        .carousel-item-prev,
        .carousel-item.active {
            display: block
        }

        .active.carousel-item-right,
        .carousel-item-next:not(.carousel-item-left) {
            transform: translateX(100%)
        }

        .active.carousel-item-left,
        .carousel-item-prev:not(.carousel-item-right) {
            transform: translateX(-100%)
        }

        .carousel-fade .carousel-item {
            opacity: 0;
            transition-property: opacity;
            transform: none
        }

        .carousel-fade .carousel-item-next.carousel-item-left,
        .carousel-fade .carousel-item-prev.carousel-item-right,
        .carousel-fade .carousel-item.active {
            z-index: 1;
            opacity: 1
        }

        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            z-index: 0;
            opacity: 0;
            transition: opacity 0s .6s
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-fade .active.carousel-item-left,
            .carousel-fade .active.carousel-item-right {
                transition: none
            }
        }

        .carousel-control-next,
        .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: opacity .15s ease
        }

        @media (prefers-reduced-motion:reduce) {

            .carousel-control-next,
            .carousel-control-prev {
                transition: none
            }
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            text-decoration: none;
            outline: 0;
            opacity: .9
        }

        .carousel-control-prev {
            left: 0
        }

        .carousel-control-next {
            right: 0
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            display: inline-block;
            background: 50%/100% 100% no-repeat
        }

        .carousel-control-prev-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3E%3C/svg%3E")
        }

        .carousel-control-next-icon {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8'%3E%3Cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3E%3C/svg%3E")
        }

        .carousel-indicators {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 15;
            display: flex;
            justify-content: center;
            padding-left: 0;
            list-style: none
        }

        .carousel-indicators li {
            box-sizing: content-box;
            flex: 0 1 auto;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease
        }

        @media (prefers-reduced-motion:reduce) {
            .carousel-indicators li {
                transition: none
            }
        }

        .carousel-indicators .active {
            opacity: 1
        }

        .carousel-caption {
            position: absolute;
            bottom: 20px;
            z-index: 10;
            padding-top: 20px;
            padding-bottom: 20px;
            text-align: center
        }

        .align-baseline {
            vertical-align: baseline !important
        }

        .align-top {
            vertical-align: top !important
        }

        .align-middle {
            vertical-align: middle !important
        }

        .align-bottom {
            vertical-align: bottom !important
        }

        .align-text-bottom {
            vertical-align: text-bottom !important
        }

        .align-text-top {
            vertical-align: text-top !important
        }

        a.bg-primary:focus,
        a.bg-primary:hover,
        button.bg-primary:focus,
        button.bg-primary:hover {
            background-color: #0062cc !important
        }

        a.bg-secondary:focus,
        a.bg-secondary:hover,
        button.bg-secondary:focus,
        button.bg-secondary:hover {
            background-color: #545b62 !important
        }

        a.bg-success:focus,
        a.bg-success:hover,
        button.bg-success:focus,
        button.bg-success:hover {
            background-color: #1e7e34 !important
        }

        a.bg-info:focus,
        a.bg-info:hover,
        button.bg-info:focus,
        button.bg-info:hover {
            background-color: #117a8b !important
        }

        a.bg-warning:focus,
        a.bg-warning:hover,
        button.bg-warning:focus,
        button.bg-warning:hover {
            background-color: #d39e00 !important
        }

        a.bg-danger:focus,
        a.bg-danger:hover,
        button.bg-danger:focus,
        button.bg-danger:hover {
            background-color: #bd2130 !important
        }

        a.bg-light:focus,
        a.bg-light:hover,
        button.bg-light:focus,
        button.bg-light:hover {
            background-color: #dae0e5 !important
        }

        a.bg-dark:focus,
        a.bg-dark:hover,
        button.bg-dark:focus,
        button.bg-dark:hover {
            background-color: #1d2124 !important
        }

        .bg-white {
            background-color: #fff !important
        }

        .bg-transparent {
            background-color: transparent !important
        }

        .border-0 {
            border: 0 !important
        }

        .border-top-0 {
            border-top: 0 !important
        }

        .border-right-0 {
            border-right: 0 !important
        }

        .border-bottom-0 {
            border-bottom: 0 !important
        }

        .border-left-0 {
            border-left: 0 !important
        }

        .border-white {
            border-color: #fff !important
        }

        .rounded-sm {
            border-radius: .2rem !important
        }

        .rounded-lg {
            border-radius: .3rem !important
        }

        .rounded-circle {
            border-radius: 50% !important
        }

        .rounded-pill {
            border-radius: 50rem !important
        }

        .rounded-0 {
            border-radius: 0 !important
        }

        .clearfix:after {
            display: block;
            clear: both;
            content: ""
        }

        .d-none {
            display: none !important
        }

        .d-inline {
            display: inline !important
        }

        .d-inline-block {
            display: inline-block !important
        }

        .d-block {
            display: block !important
        }

        .d-table {
            display: table !important
        }

        .d-table-row {
            display: table-row !important
        }

        .d-table-cell {
            display: table-cell !important
        }

        .d-flex {
            display: flex !important
        }

        .d-inline-flex {
            display: inline-flex !important
        }

        @media (min-width:576px) {
            .d-sm-none {
                display: none !important
            }

            .d-sm-inline {
                display: inline !important
            }

            .d-sm-inline-block {
                display: inline-block !important
            }

            .d-sm-block {
                display: block !important
            }

            .d-sm-table {
                display: table !important
            }

            .d-sm-table-row {
                display: table-row !important
            }

            .d-sm-table-cell {
                display: table-cell !important
            }

            .d-sm-flex {
                display: flex !important
            }

            .d-sm-inline-flex {
                display: inline-flex !important
            }
        }

        @media (min-width:768px) {
            .d-md-none {
                display: none !important
            }

            .d-md-inline {
                display: inline !important
            }

            .d-md-inline-block {
                display: inline-block !important
            }

            .d-md-block {
                display: block !important
            }

            .d-md-table {
                display: table !important
            }

            .d-md-table-row {
                display: table-row !important
            }

            .d-md-table-cell {
                display: table-cell !important
            }

            .d-md-flex {
                display: flex !important
            }

            .d-md-inline-flex {
                display: inline-flex !important
            }
        }

        @media (min-width:992px) {
            .d-lg-none {
                display: none !important
            }

            .d-lg-inline {
                display: inline !important
            }

            .d-lg-inline-block {
                display: inline-block !important
            }

            .d-lg-block {
                display: block !important
            }

            .d-lg-table {
                display: table !important
            }

            .d-lg-table-row {
                display: table-row !important
            }

            .d-lg-table-cell {
                display: table-cell !important
            }

            .d-lg-flex {
                display: flex !important
            }

            .d-lg-inline-flex {
                display: inline-flex !important
            }
        }

        @media (min-width:1200px) {
            .d-xl-none {
                display: none !important
            }

            .d-xl-inline {
                display: inline !important
            }

            .d-xl-inline-block {
                display: inline-block !important
            }

            .d-xl-block {
                display: block !important
            }

            .d-xl-table {
                display: table !important
            }

            .d-xl-table-row {
                display: table-row !important
            }

            .d-xl-table-cell {
                display: table-cell !important
            }

            .d-xl-flex {
                display: flex !important
            }

            .d-xl-inline-flex {
                display: inline-flex !important
            }
        }

        @media print {
            .d-print-none {
                display: none !important
            }

            .d-print-inline {
                display: inline !important
            }

            .d-print-inline-block {
                display: inline-block !important
            }

            .d-print-block {
                display: block !important
            }

            .d-print-table {
                display: table !important
            }

            .d-print-table-row {
                display: table-row !important
            }

            .d-print-table-cell {
                display: table-cell !important
            }

            .d-print-flex {
                display: flex !important
            }

            .d-print-inline-flex {
                display: inline-flex !important
            }
        }

        .embed-responsive {
            position: relative;
            display: block;
            width: 100%;
            padding: 0;
            overflow: hidden
        }

        .embed-responsive:before {
            display: block;
            content: ""
        }

        .embed-responsive .embed-responsive-item,
        .embed-responsive embed,
        .embed-responsive iframe,
        .embed-responsive object,
        .embed-responsive video {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .embed-responsive-21by9:before {
            padding-top: 42.8571428571%
        }

        .embed-responsive-16by9:before {
            padding-top: 56.25%
        }

        .embed-responsive-4by3:before {
            padding-top: 75%
        }

        .embed-responsive-1by1:before {
            padding-top: 100%
        }

        .flex-row {
            flex-direction: row !important
        }

        .flex-column {
            flex-direction: column !important
        }

        .flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .flex-column-reverse {
            flex-direction: column-reverse !important
        }

        .flex-wrap {
            flex-wrap: wrap !important
        }

        .flex-nowrap {
            flex-wrap: nowrap !important
        }

        .flex-wrap-reverse {
            flex-wrap: wrap-reverse !important
        }

        .flex-fill {
            flex: 1 1 auto !important
        }

        .flex-grow-0 {
            flex-grow: 0 !important
        }

        .flex-grow-1 {
            flex-grow: 1 !important
        }

        .flex-shrink-0 {
            flex-shrink: 0 !important
        }

        .flex-shrink-1 {
            flex-shrink: 1 !important
        }

        .justify-content-start {
            justify-content: flex-start !important
        }

        .justify-content-end {
            justify-content: flex-end !important
        }

        .justify-content-center {
            justify-content: center !important
        }

        .justify-content-between {
            justify-content: space-between !important
        }

        .justify-content-around {
            justify-content: space-around !important
        }

        .align-items-start {
            align-items: flex-start !important
        }

        .align-items-end {
            align-items: flex-end !important
        }

        .align-items-center {
            align-items: center !important
        }

        .align-items-baseline {
            align-items: baseline !important
        }

        .align-items-stretch {
            align-items: stretch !important
        }

        .align-content-start {
            align-content: flex-start !important
        }

        .align-content-end {
            align-content: flex-end !important
        }

        .align-content-center {
            align-content: center !important
        }

        .align-content-between {
            align-content: space-between !important
        }

        .align-content-around {
            align-content: space-around !important
        }

        .align-content-stretch {
            align-content: stretch !important
        }

        .align-self-auto {
            align-self: auto !important
        }

        .align-self-start {
            align-self: flex-start !important
        }

        .align-self-end {
            align-self: flex-end !important
        }

        .align-self-center {
            align-self: center !important
        }

        .align-self-baseline {
            align-self: baseline !important
        }

        .align-self-stretch {
            align-self: stretch !important
        }

        @media (min-width:576px) {
            .flex-sm-row {
                flex-direction: row !important
            }

            .flex-sm-column {
                flex-direction: column !important
            }

            .flex-sm-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-sm-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-sm-wrap {
                flex-wrap: wrap !important
            }

            .flex-sm-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-sm-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-sm-fill {
                flex: 1 1 auto !important
            }

            .flex-sm-grow-0 {
                flex-grow: 0 !important
            }

            .flex-sm-grow-1 {
                flex-grow: 1 !important
            }

            .flex-sm-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-sm-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-sm-start {
                justify-content: flex-start !important
            }

            .justify-content-sm-end {
                justify-content: flex-end !important
            }

            .justify-content-sm-center {
                justify-content: center !important
            }

            .justify-content-sm-between {
                justify-content: space-between !important
            }

            .justify-content-sm-around {
                justify-content: space-around !important
            }

            .align-items-sm-start {
                align-items: flex-start !important
            }

            .align-items-sm-end {
                align-items: flex-end !important
            }

            .align-items-sm-center {
                align-items: center !important
            }

            .align-items-sm-baseline {
                align-items: baseline !important
            }

            .align-items-sm-stretch {
                align-items: stretch !important
            }

            .align-content-sm-start {
                align-content: flex-start !important
            }

            .align-content-sm-end {
                align-content: flex-end !important
            }

            .align-content-sm-center {
                align-content: center !important
            }

            .align-content-sm-between {
                align-content: space-between !important
            }

            .align-content-sm-around {
                align-content: space-around !important
            }

            .align-content-sm-stretch {
                align-content: stretch !important
            }

            .align-self-sm-auto {
                align-self: auto !important
            }

            .align-self-sm-start {
                align-self: flex-start !important
            }

            .align-self-sm-end {
                align-self: flex-end !important
            }

            .align-self-sm-center {
                align-self: center !important
            }

            .align-self-sm-baseline {
                align-self: baseline !important
            }

            .align-self-sm-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:768px) {
            .flex-md-row {
                flex-direction: row !important
            }

            .flex-md-column {
                flex-direction: column !important
            }

            .flex-md-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-md-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-md-wrap {
                flex-wrap: wrap !important
            }

            .flex-md-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-md-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-md-fill {
                flex: 1 1 auto !important
            }

            .flex-md-grow-0 {
                flex-grow: 0 !important
            }

            .flex-md-grow-1 {
                flex-grow: 1 !important
            }

            .flex-md-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-md-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-md-start {
                justify-content: flex-start !important
            }

            .justify-content-md-end {
                justify-content: flex-end !important
            }

            .justify-content-md-center {
                justify-content: center !important
            }

            .justify-content-md-between {
                justify-content: space-between !important
            }

            .justify-content-md-around {
                justify-content: space-around !important
            }

            .align-items-md-start {
                align-items: flex-start !important
            }

            .align-items-md-end {
                align-items: flex-end !important
            }

            .align-items-md-center {
                align-items: center !important
            }

            .align-items-md-baseline {
                align-items: baseline !important
            }

            .align-items-md-stretch {
                align-items: stretch !important
            }

            .align-content-md-start {
                align-content: flex-start !important
            }

            .align-content-md-end {
                align-content: flex-end !important
            }

            .align-content-md-center {
                align-content: center !important
            }

            .align-content-md-between {
                align-content: space-between !important
            }

            .align-content-md-around {
                align-content: space-around !important
            }

            .align-content-md-stretch {
                align-content: stretch !important
            }

            .align-self-md-auto {
                align-self: auto !important
            }

            .align-self-md-start {
                align-self: flex-start !important
            }

            .align-self-md-end {
                align-self: flex-end !important
            }

            .align-self-md-center {
                align-self: center !important
            }

            .align-self-md-baseline {
                align-self: baseline !important
            }

            .align-self-md-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:992px) {
            .flex-lg-row {
                flex-direction: row !important
            }

            .flex-lg-column {
                flex-direction: column !important
            }

            .flex-lg-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-lg-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-lg-wrap {
                flex-wrap: wrap !important
            }

            .flex-lg-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-lg-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-lg-fill {
                flex: 1 1 auto !important
            }

            .flex-lg-grow-0 {
                flex-grow: 0 !important
            }

            .flex-lg-grow-1 {
                flex-grow: 1 !important
            }

            .flex-lg-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-lg-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-lg-start {
                justify-content: flex-start !important
            }

            .justify-content-lg-end {
                justify-content: flex-end !important
            }

            .justify-content-lg-center {
                justify-content: center !important
            }

            .justify-content-lg-between {
                justify-content: space-between !important
            }

            .justify-content-lg-around {
                justify-content: space-around !important
            }

            .align-items-lg-start {
                align-items: flex-start !important
            }

            .align-items-lg-end {
                align-items: flex-end !important
            }

            .align-items-lg-center {
                align-items: center !important
            }

            .align-items-lg-baseline {
                align-items: baseline !important
            }

            .align-items-lg-stretch {
                align-items: stretch !important
            }

            .align-content-lg-start {
                align-content: flex-start !important
            }

            .align-content-lg-end {
                align-content: flex-end !important
            }

            .align-content-lg-center {
                align-content: center !important
            }

            .align-content-lg-between {
                align-content: space-between !important
            }

            .align-content-lg-around {
                align-content: space-around !important
            }

            .align-content-lg-stretch {
                align-content: stretch !important
            }

            .align-self-lg-auto {
                align-self: auto !important
            }

            .align-self-lg-start {
                align-self: flex-start !important
            }

            .align-self-lg-end {
                align-self: flex-end !important
            }

            .align-self-lg-center {
                align-self: center !important
            }

            .align-self-lg-baseline {
                align-self: baseline !important
            }

            .align-self-lg-stretch {
                align-self: stretch !important
            }
        }

        @media (min-width:1200px) {
            .flex-xl-row {
                flex-direction: row !important
            }

            .flex-xl-column {
                flex-direction: column !important
            }

            .flex-xl-row-reverse {
                flex-direction: row-reverse !important
            }

            .flex-xl-column-reverse {
                flex-direction: column-reverse !important
            }

            .flex-xl-wrap {
                flex-wrap: wrap !important
            }

            .flex-xl-nowrap {
                flex-wrap: nowrap !important
            }

            .flex-xl-wrap-reverse {
                flex-wrap: wrap-reverse !important
            }

            .flex-xl-fill {
                flex: 1 1 auto !important
            }

            .flex-xl-grow-0 {
                flex-grow: 0 !important
            }

            .flex-xl-grow-1 {
                flex-grow: 1 !important
            }

            .flex-xl-shrink-0 {
                flex-shrink: 0 !important
            }

            .flex-xl-shrink-1 {
                flex-shrink: 1 !important
            }

            .justify-content-xl-start {
                justify-content: flex-start !important
            }

            .justify-content-xl-end {
                justify-content: flex-end !important
            }

            .justify-content-xl-center {
                justify-content: center !important
            }

            .justify-content-xl-between {
                justify-content: space-between !important
            }

            .justify-content-xl-around {
                justify-content: space-around !important
            }

            .align-items-xl-start {
                align-items: flex-start !important
            }

            .align-items-xl-end {
                align-items: flex-end !important
            }

            .align-items-xl-center {
                align-items: center !important
            }

            .align-items-xl-baseline {
                align-items: baseline !important
            }

            .align-items-xl-stretch {
                align-items: stretch !important
            }

            .align-content-xl-start {
                align-content: flex-start !important
            }

            .align-content-xl-end {
                align-content: flex-end !important
            }

            .align-content-xl-center {
                align-content: center !important
            }

            .align-content-xl-between {
                align-content: space-between !important
            }

            .align-content-xl-around {
                align-content: space-around !important
            }

            .align-content-xl-stretch {
                align-content: stretch !important
            }

            .align-self-xl-auto {
                align-self: auto !important
            }

            .align-self-xl-start {
                align-self: flex-start !important
            }

            .align-self-xl-end {
                align-self: flex-end !important
            }

            .align-self-xl-center {
                align-self: center !important
            }

            .align-self-xl-baseline {
                align-self: baseline !important
            }

            .align-self-xl-stretch {
                align-self: stretch !important
            }
        }

        .float-left {
            float: left !important
        }

        .float-right {
            float: right !important
        }

        .float-none {
            float: none !important
        }

        @media (min-width:576px) {
            .float-sm-left {
                float: left !important
            }

            .float-sm-right {
                float: right !important
            }

            .float-sm-none {
                float: none !important
            }
        }

        @media (min-width:768px) {
            .float-md-left {
                float: left !important
            }

            .float-md-right {
                float: right !important
            }

            .float-md-none {
                float: none !important
            }
        }

        @media (min-width:992px) {
            .float-lg-left {
                float: left !important
            }

            .float-lg-right {
                float: right !important
            }

            .float-lg-none {
                float: none !important
            }
        }

        @media (min-width:1200px) {
            .float-xl-left {
                float: left !important
            }

            .float-xl-right {
                float: right !important
            }

            .float-xl-none {
                float: none !important
            }
        }

        .user-select-all {
            -webkit-user-select: all !important;
            -moz-user-select: all !important;
            -ms-user-select: all !important;
            user-select: all !important
        }

        .user-select-auto {
            -webkit-user-select: auto !important;
            -moz-user-select: auto !important;
            -ms-user-select: auto !important;
            user-select: auto !important
        }

        .user-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
            user-select: none !important
        }

        .overflow-auto {
            overflow: auto !important
        }

        .overflow-hidden {
            overflow: hidden !important
        }

        .position-static {
            position: static !important
        }

        .position-relative {
            position: relative !important
        }

        .position-absolute {
            position: absolute !important
        }

        .position-fixed {
            position: fixed !important
        }

        .position-sticky {
            position: sticky !important
        }

        .fixed-top {
            top: 0
        }

        .fixed-bottom,
        .fixed-top {
            position: fixed;
            right: 0;
            left: 0;
            z-index: 1030
        }

        .fixed-bottom {
            bottom: 0
        }

        @supports (position:sticky) {
            .sticky-top {
                position: sticky;
                top: 0;
                z-index: 1020
            }
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            position: static;
            width: auto;
            height: auto;
            overflow: visible;
            clip: auto;
            white-space: normal
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important
        }

        .shadow {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important
        }

        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
        }

        .shadow-none {
            box-shadow: none !important
        }

        .w-25 {
            width: 25% !important
        }

        .w-50 {
            width: 50% !important
        }

        .w-75 {
            width: 75% !important
        }

        .w-100 {
            width: 100% !important
        }

        .w-auto {
            width: auto !important
        }

        .h-25 {
            height: 25% !important
        }

        .h-50 {
            height: 50% !important
        }

        .h-75 {
            height: 75% !important
        }

        .h-100 {
            height: 100% !important
        }

        .h-auto {
            height: auto !important
        }

        .mw-100 {
            max-width: 100% !important
        }

        .mh-100 {
            max-height: 100% !important
        }

        .min-vw-100 {
            min-width: 100vw !important
        }

        .min-vh-100 {
            min-height: 100vh !important
        }

        .vw-100 {
            width: 100vw !important
        }

        .vh-100 {
            height: 100vh !important
        }

        .m-0 {
            margin: 0 !important
        }

        .mt-0,
        .my-0 {
            margin-top: 0 !important
        }

        .mr-0,
        .mx-0 {
            margin-right: 0 !important
        }

        .mb-0,
        .my-0 {
            margin-bottom: 0 !important
        }

        .ml-0,
        .mx-0 {
            margin-left: 0 !important
        }

        .m-1 {
            margin: .25rem !important
        }

        .mt-1,
        .my-1 {
            margin-top: .25rem !important
        }

        .mr-1,
        .mx-1 {
            margin-right: .25rem !important
        }

        .mb-1,
        .my-1 {
            margin-bottom: .25rem !important
        }

        .ml-1,
        .mx-1 {
            margin-left: .25rem !important
        }

        .m-2 {
            margin: .5rem !important
        }

        .mt-2,
        .my-2 {
            margin-top: .5rem !important
        }

        .mr-2,
        .mx-2 {
            margin-right: .5rem !important
        }

        .mb-2,
        .my-2 {
            margin-bottom: .5rem !important
        }

        .ml-2,
        .mx-2 {
            margin-left: .5rem !important
        }

        .m-3 {
            margin: 1rem !important
        }

        .mt-3,
        .my-3 {
            margin-top: 1rem !important
        }

        .mr-3,
        .mx-3 {
            margin-right: 1rem !important
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important
        }

        .ml-3,
        .mx-3 {
            margin-left: 1rem !important
        }

        .m-4 {
            margin: 1.5rem !important
        }

        .mt-4,
        .my-4 {
            margin-top: 1.5rem !important
        }

        .mr-4,
        .mx-4 {
            margin-right: 1.5rem !important
        }

        .mb-4,
        .my-4 {
            margin-bottom: 1.5rem !important
        }

        .ml-4,
        .mx-4 {
            margin-left: 1.5rem !important
        }

        .m-5 {
            margin: 3rem !important
        }

        .mt-5,
        .my-5 {
            margin-top: 3rem !important
        }

        .mr-5,
        .mx-5 {
            margin-right: 3rem !important
        }

        .mb-5,
        .my-5 {
            margin-bottom: 3rem !important
        }

        .ml-5,
        .mx-5 {
            margin-left: 3rem !important
        }

        .p-0 {
            padding: 0 !important
        }

        .pt-0,
        .py-0 {
            padding-top: 0 !important
        }

        .pr-0,
        .px-0 {
            padding-right: 0 !important
        }

        .pb-0,
        .py-0 {
            padding-bottom: 0 !important
        }

        .pl-0,
        .px-0 {
            padding-left: 0 !important
        }

        .p-1 {
            padding: .25rem !important
        }

        .pt-1,
        .py-1 {
            padding-top: .25rem !important
        }

        .pr-1,
        .px-1 {
            padding-right: .25rem !important
        }

        .pb-1,
        .py-1 {
            padding-bottom: .25rem !important
        }

        .pl-1,
        .px-1 {
            padding-left: .25rem !important
        }

        .p-2 {
            padding: .5rem !important
        }

        .pt-2,
        .py-2 {
            padding-top: .5rem !important
        }

        .pr-2,
        .px-2 {
            padding-right: .5rem !important
        }

        .pb-2,
        .py-2 {
            padding-bottom: .5rem !important
        }

        .pl-2,
        .px-2 {
            padding-left: .5rem !important
        }

        .p-3 {
            padding: 1rem !important
        }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important
        }

        .pr-3,
        .px-3 {
            padding-right: 1rem !important
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important
        }

        .pl-3,
        .px-3 {
            padding-left: 1rem !important
        }

        .p-4 {
            padding: 1.5rem !important
        }

        .pt-4,
        .py-4 {
            padding-top: 1.5rem !important
        }

        .pr-4,
        .px-4 {
            padding-right: 1.5rem !important
        }

        .pb-4,
        .py-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-4,
        .px-4 {
            padding-left: 1.5rem !important
        }

        .p-5 {
            padding: 3rem !important
        }

        .pt-5,
        .py-5 {
            padding-top: 3rem !important
        }

        .pr-5,
        .px-5 {
            padding-right: 3rem !important
        }

        .pb-5,
        .py-5 {
            padding-bottom: 3rem !important
        }

        .pl-5,
        .px-5 {
            padding-left: 3rem !important
        }

        .m-n1 {
            margin: -.25rem !important
        }

        .mt-n1,
        .my-n1 {
            margin-top: -.25rem !important
        }

        .mr-n1,
        .mx-n1 {
            margin-right: -.25rem !important
        }

        .mb-n1,
        .my-n1 {
            margin-bottom: -.25rem !important
        }

        .ml-n1,
        .mx-n1 {
            margin-left: -.25rem !important
        }

        .m-n2 {
            margin: -.5rem !important
        }

        .mt-n2,
        .my-n2 {
            margin-top: -.5rem !important
        }

        .mr-n2,
        .mx-n2 {
            margin-right: -.5rem !important
        }

        .mb-n2,
        .my-n2 {
            margin-bottom: -.5rem !important
        }

        .ml-n2,
        .mx-n2 {
            margin-left: -.5rem !important
        }

        .m-n3 {
            margin: -1rem !important
        }

        .mt-n3,
        .my-n3 {
            margin-top: -1rem !important
        }

        .mr-n3,
        .mx-n3 {
            margin-right: -1rem !important
        }

        .mb-n3,
        .my-n3 {
            margin-bottom: -1rem !important
        }

        .ml-n3,
        .mx-n3 {
            margin-left: -1rem !important
        }

        .m-n4 {
            margin: -1.5rem !important
        }

        .mt-n4,
        .my-n4 {
            margin-top: -1.5rem !important
        }

        .mr-n4,
        .mx-n4 {
            margin-right: -1.5rem !important
        }

        .mb-n4,
        .my-n4 {
            margin-bottom: -1.5rem !important
        }

        .ml-n4,
        .mx-n4 {
            margin-left: -1.5rem !important
        }

        .m-n5 {
            margin: -3rem !important
        }

        .mt-n5,
        .my-n5 {
            margin-top: -3rem !important
        }

        .mr-n5,
        .mx-n5 {
            margin-right: -3rem !important
        }

        .mb-n5,
        .my-n5 {
            margin-bottom: -3rem !important
        }

        .ml-n5,
        .mx-n5 {
            margin-left: -3rem !important
        }

        .m-auto {
            margin: auto !important
        }

        .mt-auto,
        .my-auto {
            margin-top: auto !important
        }

        .mr-auto,
        .mx-auto {
            margin-right: auto !important
        }

        .mb-auto,
        .my-auto {
            margin-bottom: auto !important
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto !important
        }

        @media (min-width:576px) {
            .m-sm-0 {
                margin: 0 !important
            }

            .mt-sm-0,
            .my-sm-0 {
                margin-top: 0 !important
            }

            .mr-sm-0,
            .mx-sm-0 {
                margin-right: 0 !important
            }

            .mb-sm-0,
            .my-sm-0 {
                margin-bottom: 0 !important
            }

            .ml-sm-0,
            .mx-sm-0 {
                margin-left: 0 !important
            }

            .m-sm-1 {
                margin: .25rem !important
            }

            .mt-sm-1,
            .my-sm-1 {
                margin-top: .25rem !important
            }

            .mr-sm-1,
            .mx-sm-1 {
                margin-right: .25rem !important
            }

            .mb-sm-1,
            .my-sm-1 {
                margin-bottom: .25rem !important
            }

            .ml-sm-1,
            .mx-sm-1 {
                margin-left: .25rem !important
            }

            .m-sm-2 {
                margin: .5rem !important
            }

            .mt-sm-2,
            .my-sm-2 {
                margin-top: .5rem !important
            }

            .mr-sm-2,
            .mx-sm-2 {
                margin-right: .5rem !important
            }

            .mb-sm-2,
            .my-sm-2 {
                margin-bottom: .5rem !important
            }

            .ml-sm-2,
            .mx-sm-2 {
                margin-left: .5rem !important
            }

            .m-sm-3 {
                margin: 1rem !important
            }

            .mt-sm-3,
            .my-sm-3 {
                margin-top: 1rem !important
            }

            .mr-sm-3,
            .mx-sm-3 {
                margin-right: 1rem !important
            }

            .mb-sm-3,
            .my-sm-3 {
                margin-bottom: 1rem !important
            }

            .ml-sm-3,
            .mx-sm-3 {
                margin-left: 1rem !important
            }

            .m-sm-4 {
                margin: 1.5rem !important
            }

            .mt-sm-4,
            .my-sm-4 {
                margin-top: 1.5rem !important
            }

            .mr-sm-4,
            .mx-sm-4 {
                margin-right: 1.5rem !important
            }

            .mb-sm-4,
            .my-sm-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-sm-4,
            .mx-sm-4 {
                margin-left: 1.5rem !important
            }

            .m-sm-5 {
                margin: 3rem !important
            }

            .mt-sm-5,
            .my-sm-5 {
                margin-top: 3rem !important
            }

            .mr-sm-5,
            .mx-sm-5 {
                margin-right: 3rem !important
            }

            .mb-sm-5,
            .my-sm-5 {
                margin-bottom: 3rem !important
            }

            .ml-sm-5,
            .mx-sm-5 {
                margin-left: 3rem !important
            }

            .p-sm-0 {
                padding: 0 !important
            }

            .pt-sm-0,
            .py-sm-0 {
                padding-top: 0 !important
            }

            .pr-sm-0,
            .px-sm-0 {
                padding-right: 0 !important
            }

            .pb-sm-0,
            .py-sm-0 {
                padding-bottom: 0 !important
            }

            .pl-sm-0,
            .px-sm-0 {
                padding-left: 0 !important
            }

            .p-sm-1 {
                padding: .25rem !important
            }

            .pt-sm-1,
            .py-sm-1 {
                padding-top: .25rem !important
            }

            .pr-sm-1,
            .px-sm-1 {
                padding-right: .25rem !important
            }

            .pb-sm-1,
            .py-sm-1 {
                padding-bottom: .25rem !important
            }

            .pl-sm-1,
            .px-sm-1 {
                padding-left: .25rem !important
            }

            .p-sm-2 {
                padding: .5rem !important
            }

            .pt-sm-2,
            .py-sm-2 {
                padding-top: .5rem !important
            }

            .pr-sm-2,
            .px-sm-2 {
                padding-right: .5rem !important
            }

            .pb-sm-2,
            .py-sm-2 {
                padding-bottom: .5rem !important
            }

            .pl-sm-2,
            .px-sm-2 {
                padding-left: .5rem !important
            }

            .p-sm-3 {
                padding: 1rem !important
            }

            .pt-sm-3,
            .py-sm-3 {
                padding-top: 1rem !important
            }

            .pr-sm-3,
            .px-sm-3 {
                padding-right: 1rem !important
            }

            .pb-sm-3,
            .py-sm-3 {
                padding-bottom: 1rem !important
            }

            .pl-sm-3,
            .px-sm-3 {
                padding-left: 1rem !important
            }

            .p-sm-4 {
                padding: 1.5rem !important
            }

            .pt-sm-4,
            .py-sm-4 {
                padding-top: 1.5rem !important
            }

            .pr-sm-4,
            .px-sm-4 {
                padding-right: 1.5rem !important
            }

            .pb-sm-4,
            .py-sm-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-sm-4,
            .px-sm-4 {
                padding-left: 1.5rem !important
            }

            .p-sm-5 {
                padding: 3rem !important
            }

            .pt-sm-5,
            .py-sm-5 {
                padding-top: 3rem !important
            }

            .pr-sm-5,
            .px-sm-5 {
                padding-right: 3rem !important
            }

            .pb-sm-5,
            .py-sm-5 {
                padding-bottom: 3rem !important
            }

            .pl-sm-5,
            .px-sm-5 {
                padding-left: 3rem !important
            }

            .m-sm-n1 {
                margin: -.25rem !important
            }

            .mt-sm-n1,
            .my-sm-n1 {
                margin-top: -.25rem !important
            }

            .mr-sm-n1,
            .mx-sm-n1 {
                margin-right: -.25rem !important
            }

            .mb-sm-n1,
            .my-sm-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-sm-n1,
            .mx-sm-n1 {
                margin-left: -.25rem !important
            }

            .m-sm-n2 {
                margin: -.5rem !important
            }

            .mt-sm-n2,
            .my-sm-n2 {
                margin-top: -.5rem !important
            }

            .mr-sm-n2,
            .mx-sm-n2 {
                margin-right: -.5rem !important
            }

            .mb-sm-n2,
            .my-sm-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-sm-n2,
            .mx-sm-n2 {
                margin-left: -.5rem !important
            }

            .m-sm-n3 {
                margin: -1rem !important
            }

            .mt-sm-n3,
            .my-sm-n3 {
                margin-top: -1rem !important
            }

            .mr-sm-n3,
            .mx-sm-n3 {
                margin-right: -1rem !important
            }

            .mb-sm-n3,
            .my-sm-n3 {
                margin-bottom: -1rem !important
            }

            .ml-sm-n3,
            .mx-sm-n3 {
                margin-left: -1rem !important
            }

            .m-sm-n4 {
                margin: -1.5rem !important
            }

            .mt-sm-n4,
            .my-sm-n4 {
                margin-top: -1.5rem !important
            }

            .mr-sm-n4,
            .mx-sm-n4 {
                margin-right: -1.5rem !important
            }

            .mb-sm-n4,
            .my-sm-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-sm-n4,
            .mx-sm-n4 {
                margin-left: -1.5rem !important
            }

            .m-sm-n5 {
                margin: -3rem !important
            }

            .mt-sm-n5,
            .my-sm-n5 {
                margin-top: -3rem !important
            }

            .mr-sm-n5,
            .mx-sm-n5 {
                margin-right: -3rem !important
            }

            .mb-sm-n5,
            .my-sm-n5 {
                margin-bottom: -3rem !important
            }

            .ml-sm-n5,
            .mx-sm-n5 {
                margin-left: -3rem !important
            }

            .m-sm-auto {
                margin: auto !important
            }

            .mt-sm-auto,
            .my-sm-auto {
                margin-top: auto !important
            }

            .mr-sm-auto,
            .mx-sm-auto {
                margin-right: auto !important
            }

            .mb-sm-auto,
            .my-sm-auto {
                margin-bottom: auto !important
            }

            .ml-sm-auto,
            .mx-sm-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:768px) {
            .m-md-0 {
                margin: 0 !important
            }

            .mt-md-0,
            .my-md-0 {
                margin-top: 0 !important
            }

            .mr-md-0,
            .mx-md-0 {
                margin-right: 0 !important
            }

            .mb-md-0,
            .my-md-0 {
                margin-bottom: 0 !important
            }

            .ml-md-0,
            .mx-md-0 {
                margin-left: 0 !important
            }

            .m-md-1 {
                margin: .25rem !important
            }

            .mt-md-1,
            .my-md-1 {
                margin-top: .25rem !important
            }

            .mr-md-1,
            .mx-md-1 {
                margin-right: .25rem !important
            }

            .mb-md-1,
            .my-md-1 {
                margin-bottom: .25rem !important
            }

            .ml-md-1,
            .mx-md-1 {
                margin-left: .25rem !important
            }

            .m-md-2 {
                margin: .5rem !important
            }

            .mt-md-2,
            .my-md-2 {
                margin-top: .5rem !important
            }

            .mr-md-2,
            .mx-md-2 {
                margin-right: .5rem !important
            }

            .mb-md-2,
            .my-md-2 {
                margin-bottom: .5rem !important
            }

            .ml-md-2,
            .mx-md-2 {
                margin-left: .5rem !important
            }

            .m-md-3 {
                margin: 1rem !important
            }

            .mt-md-3,
            .my-md-3 {
                margin-top: 1rem !important
            }

            .mr-md-3,
            .mx-md-3 {
                margin-right: 1rem !important
            }

            .mb-md-3,
            .my-md-3 {
                margin-bottom: 1rem !important
            }

            .ml-md-3,
            .mx-md-3 {
                margin-left: 1rem !important
            }

            .m-md-4 {
                margin: 1.5rem !important
            }

            .mt-md-4,
            .my-md-4 {
                margin-top: 1.5rem !important
            }

            .mr-md-4,
            .mx-md-4 {
                margin-right: 1.5rem !important
            }

            .mb-md-4,
            .my-md-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-md-4,
            .mx-md-4 {
                margin-left: 1.5rem !important
            }

            .m-md-5 {
                margin: 3rem !important
            }

            .mt-md-5,
            .my-md-5 {
                margin-top: 3rem !important
            }

            .mr-md-5,
            .mx-md-5 {
                margin-right: 3rem !important
            }

            .mb-md-5,
            .my-md-5 {
                margin-bottom: 3rem !important
            }

            .ml-md-5,
            .mx-md-5 {
                margin-left: 3rem !important
            }

            .p-md-0 {
                padding: 0 !important
            }

            .pt-md-0,
            .py-md-0 {
                padding-top: 0 !important
            }

            .pr-md-0,
            .px-md-0 {
                padding-right: 0 !important
            }

            .pb-md-0,
            .py-md-0 {
                padding-bottom: 0 !important
            }

            .pl-md-0,
            .px-md-0 {
                padding-left: 0 !important
            }

            .p-md-1 {
                padding: .25rem !important
            }

            .pt-md-1,
            .py-md-1 {
                padding-top: .25rem !important
            }

            .pr-md-1,
            .px-md-1 {
                padding-right: .25rem !important
            }

            .pb-md-1,
            .py-md-1 {
                padding-bottom: .25rem !important
            }

            .pl-md-1,
            .px-md-1 {
                padding-left: .25rem !important
            }

            .p-md-2 {
                padding: .5rem !important
            }

            .pt-md-2,
            .py-md-2 {
                padding-top: .5rem !important
            }

            .pr-md-2,
            .px-md-2 {
                padding-right: .5rem !important
            }

            .pb-md-2,
            .py-md-2 {
                padding-bottom: .5rem !important
            }

            .pl-md-2,
            .px-md-2 {
                padding-left: .5rem !important
            }

            .p-md-3 {
                padding: 1rem !important
            }

            .pt-md-3,
            .py-md-3 {
                padding-top: 1rem !important
            }

            .pr-md-3,
            .px-md-3 {
                padding-right: 1rem !important
            }

            .pb-md-3,
            .py-md-3 {
                padding-bottom: 1rem !important
            }

            .pl-md-3,
            .px-md-3 {
                padding-left: 1rem !important
            }

            .p-md-4 {
                padding: 1.5rem !important
            }

            .pt-md-4,
            .py-md-4 {
                padding-top: 1.5rem !important
            }

            .pr-md-4,
            .px-md-4 {
                padding-right: 1.5rem !important
            }

            .pb-md-4,
            .py-md-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-md-4,
            .px-md-4 {
                padding-left: 1.5rem !important
            }

            .p-md-5 {
                padding: 3rem !important
            }

            .pt-md-5,
            .py-md-5 {
                padding-top: 3rem !important
            }

            .pr-md-5,
            .px-md-5 {
                padding-right: 3rem !important
            }

            .pb-md-5,
            .py-md-5 {
                padding-bottom: 3rem !important
            }

            .pl-md-5,
            .px-md-5 {
                padding-left: 3rem !important
            }

            .m-md-n1 {
                margin: -.25rem !important
            }

            .mt-md-n1,
            .my-md-n1 {
                margin-top: -.25rem !important
            }

            .mr-md-n1,
            .mx-md-n1 {
                margin-right: -.25rem !important
            }

            .mb-md-n1,
            .my-md-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-md-n1,
            .mx-md-n1 {
                margin-left: -.25rem !important
            }

            .m-md-n2 {
                margin: -.5rem !important
            }

            .mt-md-n2,
            .my-md-n2 {
                margin-top: -.5rem !important
            }

            .mr-md-n2,
            .mx-md-n2 {
                margin-right: -.5rem !important
            }

            .mb-md-n2,
            .my-md-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-md-n2,
            .mx-md-n2 {
                margin-left: -.5rem !important
            }

            .m-md-n3 {
                margin: -1rem !important
            }

            .mt-md-n3,
            .my-md-n3 {
                margin-top: -1rem !important
            }

            .mr-md-n3,
            .mx-md-n3 {
                margin-right: -1rem !important
            }

            .mb-md-n3,
            .my-md-n3 {
                margin-bottom: -1rem !important
            }

            .ml-md-n3,
            .mx-md-n3 {
                margin-left: -1rem !important
            }

            .m-md-n4 {
                margin: -1.5rem !important
            }

            .mt-md-n4,
            .my-md-n4 {
                margin-top: -1.5rem !important
            }

            .mr-md-n4,
            .mx-md-n4 {
                margin-right: -1.5rem !important
            }

            .mb-md-n4,
            .my-md-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-md-n4,
            .mx-md-n4 {
                margin-left: -1.5rem !important
            }

            .m-md-n5 {
                margin: -3rem !important
            }

            .mt-md-n5,
            .my-md-n5 {
                margin-top: -3rem !important
            }

            .mr-md-n5,
            .mx-md-n5 {
                margin-right: -3rem !important
            }

            .mb-md-n5,
            .my-md-n5 {
                margin-bottom: -3rem !important
            }

            .ml-md-n5,
            .mx-md-n5 {
                margin-left: -3rem !important
            }

            .m-md-auto {
                margin: auto !important
            }

            .mt-md-auto,
            .my-md-auto {
                margin-top: auto !important
            }

            .mr-md-auto,
            .mx-md-auto {
                margin-right: auto !important
            }

            .mb-md-auto,
            .my-md-auto {
                margin-bottom: auto !important
            }

            .ml-md-auto,
            .mx-md-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:992px) {
            .m-lg-0 {
                margin: 0 !important
            }

            .mt-lg-0,
            .my-lg-0 {
                margin-top: 0 !important
            }

            .mr-lg-0,
            .mx-lg-0 {
                margin-right: 0 !important
            }

            .mb-lg-0,
            .my-lg-0 {
                margin-bottom: 0 !important
            }

            .ml-lg-0,
            .mx-lg-0 {
                margin-left: 0 !important
            }

            .m-lg-1 {
                margin: .25rem !important
            }

            .mt-lg-1,
            .my-lg-1 {
                margin-top: .25rem !important
            }

            .mr-lg-1,
            .mx-lg-1 {
                margin-right: .25rem !important
            }

            .mb-lg-1,
            .my-lg-1 {
                margin-bottom: .25rem !important
            }

            .ml-lg-1,
            .mx-lg-1 {
                margin-left: .25rem !important
            }

            .m-lg-2 {
                margin: .5rem !important
            }

            .mt-lg-2,
            .my-lg-2 {
                margin-top: .5rem !important
            }

            .mr-lg-2,
            .mx-lg-2 {
                margin-right: .5rem !important
            }

            .mb-lg-2,
            .my-lg-2 {
                margin-bottom: .5rem !important
            }

            .ml-lg-2,
            .mx-lg-2 {
                margin-left: .5rem !important
            }

            .m-lg-3 {
                margin: 1rem !important
            }

            .mt-lg-3,
            .my-lg-3 {
                margin-top: 1rem !important
            }

            .mr-lg-3,
            .mx-lg-3 {
                margin-right: 1rem !important
            }

            .mb-lg-3,
            .my-lg-3 {
                margin-bottom: 1rem !important
            }

            .ml-lg-3,
            .mx-lg-3 {
                margin-left: 1rem !important
            }

            .m-lg-4 {
                margin: 1.5rem !important
            }

            .mt-lg-4,
            .my-lg-4 {
                margin-top: 1.5rem !important
            }

            .mr-lg-4,
            .mx-lg-4 {
                margin-right: 1.5rem !important
            }

            .mb-lg-4,
            .my-lg-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-lg-4,
            .mx-lg-4 {
                margin-left: 1.5rem !important
            }

            .m-lg-5 {
                margin: 3rem !important
            }

            .mt-lg-5,
            .my-lg-5 {
                margin-top: 3rem !important
            }

            .mr-lg-5,
            .mx-lg-5 {
                margin-right: 3rem !important
            }

            .mb-lg-5,
            .my-lg-5 {
                margin-bottom: 3rem !important
            }

            .ml-lg-5,
            .mx-lg-5 {
                margin-left: 3rem !important
            }

            .p-lg-0 {
                padding: 0 !important
            }

            .pt-lg-0,
            .py-lg-0 {
                padding-top: 0 !important
            }

            .pr-lg-0,
            .px-lg-0 {
                padding-right: 0 !important
            }

            .pb-lg-0,
            .py-lg-0 {
                padding-bottom: 0 !important
            }

            .pl-lg-0,
            .px-lg-0 {
                padding-left: 0 !important
            }

            .p-lg-1 {
                padding: .25rem !important
            }

            .pt-lg-1,
            .py-lg-1 {
                padding-top: .25rem !important
            }

            .pr-lg-1,
            .px-lg-1 {
                padding-right: .25rem !important
            }

            .pb-lg-1,
            .py-lg-1 {
                padding-bottom: .25rem !important
            }

            .pl-lg-1,
            .px-lg-1 {
                padding-left: .25rem !important
            }

            .p-lg-2 {
                padding: .5rem !important
            }

            .pt-lg-2,
            .py-lg-2 {
                padding-top: .5rem !important
            }

            .pr-lg-2,
            .px-lg-2 {
                padding-right: .5rem !important
            }

            .pb-lg-2,
            .py-lg-2 {
                padding-bottom: .5rem !important
            }

            .pl-lg-2,
            .px-lg-2 {
                padding-left: .5rem !important
            }

            .p-lg-3 {
                padding: 1rem !important
            }

            .pt-lg-3,
            .py-lg-3 {
                padding-top: 1rem !important
            }

            .pr-lg-3,
            .px-lg-3 {
                padding-right: 1rem !important
            }

            .pb-lg-3,
            .py-lg-3 {
                padding-bottom: 1rem !important
            }

            .pl-lg-3,
            .px-lg-3 {
                padding-left: 1rem !important
            }

            .p-lg-4 {
                padding: 1.5rem !important
            }

            .pt-lg-4,
            .py-lg-4 {
                padding-top: 1.5rem !important
            }

            .pr-lg-4,
            .px-lg-4 {
                padding-right: 1.5rem !important
            }

            .pb-lg-4,
            .py-lg-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-lg-4,
            .px-lg-4 {
                padding-left: 1.5rem !important
            }

            .p-lg-5 {
                padding: 3rem !important
            }

            .pt-lg-5,
            .py-lg-5 {
                padding-top: 4rem !important
            }

            .pr-lg-5,
            .px-lg-5 {
                padding-right: 4rem !important
            }

            .pb-lg-5,
            .py-lg-5 {
                padding-bottom: 4rem !important
            }

            .pl-lg-5,
            .px-lg-5 {
                padding-left: 3rem !important
            }

            .m-lg-n1 {
                margin: -.25rem !important
            }

            .mt-lg-n1,
            .my-lg-n1 {
                margin-top: -.25rem !important
            }

            .mr-lg-n1,
            .mx-lg-n1 {
                margin-right: -.25rem !important
            }

            .mb-lg-n1,
            .my-lg-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-lg-n1,
            .mx-lg-n1 {
                margin-left: -.25rem !important
            }

            .m-lg-n2 {
                margin: -.5rem !important
            }

            .mt-lg-n2,
            .my-lg-n2 {
                margin-top: -.5rem !important
            }

            .mr-lg-n2,
            .mx-lg-n2 {
                margin-right: -.5rem !important
            }

            .mb-lg-n2,
            .my-lg-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-lg-n2,
            .mx-lg-n2 {
                margin-left: -.5rem !important
            }

            .m-lg-n3 {
                margin: -1rem !important
            }

            .mt-lg-n3,
            .my-lg-n3 {
                margin-top: -1rem !important
            }

            .mr-lg-n3,
            .mx-lg-n3 {
                margin-right: -1rem !important
            }

            .mb-lg-n3,
            .my-lg-n3 {
                margin-bottom: -1rem !important
            }

            .ml-lg-n3,
            .mx-lg-n3 {
                margin-left: -1rem !important
            }

            .m-lg-n4 {
                margin: -1.5rem !important
            }

            .mt-lg-n4,
            .my-lg-n4 {
                margin-top: -1.5rem !important
            }

            .mr-lg-n4,
            .mx-lg-n4 {
                margin-right: -1.5rem !important
            }

            .mb-lg-n4,
            .my-lg-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-lg-n4,
            .mx-lg-n4 {
                margin-left: -1.5rem !important
            }

            .m-lg-n5 {
                margin: -3rem !important
            }

            .mt-lg-n5,
            .my-lg-n5 {
                margin-top: -3rem !important
            }

            .mr-lg-n5,
            .mx-lg-n5 {
                margin-right: -3rem !important
            }

            .mb-lg-n5,
            .my-lg-n5 {
                margin-bottom: -3rem !important
            }

            .ml-lg-n5,
            .mx-lg-n5 {
                margin-left: -3rem !important
            }

            .m-lg-auto {
                margin: auto !important
            }

            .mt-lg-auto,
            .my-lg-auto {
                margin-top: auto !important
            }

            .mr-lg-auto,
            .mx-lg-auto {
                margin-right: auto !important
            }

            .mb-lg-auto,
            .my-lg-auto {
                margin-bottom: auto !important
            }

            .ml-lg-auto,
            .mx-lg-auto {
                margin-left: auto !important
            }
        }

        @media (min-width:1200px) {
            .m-xl-0 {
                margin: 0 !important
            }

            .mt-xl-0,
            .my-xl-0 {
                margin-top: 0 !important
            }

            .mr-xl-0,
            .mx-xl-0 {
                margin-right: 0 !important
            }

            .mb-xl-0,
            .my-xl-0 {
                margin-bottom: 0 !important
            }

            .ml-xl-0,
            .mx-xl-0 {
                margin-left: 0 !important
            }

            .m-xl-1 {
                margin: .25rem !important
            }

            .mt-xl-1,
            .my-xl-1 {
                margin-top: .25rem !important
            }

            .mr-xl-1,
            .mx-xl-1 {
                margin-right: .25rem !important
            }

            .mb-xl-1,
            .my-xl-1 {
                margin-bottom: .25rem !important
            }

            .ml-xl-1,
            .mx-xl-1 {
                margin-left: .25rem !important
            }

            .m-xl-2 {
                margin: .5rem !important
            }

            .mt-xl-2,
            .my-xl-2 {
                margin-top: .5rem !important
            }

            .mr-xl-2,
            .mx-xl-2 {
                margin-right: .5rem !important
            }

            .mb-xl-2,
            .my-xl-2 {
                margin-bottom: .5rem !important
            }

            .ml-xl-2,
            .mx-xl-2 {
                margin-left: .5rem !important
            }

            .m-xl-3 {
                margin: 1rem !important
            }

            .mt-xl-3,
            .my-xl-3 {
                margin-top: 1rem !important
            }

            .mr-xl-3,
            .mx-xl-3 {
                margin-right: 1rem !important
            }

            .mb-xl-3,
            .my-xl-3 {
                margin-bottom: 1rem !important
            }

            .ml-xl-3,
            .mx-xl-3 {
                margin-left: 1rem !important
            }

            .m-xl-4 {
                margin: 1.5rem !important
            }

            .mt-xl-4,
            .my-xl-4 {
                margin-top: 1.5rem !important
            }

            .mr-xl-4,
            .mx-xl-4 {
                margin-right: 1.5rem !important
            }

            .mb-xl-4,
            .my-xl-4 {
                margin-bottom: 1.5rem !important
            }

            .ml-xl-4,
            .mx-xl-4 {
                margin-left: 1.5rem !important
            }

            .m-xl-5 {
                margin: 3rem !important
            }

            .mt-xl-5,
            .my-xl-5 {
                margin-top: 3rem !important
            }

            .mr-xl-5,
            .mx-xl-5 {
                margin-right: 3rem !important
            }

            .mb-xl-5,
            .my-xl-5 {
                margin-bottom: 3rem !important
            }

            .ml-xl-5,
            .mx-xl-5 {
                margin-left: 3rem !important
            }

            .p-xl-0 {
                padding: 0 !important
            }

            .pt-xl-0,
            .py-xl-0 {
                padding-top: 0 !important
            }

            .pr-xl-0,
            .px-xl-0 {
                padding-right: 0 !important
            }

            .pb-xl-0,
            .py-xl-0 {
                padding-bottom: 0 !important
            }

            .pl-xl-0,
            .px-xl-0 {
                padding-left: 0 !important
            }

            .p-xl-1 {
                padding: .25rem !important
            }

            .pt-xl-1,
            .py-xl-1 {
                padding-top: .25rem !important
            }

            .pr-xl-1,
            .px-xl-1 {
                padding-right: .25rem !important
            }

            .pb-xl-1,
            .py-xl-1 {
                padding-bottom: .25rem !important
            }

            .pl-xl-1,
            .px-xl-1 {
                padding-left: .25rem !important
            }

            .p-xl-2 {
                padding: .5rem !important
            }

            .pt-xl-2,
            .py-xl-2 {
                padding-top: .5rem !important
            }

            .pr-xl-2,
            .px-xl-2 {
                padding-right: .5rem !important
            }

            .pb-xl-2,
            .py-xl-2 {
                padding-bottom: .5rem !important
            }

            .pl-xl-2,
            .px-xl-2 {
                padding-left: .5rem !important
            }

            .p-xl-3 {
                padding: 1rem !important
            }

            .pt-xl-3,
            .py-xl-3 {
                padding-top: 1rem !important
            }

            .pr-xl-3,
            .px-xl-3 {
                padding-right: 1rem !important
            }

            .pb-xl-3,
            .py-xl-3 {
                padding-bottom: 1rem !important
            }

            .pl-xl-3,
            .px-xl-3 {
                padding-left: 1rem !important
            }

            .p-xl-4 {
                padding: 1.5rem !important
            }

            .pt-xl-4,
            .py-xl-4 {
                padding-top: 1.5rem !important
            }

            .pr-xl-4,
            .px-xl-4 {
                padding-right: 1.5rem !important
            }

            .pb-xl-4,
            .py-xl-4 {
                padding-bottom: 1.5rem !important
            }

            .pl-xl-4,
            .px-xl-4 {
                padding-left: 1.5rem !important
            }

            .p-xl-5 {
                padding: 3rem !important
            }

            .pt-xl-5,
            .py-xl-5 {
                padding-top: 3rem !important
            }

            .pr-xl-5,
            .px-xl-5 {
                padding-right: 3rem !important
            }

            .pb-xl-5,
            .py-xl-5 {
                padding-bottom: 3rem !important
            }

            .pl-xl-5,
            .px-xl-5 {
                padding-left: 3rem !important
            }

            .m-xl-n1 {
                margin: -.25rem !important
            }

            .mt-xl-n1,
            .my-xl-n1 {
                margin-top: -.25rem !important
            }

            .mr-xl-n1,
            .mx-xl-n1 {
                margin-right: -.25rem !important
            }

            .mb-xl-n1,
            .my-xl-n1 {
                margin-bottom: -.25rem !important
            }

            .ml-xl-n1,
            .mx-xl-n1 {
                margin-left: -.25rem !important
            }

            .m-xl-n2 {
                margin: -.5rem !important
            }

            .mt-xl-n2,
            .my-xl-n2 {
                margin-top: -.5rem !important
            }

            .mr-xl-n2,
            .mx-xl-n2 {
                margin-right: -.5rem !important
            }

            .mb-xl-n2,
            .my-xl-n2 {
                margin-bottom: -.5rem !important
            }

            .ml-xl-n2,
            .mx-xl-n2 {
                margin-left: -.5rem !important
            }

            .m-xl-n3 {
                margin: -1rem !important
            }

            .mt-xl-n3,
            .my-xl-n3 {
                margin-top: -1rem !important
            }

            .mr-xl-n3,
            .mx-xl-n3 {
                margin-right: -1rem !important
            }

            .mb-xl-n3,
            .my-xl-n3 {
                margin-bottom: -1rem !important
            }

            .ml-xl-n3,
            .mx-xl-n3 {
                margin-left: -1rem !important
            }

            .m-xl-n4 {
                margin: -1.5rem !important
            }

            .mt-xl-n4,
            .my-xl-n4 {
                margin-top: -1.5rem !important
            }

            .mr-xl-n4,
            .mx-xl-n4 {
                margin-right: -1.5rem !important
            }

            .mb-xl-n4,
            .my-xl-n4 {
                margin-bottom: -1.5rem !important
            }

            .ml-xl-n4,
            .mx-xl-n4 {
                margin-left: -1.5rem !important
            }

            .m-xl-n5 {
                margin: -3rem !important
            }

            .mt-xl-n5,
            .my-xl-n5 {
                margin-top: -3rem !important
            }

            .mr-xl-n5,
            .mx-xl-n5 {
                margin-right: -3rem !important
            }

            .mb-xl-n5,
            .my-xl-n5 {
                margin-bottom: -3rem !important
            }

            .ml-xl-n5,
            .mx-xl-n5 {
                margin-left: -3rem !important
            }

            .m-xl-auto {
                margin: auto !important
            }

            .mt-xl-auto,
            .my-xl-auto {
                margin-top: auto !important
            }

            .mr-xl-auto,
            .mx-xl-auto {
                margin-right: auto !important
            }

            .mb-xl-auto,
            .my-xl-auto {
                margin-bottom: auto !important
            }

            .ml-xl-auto,
            .mx-xl-auto {
                margin-left: auto !important
            }
        }

        .stretched-link:after {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1;
            pointer-events: auto;
            content: "";
            background-color: transparent
        }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace !important
        }

        .text-justify {
            text-align: justify !important
        }

        .text-wrap {
            white-space: normal !important
        }

        .text-nowrap {
            white-space: nowrap !important
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .text-left {
            text-align: left !important
        }

        .text-right {
            text-align: right !important
        }

        .text-center {
            text-align: center !important
        }

        @media (min-width:576px) {
            .text-sm-left {
                text-align: left !important
            }

            .text-sm-right {
                text-align: right !important
            }

            .text-sm-center {
                text-align: center !important
            }
        }

        @media (min-width:768px) {
            .text-md-left {
                text-align: left !important
            }

            .text-md-right {
                text-align: right !important
            }

            .text-md-center {
                text-align: center !important
            }
        }

        @media (min-width:992px) {
            .text-lg-left {
                text-align: left !important
            }

            .text-lg-right {
                text-align: right !important
            }

            .text-lg-center {
                text-align: center !important
            }
        }

        @media (min-width:1200px) {
            .text-xl-left {
                text-align: left !important
            }

            .text-xl-right {
                text-align: right !important
            }

            .text-xl-center {
                text-align: center !important
            }
        }

        .text-lowercase {
            text-transform: lowercase !important
        }

        .text-uppercase {
            text-transform: uppercase !important
        }

        .text-capitalize {
            text-transform: capitalize !important
        }

        .font-weight-light {
            font-weight: 300 !important
        }

        .font-weight-lighter {
            font-weight: lighter !important
        }

        .font-weight-normal {
            font-weight: 400 !important
        }

        .font-weight-bold {
            font-weight: 700 !important
        }

        .font-weight-bolder {
            font-weight: bolder !important
        }

        .font-italic {
            font-style: italic !important
        }

        .text-white {
            color: #fff !important
        }

        a.text-primary:focus,
        a.text-primary:hover {
            color: #0056b3 !important
        }

        a.text-secondary:focus,
        a.text-secondary:hover {
            color: #494f54 !important
        }

        a.text-success:focus,
        a.text-success:hover {
            color: #19692c !important
        }

        a.text-info:focus,
        a.text-info:hover {
            color: #0f6674 !important
        }

        a.text-warning:focus,
        a.text-warning:hover {
            color: #ba8b00 !important
        }

        a.text-danger:focus,
        a.text-danger:hover {
            color: #a71d2a !important
        }

        a.text-light:focus,
        a.text-light:hover {
            color: #cbd3da !important
        }

        a.text-dark:focus,
        a.text-dark:hover {
            color: #121416 !important
        }

        .text-black-50 {
            color: rgba(0, 0, 0, .5) !important
        }

        .text-white-50 {
            color: hsla(0, 0%, 100%, .5) !important
        }

        .text-hide {
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0
        }

        .text-decoration-none {
            text-decoration: none !important
        }

        .text-break {
            word-break: break-word !important;
            word-wrap: break-word !important
        }

        .text-reset {
            color: inherit !important
        }

        .visible {
            visibility: visible !important
        }

        .invisible {
            visibility: hidden !important
        }

        @media print {

            *,
            :after,
            :before {
                text-shadow: none !important;
                box-shadow: none !important
            }

            a:not(.btn) {
                text-decoration: underline
            }

            abbr[title]:after {
                content: " (" attr(title) ")"
            }

            pre {
                white-space: pre-wrap !important
            }

            blockquote,
            pre {
                border: 1px solid #adb5bd;
                page-break-inside: avoid
            }

            thead {
                display: table-header-group
            }

            img,
            tr {
                page-break-inside: avoid
            }

            h2,
            h3,
            p {
                orphans: 3;
                widows: 3
            }

            h2,
            h3 {
                page-break-after: avoid
            }

            @page {
                size: a3
            }

            .container,
            body {
                min-width: 992px !important
            }

            .navbar {
                display: none
            }

            .badge {
                border: 1px solid #000
            }

            .table {
                border-collapse: collapse !important
            }

            .table td,
            .table th {
                background-color: #fff !important
            }

            .table-bordered td,
            .table-bordered th {
                border: 1px solid #dee2e6 !important
            }

            .table-dark {
                color: inherit
            }

            .table-dark tbody+tbody,
            .table-dark td,
            .table-dark th,
            .table-dark thead th {
                border-color: #dee2e6
            }

            .table .thead-dark th {
                color: inherit;
                border-color: #dee2e6
            }
        }

        .col-2dot4,
        .col-lg-2dot4,
        .col-md-2dot4,
        .col-sm-2dot4,
        .col-xl-2dot4 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-2dot4 {
            flex: 0 0 20%;
            max-width: 20%
        }

        @media (min-width:540px) {
            .col-sm-2dot4 {
                flex: 0 0 20%;
                max-width: 20%
            }
        }

        @media (min-width:720px) {
            .col-md-2dot4 {
                flex: 0 0 20%;
                max-width: 20%
            }
        }

        @media (min-width:960px) {
            .col-lg-2dot4 {
                flex: 0 0 20%;
                max-width: 20%
            }
        }

        @media (min-width:1140px) {
            .col-xl-2dot4 {
                flex: 0 0 20%;
                max-width: 20%
            }
        }

        .toast-title {
            font-weight: 700
        }

        .toast-message {
            -ms-word-wrap: break-word;
            word-wrap: break-word
        }

        .toast-message a,
        .toast-message label {
            color: #fff
        }

        .toast-message a:hover {
            color: #ccc;
            text-decoration: none
        }

        .toast-close-button {
            position: relative;
            right: -.3em;
            top: -.3em;
            float: right;
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            -webkit-text-shadow: 0 1px 0 #fff;
            text-shadow: 0 1px 0 #fff;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80);
            line-height: 1
        }

        .toast-close-button:focus,
        .toast-close-button:hover {
            color: #000;
            text-decoration: none;
            cursor: pointer;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        .rtl .toast-close-button {
            left: -.3em;
            float: left;
            right: .3em
        }

        button.toast-close-button {
            padding: 0;
            cursor: pointer;
            background: 0 0;
            border: 0;
            -webkit-appearance: none
        }

        .toast-top-center {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-center {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-full-width {
            top: 0;
            right: 0;
            width: 100%
        }

        .toast-bottom-full-width {
            bottom: 0;
            right: 0;
            width: 100%
        }

        .toast-top-left {
            top: 12px;
            left: 12px
        }

        .toast-top-right {
            top: 12px;
            right: 12px
        }

        .toast-bottom-right {
            right: 12px;
            bottom: 12px
        }

        .toast-bottom-left {
            bottom: 12px;
            left: 12px
        }

        #toast-container {
            position: fixed;
            z-index: 999999;
            pointer-events: none
        }

        #toast-container * {
            box-sizing: border-box
        }

        #toast-container>div {
            position: relative;
            pointer-events: auto;
            overflow: hidden;
            margin: 0 0 6px;
            padding: 15px 15px 15px 50px;
            width: 300px;
            border-radius: 3px;
            background-position: 15px;
            background-repeat: no-repeat;
            box-shadow: 0 0 12px #999;
            color: #fff;
            opacity: .8;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
            filter: alpha(opacity=80)
        }

        #toast-container>div.rtl {
            direction: rtl;
            padding: 15px 50px 15px 15px;
            background-position: right 15px center
        }

        #toast-container>div:hover {
            box-shadow: 0 0 12px #000;
            opacity: 1;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
            filter: alpha(opacity=100);
            cursor: pointer
        }

        #toast-container>.toast-info {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=) !important
        }

        #toast-container>.toast-error {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=) !important
        }

        #toast-container>.toast-success {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==) !important
        }

        #toast-container>.toast-warning {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=) !important
        }

        #toast-container.toast-bottom-center>div,
        #toast-container.toast-top-center>div {
            width: 300px;
            margin-left: auto;
            margin-right: auto
        }

        #toast-container.toast-bottom-full-width>div,
        #toast-container.toast-top-full-width>div {
            width: 96%;
            margin-left: auto;
            margin-right: auto
        }

        .toast {
            background-color: #030303
        }

        .toast-success {
            background-color: #51a351
        }

        .toast-error {
            background-color: #bd362f
        }

        .toast-info {
            background-color: #2f96b4
        }

        .toast-warning {
            background-color: #f89406
        }

        .toast-progress {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            background-color: #000;
            opacity: .4;
            -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
            filter: alpha(opacity=40)
        }

        @media (max-width:240px) {
            #toast-container>div {
                padding: 8px 8px 8px 50px;
                width: 11em
            }

            #toast-container>div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media (min-width:241px) and (max-width:480px) {
            #toast-container>div {
                padding: 8px 8px 8px 50px;
                width: 18em
            }

            #toast-container>div.rtl {
                padding: 8px 50px 8px 8px
            }

            #toast-container .toast-close-button {
                right: -.2em;
                top: -.2em
            }

            #toast-container .rtl .toast-close-button {
                left: -.2em;
                right: .2em
            }
        }

        @media (min-width:481px) and (max-width:768px) {
            #toast-container>div {
                padding: 15px 15px 15px 50px;
                width: 25em
            }

            #toast-container>div.rtl {
                padding: 15px 50px 15px 15px
            }
        }

        :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }

        @media (max-width:575.98px) {
            html {
                font-size: 15px
            }
        }

        body {
            font-size: 1rem;
            font-weight: 400;
            color: #212529;
            background-color: #fff
        }

        a {
            color: #007bff;
            text-decoration: none
        }

        a:hover {
            color: #0056b3;
            text-decoration: underline
        }

        b,
        strong {
            font-weight: 700
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            display: block
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: .5rem;
            /* font-family: Roboto; */
            font-weight: 500;
            color: #212529
        }

        .h1,
        h1 {
            font-size: 2.5rem;
            line-height: 3rem
        }

        .h1,
        .h2,
        h1,
        h2 {
            letter-spacing: -.0625rem
        }

        .h2,
        h2 {
            font-size: 2rem
        }

        .h2,
        .h3,
        h2,
        h3 {
            line-height: 2.25rem
        }

        .h3,
        h3 {
            font-size: 1.75rem
        }

        .h4,
        h4 {
            font-size: 1.5rem;
            line-height: 2rem
        }

        .h5,
        h5 {
            font-size: 1.25rem
        }

        .h5,
        .h6,
        h5,
        h6 {
            line-height: 1.5rem
        }

        .h6,
        h6 {
            font-size: 1rem
        }

        .lead {
            line-height: 1.875rem
        }

        .display-1,
        .display-2,
        .display-3,
        .display-4 {
            margin-bottom: .75rem
        }

        .display-1 {
            font-size: 6rem;
            line-height: 1.2
        }

        .display-2 {
            font-size: 5.5rem;
            line-height: 1.2
        }

        .display-3 {
            font-size: 4.5rem;
            line-height: 1.2
        }

        .display-4 {
            font-size: 3.5rem;
            line-height: 1.2
        }

        p {
            margin-bottom: 1.75rem
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }

        .small,
        small {
            font-size: 80%;
            font-weight: 400
        }

        .mark,
        mark {
            padding: .2em;
            background-color: #fcf8e3
        }

        .blockquote {
            margin-bottom: .75rem;
            font-size: 1.25rem
        }

        .blockquote-footer {
            font-size: 1.125rem
        }

        .img-thumbnail {
            padding: .25rem;
            border: none;
            background-color: #fff;
            border-radius: .25rem
        }

        .figure-img {
            margin-bottom: .5rem
        }

        .figure-caption {
            font-size: 90%;
            color: #6c757d
        }

        code,
        kbd,
        pre,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
        }

        code {
            padding: .1875rem .8125rem
        }

        code,
        kbd {
            font-size: 87.5%
        }

        kbd {
            padding: .2rem .4rem;
            color: #fff;
            background-color: #212529;
            border-radius: .625rem
        }

        kbd kbd {
            font-weight: 700
        }

        pre {
            margin-bottom: .75rem;
            font-size: 87.5%;
            color: #212529;
            line-height: 1.375rem
        }

        .pre-scrollable {
            max-height: 340px
        }

        .table {
            background-color: transparent
        }

        .table td,
        .table th {
            padding: .75rem
        }

        .table .table {
            background-color: #fff
        }

        .table-sm td,
        .table-sm th {
            padding: .3rem
        }

        .table-primary,
        .table-primary>td,
        .table-primary>th {
            background-color: #b8daff
        }

        .table-hover .table-primary:hover,
        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #9fcdff
        }

        .table-secondary,
        .table-secondary>td,
        .table-secondary>th {
            background-color: #d6d8db
        }

        .table-hover .table-secondary:hover,
        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #c8cbcf
        }

        .table-success,
        .table-success>td,
        .table-success>th {
            background-color: #c3e6cb
        }

        .table-hover .table-success:hover,
        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #b1dfbb
        }

        .table-info,
        .table-info>td,
        .table-info>th {
            background-color: #bee5eb
        }

        .table-hover .table-info:hover,
        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #abdde5
        }

        .table-warning,
        .table-warning>td,
        .table-warning>th {
            background-color: #ffeeba
        }

        .table-hover .table-warning:hover,
        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #ffe8a1
        }

        .table-danger,
        .table-danger>td,
        .table-danger>th {
            background-color: #f5c6cb
        }

        .table-hover .table-danger:hover,
        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f1b0b7
        }

        .table-light,
        .table-light>td,
        .table-light>th {
            background-color: #fdfdfe
        }

        .table-hover .table-light:hover,
        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6
        }

        .table-dark,
        .table-dark>td,
        .table-dark>th {
            background-color: #c6c8ca
        }

        .table-hover .table-dark:hover,
        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #b9bbbe
        }

        .table-active,
        .table-active>td,
        .table-active>th,
        .table-hover .table-active:hover,
        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, .075)
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .table-dark {
            color: #fff;
            background-color: #343a40
        }

        .table-dark td,
        .table-dark th,
        .table-dark thead th {
            border-color: #454d55
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: hsla(0, 0%, 100%, .05)
        }

        .table-dark.table-hover tbody tr:hover {
            background-color: hsla(0, 0%, 100%, .075)
        }

        .form-control {
            height: auto;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            font-weight: 400;
            will-change: border-color, box-shadow;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .form-control:hover {
            border-color: #a2aeb9
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff
        }

        .form-control:focus,
        .form-control:focus:hover {
            border-color: #80bdff
        }

        .form-control::-moz-placeholder {
            color: #6c757d
        }

        .form-control:-ms-input-placeholder {
            color: #6c757d
        }

        .form-control::placeholder {
            color: #6c757d
        }

        .form-control:disabled,
        .form-control[readonly] {
            background-color: #e9ecef
        }

        .form-control:disabled:hover,
        .form-control[readonly]:hover {
            border-color: #ced4da;
            cursor: not-allowed
        }

        .form-control[readonly]:not(:disabled):focus {
            box-shadow: none;
            border-color: #ced4da
        }

        select.form-control:not([size]):not([multiple]) {
            height: calc(1.5em + .75rem + 2px)
        }

        select.form-control:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        form label:hover,
        select.form-control:hover {
            cursor: pointer
        }

        .col-form-label {
            padding-top: calc(.375rem + 1px);
            padding-bottom: calc(.375rem + 1px);
            line-height: 1.5
        }

        .col-form-label-lg {
            padding-top: calc(.5rem + 1px);
            padding-bottom: calc(.5rem + 1px);
            font-size: 1.25rem;
            line-height: 1.5
        }

        .col-form-label-sm {
            padding-top: calc(.25rem + 1px);
            padding-bottom: calc(.25rem + 1px);
            font-size: .875rem;
            line-height: 1.5
        }

        .form-control-plaintext {
            padding-top: .375rem;
            padding-bottom: .375rem;
            line-height: 1.5;
            font-weight: 400
        }

        .form-control-sm,
        .input-group-sm>.form-control,
        .input-group-sm>.input-group-append>.btn,
        .input-group-sm>.input-group-append>.input-group-text,
        .input-group-sm>.input-group-middle>.input-group-text,
        .input-group-sm>.input-group-prepend>.btn,
        .input-group-sm>.input-group-prepend>.input-group-text {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .input-group-sm>.input-group-append>select.btn:not([size]):not([multiple]),
        .input-group-sm>.input-group-append>select.input-group-text:not([size]):not([multiple]),
        .input-group-sm>.input-group-middle>select.input-group-text:not([size]):not([multiple]),
        .input-group-sm>.input-group-prepend>select.btn:not([size]):not([multiple]),
        .input-group-sm>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
        .input-group-sm>select.form-control:not([size]):not([multiple]),
        select.form-control-sm:not([size]):not([multiple]) {
            height: calc(1.5em + .5rem + 2px)
        }

        .form-control-lg,
        .input-group-lg>.form-control,
        .input-group-lg>.input-group-append>.btn,
        .input-group-lg>.input-group-append>.input-group-text,
        .input-group-lg>.input-group-middle>.input-group-text,
        .input-group-lg>.input-group-prepend>.btn,
        .input-group-lg>.input-group-prepend>.input-group-text {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .input-group-lg>.input-group-append>select.btn:not([size]):not([multiple]),
        .input-group-lg>.input-group-append>select.input-group-text:not([size]):not([multiple]),
        .input-group-lg>.input-group-middle>select.input-group-text:not([size]):not([multiple]),
        .input-group-lg>.input-group-prepend>select.btn:not([size]):not([multiple]),
        .input-group-lg>.input-group-prepend>select.input-group-text:not([size]):not([multiple]),
        .input-group-lg>select.form-control:not([size]):not([multiple]),
        select.form-control-lg:not([size]):not([multiple]) {
            height: calc(1.5em + 1rem + 2px)
        }

        .form-group {
            margin-bottom: 1rem
        }

        .form-text {
            margin-top: .25rem
        }

        .form-check {
            padding-left: 1.25rem
        }

        .form-check-input {
            margin-top: .3rem;
            margin-left: -1.25rem
        }

        .form-check-input:disabled~.form-check-label {
            color: #6c757d
        }

        .form-check-inline {
            margin-right: .75rem
        }

        .form-check-inline .form-check-input {
            margin-right: .3125rem
        }

        .valid-feedback {
            margin-top: .25rem;
            font-size: 80%;
            color: #28a745
        }

        .valid-tooltip {
            background-color: rgba(40, 167, 69, .8)
        }

        .custom-select.is-valid,
        .form-control.is-valid,
        .was-validated .custom-select:valid,
        .was-validated .form-control:valid {
            border-color: #28a745
        }

        .custom-select.is-valid:focus,
        .form-control.is-valid:focus,
        .was-validated .custom-select:valid:focus,
        .was-validated .form-control:valid:focus {
            box-shadow: 0 5px 11.5px rgba(40, 167, 69, .1), 0 1px 1px .1rem rgba(40, 167, 69, .2)
        }

        .custom-select.is-valid:hover,
        .form-control.is-valid:hover,
        .was-validated .custom-select:valid:hover,
        .was-validated .form-control:valid:hover {
            border-color: #28a745
        }

        .custom-control-input.is-valid~.custom-control-label,
        .form-check-input.is-valid~.form-check-label,
        .was-validated .custom-control-input:valid~.custom-control-label,
        .was-validated .form-check-input:valid~.form-check-label {
            color: #28a745
        }

        .custom-control-input.is-valid~.custom-control-label:before,
        .was-validated .custom-control-input:valid~.custom-control-label:before {
            background-color: #5dd879;
            border-color: #34ce57
        }

        .custom-control-input.is-valid:checked~.custom-control-label:before,
        .was-validated .custom-control-input:valid:checked~.custom-control-label:before {
            background-color: #34ce57
        }

        .custom-control-input.is-valid:focus~.custom-control-label:before,
        .was-validated .custom-control-input:valid:focus~.custom-control-label:before {
            box-shadow: 0 .313rem .719rem rgba(40, 167, 69, .1), 0 .156rem .125rem rgba(0, 0, 0, .06)
        }

        .custom-file-input.is-valid~.custom-file-label,
        .was-validated .custom-file-input:valid~.custom-file-label {
            color: #28a745;
            border-color: #28a745
        }

        .custom-file-input.is-valid~.custom-file-label:after,
        .was-validated .custom-file-input:valid~.custom-file-label:after {
            background-color: #afecbd;
            border-color: #34ce57;
            color: #28a745
        }

        .custom-file-input:focus.is-valid~.custom-file-label,
        .was-validated .custom-file-input:focus:valid~.custom-file-label {
            border-color: #28a745;
            box-shadow: 0 5px 11.5px rgba(40, 167, 69, .1), 0 1px 1px .1rem rgba(40, 167, 69, .2)
        }

        .custom-file-input:hover.is-valid~.custom-file-label,
        .was-validated .custom-file-input:hover:valid~.custom-file-label {
            border-color: #28a745
        }

        .custom-toggle .custom-control-input:not(:checked).is-valid~.custom-control-label:before,
        .was-validated .custom-toggle .custom-control-input:not(:checked):valid~.custom-control-label:before {
            background-color: #fff
        }

        .custom-toggle .custom-control-input.is-invalid:focus~.custom-control-label:before,
        .was-validated .custom-toggle .custom-control-input:invalid:focus~.custom-control-label:before {
            box-shadow: 0 .313rem .719rem rgba(40, 167, 69, .1), 0 .156rem .125rem rgba(0, 0, 0, .06)
        }

        .invalid-feedback {
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545
        }

        .invalid-tooltip {
            background-color: rgba(220, 53, 69, .8)
        }

        .custom-select.is-invalid,
        .form-control.is-invalid,
        .was-validated .custom-select:invalid,
        .was-validated .form-control:invalid {
            border-color: #dc3545
        }

        .custom-select.is-invalid:focus,
        .form-control.is-invalid:focus,
        .was-validated .custom-select:invalid:focus,
        .was-validated .form-control:invalid:focus {
            box-shadow: 0 5px 11.5px rgba(220, 53, 69, .1), 0 1px 1px .1rem rgba(220, 53, 69, .2)
        }

        .custom-select.is-invalid:hover,
        .form-control.is-invalid:hover,
        .was-validated .custom-select:invalid:hover,
        .was-validated .form-control:invalid:hover {
            border-color: #dc3545
        }

        .custom-control-input.is-invalid~.custom-control-label,
        .form-check-input.is-invalid~.form-check-label,
        .was-validated .custom-control-input:invalid~.custom-control-label,
        .was-validated .form-check-input:invalid~.form-check-label {
            color: #dc3545
        }

        .custom-control-input.is-invalid~.custom-control-label:before,
        .was-validated .custom-control-input:invalid~.custom-control-label:before {
            background-color: #eb8c95;
            border-color: #e4606d
        }

        .custom-control-input.is-invalid:checked~.custom-control-label:before,
        .was-validated .custom-control-input:invalid:checked~.custom-control-label:before {
            background-color: #e4606d
        }

        .custom-control-input.is-invalid:focus~.custom-control-label:before,
        .was-validated .custom-control-input:invalid:focus~.custom-control-label:before {
            box-shadow: 0 .313rem .719rem rgba(220, 53, 69, .1), 0 .156rem .125rem rgba(0, 0, 0, .06)
        }

        .custom-file-input.is-invalid~.custom-file-label,
        .was-validated .custom-file-input:invalid~.custom-file-label {
            color: #dc3545;
            border-color: #dc3545
        }

        .custom-file-input.is-invalid~.custom-file-label:after,
        .was-validated .custom-file-input:invalid~.custom-file-label:after {
            background-color: #fae3e5;
            border-color: #e4606d;
            color: #dc3545
        }

        .custom-file-input:focus.is-invalid~.custom-file-label,
        .was-validated .custom-file-input:focus:invalid~.custom-file-label {
            border-color: #dc3545;
            box-shadow: 0 5px 11.5px rgba(220, 53, 69, .1), 0 1px 1px .1rem rgba(220, 53, 69, .2)
        }

        .custom-file-input:hover.is-invalid~.custom-file-label,
        .was-validated .custom-file-input:hover:invalid~.custom-file-label {
            border-color: #dc3545
        }

        .custom-toggle .custom-control-input:not(:checked).is-invalid~.custom-control-label:before,
        .was-validated .custom-toggle .custom-control-input:not(:checked):invalid~.custom-control-label:before {
            background-color: #fff
        }

        .custom-toggle .custom-control-input.is-valid~.custom-control-label:before,
        .was-validated .custom-toggle .custom-control-input:valid~.custom-control-label:before {
            background-color: #28a745
        }

        .custom-toggle .custom-control-input.is-invalid~.custom-control-label:after,
        .was-validated .custom-toggle .custom-control-input:invalid~.custom-control-label:after {
            background-color: #eb8c95
        }

        .custom-toggle .custom-control-input.is-invalid:focus~.custom-control-label:before,
        .was-validated .custom-toggle .custom-control-input:invalid:focus~.custom-control-label:before {
            box-shadow: 0 .313rem .719rem rgba(220, 53, 69, .1), 0 .156rem .125rem rgba(0, 0, 0, .06)
        }

        @media (min-width:576px) {
            .form-inline .form-check-input {
                margin-right: .25rem
            }
        }

        .btn {
            font-weight: 400;
            font-family: Roboto;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .btn.hover,
        .btn:hover {
            cursor: pointer
        }

        .btn:not([disabled]):not(.disabled).active,
        .btn:not([disabled]):not(.disabled):active {
            background-image: none
        }

        .btn.btn-squared {
            border-radius: 0
        }

        .btn.btn-pill {
            border-radius: 50px
        }

        .btn-primary {
            color: #fff;
            border-color: #007bff;
            background-color: #007bff
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #006fe6;
            border-color: #006fe6
        }

        .btn-primary.focus,
        .btn-primary:focus {
            box-shadow: 0 0 0 3px rgba(0, 123, 255, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            background-color: #007bff;
            border-color: #007bff;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #006fe6;
            border-color: #0062cc;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-secondary {
            color: #fff;
            border-color: #6c757d;
            background-color: #6c757d
        }

        .btn-secondary:hover {
            color: #fff;
            background-color: #60686f;
            border-color: #60686f
        }

        .btn-secondary.focus,
        .btn-secondary:focus {
            box-shadow: 0 0 0 3px rgba(108, 117, 125, .5)
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            background-color: #6c757d;
            border-color: #6c757d;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-secondary:not(:disabled):not(.disabled).active,
        .btn-secondary:not(:disabled):not(.disabled):active,
        .show>.btn-secondary.dropdown-toggle {
            color: #fff;
            background-color: #60686f;
            border-color: #545b62;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-success {
            color: #fff;
            border-color: #28a745;
            background-color: #28a745
        }

        .btn-success:hover {
            color: #fff;
            background-color: #23923d;
            border-color: #23923d
        }

        .btn-success.focus,
        .btn-success:focus {
            box-shadow: 0 0 0 3px rgba(40, 167, 69, .5)
        }

        .btn-success.disabled,
        .btn-success:disabled {
            background-color: #28a745;
            border-color: #28a745;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-success:not(:disabled):not(.disabled).active,
        .btn-success:not(:disabled):not(.disabled):active,
        .show>.btn-success.dropdown-toggle {
            color: #fff;
            background-color: #23923d;
            border-color: #1e7e34;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-info {
            color: #fff;
            border-color: #17a2b8;
            background-color: #17a2b8
        }

        .btn-info:hover {
            color: #fff;
            background-color: #148ea1;
            border-color: #148ea1
        }

        .btn-info.focus,
        .btn-info:focus {
            box-shadow: 0 0 0 3px rgba(23, 162, 184, .5)
        }

        .btn-info.disabled,
        .btn-info:disabled {
            background-color: #17a2b8;
            border-color: #17a2b8;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-info:not(:disabled):not(.disabled).active,
        .btn-info:not(:disabled):not(.disabled):active,
        .show>.btn-info.dropdown-toggle {
            color: #fff;
            background-color: #148ea1;
            border-color: #117a8b;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-warning {
            color: #212529;
            border-color: #ffc107;
            background-color: #ffc107
        }

        .btn-warning:hover {
            color: #212529;
            background-color: #edb100;
            border-color: #edb100
        }

        .btn-warning.focus,
        .btn-warning:focus {
            box-shadow: 0 0 0 3px rgba(255, 193, 7, .5)
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            background-color: #ffc107;
            border-color: #ffc107;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-warning:not(:disabled):not(.disabled).active,
        .btn-warning:not(:disabled):not(.disabled):active,
        .show>.btn-warning.dropdown-toggle {
            color: #212529;
            background-color: #edb100;
            border-color: #d39e00;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-danger {
            color: #fff;
            border-color: #dc3545;
            background-color: #dc3545
        }

        .btn-danger:hover {
            color: #fff;
            background-color: #d32535;
            border-color: #d32535
        }

        .btn-danger.focus,
        .btn-danger:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, .5)
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            background-color: #dc3545;
            border-color: #dc3545;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-danger:not(:disabled):not(.disabled).active,
        .btn-danger:not(:disabled):not(.disabled):active,
        .show>.btn-danger.dropdown-toggle {
            color: #fff;
            background-color: #d32535;
            border-color: #bd2130;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-light {
            color: #212529;
            border-color: #f8f9fa;
            background-color: #f8f9fa
        }

        .btn-light:hover {
            color: #212529;
            background-color: #e9ecef;
            border-color: #e9ecef
        }

        .btn-light.focus,
        .btn-light:focus {
            box-shadow: 0 0 0 3px rgba(248, 249, 250, .5)
        }

        .btn-light.disabled,
        .btn-light:disabled {
            background-color: #f8f9fa;
            border-color: #f8f9fa;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-light:not(:disabled):not(.disabled).active,
        .btn-light:not(:disabled):not(.disabled):active,
        .show>.btn-light.dropdown-toggle {
            color: #212529;
            background-color: #e9ecef;
            border-color: #dae0e5;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-dark {
            color: #fff;
            border-color: #343a40;
            background-color: #343a40
        }

        .btn-dark:hover {
            color: #fff;
            background-color: #292d32;
            border-color: #292d32
        }

        .btn-dark.focus,
        .btn-dark:focus {
            box-shadow: 0 0 0 3px rgba(52, 58, 64, .5)
        }

        .btn-dark.disabled,
        .btn-dark:disabled {
            background-color: #343a40;
            border-color: #343a40;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-dark:not(:disabled):not(.disabled).active,
        .btn-dark:not(:disabled):not(.disabled):active,
        .show>.btn-dark.dropdown-toggle {
            color: #fff;
            background-color: #292d32;
            border-color: #1d2124;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-white {
            color: #212529;
            border-color: #fff;
            background-color: #fff
        }

        .btn-white:hover {
            color: #212529;
            background-color: #f2f2f2;
            border-color: #f2f2f2
        }

        .btn-white.focus,
        .btn-white:focus {
            box-shadow: 0 0 0 3px hsla(0, 0%, 100%, .5)
        }

        .btn-white.disabled,
        .btn-white:disabled {
            background-color: #fff;
            border-color: #fff;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-white:not(:disabled):not(.disabled).active,
        .btn-white:not(:disabled):not(.disabled):active,
        .show>.btn-white.dropdown-toggle {
            color: #212529;
            background-color: #f2f2f2;
            border-color: #e6e6e6;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-black,
        .btn-black:hover {
            color: #fff;
            border-color: #000;
            background-color: #000
        }

        .btn-black.focus,
        .btn-black:focus {
            box-shadow: 0 0 0 3px rgba(0, 0, 0, .5)
        }

        .btn-black.disabled,
        .btn-black:disabled {
            background-color: #000;
            border-color: #000;
            box-shadow: none;
            cursor: not-allowed
        }

        .btn-black:not(:disabled):not(.disabled).active,
        .btn-black:not(:disabled):not(.disabled):active,
        .show>.btn-black.dropdown-toggle {
            color: #fff;
            background-color: #000;
            border-color: #000;
            background-image: none;
            box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125) !important
        }

        .btn-outline-primary {
            background-color: transparent;
            background-image: none;
            border-color: #007bff;
            color: #007bff
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(0, 123, 255, .25)
        }

        .btn-outline-primary.focus,
        .btn-outline-primary:focus {
            box-shadow: 0 0 0 3px rgba(0, 123, 255, .5) !important
        }

        .btn-outline-primary.disabled,
        .btn-outline-primary:disabled {
            color: #007bff;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .show>.btn-outline-primary.dropdown-toggle {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-primary.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-secondary {
            background-color: transparent;
            background-image: none;
            border-color: #6c757d;
            color: #6c757d
        }

        .btn-outline-secondary:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(108, 117, 125, .25)
        }

        .btn-outline-secondary.focus,
        .btn-outline-secondary:focus {
            box-shadow: 0 0 0 3px rgba(108, 117, 125, .5) !important
        }

        .btn-outline-secondary.disabled,
        .btn-outline-secondary:disabled {
            color: #6c757d;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active,
        .btn-outline-secondary:not(:disabled):not(.disabled):active,
        .show>.btn-outline-secondary.dropdown-toggle {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d
        }

        .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
        .btn-outline-secondary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-secondary.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-success {
            background-color: transparent;
            background-image: none;
            border-color: #28a745;
            color: #28a745
        }

        .btn-outline-success:hover {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(40, 167, 69, .25)
        }

        .btn-outline-success.focus,
        .btn-outline-success:focus {
            box-shadow: 0 0 0 3px rgba(40, 167, 69, .5) !important
        }

        .btn-outline-success.disabled,
        .btn-outline-success:disabled {
            color: #28a745;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-success:not(:disabled):not(.disabled).active,
        .btn-outline-success:not(:disabled):not(.disabled):active,
        .show>.btn-outline-success.dropdown-toggle {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745
        }

        .btn-outline-success:not(:disabled):not(.disabled).active:focus,
        .btn-outline-success:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-success.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-info {
            background-color: transparent;
            background-image: none;
            border-color: #17a2b8;
            color: #17a2b8
        }

        .btn-outline-info:hover {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(23, 162, 184, .25)
        }

        .btn-outline-info.focus,
        .btn-outline-info:focus {
            box-shadow: 0 0 0 3px rgba(23, 162, 184, .5) !important
        }

        .btn-outline-info.disabled,
        .btn-outline-info:disabled {
            color: #17a2b8;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-info:not(:disabled):not(.disabled).active,
        .btn-outline-info:not(:disabled):not(.disabled):active,
        .show>.btn-outline-info.dropdown-toggle {
            color: #fff;
            background-color: #17a2b8;
            border-color: #17a2b8
        }

        .btn-outline-info:not(:disabled):not(.disabled).active:focus,
        .btn-outline-info:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-info.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-warning {
            background-color: transparent;
            background-image: none;
            border-color: #ffc107;
            color: #ffc107
        }

        .btn-outline-warning:hover {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(255, 193, 7, .25)
        }

        .btn-outline-warning.focus,
        .btn-outline-warning:focus {
            box-shadow: 0 0 0 3px rgba(255, 193, 7, .5) !important
        }

        .btn-outline-warning.disabled,
        .btn-outline-warning:disabled {
            color: #ffc107;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active,
        .btn-outline-warning:not(:disabled):not(.disabled):active,
        .show>.btn-outline-warning.dropdown-toggle {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107
        }

        .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
        .btn-outline-warning:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-warning.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-danger {
            background-color: transparent;
            background-image: none;
            border-color: #dc3545;
            color: #dc3545
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(220, 53, 69, .25)
        }

        .btn-outline-danger.focus,
        .btn-outline-danger:focus {
            box-shadow: 0 0 0 3px rgba(220, 53, 69, .5) !important
        }

        .btn-outline-danger.disabled,
        .btn-outline-danger:disabled {
            color: #dc3545;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active,
        .btn-outline-danger:not(:disabled):not(.disabled):active,
        .show>.btn-outline-danger.dropdown-toggle {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545
        }

        .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
        .btn-outline-danger:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-danger.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-light {
            background-color: transparent;
            background-image: none;
            border-color: #f8f9fa;
            color: #212529
        }

        .btn-outline-light:hover {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(248, 249, 250, .25)
        }

        .btn-outline-light.focus,
        .btn-outline-light:focus {
            box-shadow: 0 0 0 3px rgba(248, 249, 250, .5) !important
        }

        .btn-outline-light.disabled,
        .btn-outline-light:disabled {
            color: #f8f9fa;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-light:not(:disabled):not(.disabled).active,
        .btn-outline-light:not(:disabled):not(.disabled):active,
        .show>.btn-outline-light.dropdown-toggle {
            color: #212529;
            background-color: #f8f9fa;
            border-color: #f8f9fa
        }

        .btn-outline-light:not(:disabled):not(.disabled).active:focus,
        .btn-outline-light:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-light.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-dark {
            background-color: transparent;
            background-image: none;
            border-color: #343a40;
            color: #343a40
        }

        .btn-outline-dark:hover {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(52, 58, 64, .25)
        }

        .btn-outline-dark.focus,
        .btn-outline-dark:focus {
            box-shadow: 0 0 0 3px rgba(52, 58, 64, .5) !important
        }

        .btn-outline-dark.disabled,
        .btn-outline-dark:disabled {
            color: #343a40;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active,
        .btn-outline-dark:not(:disabled):not(.disabled):active,
        .show>.btn-outline-dark.dropdown-toggle {
            color: #fff;
            background-color: #343a40;
            border-color: #343a40
        }

        .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
        .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-dark.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-white {
            background-color: transparent;
            background-image: none;
            border-color: #fff;
            color: #212529;
            color: #fff
        }

        .btn-outline-white:hover {
            color: #212529;
            background-color: #fff;
            border-color: #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px hsla(0, 0%, 100%, .25)
        }

        .btn-outline-white.focus,
        .btn-outline-white:focus {
            box-shadow: 0 0 0 3px hsla(0, 0%, 100%, .5) !important
        }

        .btn-outline-white.disabled,
        .btn-outline-white:disabled {
            color: #fff;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-white:not(:disabled):not(.disabled).active,
        .btn-outline-white:not(:disabled):not(.disabled):active,
        .show>.btn-outline-white.dropdown-toggle {
            color: #212529;
            background-color: #fff;
            border-color: #fff
        }

        .btn-outline-white:not(:disabled):not(.disabled).active:focus,
        .btn-outline-white:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-white.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-white:not(:disabled):not(.disabled).active,
        .btn-outline-white:not(:disabled):not(.disabled):active {
            color: #000
        }

        .btn-outline-black {
            background-color: transparent;
            background-image: none;
            border-color: #000;
            color: #000
        }

        .btn-outline-black:hover {
            color: #fff;
            background-color: #000;
            border-color: #000;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .05), 0 4px 10px rgba(0, 0, 0, .25)
        }

        .btn-outline-black.focus,
        .btn-outline-black:focus {
            box-shadow: 0 0 0 3px rgba(0, 0, 0, .5) !important
        }

        .btn-outline-black.disabled,
        .btn-outline-black:disabled {
            color: #000;
            background-color: transparent;
            box-shadow: none
        }

        .btn-outline-black:not(:disabled):not(.disabled).active,
        .btn-outline-black:not(:disabled):not(.disabled):active,
        .show>.btn-outline-black.dropdown-toggle {
            color: #fff;
            background-color: #000;
            border-color: #000
        }

        .btn-outline-black:not(:disabled):not(.disabled).active:focus,
        .btn-outline-black:not(:disabled):not(.disabled):active:focus,
        .show>.btn-outline-black.dropdown-toggle:focus {
            box-shadow: none !important
        }

        .btn-outline-black:not(:disabled):not(.disabled).active,
        .btn-outline-black:not(:disabled):not(.disabled):active {
            color: #fff
        }

        .btn-link {
            font-weight: 400;
            color: #007bff
        }

        .btn-link:hover {
            color: #0056b3
        }

        .btn-link.focus,
        .btn-link:focus,
        .btn-link:hover {
            text-decoration: underline
        }

        .btn-link:disabled {
            color: #6c757d
        }

        .btn-group-lg>.btn,
        .btn-lg {
            padding: .5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: .3rem
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem
        }

        .btn-block+.btn-block {
            margin-top: .5rem
        }

        .fade {
            transition: opacity .15s linear
        }

        .collapsing {
            transition: height .35s ease
        }

        i.material-icons {
            font-size: inherit;
            position: relative;
            top: 2px
        }

        .dropdown-menu {
            z-index: 1000;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }

        .dropdown-menu-small {
            padding: .25rem 0;
            font-size: .813rem
        }

        .dropdown-menu-small .dropdown-item {
            padding: .375rem .875rem;
            font-size: .813rem
        }

        .dropdown-menu-small .dropdown-divider {
            margin: .25rem 0
        }

        .dropup .dropdown-menu {
            margin-bottom: .125rem
        }

        .dropright .dropdown-menu {
            margin-left: .125rem
        }

        .dropleft .dropdown-menu {
            margin-right: .125rem
        }

        .dropdown-divider {
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef
        }

        .dropdown-item {
            padding: .25rem 1.5rem;
            font-weight: 400;
            color: #212529;
            font-size: .9375rem;
            transition: background-color .25s cubic-bezier(.27, .01, .38, 1.06), color .25s cubic-bezier(.27, .01, .38, 1.06)
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: #16181b;
            background-color: #e9ecef
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: #fff;
            background-color: #007bff
        }

        .dropdown-item.disabled,
        .dropdown-item:disabled {
            color: #adb5bd
        }

        .dropdown-item.disabled:hover,
        .dropdown-item:disabled:hover {
            background: none;
            cursor: not-allowed
        }

        .dropdown-header {
            padding: .5rem 1.5rem;
            font-size: .875rem;
            color: #6c757d
        }

        .btn-group .btn+.btn,
        .btn-group .btn+.btn-group,
        .btn-group .btn-group+.btn,
        .btn-group .btn-group+.btn-group {
            margin-left: -1px
        }

        .btn-group>.btn-group:not(:last-child)>.btn,
        .btn-group>.btn:not(:last-child):not(.dropdown-toggle) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .btn-group>.btn-group:not(:first-child)>.btn,
        .btn-group>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .dropdown-toggle-split {
            padding-right: .5625rem;
            padding-left: .5625rem
        }

        .btn-group-sm>.btn+.dropdown-toggle-split,
        .btn-sm+.dropdown-toggle-split {
            padding-right: .375rem;
            padding-left: .375rem
        }

        .btn-group-lg>.btn+.dropdown-toggle-split,
        .btn-lg+.dropdown-toggle-split {
            padding-right: .75rem;
            padding-left: .75rem
        }

        .btn-group-vertical>.btn+.btn,
        .btn-group-vertical>.btn+.btn-group,
        .btn-group-vertical>.btn-group+.btn,
        .btn-group-vertical>.btn-group+.btn-group {
            margin-top: -1px
        }

        .btn-group-vertical>.btn-group:not(:last-child)>.btn,
        .btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle) {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0
        }

        .btn-group-vertical>.btn-group:not(:first-child)>.btn,
        .btn-group-vertical>.btn:not(:first-child) {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .input-group>.custom-file+.custom-file,
        .input-group>.custom-file+.custom-select,
        .input-group>.custom-file+.form-control,
        .input-group>.custom-select+.custom-file,
        .input-group>.custom-select+.custom-select,
        .input-group>.custom-select+.form-control,
        .input-group>.form-control+.custom-file,
        .input-group>.form-control+.custom-select,
        .input-group>.form-control+.form-control {
            margin-left: -1px
        }

        .input-group>.custom-select:not(:last-child),
        .input-group>.form-control:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>.custom-select:not(:first-child),
        .input-group>.form-control:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group>.custom-file:not(:last-child) .custom-file-label,
        .input-group>.custom-file:not(:last-child) .custom-file-label:after {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>.custom-file:not(:first-child) .custom-file-label,
        .input-group>.custom-file:not(:first-child) .custom-file-label:after {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group.input-group-seamless>.form-control {
            border-radius: .25rem
        }

        .input-group.input-group-seamless>.input-group-append,
        .input-group.input-group-seamless>.input-group-prepend {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 4
        }

        .input-group.input-group-seamless>.input-group-append .input-group-text,
        .input-group.input-group-seamless>.input-group-prepend .input-group-text {
            padding: 12px 14px;
            background: transparent;
            border: none
        }

        .input-group.input-group-seamless>.input-group-append {
            right: 0
        }

        .input-group.input-group-seamless>.input-group-middle {
            right: 0;
            left: 0
        }

        .input-group.input-group-seamless>.input-group-prepend {
            left: 0
        }

        .input-group.input-group-seamless>.custom-select:not(:last-child),
        .input-group.input-group-seamless>.form-control:not(:last-child) {
            padding-right: 40px
        }

        .input-group.input-group-seamless>.custom-select:not(:first-child),
        .input-group.input-group-seamless>.form-control:not(:first-child) {
            padding-left: 40px
        }

        .input-group-append .btn+.btn,
        .input-group-append .btn+.input-group-text,
        .input-group-append .input-group-text+.btn,
        .input-group-append .input-group-text+.input-group-text,
        .input-group-prepend .btn+.btn,
        .input-group-prepend .btn+.input-group-text,
        .input-group-prepend .input-group-text+.btn,
        .input-group-prepend .input-group-text+.input-group-text {
            margin-left: -1px
        }

        .input-group-prepend {
            margin-right: -1px
        }

        .input-group-append {
            margin-left: -1px
        }

        .input-group-text {
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: .25rem
        }

        .input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),
        .input-group>.input-group-append:last-child>.input-group-text:not(:last-child),
        .input-group>.input-group-append:not(:last-child)>.btn,
        .input-group>.input-group-append:not(:last-child)>.input-group-text,
        .input-group>.input-group-prepend>.btn,
        .input-group>.input-group-prepend>.input-group-text {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .input-group>.input-group-append>.btn,
        .input-group>.input-group-append>.input-group-text,
        .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
        .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),
        .input-group>.input-group-prepend:not(:first-child)>.btn,
        .input-group>.input-group-prepend:not(:first-child)>.input-group-text {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .input-group>.input-group-middle>.btn,
        .input-group>.input-group-middle>.input-group-text {
            border-left: 0;
            border-right: 0;
            border-radius: 0
        }

        .input-group-middle {
            display: flex
        }

        .custom-control {
            min-height: 1.5rem;
            padding-left: .5rem
        }

        .custom-control:hover {
            cursor: pointer
        }

        .custom-control .custom-control-label:before {
            pointer-events: all
        }

        .custom-control-inline {
            margin-right: 1rem
        }

        .custom-control-input:checked~.custom-control-label:before {
            color: #fff;
            border-color: transparent;
            background-color: #007bff
        }

        .custom-control-input:focus~.custom-control-label:before {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-control-input:active~.custom-control-label:before {
            color: #fff;
            background-color: #b3d7ff
        }

        .custom-control-input:disabled~.custom-control-label {
            color: #6c757d
        }

        .custom-control-input:disabled~.custom-control-label:hover {
            cursor: not-allowed
        }

        .custom-control-input:disabled~.custom-control-label:before {
            background-color: #e9ecef
        }

        .custom-control-label {
            position: static
        }

        .custom-control-label:hover {
            cursor: pointer
        }

        .custom-control-label:before {
            top: .25rem;
            left: 0;
            width: 1rem;
            height: 1rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            transition: all .25s cubic-bezier(.27, .01, .38, 1.06)
        }

        .custom-control-label:after {
            top: .25rem;
            width: 1rem;
            height: 1rem;
            background-size: 50% 50%
        }

        .custom-switch {
            padding-left: 2.25rem
        }

        .custom-switch .custom-control-label {
            position: relative
        }

        .custom-checkbox .custom-control-label:before {
            border-radius: .25rem
        }

        .custom-checkbox .custom-control-label:after {
            content: "";
            position: absolute;
            top: 5px;
            left: 7px;
            width: 5px;
            height: 11px;
            opacity: 0;
            transform: rotate(45deg) scale(0);
            border-right: 2px solid #fff;
            border-bottom: 2px solid #fff;
            transition: transform .25s cubic-bezier(.27, .01, .38, 1.06), border .25s cubic-bezier(.27, .01, .38, 1.06);
            transition-delay: .1s
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label:before {
            background-image: none
        }

        .custom-checkbox .custom-control-input:checked~.custom-control-label:after {
            opacity: 1;
            transform: rotate(45deg) scale(1);
            background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"><path fill="%23fff" d="M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z"/></svg>')
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label:before {
            border: none;
            background-color: #007bff
        }

        .custom-checkbox .custom-control-input:indeterminate~.custom-control-label:after {
            content: "";
            position: absolute;
            transform: scale(1);
            background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="4" height="4"><path stroke="%23fff" d="M0 2h4"/></svg>');
            background-color: #fff;
            border: none;
            width: 10px;
            height: 2px;
            top: 11px;
            left: 4px;
            opacity: 1;
            transition: none
        }

        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label:before {
            background: #e9ecef;
            border-color: #dee2e6
        }

        .custom-checkbox .custom-control-input:disabled:checked~.custom-control-label:after {
            border-color: #dee2e6
        }

        .custom-radio .custom-control-label:before {
            border-radius: 50%
        }

        .custom-radio .custom-control-label:after {
            content: "";
            border-radius: 50%;
            background-image: none !important;
            position: absolute;
            background: #fff;
            width: 8px;
            height: 8px;
            top: 8px;
            left: 5px;
            transition: all .25s cubic-bezier(.27, .01, .38, 1.06);
            transition-delay: .1s;
            opacity: 0;
            transform: scale(0)
        }

        .custom-radio .custom-control-input:checked~.custom-control-label:before {
            background-color: #007bff
        }

        .custom-radio .custom-control-input:checked~.custom-control-label:after {
            opacity: 1;
            transform: scale(1)
        }

        .custom-radio .custom-control-input:disabled:checked~.custom-control-label:before {
            background-color: #a8aeb4;
            background: #e9ecef;
            border-color: #dee2e6
        }

        .custom-radio .custom-control-input:disabled:checked~.custom-control-label:after {
            background: #dee2e6
        }

        .custom-select {
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem 1.75rem .375rem .75rem;
            line-height: 1.5;
            color: #495057;
            background: #fff url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="4" height="5"><path fill="%23343a40" d="M2 0L0 2h4zm0 5L0 3h4z"/></svg>') no-repeat right .75rem center;
            background-size: 8px 10px;
            border: 1px solid #ced4da;
            font-weight: 400;
            font-size: 1rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            border-radius: .25rem
        }

        .custom-select:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-select:focus::-ms-value {
            color: #495057;
            background-color: #fff
        }

        .custom-select:hover:not(:focus):not(:disabled) {
            cursor: pointer;
            border-color: #a2aeb9
        }

        .custom-select[multiple],
        .custom-select[size]:not([size="1"]) {
            padding-right: .75rem
        }

        .custom-select:disabled {
            color: #6c757d;
            background-color: #e9ecef
        }

        .custom-select-sm {
            height: calc(1.5em + .5rem + 2px);
            font-size: .875rem
        }

        .custom-select-lg,
        .custom-select-sm {
            padding-top: .375rem;
            padding-bottom: .375rem
        }

        .custom-select-lg {
            height: calc(1.5em + 1rem + 2px);
            font-size: 1.25rem
        }

        .custom-file {
            font-size: 1rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .custom-file,
        .custom-file-input {
            height: calc(1.5em + .75rem + 2px)
        }

        .custom-file-input {
            min-width: 14rem
        }

        .custom-file-input:focus~.custom-file-label {
            border-color: #80bdff;
            color: #495057;
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-file-input:focus~.custom-file-label:after {
            border-color: #80bdff;
            color: #007bff;
            background: #fff
        }

        .custom-file-input:focus~.custom-file-label:hover {
            border-color: #80bdff
        }

        .custom-file-input:lang(en)~.custom-file-label:after {
            content: "Browse"
        }

        .custom-file-input:not(:disabled):hover {
            cursor: pointer
        }

        .custom-file-input:not(:disabled):hover~.custom-file-label,
        .custom-file-input:not(:disabled):hover~.custom-file-label:before {
            border-color: #a2aeb9
        }

        .custom-file-input:disabled+.custom-file-label {
            color: #6c757d;
            background-color: #f8f9fa
        }

        .custom-file-label {
            height: calc(1.5em + .75rem + 2px);
            background-color: #fff;
            border: 1px solid #ced4da;
            font-weight: 400;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            transition: box-shadow .25s cubic-bezier(.27, .01, .38, 1.06), border-color .25s cubic-bezier(.27, .01, .38, 1.06);
            border-radius: .25rem
        }

        .custom-file-label,
        .custom-file-label:after {
            padding: .75rem .375rem;
            line-height: 1.5;
            color: #495057
        }

        .custom-file-label:after {
            height: calc(1.5em + .75rem);
            border-left: 1px solid #ced4da;
            background-color: #e9ecef;
            border-radius: 0 .25rem .25rem 0
        }

        .custom-toggle {
            position: relative;
            padding-left: 3.75rem
        }

        .custom-toggle .custom-control-label:before {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 3.125rem;
            height: 1.75rem;
            background: #fff;
            border-radius: 100px;
            border: .0625rem solid #ced4da
        }

        .custom-toggle .custom-control-label:after {
            content: "";
            position: absolute;
            top: .25rem;
            left: .25rem;
            width: 1.25rem;
            height: 1.25rem;
            background: #ced4da;
            border-radius: 6.25rem;
            transition: .35s
        }

        .custom-toggle .custom-control-input:checked~.custom-control-label:before {
            background: #28a745;
            border-color: #28a745
        }

        .custom-toggle .custom-control-input:checked~.custom-control-label:after {
            left: 2.875rem;
            transform: translateX(-100%);
            background: #fff
        }

        .custom-toggle .custom-control-input:checked:disabled~.custom-control-label:before {
            background: #e9ecef;
            border-color: #dee2e6
        }

        .custom-toggle .custom-control-input:checked:disabled~.custom-control-label:after {
            background: #dee2e6
        }

        .custom-toggle .custom-control-input:active:not(:disabled)~.custom-control-label:after {
            width: 1.625rem
        }

        .custom-toggle .custom-control-input:active:not(:checked)~.custom-control-label:before {
            background-color: #fff
        }

        .custom-toggle .custom-control-input:disabled:active~.custom-control-label:before {
            background-color: #e9ecef
        }

        .custom-toggle .custom-control-input:focus~.custom-control-label:before {
            box-shadow: 0 .313rem .719rem rgba(40, 167, 69, .1), 0 .156rem .125rem rgba(0, 0, 0, .06)
        }

        .custom-toggle .custom-control-input:focus:not(:checked)~.custom-control-label:before {
            box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
        }

        .custom-toggle.custom-toggle-sm {
            padding-left: 2.625rem
        }

        .custom-toggle.custom-toggle-sm .custom-control-label:before {
            top: .1875rem;
            position: absolute;
            display: block;
            width: 2.1875rem;
            height: 1.125rem;
            background: #fff;
            border-radius: 100px;
            border: .0625rem solid #ced4da
        }

        .custom-toggle.custom-toggle-sm .custom-control-label:after {
            content: "";
            position: absolute;
            top: .375rem;
            left: .1875rem;
            width: .75rem;
            height: .75rem
        }

        .custom-toggle.custom-toggle-sm .custom-control-input:checked~.custom-control-label:after {
            left: 1.9375rem
        }

        .custom-toggle.custom-toggle-sm .custom-control-input:active:not(:disabled)~.custom-control-label:after {
            width: 1rem
        }

        .nav {
            font-size: .875rem;
            font-family: Roboto
        }

        .nav-link {
            padding: .5rem 1rem;
            transition: all .2s ease-in-out
        }

        .nav-link.disabled {
            color: #6c757d
        }

        .nav-tabs {
            border-bottom: 1px solid #dee2e6
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .nav-tabs .nav-link:focus,
        .nav-tabs .nav-link:hover {
            border-color: #e9ecef #e9ecef #dee2e6
        }

        .nav-tabs .nav-link.disabled {
            color: #6c757d
        }

        .nav-tabs .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-tabs .nav-link:hover {
            border-color: #f5f6f8
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff
        }

        .nav-tabs .dropdown-menu {
            margin-top: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .nav-pills .nav-link {
            border-radius: .25rem
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #007bff
        }

        .nav-pills:hover {
            background-color: #fff
        }

        .nav-outlined-pills .nav-link {
            border-radius: .25rem;
            border: 1px solid transparent
        }

        .nav-outlined-pills .nav-link.active,
        .show>.nav-outlined-pills .nav-link {
            background: none;
            color: #007bff;
            border-color: #007bff
        }

        .nav-outlined-pills .nav-link:hover {
            border-color: #f5f6f8
        }

        .nav-blue .nav-link.active {
            background-color: #007bff;
            border-color: #0074f0;
            color: #fff
        }

        .nav-blue .nav-link.disabled {
            color: #6c757d
        }

        .nav-blue .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-blue .nav-link {
            color: #007bff
        }

        .nav-blue.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #3395ff;
            color: #007bff
        }

        .nav-blue.nav-outlined-pills .nav-link.active:hover {
            border-color: #3395ff
        }

        .nav-blue.nav-outlined-pills .nav-link {
            color: #007bff
        }

        .nav-indigo .nav-link.active {
            background-color: #6610f2;
            border-color: #5f0de6;
            color: #fff
        }

        .nav-indigo .nav-link.disabled {
            color: #6c757d
        }

        .nav-indigo .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-indigo .nav-link {
            color: #6610f2
        }

        .nav-indigo.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #8540f5;
            color: #6610f2
        }

        .nav-indigo.nav-outlined-pills .nav-link.active:hover {
            border-color: #8540f5
        }

        .nav-indigo.nav-outlined-pills .nav-link {
            color: #6610f2
        }

        .nav-purple .nav-link.active {
            background-color: #6f42c1;
            border-color: #683cb8;
            color: #fff
        }

        .nav-purple .nav-link.disabled {
            color: #6c757d
        }

        .nav-purple .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-purple .nav-link {
            color: #6f42c1
        }

        .nav-purple.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #8c68ce;
            color: #6f42c1
        }

        .nav-purple.nav-outlined-pills .nav-link.active:hover {
            border-color: #8c68ce
        }

        .nav-purple.nav-outlined-pills .nav-link {
            color: #6f42c1
        }

        .nav-pink .nav-link.active {
            background-color: #e83e8c;
            border-color: #e63084;
            color: #fff
        }

        .nav-pink .nav-link.disabled {
            color: #6c757d
        }

        .nav-pink .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-pink .nav-link {
            color: #e83e8c
        }

        .nav-pink.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #ed6ca7;
            color: #e83e8c
        }

        .nav-pink.nav-outlined-pills .nav-link.active:hover {
            border-color: #ed6ca7
        }

        .nav-pink.nav-outlined-pills .nav-link {
            color: #e83e8c
        }

        .nav-red .nav-link.active {
            background-color: #dc3545;
            border-color: #da2839;
            color: #fff
        }

        .nav-red .nav-link.disabled {
            color: #6c757d
        }

        .nav-red .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-red .nav-link {
            color: #dc3545
        }

        .nav-red.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #e4606d;
            color: #dc3545
        }

        .nav-red.nav-outlined-pills .nav-link.active:hover {
            border-color: #e4606d
        }

        .nav-red.nav-outlined-pills .nav-link {
            color: #dc3545
        }

        .nav-orange .nav-link.active {
            background-color: #fd7e14;
            border-color: #fd7605;
            color: #212529
        }

        .nav-orange .nav-link.disabled {
            color: #6c757d
        }

        .nav-orange .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-orange .nav-link {
            color: #fd7e14
        }

        .nav-orange.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #fd9a47;
            color: #fd7e14
        }

        .nav-orange.nav-outlined-pills .nav-link.active:hover {
            border-color: #fd9a47
        }

        .nav-orange.nav-outlined-pills .nav-link {
            color: #fd7e14
        }

        .nav-yellow .nav-link.active {
            background-color: #ffc107;
            border-color: #f7b900;
            color: #212529
        }

        .nav-yellow .nav-link.disabled {
            color: #6c757d
        }

        .nav-yellow .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-yellow .nav-link {
            color: #ffc107
        }

        .nav-yellow.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #ffce3a;
            color: #ffc107
        }

        .nav-yellow.nav-outlined-pills .nav-link.active:hover {
            border-color: #ffce3a
        }

        .nav-yellow.nav-outlined-pills .nav-link {
            color: #ffc107
        }

        .nav-green .nav-link.active {
            background-color: #28a745;
            border-color: #259b40;
            color: #fff
        }

        .nav-green .nav-link.disabled {
            color: #6c757d
        }

        .nav-green .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-green .nav-link {
            color: #28a745
        }

        .nav-green.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #34ce57;
            color: #28a745
        }

        .nav-green.nav-outlined-pills .nav-link.active:hover {
            border-color: #34ce57
        }

        .nav-green.nav-outlined-pills .nav-link {
            color: #28a745
        }

        .nav-teal .nav-link.active {
            background-color: #20c997;
            border-color: #1ebc8d;
            color: #fff
        }

        .nav-teal .nav-link.disabled {
            color: #6c757d
        }

        .nav-teal .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-teal .nav-link {
            color: #20c997
        }

        .nav-teal.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #3ce0af;
            color: #20c997
        }

        .nav-teal.nav-outlined-pills .nav-link.active:hover {
            border-color: #3ce0af
        }

        .nav-teal.nav-outlined-pills .nav-link {
            color: #20c997
        }

        .nav-cyan .nav-link.active {
            background-color: #17a2b8;
            border-color: #1596aa;
            color: #fff
        }

        .nav-cyan .nav-link.disabled {
            color: #6c757d
        }

        .nav-cyan .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-cyan .nav-link {
            color: #17a2b8
        }

        .nav-cyan.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #1fc8e3;
            color: #17a2b8
        }

        .nav-cyan.nav-outlined-pills .nav-link.active:hover {
            border-color: #1fc8e3
        }

        .nav-cyan.nav-outlined-pills .nav-link {
            color: #17a2b8
        }

        .nav-white .nav-link.active {
            background-color: #fff;
            border-color: #f7f7f7;
            color: #212529
        }

        .nav-white .nav-link.disabled {
            color: #6c757d
        }

        .nav-white .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-white .nav-link {
            color: #fff
        }

        .nav-white.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #fff;
            color: #fff
        }

        .nav-white.nav-outlined-pills .nav-link.active:hover {
            border-color: #fff
        }

        .nav-white.nav-outlined-pills .nav-link {
            color: #fff
        }

        .nav-gray .nav-link.active {
            background-color: #6c757d;
            border-color: #656d75;
            color: #fff
        }

        .nav-gray .nav-link.disabled {
            color: #6c757d
        }

        .nav-gray .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-gray .nav-link {
            color: #6c757d
        }

        .nav-gray.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #868e96;
            color: #6c757d
        }

        .nav-gray.nav-outlined-pills .nav-link.active:hover {
            border-color: #868e96
        }

        .nav-gray.nav-outlined-pills .nav-link {
            color: #6c757d
        }

        .nav-gray-dark .nav-link.active {
            background-color: #343a40;
            border-color: #2d3238;
            color: #fff
        }

        .nav-gray-dark .nav-link.disabled {
            color: #6c757d
        }

        .nav-gray-dark .nav-link.disabled:hover {
            cursor: not-allowed;
            border-color: transparent
        }

        .nav-gray-dark .nav-link {
            color: #343a40
        }

        .nav-gray-dark.nav-outlined-pills .nav-link.active {
            background: transparent;
            border-color: #4b545c;
            color: #343a40
        }

        .nav-gray-dark.nav-outlined-pills .nav-link.active:hover {
            border-color: #4b545c
        }

        .nav-gray-dark.nav-outlined-pills .nav-link {
            color: #343a40
        }

        .navbar {
            padding: .5rem 1rem
        }

        .navbar-brand {
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            font-family: Roboto;
            font-weight: 400
        }

        .navbar-text {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            background: #fff;
            border: 1px solid transparent;
            border-radius: .25rem
        }

        @media (min-width:576px) {
            .navbar-expand-sm .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
        }

        @media (min-width:768px) {
            .navbar-expand-md .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
        }

        @media (min-width:992px) {
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
        }

        @media (min-width:1200px) {
            .navbar-expand-xl .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
        }

        .navbar-expand .navbar-nav .nav-link {
            padding-right: .5rem;
            padding-left: .5rem
        }

        .navbar-light .navbar-brand,
        .navbar-light .navbar-brand:focus,
        .navbar-light .navbar-brand:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-nav .nav-link:focus,
        .navbar-light .navbar-nav .nav-link:hover {
            color: rgba(0, 0, 0, .7)
        }

        .navbar-light .navbar-nav .nav-link.disabled {
            color: rgba(0, 0, 0, .3)
        }

        .navbar-light .navbar-nav .active>.nav-link,
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .nav-link.show,
        .navbar-light .navbar-nav .show>.nav-link {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .5);
            border-color: rgba(0, 0, 0, .1);
            background: none
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"><path stroke="rgba(0, 0, 0, 0.5)" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/></svg>')
        }

        .navbar-light .navbar-text {
            color: rgba(0, 0, 0, .5)
        }

        .navbar-light .navbar-text a,
        .navbar-light .navbar-text a:focus,
        .navbar-light .navbar-text a:hover {
            color: rgba(0, 0, 0, .9)
        }

        .navbar-dark .navbar-brand,
        .navbar-dark .navbar-brand:focus,
        .navbar-dark .navbar-brand:hover {
            color: #fff
        }

        .navbar-dark .navbar-nav .nav-link {
            color: hsla(0, 0%, 100%, .5)
        }

        .navbar-dark .navbar-nav .nav-link:focus,
        .navbar-dark .navbar-nav .nav-link:hover {
            color: hsla(0, 0%, 100%, .75)
        }

        .navbar-dark .navbar-nav .nav-link.disabled {
            color: hsla(0, 0%, 100%, .25)
        }

        .navbar-dark .navbar-nav .active>.nav-link,
        .navbar-dark .navbar-nav .nav-link.active,
        .navbar-dark .navbar-nav .nav-link.show,
        .navbar-dark .navbar-nav .show>.nav-link {
            color: #fff
        }

        .navbar-dark .navbar-toggler {
            color: hsla(0, 0%, 100%, .5);
            border-color: hsla(0, 0%, 100%, .1);
            background: none
        }

        .navbar-dark .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"><path stroke="rgba(255, 255, 255, 0.5)" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/></svg>')
        }

        .navbar-dark .navbar-text {
            color: hsla(0, 0%, 100%, .5)
        }

        .navbar-dark .navbar-text a,
        .navbar-dark .navbar-text a:focus,
        .navbar-dark .navbar-text a:hover {
            color: #fff
        }

        .card {
            background-color: #fff;
            border: none;
            border-radius: .25rem
        }

        .card>.list-group:first-child .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .card>.list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .card .list-group-item {
            padding: .8125rem 1.875rem
        }

        .card .card-text {
            margin-bottom: 1.5625rem
        }

        .card a:hover {
            text-decoration: none
        }

        .card-small {
            box-shadow: 0 2px 0 rgba(90, 97, 105, .11), 0 4px 8px rgba(90, 97, 105, .12), 0 10px 10px rgba(90, 97, 105, .06), 0 7px 70px rgba(90, 97, 105, .1)
        }

        .card-small .card-body,
        .card-small .card-footer,
        .card-small .card-header {
            padding: 1rem
        }

        .card-body {
            padding: 1.25rem
        }

        .card-body>p:last-child {
            margin-bottom: 0
        }

        .card-title {
            font-weight: 500;
            margin-bottom: .75rem
        }

        .card-subtitle {
            margin-top: -.375rem
        }

        .card-link {
            font-family: Roboto
        }

        .card-link+.card-link {
            margin-left: 1.25rem
        }

        .card-header {
            padding: .375rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: none
        }

        .card-header:first-child {
            border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0
        }

        .card-footer {
            padding: .375rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: none
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px)
        }

        .card-header-tabs {
            margin-bottom: -1rem;
            border-bottom: 0
        }

        .card-header-tabs .nav-link,
        .card-header-tabs .nav-link:hover {
            border-bottom: transparent
        }

        .card-header-pills {
            margin-right: -.625rem;
            margin-left: -.625rem
        }

        .card-header-pills:hover {
            background: transparent
        }

        .card-img-overlay {
            padding: 1.25rem;
            background: rgba(90, 97, 105, .5);
            border-radius: .25rem
        }

        .card-img-overlay .card-title {
            color: #fff
        }

        .card-img {
            border-radius: calc(.25rem - 1px)
        }

        .card-img-top {
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px)
        }

        .card-img-bottom {
            border-bottom-right-radius: calc(.25rem - 1px);
            border-bottom-left-radius: calc(.25rem - 1px)
        }

        .card-deck .card {
            margin-bottom: 15px
        }

        @media (min-width:576px) {
            .card-deck {
                margin-right: -15px;
                margin-left: -15px
            }

            .card-deck .card {
                margin-right: 15px;
                margin-left: 15px
            }
        }

        .card-group>.card:last-child .card-body,
        .card-group>.card:last-child .card-footer {
            border-right: none
        }

        .card-group .card-body,
        .card-group .card-footer {
            border-right: 1px solid #e7e9ea
        }

        @media (min-width:576px) {
            .card-group {
                border-radius: .25rem
            }

            .card-group>.card {
                box-shadow: none
            }

            .card-group>.card:first-child {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0
            }

            .card-group>.card:last-child {
                border-top-left-radius: 0;
                border-bottom-left-radius: 0
            }

            .card-group>.card:only-child {
                border-radius: .25rem
            }

            .card-group>.card:only-child .card-header,
            .card-group>.card:only-child .card-img-top {
                border-top-left-radius: .25rem;
                border-top-right-radius: .25rem
            }

            .card-group>.card:only-child .card-footer,
            .card-group>.card:only-child .card-img-bottom {
                border-bottom-right-radius: .25rem;
                border-bottom-left-radius: .25rem
            }

            .card-group>.card:not(:first-child):not(:last-child):not(:only-child),
            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-footer,
            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-header,
            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-bottom,
            .card-group>.card:not(:first-child):not(:last-child):not(:only-child) .card-img-top {
                border-radius: 0
            }
        }

        .card-columns .card {
            margin-bottom: .75rem
        }

        @media (min-width:576px) {
            .card-columns {
                -moz-column-count: 3;
                column-count: 3;
                -moz-column-gap: 1.25rem;
                column-gap: 1.25rem
            }
        }

        .pagination {
            padding-left: 0;
            list-style: none;
            border-radius: .25rem;
            font-family: Roboto;
            font-size: .875rem
        }

        .page-link {
            padding: .5rem .75rem;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: none;
            margin: 0;
            transition: all .2s ease-in-out
        }

        .page-link:focus,
        .page-link:hover {
            color: #0056b3;
            background-color: #e9ecef;
            border-color: #dee2e6
        }

        .page-item {
            box-shadow: 0 .125rem .9375rem rgba(90, 97, 105, .1), 0 .125rem .1875rem rgba(90, 97, 105, .15)
        }

        .page-item:first-child {
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
            overflow: hidden
        }

        .page-item:last-child {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem;
            overflow: hidden
        }

        .page-item:last-child .page-link {
            border-right: none
        }

        .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff
        }

        .page-item.disabled .page-link {
            background-color: #fff;
            border-color: #dee2e6
        }

        .pagination-lg .page-link {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            line-height: 1.5
        }

        .pagination-lg .page-item:first-child .page-link {
            border-top-left-radius: .3rem;
            border-bottom-left-radius: .3rem
        }

        .pagination-lg .page-item:last-child .page-link {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem
        }

        .pagination-sm .page-link {
            padding: .25rem .5rem;
            font-size: .875rem;
            line-height: 1.5
        }

        .pagination-sm .page-item:first-child .page-link {
            border-top-left-radius: .2rem;
            border-bottom-left-radius: .2rem
        }

        .pagination-sm .page-item:last-child .page-link {
            border-top-right-radius: .2rem;
            border-bottom-right-radius: .2rem
        }

        .badge {
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif;
            color: #fff;
            border-radius: .25rem
        }

        a.badge {
            transition: all .2s ease-in-out
        }

        .badge-pill {
            padding-right: .6em;
            padding-left: .6em;
            border-radius: 10rem
        }

        .badge-squared {
            border-radius: 0
        }

        .badge-primary {
            color: #fff;
            background-color: #007bff
        }

        .badge-primary[href]:focus,
        .badge-primary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #0062cc
        }

        .badge-outline-primary {
            background: none;
            border: 1px solid #007bff;
            color: #007bff
        }

        .badge-secondary {
            color: #fff;
            background-color: #6c757d
        }

        .badge-secondary[href]:focus,
        .badge-secondary[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #545b62
        }

        .badge-outline-secondary {
            background: none;
            border: 1px solid #6c757d;
            color: #6c757d
        }

        .badge-success {
            color: #fff;
            background-color: #28a745
        }

        .badge-success[href]:focus,
        .badge-success[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1e7e34
        }

        .badge-outline-success {
            background: none;
            border: 1px solid #28a745;
            color: #28a745
        }

        .badge-info {
            color: #fff;
            background-color: #17a2b8
        }

        .badge-info[href]:focus,
        .badge-info[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #117a8b
        }

        .badge-outline-info {
            background: none;
            border: 1px solid #17a2b8;
            color: #17a2b8
        }

        .badge-warning {
            color: #212529;
            background-color: #ffc107
        }

        .badge-warning[href]:focus,
        .badge-warning[href]:hover {
            color: #212529;
            text-decoration: none;
            background-color: #d39e00
        }

        .badge-outline-warning {
            background: none;
            border: 1px solid #ffc107;
            color: #ffc107
        }

        .badge-danger {
            color: #fff;
            background-color: #dc3545
        }

        .badge-danger[href]:focus,
        .badge-danger[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #bd2130
        }

        .badge-outline-danger {
            background: none;
            border: 1px solid #dc3545;
            color: #dc3545
        }

        .badge-light {
            color: #212529;
            background-color: #f8f9fa
        }

        .badge-light[href]:focus,
        .badge-light[href]:hover {
            color: #212529;
            text-decoration: none;
            background-color: #dae0e5
        }

        .badge-outline-light {
            background: none;
            border: 1px solid #f8f9fa;
            color: #f8f9fa;
            color: #212529
        }

        .badge-dark {
            color: #fff;
            background-color: #343a40
        }

        .badge-dark[href]:focus,
        .badge-dark[href]:hover {
            color: #fff;
            text-decoration: none;
            background-color: #1d2124
        }

        .badge-outline-dark {
            background: none;
            border: 1px solid #343a40;
            color: #343a40
        }

        .jumbotron {
            padding: 38px 42px;
            margin-bottom: 2rem;
            background-color: #e9ecef;
            border-radius: .3rem
        }

        @media (min-width:576px) {
            .jumbotron {
                padding: 4rem 2rem
            }
        }

        .alert {
            padding: .75rem 1.25rem;
            margin-bottom: 1rem;
            border: none;
            border-radius: .25rem
        }

        .alert-link {
            font-weight: 700
        }

        .alert-dismissible .close {
            top: 0;
            right: 0;
            padding: .75rem 1.25rem;
            transition: all .2s ease-in-out
        }

        .alert-dismissible .close:hover {
            cursor: pointer
        }

        .alert-primary {
            color: #f5faff;
            background-color: #007bff
        }

        .alert-primary .alert-link {
            color: #f5faff
        }

        .alert-secondary {
            color: #eeeff0;
            background-color: #6c757d
        }

        .alert-secondary .alert-link {
            color: #eeeff0
        }

        .alert-success {
            color: #d0f4d8;
            background-color: #28a745
        }

        .alert-success .alert-link {
            color: #d0f4d8
        }

        .alert-info {
            background-color: #17a2b8
        }

        .alert-info,
        .alert-info .alert-link {
            color: #cbf2f9
        }

        .alert-warning {
            color: #fffefc;
            background-color: #ffc107
        }

        .alert-warning .alert-link {
            color: #fffefc
        }

        .alert-danger {
            color: #fff;
            background-color: #dc3545
        }

        .alert-danger .alert-link {
            color: #fff
        }

        .alert-light {
            color: #fff;
            background-color: #f8f9fa;
            color: #212529
        }

        .alert-light .alert-link {
            color: #fff;
            color: #212529
        }

        .alert-dark {
            background-color: #343a40
        }

        .alert-dark,
        .alert-dark .alert-link {
            color: #adb4bc
        }

        .progress-wrapper {
            position: relative;
            color: #212529
        }

        .progress-wrapper .progress-label {
            font-size: .8125rem
        }

        .progress-wrapper .progress-value {
            position: absolute;
            top: 6px;
            right: 0;
            color: #212529
        }

        .progress {
            height: 1rem;
            font-size: .75rem;
            line-height: 1rem;
            background-color: #e9ecef;
            margin-top: 6px;
            border-radius: .25rem
        }

        .progress-sm {
            height: .3125rem
        }

        .progress-lg,
        .progress-lg .progress-bar {
            height: .9375rem
        }

        .progress-bar {
            height: 1rem;
            line-height: 1rem;
            color: #fff;
            background-color: #007bff;
            transition: width .6s ease
        }

        .progress-bar-striped {
            background-image: linear-gradient(45deg, hsla(0, 0%, 100%, .15) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .15) 0, hsla(0, 0%, 100%, .15) 75%, transparent 0, transparent);
            background-size: 1rem 1rem
        }

        .progress-bar-animated {
            -webkit-animation: progress-bar-stripes 1s linear infinite;
            animation: progress-bar-stripes 1s linear infinite
        }

        .list-group-small .list-group-item {
            padding: .625rem 1rem;
            font-size: .8125rem
        }

        .list-group-item-action {
            color: #495057;
            transition: all .2s ease-in-out
        }

        .list-group-item-action:focus,
        .list-group-item-action:hover {
            color: #495057;
            background-color: #f8f9fa
        }

        .list-group-item-action:active {
            color: #212529;
            background-color: #e9ecef
        }

        .list-group-item {
            padding: .75rem 1.25rem;
            margin-bottom: -1px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, .125);
            font-weight: 300
        }

        .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .list-group-item:last-child {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .list-group-item.disabled,
        .list-group-item:disabled {
            color: #6c757d;
            background-color: #fff
        }

        .list-group-item.active {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .list-group-flush .list-group-item {
            border-radius: 0
        }

        .list-group-item-primary {
            color: #004085;
            background-color: #b8daff
        }

        a.list-group-item-primary,
        button.list-group-item-primary {
            color: #004085
        }

        a.list-group-item-primary:focus,
        a.list-group-item-primary:hover,
        button.list-group-item-primary:focus,
        button.list-group-item-primary:hover {
            color: #004085;
            background-color: #9fcdff
        }

        a.list-group-item-primary.active,
        button.list-group-item-primary.active {
            background-color: #004085;
            border-color: #004085
        }

        .list-group-item-secondary {
            color: #383d41;
            background-color: #d6d8db
        }

        a.list-group-item-secondary,
        button.list-group-item-secondary {
            color: #383d41
        }

        a.list-group-item-secondary:focus,
        a.list-group-item-secondary:hover,
        button.list-group-item-secondary:focus,
        button.list-group-item-secondary:hover {
            color: #383d41;
            background-color: #c8cbcf
        }

        a.list-group-item-secondary.active,
        button.list-group-item-secondary.active {
            background-color: #383d41;
            border-color: #383d41
        }

        .list-group-item-success {
            color: #155724;
            background-color: #c3e6cb
        }

        a.list-group-item-success,
        button.list-group-item-success {
            color: #155724
        }

        a.list-group-item-success:focus,
        a.list-group-item-success:hover,
        button.list-group-item-success:focus,
        button.list-group-item-success:hover {
            color: #155724;
            background-color: #b1dfbb
        }

        a.list-group-item-success.active,
        button.list-group-item-success.active {
            background-color: #155724;
            border-color: #155724
        }

        .list-group-item-info {
            color: #0c5460;
            background-color: #bee5eb
        }

        a.list-group-item-info,
        button.list-group-item-info {
            color: #0c5460
        }

        a.list-group-item-info:focus,
        a.list-group-item-info:hover,
        button.list-group-item-info:focus,
        button.list-group-item-info:hover {
            color: #0c5460;
            background-color: #abdde5
        }

        a.list-group-item-info.active,
        button.list-group-item-info.active {
            background-color: #0c5460;
            border-color: #0c5460
        }

        .list-group-item-warning {
            color: #856404;
            background-color: #ffeeba
        }

        a.list-group-item-warning,
        button.list-group-item-warning {
            color: #856404
        }

        a.list-group-item-warning:focus,
        a.list-group-item-warning:hover,
        button.list-group-item-warning:focus,
        button.list-group-item-warning:hover {
            color: #856404;
            background-color: #ffe8a1
        }

        a.list-group-item-warning.active,
        button.list-group-item-warning.active {
            background-color: #856404;
            border-color: #856404
        }

        .list-group-item-danger {
            color: #721c24;
            background-color: #f5c6cb
        }

        a.list-group-item-danger,
        button.list-group-item-danger {
            color: #721c24
        }

        a.list-group-item-danger:focus,
        a.list-group-item-danger:hover,
        button.list-group-item-danger:focus,
        button.list-group-item-danger:hover {
            color: #721c24;
            background-color: #f1b0b7
        }

        a.list-group-item-danger.active,
        button.list-group-item-danger.active {
            background-color: #721c24;
            border-color: #721c24
        }

        .list-group-item-light {
            color: #818182;
            background-color: #fdfdfe
        }

        a.list-group-item-light,
        button.list-group-item-light {
            color: #818182
        }

        a.list-group-item-light:focus,
        a.list-group-item-light:hover,
        button.list-group-item-light:focus,
        button.list-group-item-light:hover {
            color: #818182;
            background-color: #ececf6
        }

        a.list-group-item-light.active,
        button.list-group-item-light.active {
            background-color: #818182;
            border-color: #818182
        }

        .list-group-item-dark {
            color: #1b1e21;
            background-color: #c6c8ca
        }

        a.list-group-item-dark,
        button.list-group-item-dark {
            color: #1b1e21
        }

        a.list-group-item-dark:focus,
        a.list-group-item-dark:hover,
        button.list-group-item-dark:focus,
        button.list-group-item-dark:hover {
            color: #1b1e21;
            background-color: #b9bbbe
        }

        a.list-group-item-dark.active,
        button.list-group-item-dark.active {
            background-color: #1b1e21;
            border-color: #1b1e21
        }

        .close {
            font-size: 1.5rem;
            font-weight: 700;
            text-shadow: 0 1px 0 #fff;
            transition: all .2s ease-in-out
        }

        .close:focus,
        .close:hover {
            color: #000
        }

        .modal {
            z-index: 1050
        }

        .modal-dialog {
            margin: .5rem
        }

        .modal.fade .modal-dialog {
            transition: transform .3s ease-out
        }

        .modal-dialog-centered {
            min-height: calc(100% - 1rem)
        }

        .modal-content {
            background-color: #fff;
            border: none;
            border-radius: .3rem
        }

        .modal-backdrop {
            z-index: 1040;
            background-color: #000
        }

        .modal-backdrop.show {
            opacity: .5
        }

        .modal-header {
            padding: 1rem;
            border-bottom: 1px solid #dee2e6
        }

        .modal-title {
            line-height: 1.5
        }

        .modal-body {
            padding: 1rem
        }

        .modal-footer {
            padding: .9375rem 2.1875rem;
            border-top: 1px solid #dee2e6
        }

        @media (min-width:576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto
            }

            .modal-dialog-centered {
                min-height: calc(100% - 3.5rem)
            }

            .modal-sm {
                max-width: 300px
            }
        }

        @media (min-width:992px) {
            .modal-lg {
                max-width: 800px
            }
        }

        .tooltip {
            z-index: 1070;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem
        }

        .tooltip.show {
            opacity: .9
        }

        .tooltip .arrow {
            width: .8rem;
            height: .4rem
        }

        .bs-tooltip-auto[x-placement^=top],
        .bs-tooltip-top {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=top] .arrow:before,
        .bs-tooltip-top .arrow:before {
            border-width: .4rem .4rem 0;
            border-top-color: #000
        }

        .bs-tooltip-auto[x-placement^=right],
        .bs-tooltip-right {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow,
        .bs-tooltip-right .arrow {
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=right] .arrow:before,
        .bs-tooltip-right .arrow:before {
            border-width: .4rem .4rem .4rem 0;
            border-right-color: #000
        }

        .bs-tooltip-auto[x-placement^=bottom],
        .bs-tooltip-bottom {
            padding: .4rem 0
        }

        .bs-tooltip-auto[x-placement^=bottom] .arrow:before,
        .bs-tooltip-bottom .arrow:before {
            border-width: 0 .4rem .4rem;
            border-bottom-color: #000
        }

        .bs-tooltip-auto[x-placement^=left],
        .bs-tooltip-left {
            padding: 0 .4rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow,
        .bs-tooltip-left .arrow {
            width: .4rem;
            height: .8rem
        }

        .bs-tooltip-auto[x-placement^=left] .arrow:before,
        .bs-tooltip-left .arrow:before {
            border-width: .4rem 0 .4rem .4rem;
            border-left-color: #000
        }

        .tooltip-inner {
            max-width: 200px;
            padding: .25rem .5rem;
            color: #fff;
            background-color: #000;
            box-shadow: 0 3px 15px rgba(90, 97, 105, .1), 0 2px 3px rgba(90, 97, 105, .2);
            border-radius: .25rem
        }

        .popover {
            z-index: 1060;
            max-width: 276px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Liberation Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-style: normal;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            text-align: start;
            text-decoration: none;
            text-shadow: none;
            text-transform: none;
            letter-spacing: normal;
            word-break: normal;
            word-spacing: normal;
            white-space: normal;
            line-break: auto;
            font-size: .875rem;
            background-color: #fff;
            border: none;
            padding: 0;
            border-radius: .3rem
        }

        .popover .arrow {
            width: 1rem;
            height: .5rem;
            margin: 0 .3rem
        }

        .popover .arrow:after,
        .popover .arrow:before {
            border-width: 1rem
        }

        .bs-popover-auto[x-placement^=top],
        .bs-popover-top {
            margin-bottom: .5rem
        }

        .bs-popover-auto[x-placement^=top] .arrow,
        .bs-popover-top .arrow {
            bottom: calc(-.5rem + -1px)
        }

        .bs-popover-auto[x-placement^=top] .arrow:after,
        .bs-popover-auto[x-placement^=top] .arrow:before,
        .bs-popover-top .arrow:after,
        .bs-popover-top .arrow:before {
            border-width: .5rem .5rem 0
        }

        .bs-popover-auto[x-placement^=top] .arrow:before,
        .bs-popover-top .arrow:before {
            border-top-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=top] .arrow:after,
        .bs-popover-top .arrow:after {
            bottom: 1px;
            border-top-color: #fff
        }

        .bs-popover-auto[x-placement^=right],
        .bs-popover-right {
            margin-left: .5rem
        }

        .bs-popover-auto[x-placement^=right] .arrow,
        .bs-popover-right .arrow {
            left: calc(-.5rem + -1px);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=right] .arrow:after,
        .bs-popover-auto[x-placement^=right] .arrow:before,
        .bs-popover-right .arrow:after,
        .bs-popover-right .arrow:before {
            border-width: .5rem .5rem .5rem 0
        }

        .bs-popover-auto[x-placement^=right] .arrow:before,
        .bs-popover-right .arrow:before {
            border-right-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=right] .arrow:after,
        .bs-popover-right .arrow:after {
            left: 1px;
            border-right-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom],
        .bs-popover-bottom {
            margin-top: .5rem
        }

        .bs-popover-auto[x-placement^=bottom] .arrow,
        .bs-popover-bottom .arrow {
            top: calc(-.5rem + -1px)
        }

        .bs-popover-auto[x-placement^=bottom] .arrow:after,
        .bs-popover-auto[x-placement^=bottom] .arrow:before,
        .bs-popover-bottom .arrow:after,
        .bs-popover-bottom .arrow:before {
            border-width: 0 .5rem .5rem
        }

        .bs-popover-auto[x-placement^=bottom] .arrow:before,
        .bs-popover-bottom .arrow:before {
            border-bottom-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=bottom] .arrow:after,
        .bs-popover-bottom .arrow:after {
            top: 1px;
            border-bottom-color: #fff
        }

        .bs-popover-auto[x-placement^=bottom] .popover-header:before,
        .bs-popover-bottom .popover-header:before {
            width: 1rem;
            margin-left: -.5rem;
            border-bottom: 1px solid #f7f7f7
        }

        .bs-popover-auto[x-placement^=left],
        .bs-popover-left {
            margin-right: .5rem
        }

        .bs-popover-auto[x-placement^=left] .arrow,
        .bs-popover-left .arrow {
            right: calc(-.5rem + -1px);
            width: .5rem;
            height: 1rem;
            margin: .3rem 0
        }

        .bs-popover-auto[x-placement^=left] .arrow:after,
        .bs-popover-auto[x-placement^=left] .arrow:before,
        .bs-popover-left .arrow:after,
        .bs-popover-left .arrow:before {
            border-width: .5rem 0 .5rem .5rem
        }

        .bs-popover-auto[x-placement^=left] .arrow:before,
        .bs-popover-left .arrow:before {
            border-left-color: rgba(0, 0, 0, .25)
        }

        .bs-popover-auto[x-placement^=left] .arrow:after,
        .bs-popover-left .arrow:after {
            right: 1px;
            border-left-color: #fff
        }

        .popover-header {
            font-size: 1rem;
            line-height: 14px;
            background-color: #f7f7f7;
            border-bottom: 1px solid #ebebeb;
            border-top-left-radius: calc(.3rem - 1px);
            border-top-right-radius: calc(.3rem - 1px)
        }

        .popover-body,
        .popover-header {
            padding: .5rem .75rem;
            color: #212529
        }

        .carousel {
            box-shadow: 0 .46875rem 2.1875rem rgba(90, 97, 105, .1), 0 .9375rem 1.40625rem rgba(90, 97, 105, .1), 0 .25rem .53125rem rgba(90, 97, 105, .12), 0 .125rem .1875rem rgba(90, 97, 105, .1)
        }

        .carousel-item {
            transition: transform .6s ease-in-out
        }

        .carousel-control-next,
        .carousel-control-prev {
            width: 15%;
            color: #fff;
            opacity: .5
        }

        .carousel-control-next:focus,
        .carousel-control-next:hover,
        .carousel-control-prev:focus,
        .carousel-control-prev:hover {
            color: #fff
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            width: 20px;
            height: 20px
        }

        .carousel-control-prev-icon {
            background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" fill="%23fff" width="8" height="8"><path d="M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z"/></svg>')
        }

        .carousel-control-next-icon {
            background-image: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg" fill="%23fff" width="8" height="8"><path d="M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z"/></svg>')
        }

        .carousel-indicators {
            margin-right: 15%;
            margin-left: 15%
        }

        .carousel-indicators li {
            width: 30px;
            height: 3px;
            margin-right: 3px;
            margin-left: 3px;
            background-color: hsla(0, 0%, 100%, .5);
            border-radius: 3px
        }

        .carousel-indicators .active {
            background-color: #fff
        }

        .carousel-caption {
            right: 15%;
            left: 15%;
            color: #fff
        }

        .noUi-target,
        .noUi-target * {
            -webkit-touch-callout: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            -webkit-user-select: none;
            touch-action: none;
            -ms-user-select: none;
            -moz-user-select: none;
            user-select: none;
            box-sizing: border-box
        }

        .noUi-target {
            position: relative;
            direction: ltr;
            background: #eceeef;
            border-radius: 5px;
            box-shadow: inset 0 1px 2px rgba(90, 97, 105, .1);
            margin: 35px 0
        }

        .noUi-target:focus {
            outline: 0;
            box-shadow: 0 0 8px rgba(0, 123, 255, .65), 0 3px 15px rgba(90, 97, 105, .1), 0 2px 3px rgba(90, 97, 105, .2)
        }

        .noUi-base,
        .noUi-connects {
            width: 100%;
            height: 100%;
            position: relative;
            z-index: 1
        }

        .noUi-connects {
            overflow: hidden;
            z-index: 0
        }

        .noUi-connect,
        .noUi-origin {
            position: absolute;
            will-change: transform;
            z-index: 1;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            transform-origin: 0 0
        }

        .noUi-connect:focus,
        .noUi-origin:focus {
            outline: 0
        }

        .noUi-connect {
            background: #007bff;
            border-radius: 5px
        }

        html:not([dir=rtl]) .noUi-horizontal .noUi-origin {
            left: auto;
            right: 0
        }

        html:not([dir=rtl]) .noUi-horizontal .noUi-handle {
            right: -11.5px;
            left: auto
        }

        .noUi-rtl .noUi-value-horizontal {
            transform: translate(50%, 50%)
        }

        .noUi-rtl .noUi-value-vertical {
            transform: translateY(50%)
        }

        .noUi-vertical {
            width: 5px
        }

        .noUi-vertical .noUi-origin {
            width: 0
        }

        .noUi-vertical .noUi-handle {
            left: -10px;
            top: -11.5px
        }

        .noUi-vertical .noUi-handle:after,
        .noUi-vertical .noUi-handle:before {
            width: 14px;
            height: 1px;
            left: 6px;
            top: 14px
        }

        .noUi-vertical .noUi-handle:after {
            top: 17px
        }

        .noUi-vertical .noUi-tooltip {
            transform: translateY(-50%);
            top: 50%;
            right: 30px
        }

        .noUi-vertical .noUi-draggable {
            cursor: ns-resize
        }

        .noUi-horizontal {
            height: 5px
        }

        .noUi-horizontal .noUi-origin {
            height: 0
        }

        .noUi-horizontal .noUi-handle {
            left: -11.5px;
            top: -10px
        }

        .noUi-horizontal .noUi-tooltip {
            transform: translate(-50%);
            left: 50%;
            bottom: 30px
        }

        .noUi-handle {
            position: absolute;
            border: 1px solid #e7e9ea;
            border-radius: 50%;
            width: 23px;
            height: 23px;
            box-shadow: 0 3px 15px rgba(90, 97, 105, .1), 0 2px 3px rgba(90, 97, 105, .2);
            background: #fff;
            transition: all .2s ease-in-out
        }

        .noUi-handle:hover {
            cursor: grab;
            cursor: -webkit-grab;
            cursor: -moz-grab
        }

        .noUi-handle:active {
            cursor: grabbing;
            cursor: -webkit-grabbing;
            cursor: -moz-grabbing
        }

        .noUi-handle:focus {
            outline: 0;
            box-shadow: 0 0 8px rgba(0, 123, 255, .65), 0 3px 15px rgba(90, 97, 105, .1), 0 2px 3px rgba(90, 97, 105, .2)
        }

        .noUi-handle:after {
            left: 17px
        }

        .noUi-state-tap .noUi-connect,
        .noUi-state-tap .noUi-origin {
            transition: transform .3s
        }

        .noUi-state-drag * {
            cursor: inherit !important
        }

        .noUi-connects {
            border-radius: 5px
        }

        .noUi-draggable {
            cursor: ew-resize
        }

        .noUi-active {
            transform: scale(1.1)
        }

        [disabled] .noUi-connect {
            background: #b8b8b8
        }

        [disabled].noUi-handle,
        [disabled] .noUi-handle,
        [disabled].noUi-target {
            cursor: not-allowed
        }

        [disabled] .noUi-handle {
            background: #f2f3f4
        }

        [disabled] .noUi-handle:focus {
            box-shadow: 0 3px 15px rgba(90, 97, 105, .1), 0 2px 3px rgba(90, 97, 105, .2)
        }

        .noUi-pips,
        .noUi-pips * {
            box-sizing: border-box
        }

        .noUi-pips {
            position: absolute;
            color: #a8aeb4;
            font-size: 12px
        }

        .noUi-value {
            position: absolute;
            white-space: nowrap;
            text-align: center
        }

        .noUi-value-sub {
            color: #a8aeb4;
            font-size: 10px
        }

        .noUi-marker {
            position: absolute
        }

        .noUi-marker,
        .noUi-marker-large,
        .noUi-marker-sub {
            background: #a8aeb4
        }

        .noUi-pips-horizontal {
            padding: 10px 0;
            height: auto;
            top: 100%;
            left: 0;
            width: 100%
        }

        .noUi-value-horizontal {
            transform: translate3d(-50%, 50%, 0)
        }

        .noUi-marker-horizontal.noUi-marker {
            margin-left: -1px;
            width: 1px;
            height: 4px
        }

        .noUi-marker-horizontal.noUi-marker-sub {
            height: 5px
        }

        .noUi-marker-horizontal.noUi-marker-large {
            height: 7px
        }

        .noUi-pips-vertical {
            padding: 0 10px;
            height: 100%;
            top: 0;
            left: 100%
        }

        .noUi-value-vertical {
            transform: translate3d(0, -50%, 0);
            padding-left: 15px
        }

        .noUi-marker-vertical.noUi-marker {
            width: 4px;
            height: 1px;
            margin-top: -1px
        }

        .noUi-marker-vertical.noUi-marker-sub {
            width: 10px
        }

        .noUi-marker-vertical.noUi-marker-large {
            width: 7px
        }

        .noUi-tooltip {
            display: block;
            position: absolute;
            text-align: center;
            white-space: nowrap;
            border-radius: .25rem;
            background: #fff;
            color: #5a6169;
            box-shadow: 0 3px 15px rgba(90, 97, 105, .1), 0 2px 3px rgba(90, 97, 105, .2);
            font-size: .75rem;
            padding: 5px 10px
        }

        .slider-primary .noUi-connect {
            background: #007bff
        }

        .slider-secondary .noUi-connect {
            background: #6c757d
        }

        .slider-success .noUi-connect {
            background: #28a745
        }

        .slider-info .noUi-connect {
            background: #17a2b8
        }

        .slider-warning .noUi-connect {
            background: #ffc107
        }

        .slider-danger .noUi-connect {
            background: #dc3545
        }

        .slider-light .noUi-connect {
            background: #f8f9fa
        }

        .slider-dark .noUi-connect {
            background: #343a40
        }

        .datepicker {
            border-radius: .25rem;
            direction: ltr
        }

        .datepicker-inline {
            width: 220px
        }

        .datepicker-rtl {
            direction: rtl
        }

        .datepicker-rtl.dropdown-menu {
            left: auto
        }

        .datepicker-rtl table tr td span {
            float: right
        }

        .datepicker-dropdown {
            top: 0;
            left: 0;
            padding: 20px 22px
        }

        .datepicker-dropdown:after,
        .datepicker-dropdown:before {
            content: "";
            display: inline-block;
            border-top: 0;
            position: absolute
        }

        .datepicker-dropdown:before {
            border-left: 7px solid transparent;
            border-right: 7px solid transparent;
            border-bottom: 7px solid rgba(0, 0, 0, .2)
        }

        .datepicker-dropdown:after {
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 6px solid #fff
        }

        .datepicker-dropdown.datepicker-orient-left:before {
            left: 6px
        }

        .datepicker-dropdown.datepicker-orient-left:after {
            left: 7px
        }

        .datepicker-dropdown.datepicker-orient-right:before {
            right: 6px
        }

        .datepicker-dropdown.datepicker-orient-right:after {
            right: 7px
        }

        .datepicker-dropdown.datepicker-orient-bottom:before {
            top: -7px
        }

        .datepicker-dropdown.datepicker-orient-bottom:after {
            top: -6px
        }

        .datepicker-dropdown.datepicker-orient-top:before {
            bottom: -7px;
            border-bottom: 0;
            border-top: 7px solid #c3c7cc
        }

        .datepicker-dropdown.datepicker-orient-top:after {
            bottom: -6px;
            border-bottom: 0;
            border-top: 6px solid #fff
        }

        .datepicker table {
            margin: 0;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .datepicker table tr td {
            border-radius: 50%
        }

        .datepicker table tr th {
            border-radius: .25rem;
            font-weight: 500
        }

        .datepicker table tr td,
        .datepicker table tr th {
            transition: all .2s ease-in-out;
            width: 36px;
            height: 36px;
            border: none;
            text-align: center
        }

        .table-striped .datepicker table tr td,
        .table-striped .datepicker table tr th {
            background-color: transparent
        }

        .datepicker table tr td.new,
        .datepicker table tr td.old {
            color: #c3c7cc
        }

        .datepicker table tr td.day:hover,
        .datepicker table tr td.focused {
            background: #eceeef;
            cursor: pointer
        }

        .datepicker table tr td.disabled,
        .datepicker table tr td.disabled:hover {
            background: none;
            color: #e7e9ea;
            cursor: default
        }

        .datepicker table tr td.highlighted {
            border-radius: 0
        }

        .datepicker table tr td.highlighted.focused {
            background: #007bff
        }

        .datepicker table tr td.highlighted.disabled,
        .datepicker table tr td.highlighted.disabled:active {
            background: #007bff;
            color: #5a6169
        }

        .datepicker table tr td.today {
            background: #e6f2ff
        }

        .datepicker table tr td.today.focused {
            background: #f5f5f6
        }

        .datepicker table tr td.today.disabled,
        .datepicker table tr td.today.disabled:active {
            background: #f5f5f6;
            color: #6c757d
        }

        .datepicker table tr td.range {
            background: #007bff;
            color: #fff;
            border-radius: 0
        }

        .datepicker table tr td.range.focused {
            background: #0067d6
        }

        .datepicker table tr td.range.day.disabled:hover,
        .datepicker table tr td.range.disabled,
        .datepicker table tr td.range.disabled:active {
            background: #0062cc;
            color: #3395ff
        }

        .datepicker table tr td.range.highlighted.focused {
            background: #cbd3da
        }

        .datepicker table tr td.range.highlighted.disabled,
        .datepicker table tr td.range.highlighted.disabled:active {
            background: #e9ecef;
            color: #e7e9ea
        }

        .datepicker table tr td.range.today.disabled,
        .datepicker table tr td.range.today.disabled:active {
            background: #007bff;
            color: #fff
        }

        .datepicker table tr td.day.range-start {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0
        }

        .datepicker table tr td.day.range-end {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0
        }

        .datepicker table tr td.day.range-start.range-end {
            border-radius: 50%
        }

        .datepicker table tr td.active,
        .datepicker table tr td.active.highlighted,
        .datepicker table tr td.active.highlighted:hover,
        .datepicker table tr td.active:hover,
        .datepicker table tr td.day.range:hover,
        .datepicker table tr td.selected,
        .datepicker table tr td.selected.highlighted,
        .datepicker table tr td.selected.highlighted:hover,
        .datepicker table tr td.selected:hover {
            background: #007bff;
            color: #fff
        }

        .datepicker table tr td span {
            display: block;
            width: 23%;
            height: 54px;
            line-height: 54px;
            float: left;
            margin: 1%;
            cursor: pointer;
            border-radius: 4px
        }

        .datepicker table tr td span.focused,
        .datepicker table tr td span:hover {
            background: #e9ecef
        }

        .datepicker table tr td span.disabled,
        .datepicker table tr td span.disabled:hover {
            background: none;
            color: #e7e9ea;
            cursor: default
        }

        .datepicker table tr td span.active,
        .datepicker table tr td span.active.disabled,
        .datepicker table tr td span.active.disabled:hover,
        .datepicker table tr td span.active:hover {
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .25)
        }

        .datepicker table tr td span.new,
        .datepicker table tr td span.old {
            color: #6c757d
        }

        .datepicker .datepicker-switch {
            width: 145px
        }

        .datepicker .datepicker-switch,
        .datepicker .next,
        .datepicker .prev,
        .datepicker tfoot tr th {
            cursor: pointer
        }

        .datepicker .datepicker-switch:hover,
        .datepicker .next:hover,
        .datepicker .prev:hover,
        .datepicker tfoot tr th:hover {
            background: #e9ecef
        }

        .datepicker .next.disabled,
        .datepicker .prev.disabled {
            visibility: hidden
        }

        .datepicker .cw {
            font-size: 10px;
            width: 12px;
            padding: 0 2px 0 5px;
            vertical-align: middle
        }

        .input-daterange input {
            text-align: center
        }

        .bg-primary {
            background-color: #007bff !important
        }

        .bg-primary.card .card-body,
        .bg-primary.card .card-footer,
        .bg-primary.card .card-header,
        .bg-primary.card .card-title {
            background-color: #0062cc !important
        }

        .bg-primary.card .card-footer,
        .bg-primary.card .card-header {
            background: #0074f0
        }

        a.bg-primary:focus,
        a.bg-primary:hover {
            background-color: #0062cc !important
        }

        .bg-secondary {
            background-color: #6c757d !important
        }

        .bg-secondary.card .card-body,
        .bg-secondary.card .card-footer,
        .bg-secondary.card .card-header,
        .bg-secondary.card .card-title {
            background-color: #545b62 !important
        }

        .bg-secondary.card .card-footer,
        .bg-secondary.card .card-header {
            background: #656d75
        }

        a.bg-secondary:focus,
        a.bg-secondary:hover {
            background-color: #545b62 !important
        }

        .bg-success {
            background-color: #28a745 !important
        }

        .bg-success.card .card-body,
        .bg-success.card .card-footer,
        .bg-success.card .card-header,
        .bg-success.card .card-title {
            background-color: #1e7e34 !important
        }

        .bg-success.card .card-footer,
        .bg-success.card .card-header {
            background: #259b40
        }

        a.bg-success:focus,
        a.bg-success:hover {
            background-color: #1e7e34 !important
        }

        .bg-info {
            background-color: #17a2b8 !important
        }

        .bg-info.card .card-body,
        .bg-info.card .card-footer,
        .bg-info.card .card-header,
        .bg-info.card .card-title {
            background-color: #117a8b !important
        }

        .bg-info.card .card-footer,
        .bg-info.card .card-header {
            background: #1596aa
        }

        a.bg-info:focus,
        a.bg-info:hover {
            background-color: #117a8b !important
        }

        .bg-warning {
            background-color: #ffc107 !important
        }

        .bg-warning.card .card-body,
        .bg-warning.card .card-footer,
        .bg-warning.card .card-header,
        .bg-warning.card .card-title {
            background-color: #d39e00 !important
        }

        .bg-warning.card .card-footer,
        .bg-warning.card .card-header {
            background: #f7b900
        }

        a.bg-warning:focus,
        a.bg-warning:hover {
            background-color: #d39e00 !important
        }

        .bg-danger {
            background-color: #dc3545 !important
        }

        .bg-danger.card .card-body,
        .bg-danger.card .card-footer,
        .bg-danger.card .card-header,
        .bg-danger.card .card-title {
            background-color: #bd2130 !important
        }

        .bg-danger.card .card-footer,
        .bg-danger.card .card-header {
            background: #da2839
        }

        a.bg-danger:focus,
        a.bg-danger:hover {
            background-color: #bd2130 !important
        }

        .bg-light {
            background-color: #f8f9fa !important
        }

        .bg-light.card .card-body,
        .bg-light.card .card-footer,
        .bg-light.card .card-header,
        .bg-light.card .card-title {
            background-color: #dae0e5 !important
        }

        .bg-light.card .card-footer,
        .bg-light.card .card-header {
            background: #eff1f4
        }

        a.bg-light:focus,
        a.bg-light:hover {
            background-color: #dae0e5 !important
        }

        .bg-dark {
            background-color: #343a40 !important
        }

        .bg-dark.card .card-body,
        .bg-dark.card .card-footer,
        .bg-dark.card .card-header,
        .bg-dark.card .card-title {
            background-color: #1d2124 !important
        }

        .bg-dark.card .card-footer,
        .bg-dark.card .card-header {
            background: #2d3238
        }

        a.bg-dark:focus,
        a.bg-dark:hover {
            background-color: #1d2124 !important
        }

        .border {
            border: 1px solid #dee2e6 !important
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important
        }

        .border-right {
            border-right: 1px solid #dee2e6 !important
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important
        }

        .border-left {
            border-left: 1px solid #dee2e6 !important
        }

        .border-primary {
            border-color: #007bff !important
        }

        .border-secondary {
            border-color: #6c757d !important
        }

        .border-success {
            border-color: #28a745 !important
        }

        .border-info {
            border-color: #17a2b8 !important
        }

        .border-warning {
            border-color: #ffc107 !important
        }

        .border-danger {
            border-color: #dc3545 !important
        }

        .border-light {
            border-color: #f8f9fa !important
        }

        .border-dark {
            border-color: #343a40 !important
        }

        .rounded {
            border-radius: .25rem !important
        }

        .rounded-top {
            border-top-left-radius: .25rem !important
        }

        .rounded-right,
        .rounded-top {
            border-top-right-radius: .25rem !important
        }

        .rounded-bottom,
        .rounded-right {
            border-bottom-right-radius: .25rem !important
        }

        .rounded-bottom,
        .rounded-left {
            border-bottom-left-radius: .25rem !important
        }

        .rounded-left {
            border-top-left-radius: .25rem !important
        }

        .text-monospace {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace
        }

        .font-weight-normal {
            font-weight: 400
        }

        .font-weight-bold {
            font-weight: 700
        }

        .text-primary {
            color: #007bff !important
        }

        a.text-primary:focus,
        a.text-primary:hover {
            color: #0062cc !important
        }

        .text-secondary {
            color: #6c757d !important
        }

        a.text-secondary:focus,
        a.text-secondary:hover {
            color: #545b62 !important
        }

        .text-success {
            color: #28a745 !important
        }

        a.text-success:focus,
        a.text-success:hover {
            color: #1e7e34 !important
        }

        .text-info {
            color: #17a2b8 !important
        }

        a.text-info:focus,
        a.text-info:hover {
            color: #117a8b !important
        }

        .text-warning {
            color: #ffc107 !important
        }

        a.text-warning:focus,
        a.text-warning:hover {
            color: #d39e00 !important
        }

        .text-danger {
            color: #dc3545 !important
        }

        a.text-danger:focus,
        a.text-danger:hover {
            color: #bd2130 !important
        }

        .text-light {
            color: #f8f9fa !important
        }

        a.text-light:focus,
        a.text-light:hover {
            color: #dae0e5 !important
        }

        .text-dark {
            color: #343a40 !important
        }

        a.text-dark:focus,
        a.text-dark:hover {
            color: #1d2124 !important
        }

        .text-body {
            color: #212529 !important
        }

        a.text-white:focus,
        a.text-white:hover {
            color: #e6e6e6 !important
        }

        .text-black {
            color: #000
        }

        a.text-black:focus,
        a.text-black:hover {
            color: #000 !important
        }

        .text-muted {
            color: #6c757d !important
        }

        .with-shadows {
            box-shadow: 0 .46875rem 2.1875rem rgba(90, 97, 105, .1), 0 .9375rem 1.40625rem rgba(90, 97, 105, .1), 0 .25rem .53125rem rgba(90, 97, 105, .12), 0 .125rem .1875rem rgba(90, 97, 105, .1)
        }

        #header {
            border-bottom: 1px solid #dbdbdb;
            background: #fff;
            z-index: 9;
            top: 0
        }

        #header .cart-header {
            display: inline-block;
            width: 35px
        }

        @media only screen and (min-width:992px) {
            #header {
                /*border-bottom: 0*/
            }
        }

        #header .login-logout {
            color: #ffc107
        }

        #header .login-logout a {
            color: #ffc107;
            font-size: 16px
        }

        #header .menu {
            position: unset
        }

        @media only screen and (min-width:992px) {
            #header .menu {
                border-top: 1px solid #dbdbdb;
                /* border-bottom: 1px solid #dbdbdb; */
                left: 0;
                bottom: 0
            }
        }

        #header .menu #navbarNav {
            position: absolute;
            width: 100%;
            top: 100%;
            left: 0;
            z-index: 5;
            background: #fff;
        }

        @media only screen and (min-width:992px) {
            #header .menu #navbarNav {
                position: unset;
                z-index: unset;
                left: unset;
                background: unset
            }
        }

        #header .menu #navbarNav .newGif {
            position: absolute;
            width: 50px;
            bottom: 72%;
            left: 140px
        }

        #header .navbar-toggler {
            outline: 0
        }

        #header .logo-header {
            border-top: 1px solid #dbdbdb;
            border-bottom: 1px solid #dbdbdb
        }

        @media only screen and (min-width:992px) {
            #header .logo-header {
                border: 0
            }
        }

        #header ul {
            border-top: 1px solid #dbdbdb
        }

        @media only screen and (min-width:992px) {
            #header ul {
                position: unset;
                z-index: unset;
                left: unset;
                background: unset;
                border: 0
            }
        }

        @media only screen and (max-width:754px) {
            #header ul li a {
                color: #000;
                font-size: 18px;
                cursor: pointer;

            }
        }

        #header ul .active a {
            color: #ffd44c
        }

        #header ul li {
            border-bottom: 1px solid #dbdbdb
        }

        #header ul li:hover a {
            color: #ffb300;
        }

        @media only screen and (min-width:992px) {
            #header ul li {
                border-bottom: 0
            }
        }

        #header ul li a {
            color: #101010;
            font-size: 18px;
            cursor: pointer;
            font-weight: 500;
        }

        @media only screen and (min-width:992px) {
            #header ul li a {
                /* border-right: 2px solid #dbdbdb */
            }
        }

        #header ul li #cart-qty {
            top: -25%;
            font-size: 10px;
            background: #ffd44c;
            padding: 0;
            border-radius: 50%;
            color: #fff;
            right: 0;
            width: 18px;
            height: 18px;
            text-align: center;
            line-height: 18px;
            display: inline-block
        }

        #header .menu-parent .menu-child {
            top: 100%;
            left: 0px;
            text-align: left;
            z-index: 6;
            width: 286px;
            background: #fff;
            display: none;
            border: 1px solid #ccc
        }

        #header .menu-parent .menu-child a {
            border: 0;
            color: #000;
            font-size: 16px;
            border-bottom: 1px solid #dbdbdb
        }

        #header .menu-parent .menu-child a:hover {
            color: #ffc107
        }

        @media only screen and (min-width:992px) {
            #header .menu-parent:hover .menu-child {
                display: block
            }
        }

        #header .menu-parent .dis {
            display: block
        }

        button {
            background: #ffc107;
            border-radius: 5px;
            color: #fff;
            border: 0
        }

        button:hover {
            background: #28a745
        }

        .problem {
            background-image: linear-gradient(#fff, #f6de80);
        }

        .problem .prob {
            position: relative;
            height: 50px
        }

        .problem .prob .icon-prb {
            font-size: 30px;
            height: 100%;
            position: absolute;
            width: 50px;
            background: #2a8a2a;
            color: #fff;
            border-radius: 50%;
            overflow: hidden;
            z-index: 1
        }

        .problem .prob .icon-prb img {
            width: 30px
        }

        .problem .prob .icon-feeding-bottle .path1:before {
            color: #fff
        }

        .problem .prob .prob-text {
            font-size: 16px;
            position: absolute;
            height: 100%;
            width: 95%;
            left: 20px;
            color: #222221;
            border-radius: 0 25px 25px 0;
            background: #fff;
            padding-right: 15px;
        }

        .problem .prob a:hover .prob-text {
            color: #4fc4e6;
            padding: 10px;
        }

        ul {
            list-style: none
        }

        ul li {
            text-decoration: none
        }

        .img-product {
            position: relative;
            cursor: pointer
        }

        .img-product img {
            transition: all 1s
        }

        .img-product img:hover {
            transform: scale(1.1)
        }

        .chuyengia {
            background: #ccdbff
        }

        .chuyengia .quocgia a {
            color: #333;
            font-size: 20px;
            border-right: 1px solid #333
        }

        .chuyengia .quocgia a:last-child {
            border: 0;
            padding-right: 0 !important
        }

        .chuyengia .quocgia .active {
            color: #ffc107
        }

        .chuyengia .owl-nav {
            position: absolute;
            width: 100%;
            top: 32%;
            display: flex;
            justify-content: space-between
        }

        .chuyengia .owl-nav button {
            height: 0
        }

        .chuyengia .tab-chuyengia>.active {
            display: flex
        }

        .chuyengia .tab-chuyengia .doctor-img {
            transition: all 1s;
            position: relative
        }

        .chuyengia .tab-chuyengia .doctor-content {
            display: flex;
            font-size: 16px;
            width: 100%;
            height: 100%;
            top: 0;
            background: #ffc107;
            opacity: .8;
            color: #fff;
            overflow-y: auto;
            position: static;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .chuyengia .tab-chuyengia .doctor-content p {
            font-size: 16px;
            margin: 0
        }

        @media only screen and (min-width:576px) {
            .chuyengia .tab-chuyengia .doctor-content p {
                font-size: 12px
            }
        }

        @media only screen and (min-width:992px) {
            .chuyengia .tab-chuyengia .doctor-content p {
                font-size: 16px
            }
        }

        @media only screen and (min-width:576px) {
            .chuyengia .tab-chuyengia .doctor-content {
                font-size: 12px
            }
        }

        @media only screen and (min-width:768px) {
            .chuyengia .tab-chuyengia .doctor-content {
                position: absolute;
                display: none
            }
        }

        @media only screen and (min-width:992px) {
            .chuyengia .tab-chuyengia .doctor-content {
                font-size: 16px
            }
        }

        .chuyengia .tab-chuyengia .owl-item {
            cursor: pointer
        }

        .chuyengia .tab-chuyengia .owl-item:hover .doctor-content {
            display: flex
        }

        .chuyengia .tab-chuyengia .owl-item:hover .doctor-img {
            transform: scale(1.1)
        }

        #chungnhan {
            padding: 50px 0
        }

        #chungnhan .purelac-chung-nhan .item-chung-nhan {
            cursor: pointer
        }

        #chungnhan .purelac-chung-nhan .owl-nav {
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        #chungnhan .purelac-chung-nhan .owl-nav .owl-prev {
            position: absolute;
            left: 98%
        }

        @media only screen and (min-width:768px) {
            #chungnhan .purelac-chung-nhan .owl-nav .owl-prev {
                left: 100%
            }
        }

        #chungnhan .purelac-chung-nhan .owl-nav .owl-next {
            position: absolute
        }

        @media only screen and (min-width:768px) {
            #chungnhan .purelac-chung-nhan .owl-nav .owl-next {
                right: 100%
            }
        }

        #chungnhan .list-chung-nhan .btn-close {
            position: absolute;
            left: 100%;
            background: #000;
            padding: 0 8px;
            color: #fff;
            border-radius: 0;
            opacity: 1;
            outline: 0
        }

        #chungnhan .list-chung-nhan .owl-nav {
            top: 50%;
            position: absolute;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        #chungnhan .list-chung-nhan .owl-nav button {
            background: #000;
            border-radius: 0;
            color: #fff;
            position: absolute
        }

        #chungnhan .list-chung-nhan .owl-nav .owl-prev {
            margin-right: 40px;
            right: 100%
        }

        #chungnhan .list-chung-nhan .owl-nav .owl-next {
            margin-left: 40px;
            left: 100%
        }

        .banner .carousel-item {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 0;
            height: 100%
        }

        @media only screen and (min-width:768px) {
            .banner .carousel-item {
                background-position: 0
            }
        }

        @media (min-width:870px) {
            .banner .carousel-item {
                background-position: 50%
            }
        }

        .banner .banner-sua {
            position: absolute;
            display: flex;
            width: 100%;
            bottom: 12px;
            text-align: center;
            align-items: center;
            justify-content: center
        }

        .banner .banner-sua .banner-milk1 {
            max-width: 430px
        }

        @media only screen and (min-width:768px) {
            .banner .banner-sua .banner-milk1 {
                max-width: 430px
            }
        }

        .banner .banner-sua .banner-milk2 {
            max-width: 240px
        }

        @media only screen and (min-width:768px) {
            .banner .banner-sua .banner-milk2 {
                max-width: 270px
            }
        }

        .banner .banner-sua .banner-milk3 {
            max-width: 240px
        }

        @media only screen and (min-width:768px) {
            .banner .banner-sua .banner-milk3 {
                max-width: 280px
            }
        }

        .banner .carousel-caption {
            top: 0;
            left: 0;
            height: 100%;
            z-index: 8
        }

        .banner .carousel-caption h2 {
            font-size: 30px
        }

        @media only screen and (min-width:992px) {
            .banner .carousel-caption h2 {
                font-size: 55px
            }
        }

        .banner .carousel-caption .sua-bot {
            font-size: 25px
        }

        @media only screen and (min-width:992px) {
            .banner .carousel-caption .sua-bot {
                font-size: 20px
            }
        }

        .banner .carousel-caption .text-purelac-1,
        .banner .carousel-caption .text-purelac-1 h2 {
            color: #455d00
        }

        .banner .carousel-caption .text-purelac-2,
        .banner .carousel-caption .text-purelac-2 h2 {
            color: #ffc107
        }

        .banner .carousel-caption .text-purelac-3,
        .banner .carousel-caption .text-purelac-3 h2 {
            color: #005f6a
        }

        .banner .carousel-caption .carousel-control-next,
        .banner .carousel-caption .carousel-control-prev {
            width: 10%
        }

        .banner .carousel-caption .caption {
            top: 5%;
            z-index: 3;
            position: static;
            text-align: center
        }

        @media only screen and (min-width:768px) {
            .banner .carousel-caption .caption {
                top: 10%;
                position: absolute
            }
        }

        @media only screen and (min-width:992px) {
            .banner .carousel-caption .caption {
                top: 20%;
                position: absolute
            }
        }

        @media (min-width:870px) {
            .banner .carousel-caption .caption {
                text-align: left
            }
        }

        .title-question {
            font-size: 20px
        }

        .blog-post img {
            display: block;
            margin: auto
        }

        .txtsearch {
            border-radius: 23px;
            border: 1px solid #dbdbdb;
            width: 270px
        }

        .txtsearch:focus {
            outline: none;
            border-color: #00b9ff
        }

        .txtsearch:hover {
            border-color: #ffc107
        }

        .txtsearch::-moz-placeholder {
            color: #ababab
        }

        .txtsearch:-ms-input-placeholder {
            color: #ababab
        }

        .txtsearch::placeholder {
            color: #ababab
        }

        .btn-search {
            position: absolute;
            right: 0;
            height: 100%;
            display: flex;
            border: 0;
            align-items: center
        }

        .tim-kiem {
            border-bottom: 1px solid #dbdbdb
        }

        .xem-them {
            color: #000
        }

        .link-login,
        .link-login a,
        .xem-them:hover {
            color: #ffc107
        }

        .message {
            position: fixed;
            top: 2px
        }

        .message .alert {
            color: #fff;
            font-size: 16px;
            box-shadow: 0 0 2px 2px #ccc
        }

        #message .modal-dialog {
            max-width: 580px
        }

        #message .modal-dialog .modal-content {
            background-color: #ffc107
        }

        #message .modal-dialog .modal-content p {
            margin: 0
        }

        #message .modal-dialog .modal-content h3 {
            padding-bottom: 5px;
            color: #fff
        }

        #message .modal-dialog .modal-content .modal-body {
            text-align: justify;
            color: #fff
        }

        #message .modal-dialog .modal-content button {
            color: #000;
            background: #fff;
            border-radius: 20px
        }

        #message .modal-dialog .modal-content button:hover {
            color: #ffc107
        }

        #footer {
            background: #e9e9e9;
            padding-top: 50px;
            position: relative;
            z-index: 9;
            padding-bottom: 20px
        }

        @media only screen and (min-width:768px) {
            #footer {
                padding-bottom: 0
            }
        }

        #footer .footer-info h3 {
            font-size: 16px;
            color: #212529;
            line-height: 1.5rem;
            border-bottom: 1px solid #ffc107
        }

        #footer .footer-lienhe h3 {
            font-size: 16px;
            color: #212529;
            line-height: 3.5rem;
            font-weight: 700;
        }

        @media only screen and (min-width:992px) {
            #footer .footer-info h3 {
                font-size: 20px
            }
        }

        #footer .footer-info a {
            color: #000;
            font-size: 16px;
            font-weight: 500;
        }

        #footer .footer-info a:hover {
            color: #ffc107
        }

        @media only screen and (min-width:992px) {
            #footer .footer-info a {
                font-size: 18px
            }
        }

        #footer .footer-info .milk-footer {
            background: #e9e9e9
        }

        #footer .footer-info .img-milk {
            height: 222px;
            background-position: 50%
        }

        #footer .footer-info .footer-logo {
            position: absolute;
            bottom: 5%;
            display: flex;
            width: 100%;
            justify-content: center
        }

        @media only screen and (min-width:768px) {
            #footer .footer-info .footer-logo {
                bottom: 10%
            }
        }

        #footer .bottom-sidebar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 5px;
            background-color: #fff;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 15;
            box-shadow: 0 -.3rem .7rem rgba(155, 154, 154, .95)
        }

        @media only screen and (min-width:768px) {
            #footer .bottom-sidebar {
                display: none
            }
        }

        @media (min-width:375px) {
            #footer .bottom-sidebar {
                padding: 10px
            }
        }

        #footer .bottom-sidebar .btn-mobile {
            color: #fff;
            padding: 5px;
            border-radius: 25px;
            width: 100px;
            font-weight: 700;
            display: flex;
            align-items: center;
            font-size: 14px;
            justify-content: center
        }

        #footer .bottom-sidebar .btn-mobile i {
            margin-right: 5px
        }

        #footer .bottom-sidebar .btn-info {
            background: linear-gradient(90deg, #1a80e3, #1a80e3 20%, #6fb3f6 80%, #6fb3f6)
        }

        #footer .bottom-sidebar .btn-contact {
            background: linear-gradient(90deg, #25b9ab, #25b9ab 20%, #4ee3d5 80%, #4ee3d5)
        }

        #footer .bottom-sidebar .btn-order {
            background: linear-gradient(90deg, #f2aeae, #db6161 20%, #da4b9c 80%, #db8ab7)
        }

        #footer .footer-lienhe {
            background-image: linear-gradient(#f3e9d2, #f5b904);
            color: #1e1d1d;
            padding-top: 80px;
            margin-top: -60px;
        }

        #footer .footer-lienhe h6 {
            font-size: 20px;
            color: #fff;
            line-height: 35px;
            padding-bottom: 10px
        }

        #footer .footer-lienhe p {
            font-size: 16px;
            margin: 0
        }

        #footer #scoll-top {
            height: 55px;
            width: 55px;
            position: fixed;
            bottom: 20px;
            right: 7px;
            cursor: pointer;
            border-radius: 50%;
            background: #ffc107;
            display: flex;
            flex-direction: column;
            text-align: center;
            color: #fff;
            padding-top: 10px;
            z-index: 3
        }

        .notification {
            border: 1px solid #000
        }

        .notification p {
            margin: 0
        }

        .notification p a {
            word-break: break-all
        }

        .notification .icon-success {
            font-size: 75px;
            color: #ffc107
        }

        .notification h1 {
            font-size: 25px;
            line-height: 35px
        }

        .blog-category .btn-km {
            border-radius: 20px
        }

        .blog-category .btn-km a {
            font-size: 17px;
            color: #fff
        }

        .blog-category .km-name {
            line-height: 2.5rem
        }

        .blog-category .km-name a {
            color: #000;
            font-size: 20px;
            font-weight: 500;
        }

        .blog-category .km-name a:hover {
            color: #ffc107
        }

        .blog-category .des-km {
            margin: 0
        }

        .blog-post iframe {
            max-width: 100%;
            height: 235px
        }

        @media (min-width:441px) {
            .blog-post iframe {
                height: 315px
            }
        }

        #product-detail p {
            font-size: 16px
        }

        #product-detail #zoom-img:hover .product-image {
            visibility: hidden
        }

        #product-detail .product-gallery #galler-catalog {
            position: relative;
            display: flex;
            z-index: 2
        }

        #product-detail .product-gallery #galler-catalog .owl-nav {
            position: absolute;
            width: 100%;
            top: 45%
        }

        #product-detail .product-gallery #galler-catalog .owl-nav button {
            position: absolute
        }

        #product-detail .product-gallery #galler-catalog .owl-nav .owl-prev {
            left: 0
        }

        #product-detail .product-gallery #galler-catalog .owl-nav .owl-next {
            right: 0
        }

        #product-detail .product-gallery #galler-catalog .owl-item .gallery-img {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #dbdbdb
        }

        #product-detail .product-gallery #galler-catalog .owl-item .gallery-img img {
            max-width: 110px
        }

        #product-detail .product-gallery #galler-catalog .owl-item .gallery-img.active {
            border: 1px solid #ffc107
        }

        #product-detail .pro-border {
            border-top: 1px solid #dbdbdb;
            font-size: 16px
        }

        #product-detail .font-text {
            font-size: 20px
        }

        #product-detail .rating1 .btn {
            border: 0;
            font-size: 20px;
            padding: 0;
            cursor: pointer;
            color: #ff5700;
            background-color: transparent
        }

        #product-detail .rating1 .btn:focus {
            box-shadow: none;
            color: #ff5700
        }

        #product-detail .rating1 .btn:focus~.btn {
            color: #666
        }

        #product-detail .button button {
            width: 100%
        }

        #product-detail .reason .lydo {
            background: #afccfd
        }

        #product-detail .reason .lydo i {
            font-size: 25px;
            padding: 10px;
            border-radius: 50%;
            background: #fff
        }

        #product-detail .reason .lydo .p {
            font-size: 16px
        }

        @media only screen and (min-width:992px) {
            #product-detail .product-descriptions .product-description-border {
                border-bottom: 1px solid #dbdbdb
            }
        }

        #product-detail .product-descriptions .product-description-border ul {
            display: unset
        }

        #product-detail .product-descriptions .product-description-border li {
            cursor: pointer;
            border-bottom: 1px solid #dbdbdb
        }

        #product-detail .product-descriptions .product-description-border li:hover a {
            color: #ffc107
        }

        #product-detail .product-descriptions .product-description-border li a {
            color: #333;
            font-size: 16px
        }

        #product-detail .product-descriptions .product-description-border li .active {
            color: #ffc107
        }

        @media only screen and (min-width:992px) {
            #product-detail .product-descriptions .product-description-border li {
                border-bottom: 0;
                border-right: 1px solid #dbdbdb
            }

            #product-detail .product-descriptions .product-description-border li:last-child {
                border: 0
            }
        }

        #product-detail .product-descriptions .purlac-problem-be {
            background-color: #26afd3
        }

        #product-detail .product-descriptions .purlac-problem-be h4 {
            color: #fff;
            font-size: 20px
        }

        #product-detail .product-descriptions .purlac-problem-me {
            background-color: #6b8bd8
        }

        #product-detail .product-descriptions .purlac-problem-me h4 {
            color: #fff;
            font-size: 20px
        }

        #product-detail .product-descriptions .subject .banner-baby {
            background-color: #ffc107;
            color: #fff
        }

        #product-detail .product-descriptions .subject .banner-mom {
            background-color: #6b8bd8;
            color: #fff
        }

        #product-detail .product-descriptions .subject ul li {
            cursor: pointer;
            background: #fafafa;
            font-size: 16px;
            border-bottom: 1px solid #d6d6d6
        }

        #product-detail .product-descriptions .subject ul li .description-problem {
            border-top: 1px solid #d6d6d6;
            background: #fff
        }

        #product-detail .product-descriptions .subject ul li .title-problem .active {
            transform: rotate(90deg)
        }

        #product-detail .product-descriptions .subject ul li h1,
        #product-detail .product-descriptions .subject ul li h2,
        #product-detail .product-descriptions .subject ul li h3,
        #product-detail .product-descriptions .subject ul li h4,
        #product-detail .product-descriptions .subject ul li h5,
        #product-detail .product-descriptions .subject ul li h6 {
            margin-bottom: 1rem;
            line-height: 1.2
        }

        #product-detail .product-descriptions .subject ul li .subject-content p {
            margin-bottom: .75rem
        }

        #product-detail h6 {
            font-size: 16px
        }

        #product-detail .comment {
            padding-top: 50px
        }

        #product-detail .comment textarea {
            background: #fafafa
        }

        #product-detail .comment textarea::-moz-placeholder {
            padding-top: 10px;
            padding-left: 10px;
            font-size: 16px;
            color: #ababab
        }

        #product-detail .comment textarea:-ms-input-placeholder {
            padding-top: 10px;
            padding-left: 10px;
            font-size: 16px;
            color: #ababab
        }

        #product-detail .comment textarea::placeholder {
            padding-top: 10px;
            padding-left: 10px;
            font-size: 16px;
            color: #ababab
        }

        .modal-add-to-cart .home-pa {
            color: #9e9793
        }

        .modal-add-to-cart .home-pa:hover {
            color: #fea532
        }

        .top {
            padding-top: 40px
        }

        .bottom-40 {
            padding-bottom: 40px
        }

        .pd-40 {
            padding: 40px 0
        }

        .bottom {
            padding-bottom: 50px
        }

        .form-control {
            border-radius: 0
        }

        .form-control:hover {
            border-color: #ffc107
        }

        .form-control::-moz-placeholder {
            color: #ababab
        }

        .form-control:-ms-input-placeholder {
            color: #ababab
        }

        .form-control::placeholder {
            color: #ababab
        }

        #note {
            border: 1px solid #dbdbdb;
            padding-top: 10px;
            padding-left: 10px;
            position: relative
        }

        #note::-moz-placeholder {
            position: absolute;
            font-size: 16px;
            color: #ababab
        }

        #note:-ms-input-placeholder {
            position: absolute;
            font-size: 16px;
            color: #ababab
        }

        #note::placeholder {
            position: absolute;
            font-size: 16px;
            color: #ababab
        }

        #note:hover {
            border: 1px solid #ffc107
        }

        .cart .mess {
            border: 1px dashed #dbdbdb
        }

        .cart .thong-tin {
            background: #ffc107
        }

        .cart .thong-tin>h4 {
            font-size: 18px
        }

        .cart .gender {
            font-size: 16px
        }

        .cart .thanh-toan {
            background: #fafafa
        }

        .cart .radio-input {
            position: absolute;
            visibility: hidden
        }

        .cart .radio-label {
            cursor: pointer;
            font-size: 16px;
            position: relative;
            vertical-align: top;
            display: flex;
            align-items: center
        }

        .cart .radio-label:before {
            background-color: #fff;
            border: .1rem solid #dbdbdb;
            border-radius: 50%;
            content: "";
            display: inline-block;
            height: 20px;
            margin-right: .4rem;
            width: 20px;
            vertical-align: top
        }

        .cart input[type=radio]:checked+.radio-label:before {
            border: 1px solid #ffc107
        }

        .cart input[type=radio]:checked+label:after {
            background: #ffc107;
            border-radius: .5rem;
            content: "";
            height: 12px;
            left: 4px;
            position: absolute;
            width: 12px
        }

        .cart .cart-img {
            width: 95px;
           
        }

        .cart .don-hang {
            background: #fafafa
        }

        .cart .cart-delete-item {
            right: 0
        }

        .cart .cart-delete-item:hover .icon-delete:before {
            color: #ff5700
        }

        .cart .next-border {
            border-top: 1px solid #dbdbdb;
            border-bottom: 1px solid #dbdbdb
        }

        .cart .next-border #next-order {
            background: #9fe2f5;
            border: 0;
            height: 50px
        }

        .cart .next-border .text-next-order {
            color: #333
        }

        .cart .next-border .dropdown-toggle:after {
            color: #000
        }

        .dropdown-menu .btnnumber {
            border-radius: unset;
            border: 1px solid #dbdbdb;
            background: #fff;
            color: #707070;
            width: 35px;
            height: 35px
        }

        .dropdown-menu .dropdown-item:hover {
            background: #9fe2f5
        }

        .ion-succes {
            font-size: 50px
        }

        .ion-succes,
        .message {
            color: #ffc107
        }

        .close {
            font-size: 30px;
            color: #000;
            border: 0
        }

        .close:hover {
            background: none;
            color: #ffc107
        }

        .link-color {
            color: #000
        }

        h4 {
            font-size: 20px
        }

        .font-16 {
            font-size: 14px
        }

        .about-page .gioi-thieu p:last-child {
            margin: 0
        }

        .quangcao {
            background: #ffc107
        }

        .hotprod {
            width: 125px;
            cursor: pointer;
            overflow: hidden
        }

        .hotprod img:hover {
            transform: scale(1.1);
            transition: all .5s
        }

        .hoi-dap p {
            margin-bottom: 18px;
            padding: 10px 0 10px 10px;
            background: #fafafa
        }

        .cau-hoi {
            background: #fafafa;
            border: 1px solid #d6d6d6
        }

        .cau-hoi a {
            color: #222221
        }

        [data-aos][data-aos][data-aos-duration="50"],
        body[data-aos-duration="50"] [data-aos] {
            transition-duration: 50ms
        }

        [data-aos][data-aos][data-aos-delay="50"],
        body[data-aos-delay="50"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="50"].aos-animate,
        body[data-aos-delay="50"] [data-aos].aos-animate {
            transition-delay: 50ms
        }

        [data-aos][data-aos][data-aos-duration="100"],
        body[data-aos-duration="100"] [data-aos] {
            transition-duration: .1s
        }

        [data-aos][data-aos][data-aos-delay="100"],
        body[data-aos-delay="100"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="100"].aos-animate,
        body[data-aos-delay="100"] [data-aos].aos-animate {
            transition-delay: .1s
        }

        [data-aos][data-aos][data-aos-duration="150"],
        body[data-aos-duration="150"] [data-aos] {
            transition-duration: .15s
        }

        [data-aos][data-aos][data-aos-delay="150"],
        body[data-aos-delay="150"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="150"].aos-animate,
        body[data-aos-delay="150"] [data-aos].aos-animate {
            transition-delay: .15s
        }

        [data-aos][data-aos][data-aos-duration="200"],
        body[data-aos-duration="200"] [data-aos] {
            transition-duration: .2s
        }

        [data-aos][data-aos][data-aos-delay="200"],
        body[data-aos-delay="200"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="200"].aos-animate,
        body[data-aos-delay="200"] [data-aos].aos-animate {
            transition-delay: .2s
        }

        [data-aos][data-aos][data-aos-duration="250"],
        body[data-aos-duration="250"] [data-aos] {
            transition-duration: .25s
        }

        [data-aos][data-aos][data-aos-delay="250"],
        body[data-aos-delay="250"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="250"].aos-animate,
        body[data-aos-delay="250"] [data-aos].aos-animate {
            transition-delay: .25s
        }

        [data-aos][data-aos][data-aos-duration="300"],
        body[data-aos-duration="300"] [data-aos] {
            transition-duration: .3s
        }

        [data-aos][data-aos][data-aos-delay="300"],
        body[data-aos-delay="300"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="300"].aos-animate,
        body[data-aos-delay="300"] [data-aos].aos-animate {
            transition-delay: .3s
        }

        [data-aos][data-aos][data-aos-duration="350"],
        body[data-aos-duration="350"] [data-aos] {
            transition-duration: .35s
        }

        [data-aos][data-aos][data-aos-delay="350"],
        body[data-aos-delay="350"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="350"].aos-animate,
        body[data-aos-delay="350"] [data-aos].aos-animate {
            transition-delay: .35s
        }

        [data-aos][data-aos][data-aos-duration="400"],
        body[data-aos-duration="400"] [data-aos] {
            transition-duration: .4s
        }

        [data-aos][data-aos][data-aos-delay="400"],
        body[data-aos-delay="400"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="400"].aos-animate,
        body[data-aos-delay="400"] [data-aos].aos-animate {
            transition-delay: .4s
        }

        [data-aos][data-aos][data-aos-duration="450"],
        body[data-aos-duration="450"] [data-aos] {
            transition-duration: .45s
        }

        [data-aos][data-aos][data-aos-delay="450"],
        body[data-aos-delay="450"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="450"].aos-animate,
        body[data-aos-delay="450"] [data-aos].aos-animate {
            transition-delay: .45s
        }

        [data-aos][data-aos][data-aos-duration="500"],
        body[data-aos-duration="500"] [data-aos] {
            transition-duration: .5s
        }

        [data-aos][data-aos][data-aos-delay="500"],
        body[data-aos-delay="500"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="500"].aos-animate,
        body[data-aos-delay="500"] [data-aos].aos-animate {
            transition-delay: .5s
        }

        [data-aos][data-aos][data-aos-duration="550"],
        body[data-aos-duration="550"] [data-aos] {
            transition-duration: .55s
        }

        [data-aos][data-aos][data-aos-delay="550"],
        body[data-aos-delay="550"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="550"].aos-animate,
        body[data-aos-delay="550"] [data-aos].aos-animate {
            transition-delay: .55s
        }

        [data-aos][data-aos][data-aos-duration="600"],
        body[data-aos-duration="600"] [data-aos] {
            transition-duration: .6s
        }

        [data-aos][data-aos][data-aos-delay="600"],
        body[data-aos-delay="600"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="600"].aos-animate,
        body[data-aos-delay="600"] [data-aos].aos-animate {
            transition-delay: .6s
        }

        [data-aos][data-aos][data-aos-duration="650"],
        body[data-aos-duration="650"] [data-aos] {
            transition-duration: .65s
        }

        [data-aos][data-aos][data-aos-delay="650"],
        body[data-aos-delay="650"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="650"].aos-animate,
        body[data-aos-delay="650"] [data-aos].aos-animate {
            transition-delay: .65s
        }

        [data-aos][data-aos][data-aos-duration="700"],
        body[data-aos-duration="700"] [data-aos] {
            transition-duration: .7s
        }

        [data-aos][data-aos][data-aos-delay="700"],
        body[data-aos-delay="700"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="700"].aos-animate,
        body[data-aos-delay="700"] [data-aos].aos-animate {
            transition-delay: .7s
        }

        [data-aos][data-aos][data-aos-duration="750"],
        body[data-aos-duration="750"] [data-aos] {
            transition-duration: .75s
        }

        [data-aos][data-aos][data-aos-delay="750"],
        body[data-aos-delay="750"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="750"].aos-animate,
        body[data-aos-delay="750"] [data-aos].aos-animate {
            transition-delay: .75s
        }

        [data-aos][data-aos][data-aos-duration="800"],
        body[data-aos-duration="800"] [data-aos] {
            transition-duration: .8s
        }

        [data-aos][data-aos][data-aos-delay="800"],
        body[data-aos-delay="800"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="800"].aos-animate,
        body[data-aos-delay="800"] [data-aos].aos-animate {
            transition-delay: .8s
        }

        [data-aos][data-aos][data-aos-duration="850"],
        body[data-aos-duration="850"] [data-aos] {
            transition-duration: .85s
        }

        [data-aos][data-aos][data-aos-delay="850"],
        body[data-aos-delay="850"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="850"].aos-animate,
        body[data-aos-delay="850"] [data-aos].aos-animate {
            transition-delay: .85s
        }

        [data-aos][data-aos][data-aos-duration="900"],
        body[data-aos-duration="900"] [data-aos] {
            transition-duration: .9s
        }

        [data-aos][data-aos][data-aos-delay="900"],
        body[data-aos-delay="900"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="900"].aos-animate,
        body[data-aos-delay="900"] [data-aos].aos-animate {
            transition-delay: .9s
        }

        [data-aos][data-aos][data-aos-duration="950"],
        body[data-aos-duration="950"] [data-aos] {
            transition-duration: .95s
        }

        [data-aos][data-aos][data-aos-delay="950"],
        body[data-aos-delay="950"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="950"].aos-animate,
        body[data-aos-delay="950"] [data-aos].aos-animate {
            transition-delay: .95s
        }

        [data-aos][data-aos][data-aos-duration="1000"],
        body[data-aos-duration="1000"] [data-aos] {
            transition-duration: 1s
        }

        [data-aos][data-aos][data-aos-delay="1000"],
        body[data-aos-delay="1000"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1000"].aos-animate,
        body[data-aos-delay="1000"] [data-aos].aos-animate {
            transition-delay: 1s
        }

        [data-aos][data-aos][data-aos-duration="1050"],
        body[data-aos-duration="1050"] [data-aos] {
            transition-duration: 1.05s
        }

        [data-aos][data-aos][data-aos-delay="1050"],
        body[data-aos-delay="1050"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1050"].aos-animate,
        body[data-aos-delay="1050"] [data-aos].aos-animate {
            transition-delay: 1.05s
        }

        [data-aos][data-aos][data-aos-duration="1100"],
        body[data-aos-duration="1100"] [data-aos] {
            transition-duration: 1.1s
        }

        [data-aos][data-aos][data-aos-delay="1100"],
        body[data-aos-delay="1100"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1100"].aos-animate,
        body[data-aos-delay="1100"] [data-aos].aos-animate {
            transition-delay: 1.1s
        }

        [data-aos][data-aos][data-aos-duration="1150"],
        body[data-aos-duration="1150"] [data-aos] {
            transition-duration: 1.15s
        }

        [data-aos][data-aos][data-aos-delay="1150"],
        body[data-aos-delay="1150"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1150"].aos-animate,
        body[data-aos-delay="1150"] [data-aos].aos-animate {
            transition-delay: 1.15s
        }

        [data-aos][data-aos][data-aos-duration="1200"],
        body[data-aos-duration="1200"] [data-aos] {
            transition-duration: 1.2s
        }

        [data-aos][data-aos][data-aos-delay="1200"],
        body[data-aos-delay="1200"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1200"].aos-animate,
        body[data-aos-delay="1200"] [data-aos].aos-animate {
            transition-delay: 1.2s
        }

        [data-aos][data-aos][data-aos-duration="1250"],
        body[data-aos-duration="1250"] [data-aos] {
            transition-duration: 1.25s
        }

        [data-aos][data-aos][data-aos-delay="1250"],
        body[data-aos-delay="1250"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1250"].aos-animate,
        body[data-aos-delay="1250"] [data-aos].aos-animate {
            transition-delay: 1.25s
        }

        [data-aos][data-aos][data-aos-duration="1300"],
        body[data-aos-duration="1300"] [data-aos] {
            transition-duration: 1.3s
        }

        [data-aos][data-aos][data-aos-delay="1300"],
        body[data-aos-delay="1300"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1300"].aos-animate,
        body[data-aos-delay="1300"] [data-aos].aos-animate {
            transition-delay: 1.3s
        }

        [data-aos][data-aos][data-aos-duration="1350"],
        body[data-aos-duration="1350"] [data-aos] {
            transition-duration: 1.35s
        }

        [data-aos][data-aos][data-aos-delay="1350"],
        body[data-aos-delay="1350"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1350"].aos-animate,
        body[data-aos-delay="1350"] [data-aos].aos-animate {
            transition-delay: 1.35s
        }

        [data-aos][data-aos][data-aos-duration="1400"],
        body[data-aos-duration="1400"] [data-aos] {
            transition-duration: 1.4s
        }

        [data-aos][data-aos][data-aos-delay="1400"],
        body[data-aos-delay="1400"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1400"].aos-animate,
        body[data-aos-delay="1400"] [data-aos].aos-animate {
            transition-delay: 1.4s
        }

        [data-aos][data-aos][data-aos-duration="1450"],
        body[data-aos-duration="1450"] [data-aos] {
            transition-duration: 1.45s
        }

        [data-aos][data-aos][data-aos-delay="1450"],
        body[data-aos-delay="1450"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1450"].aos-animate,
        body[data-aos-delay="1450"] [data-aos].aos-animate {
            transition-delay: 1.45s
        }

        [data-aos][data-aos][data-aos-duration="1500"],
        body[data-aos-duration="1500"] [data-aos] {
            transition-duration: 1.5s
        }

        [data-aos][data-aos][data-aos-delay="1500"],
        body[data-aos-delay="1500"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1500"].aos-animate,
        body[data-aos-delay="1500"] [data-aos].aos-animate {
            transition-delay: 1.5s
        }

        [data-aos][data-aos][data-aos-duration="1550"],
        body[data-aos-duration="1550"] [data-aos] {
            transition-duration: 1.55s
        }

        [data-aos][data-aos][data-aos-delay="1550"],
        body[data-aos-delay="1550"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1550"].aos-animate,
        body[data-aos-delay="1550"] [data-aos].aos-animate {
            transition-delay: 1.55s
        }

        [data-aos][data-aos][data-aos-duration="1600"],
        body[data-aos-duration="1600"] [data-aos] {
            transition-duration: 1.6s
        }

        [data-aos][data-aos][data-aos-delay="1600"],
        body[data-aos-delay="1600"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1600"].aos-animate,
        body[data-aos-delay="1600"] [data-aos].aos-animate {
            transition-delay: 1.6s
        }

        [data-aos][data-aos][data-aos-duration="1650"],
        body[data-aos-duration="1650"] [data-aos] {
            transition-duration: 1.65s
        }

        [data-aos][data-aos][data-aos-delay="1650"],
        body[data-aos-delay="1650"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1650"].aos-animate,
        body[data-aos-delay="1650"] [data-aos].aos-animate {
            transition-delay: 1.65s
        }

        [data-aos][data-aos][data-aos-duration="1700"],
        body[data-aos-duration="1700"] [data-aos] {
            transition-duration: 1.7s
        }

        [data-aos][data-aos][data-aos-delay="1700"],
        body[data-aos-delay="1700"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1700"].aos-animate,
        body[data-aos-delay="1700"] [data-aos].aos-animate {
            transition-delay: 1.7s
        }

        [data-aos][data-aos][data-aos-duration="1750"],
        body[data-aos-duration="1750"] [data-aos] {
            transition-duration: 1.75s
        }

        [data-aos][data-aos][data-aos-delay="1750"],
        body[data-aos-delay="1750"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1750"].aos-animate,
        body[data-aos-delay="1750"] [data-aos].aos-animate {
            transition-delay: 1.75s
        }

        [data-aos][data-aos][data-aos-duration="1800"],
        body[data-aos-duration="1800"] [data-aos] {
            transition-duration: 1.8s
        }

        [data-aos][data-aos][data-aos-delay="1800"],
        body[data-aos-delay="1800"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1800"].aos-animate,
        body[data-aos-delay="1800"] [data-aos].aos-animate {
            transition-delay: 1.8s
        }

        [data-aos][data-aos][data-aos-duration="1850"],
        body[data-aos-duration="1850"] [data-aos] {
            transition-duration: 1.85s
        }

        [data-aos][data-aos][data-aos-delay="1850"],
        body[data-aos-delay="1850"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1850"].aos-animate,
        body[data-aos-delay="1850"] [data-aos].aos-animate {
            transition-delay: 1.85s
        }

        [data-aos][data-aos][data-aos-duration="1900"],
        body[data-aos-duration="1900"] [data-aos] {
            transition-duration: 1.9s
        }

        [data-aos][data-aos][data-aos-delay="1900"],
        body[data-aos-delay="1900"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1900"].aos-animate,
        body[data-aos-delay="1900"] [data-aos].aos-animate {
            transition-delay: 1.9s
        }

        [data-aos][data-aos][data-aos-duration="1950"],
        body[data-aos-duration="1950"] [data-aos] {
            transition-duration: 1.95s
        }

        [data-aos][data-aos][data-aos-delay="1950"],
        body[data-aos-delay="1950"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="1950"].aos-animate,
        body[data-aos-delay="1950"] [data-aos].aos-animate {
            transition-delay: 1.95s
        }

        [data-aos][data-aos][data-aos-duration="2000"],
        body[data-aos-duration="2000"] [data-aos] {
            transition-duration: 2s
        }

        [data-aos][data-aos][data-aos-delay="2000"],
        body[data-aos-delay="2000"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2000"].aos-animate,
        body[data-aos-delay="2000"] [data-aos].aos-animate {
            transition-delay: 2s
        }

        [data-aos][data-aos][data-aos-duration="2050"],
        body[data-aos-duration="2050"] [data-aos] {
            transition-duration: 2.05s
        }

        [data-aos][data-aos][data-aos-delay="2050"],
        body[data-aos-delay="2050"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2050"].aos-animate,
        body[data-aos-delay="2050"] [data-aos].aos-animate {
            transition-delay: 2.05s
        }

        [data-aos][data-aos][data-aos-duration="2100"],
        body[data-aos-duration="2100"] [data-aos] {
            transition-duration: 2.1s
        }

        [data-aos][data-aos][data-aos-delay="2100"],
        body[data-aos-delay="2100"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2100"].aos-animate,
        body[data-aos-delay="2100"] [data-aos].aos-animate {
            transition-delay: 2.1s
        }

        [data-aos][data-aos][data-aos-duration="2150"],
        body[data-aos-duration="2150"] [data-aos] {
            transition-duration: 2.15s
        }

        [data-aos][data-aos][data-aos-delay="2150"],
        body[data-aos-delay="2150"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2150"].aos-animate,
        body[data-aos-delay="2150"] [data-aos].aos-animate {
            transition-delay: 2.15s
        }

        [data-aos][data-aos][data-aos-duration="2200"],
        body[data-aos-duration="2200"] [data-aos] {
            transition-duration: 2.2s
        }

        [data-aos][data-aos][data-aos-delay="2200"],
        body[data-aos-delay="2200"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2200"].aos-animate,
        body[data-aos-delay="2200"] [data-aos].aos-animate {
            transition-delay: 2.2s
        }

        [data-aos][data-aos][data-aos-duration="2250"],
        body[data-aos-duration="2250"] [data-aos] {
            transition-duration: 2.25s
        }

        [data-aos][data-aos][data-aos-delay="2250"],
        body[data-aos-delay="2250"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2250"].aos-animate,
        body[data-aos-delay="2250"] [data-aos].aos-animate {
            transition-delay: 2.25s
        }

        [data-aos][data-aos][data-aos-duration="2300"],
        body[data-aos-duration="2300"] [data-aos] {
            transition-duration: 2.3s
        }

        [data-aos][data-aos][data-aos-delay="2300"],
        body[data-aos-delay="2300"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2300"].aos-animate,
        body[data-aos-delay="2300"] [data-aos].aos-animate {
            transition-delay: 2.3s
        }

        [data-aos][data-aos][data-aos-duration="2350"],
        body[data-aos-duration="2350"] [data-aos] {
            transition-duration: 2.35s
        }

        [data-aos][data-aos][data-aos-delay="2350"],
        body[data-aos-delay="2350"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2350"].aos-animate,
        body[data-aos-delay="2350"] [data-aos].aos-animate {
            transition-delay: 2.35s
        }

        [data-aos][data-aos][data-aos-duration="2400"],
        body[data-aos-duration="2400"] [data-aos] {
            transition-duration: 2.4s
        }

        [data-aos][data-aos][data-aos-delay="2400"],
        body[data-aos-delay="2400"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2400"].aos-animate,
        body[data-aos-delay="2400"] [data-aos].aos-animate {
            transition-delay: 2.4s
        }

        [data-aos][data-aos][data-aos-duration="2450"],
        body[data-aos-duration="2450"] [data-aos] {
            transition-duration: 2.45s
        }

        [data-aos][data-aos][data-aos-delay="2450"],
        body[data-aos-delay="2450"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2450"].aos-animate,
        body[data-aos-delay="2450"] [data-aos].aos-animate {
            transition-delay: 2.45s
        }

        [data-aos][data-aos][data-aos-duration="2500"],
        body[data-aos-duration="2500"] [data-aos] {
            transition-duration: 2.5s
        }

        [data-aos][data-aos][data-aos-delay="2500"],
        body[data-aos-delay="2500"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2500"].aos-animate,
        body[data-aos-delay="2500"] [data-aos].aos-animate {
            transition-delay: 2.5s
        }

        [data-aos][data-aos][data-aos-duration="2550"],
        body[data-aos-duration="2550"] [data-aos] {
            transition-duration: 2.55s
        }

        [data-aos][data-aos][data-aos-delay="2550"],
        body[data-aos-delay="2550"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2550"].aos-animate,
        body[data-aos-delay="2550"] [data-aos].aos-animate {
            transition-delay: 2.55s
        }

        [data-aos][data-aos][data-aos-duration="2600"],
        body[data-aos-duration="2600"] [data-aos] {
            transition-duration: 2.6s
        }

        [data-aos][data-aos][data-aos-delay="2600"],
        body[data-aos-delay="2600"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2600"].aos-animate,
        body[data-aos-delay="2600"] [data-aos].aos-animate {
            transition-delay: 2.6s
        }

        [data-aos][data-aos][data-aos-duration="2650"],
        body[data-aos-duration="2650"] [data-aos] {
            transition-duration: 2.65s
        }

        [data-aos][data-aos][data-aos-delay="2650"],
        body[data-aos-delay="2650"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2650"].aos-animate,
        body[data-aos-delay="2650"] [data-aos].aos-animate {
            transition-delay: 2.65s
        }

        [data-aos][data-aos][data-aos-duration="2700"],
        body[data-aos-duration="2700"] [data-aos] {
            transition-duration: 2.7s
        }

        [data-aos][data-aos][data-aos-delay="2700"],
        body[data-aos-delay="2700"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2700"].aos-animate,
        body[data-aos-delay="2700"] [data-aos].aos-animate {
            transition-delay: 2.7s
        }

        [data-aos][data-aos][data-aos-duration="2750"],
        body[data-aos-duration="2750"] [data-aos] {
            transition-duration: 2.75s
        }

        [data-aos][data-aos][data-aos-delay="2750"],
        body[data-aos-delay="2750"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2750"].aos-animate,
        body[data-aos-delay="2750"] [data-aos].aos-animate {
            transition-delay: 2.75s
        }

        [data-aos][data-aos][data-aos-duration="2800"],
        body[data-aos-duration="2800"] [data-aos] {
            transition-duration: 2.8s
        }

        [data-aos][data-aos][data-aos-delay="2800"],
        body[data-aos-delay="2800"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2800"].aos-animate,
        body[data-aos-delay="2800"] [data-aos].aos-animate {
            transition-delay: 2.8s
        }

        [data-aos][data-aos][data-aos-duration="2850"],
        body[data-aos-duration="2850"] [data-aos] {
            transition-duration: 2.85s
        }

        [data-aos][data-aos][data-aos-delay="2850"],
        body[data-aos-delay="2850"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2850"].aos-animate,
        body[data-aos-delay="2850"] [data-aos].aos-animate {
            transition-delay: 2.85s
        }

        [data-aos][data-aos][data-aos-duration="2900"],
        body[data-aos-duration="2900"] [data-aos] {
            transition-duration: 2.9s
        }

        [data-aos][data-aos][data-aos-delay="2900"],
        body[data-aos-delay="2900"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2900"].aos-animate,
        body[data-aos-delay="2900"] [data-aos].aos-animate {
            transition-delay: 2.9s
        }

        [data-aos][data-aos][data-aos-duration="2950"],
        body[data-aos-duration="2950"] [data-aos] {
            transition-duration: 2.95s
        }

        [data-aos][data-aos][data-aos-delay="2950"],
        body[data-aos-delay="2950"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="2950"].aos-animate,
        body[data-aos-delay="2950"] [data-aos].aos-animate {
            transition-delay: 2.95s
        }

        [data-aos][data-aos][data-aos-duration="3000"],
        body[data-aos-duration="3000"] [data-aos] {
            transition-duration: 3s
        }

        [data-aos][data-aos][data-aos-delay="3000"],
        body[data-aos-delay="3000"] [data-aos] {
            transition-delay: 0
        }

        [data-aos][data-aos][data-aos-delay="3000"].aos-animate,
        body[data-aos-delay="3000"] [data-aos].aos-animate {
            transition-delay: 3s
        }

        [data-aos][data-aos][data-aos-easing=linear],
        body[data-aos-easing=linear] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .25, .75, .75)
        }

        [data-aos][data-aos][data-aos-easing=ease],
        body[data-aos-easing=ease] [data-aos] {
            transition-timing-function: ease
        }

        [data-aos][data-aos][data-aos-easing=ease-in],
        body[data-aos-easing=ease-in] [data-aos] {
            transition-timing-function: ease-in
        }

        [data-aos][data-aos][data-aos-easing=ease-out],
        body[data-aos-easing=ease-out] [data-aos] {
            transition-timing-function: ease-out
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out],
        body[data-aos-easing=ease-in-out] [data-aos] {
            transition-timing-function: ease-in-out
        }

        [data-aos][data-aos][data-aos-easing=ease-in-back],
        body[data-aos-easing=ease-in-back] [data-aos] {
            transition-timing-function: cubic-bezier(.6, -.28, .735, .045)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-back],
        body[data-aos-easing=ease-out-back] [data-aos] {
            transition-timing-function: cubic-bezier(.175, .885, .32, 1.275)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-back],
        body[data-aos-easing=ease-in-out-back] [data-aos] {
            transition-timing-function: cubic-bezier(.68, -.55, .265, 1.55)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-sine],
        body[data-aos-easing=ease-in-sine] [data-aos] {
            transition-timing-function: cubic-bezier(.47, 0, .745, .715)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-sine],
        body[data-aos-easing=ease-out-sine] [data-aos] {
            transition-timing-function: cubic-bezier(.39, .575, .565, 1)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-sine],
        body[data-aos-easing=ease-in-out-sine] [data-aos] {
            transition-timing-function: cubic-bezier(.445, .05, .55, .95)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-quad],
        body[data-aos-easing=ease-in-quad] [data-aos] {
            transition-timing-function: cubic-bezier(.55, .085, .68, .53)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-quad],
        body[data-aos-easing=ease-out-quad] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .46, .45, .94)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-quad],
        body[data-aos-easing=ease-in-out-quad] [data-aos] {
            transition-timing-function: cubic-bezier(.455, .03, .515, .955)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-cubic],
        body[data-aos-easing=ease-in-cubic] [data-aos] {
            transition-timing-function: cubic-bezier(.55, .085, .68, .53)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-cubic],
        body[data-aos-easing=ease-out-cubic] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .46, .45, .94)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-cubic],
        body[data-aos-easing=ease-in-out-cubic] [data-aos] {
            transition-timing-function: cubic-bezier(.455, .03, .515, .955)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-quart],
        body[data-aos-easing=ease-in-quart] [data-aos] {
            transition-timing-function: cubic-bezier(.55, .085, .68, .53)
        }

        [data-aos][data-aos][data-aos-easing=ease-out-quart],
        body[data-aos-easing=ease-out-quart] [data-aos] {
            transition-timing-function: cubic-bezier(.25, .46, .45, .94)
        }

        [data-aos][data-aos][data-aos-easing=ease-in-out-quart],
        body[data-aos-easing=ease-in-out-quart] [data-aos] {
            transition-timing-function: cubic-bezier(.455, .03, .515, .955)
        }

        [data-aos^=fade][data-aos^=fade] {
            opacity: 0;
            transition-property: opacity, transform
        }

        [data-aos^=fade][data-aos^=fade].aos-animate {
            opacity: 1;
            transform: translateZ(0)
        }

        [data-aos=fade-up] {
            transform: translate3d(0, 100px, 0)
        }

        [data-aos=fade-down] {
            transform: translate3d(0, -100px, 0)
        }

        [data-aos=fade-right] {
            transform: translate3d(-100px, 0, 0)
        }

        [data-aos=fade-left] {
            transform: translate3d(100px, 0, 0)
        }

        [data-aos=fade-up-right] {
            transform: translate3d(-100px, 100px, 0)
        }

        [data-aos=fade-up-left] {
            transform: translate3d(100px, 100px, 0)
        }

        [data-aos=fade-down-right] {
            transform: translate3d(-100px, -100px, 0)
        }

        [data-aos=fade-down-left] {
            transform: translate3d(100px, -100px, 0)
        }

        [data-aos^=zoom][data-aos^=zoom] {
            opacity: 0;
            transition-property: opacity, transform
        }

        [data-aos^=zoom][data-aos^=zoom].aos-animate {
            opacity: 1;
            transform: translateZ(0) scale(1)
        }

        [data-aos=zoom-in] {
            transform: scale(.6)
        }

        [data-aos=zoom-in-up] {
            transform: translate3d(0, 100px, 0) scale(.6)
        }

        [data-aos=zoom-in-down] {
            transform: translate3d(0, -100px, 0) scale(.6)
        }

        [data-aos=zoom-in-right] {
            transform: translate3d(-100px, 0, 0) scale(.6)
        }

        [data-aos=zoom-in-left] {
            transform: translate3d(100px, 0, 0) scale(.6)
        }

        [data-aos=zoom-out] {
            transform: scale(1.2)
        }

        [data-aos=zoom-out-up] {
            transform: translate3d(0, 100px, 0) scale(1.2)
        }

        [data-aos=zoom-out-down] {
            transform: translate3d(0, -100px, 0) scale(1.2)
        }

        [data-aos=zoom-out-right] {
            transform: translate3d(-100px, 0, 0) scale(1.2)
        }

        [data-aos=zoom-out-left] {
            transform: translate3d(100px, 0, 0) scale(1.2)
        }

        [data-aos^=slide][data-aos^=slide] {
            transition-property: transform
        }

        [data-aos^=slide][data-aos^=slide].aos-animate {
            transform: translateZ(0)
        }

        [data-aos=slide-up] {
            transform: translate3d(0, 100%, 0)
        }

        [data-aos=slide-down] {
            transform: translate3d(0, -100%, 0)
        }

        [data-aos=slide-right] {
            transform: translate3d(-100%, 0, 0)
        }

        [data-aos=slide-left] {
            transform: translate3d(100%, 0, 0)
        }

        [data-aos^=flip][data-aos^=flip] {
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            transition-property: transform
        }

        [data-aos=flip-left] {
            transform: perspective(2500px) rotateY(-100deg)
        }

        [data-aos=flip-left].aos-animate {
            transform: perspective(2500px) rotateY(0)
        }

        [data-aos=flip-right] {
            transform: perspective(2500px) rotateY(100deg)
        }

        [data-aos=flip-right].aos-animate {
            transform: perspective(2500px) rotateY(0)
        }

        [data-aos=flip-up] {
            transform: perspective(2500px) rotateX(-100deg)
        }

        [data-aos=flip-up].aos-animate {
            transform: perspective(2500px) rotateX(0)
        }

        [data-aos=flip-down] {
            transform: perspective(2500px) rotateX(100deg)
        }

        [data-aos=flip-down].aos-animate {
            transform: perspective(2500px) rotateX(0)
        }

        .member-page>.container {
            margin: 3rem auto
        }

        .member-page .card.border {
            border-color: #ffc107 !important
        }

        .member-page .card-header {
            background-color: #ffc107;
            color: #fff;
            font-size: 18px;
            text-align: center;
            font-weight: 500;
            padding: .5rem 0;
            text-transform: uppercase
        }

        .member-page .card-body {
            padding: 2rem 1.25rem
        }

        .btn-dki:hover,
        .btn-km:hover {
            color: #fff;
        }

        .maso table thead {
            background: #ffc107
        }

        .maso table th {
            color: #fff;
            padding: .75rem 1.25rem;
            border: 0
        }

        .maso table td {
            color: #ffc107;
            font-weight: 700
        }

        .maso table td,
        .maso thead {
            border: 1px solid #ffc107
        }

        #sms-codes .table {
            min-width: 500px
        }

        .news .title h3 {
            font-size: 20px;
            border-bottom: 1px solid #ffc107;
            font-weight: 700;
            color: #ffc107
        }

        .news .news-content * {
            color: #ffc107
        }

        .news .news-content .title-news {
            line-height: 1.75rem;
            text-align: left;
            font-size: 18px
        }

        .pagination {
            display: block;
            text-align: center
        }

        .pagination .page-item {
            display: inline-block;
            margin-bottom: 7px
        }

        .pagination .page-item:first-child,
        .pagination .page-item:last-child {
            overflow: unset
        }

        @media only screen and (min-width:576px) {
            .pagination {
                display: flex
            }
        }

        .cl-red {
            color: #f10228
        }

        .cl-default {
            color: #ffc107
        }

        .review-page .filter-field {
            width: 175px;
            float: left;
            border-radius: 50px
        }

        .review-page .filter-field:first-child {
            margin-right: 1.5rem
        }

        .review-page .filter-field input,
        .review-page .filter-field select {
            width: 100%;
            border: 1px solid #ffc107;
            border-radius: 50px;
            height: 32px
        }

        .review-page .filter-field input.active,
        .review-page .filter-field input:focus,
        .review-page .filter-field input:hover,
        .review-page .filter-field select.active,
        .review-page .filter-field select:focus,
        .review-page .filter-field select:hover {
            outline: none
        }

        .review-page .filter-field .review-type {
            display: inline-block;
            width: 75px;
            text-align: center;
            border: 1px solid #a1a9a4;
            color: #a1a9a4;
            border-radius: 50px;
            height: 32px
        }

        .review-page .filter-field .review-type:hover {
            cursor: pointer;
            outline: none
        }

        .review-page .filter-field .review-type.active {
            border: 1px solid #ffc107;
            color: #ffc107;
            outline: none
        }

        .review-page .filter-field .review-type:focus {
            outline: none
        }

        .review-page .date {
            position: absolute;
            bottom: 5px;
            right: 5px;
            color: #fff;
            background-color: rgba(0, 0, 0, .5607843137254902);
            padding: 3px 5px
        }

        .review-page .chil-review {
            border-bottom: 1px solid #ccc
        }

        .blog-post img {
            margin-bottom: 1rem
        }

        #review-items .description-review * {
            color: #000
        }

        #review-items .description-review .maps-icon {
            font-size: 16px;
            color: #f05d5d;
            padding: 0 7px
        }

        @media only screen and (min-width:768px) {
            #review-items .description-review .maps-icon {
                padding: 0 7px 0 0
            }
        }

        #review-items .description-review h3 {
            line-height: 1.5;
            font-size: 16px
        }

        @media only screen and (min-width:992px) {
            #review-items .description-review h3 {
                font-size: 20px
            }
        }

        #review-items .description-review h3:hover {
            color: #ffc107
        }

        #review-items .description-review .address {
            font-size: 14px
        }

        @media only screen and (min-width:992px) {
            #review-items .description-review .address {
                font-size: 16px
            }
        }

        #review-items .fa-comment-alt:before {
            font-size: 11px;
            color: #fff
        }

        @media only screen and (min-width:992px) {
            #review-items .modal-dialog {
                max-width: 50% !important
            }
        }

        #review-items .num-comment {
            padding: 0 8px;
            background-color: #4080ff;
            border-radius: 3px
        }

        #review-items .num-comment * {
            color: #fff
        }

        .content-with-sidebar .blog-post p,
        .content-with-sidebar .page-detail p {
            margin-bottom: .75rem
        }

        .content-with-sidebar .blog-post h1,
        .content-with-sidebar .blog-post h2,
        .content-with-sidebar .blog-post h3,
        .content-with-sidebar .blog-post h4,
        .content-with-sidebar .blog-post h5,
        .content-with-sidebar .blog-post h6,
        .content-with-sidebar .page-detail h1,
        .content-with-sidebar .page-detail h2,
        .content-with-sidebar .page-detail h3,
        .content-with-sidebar .page-detail h4,
        .content-with-sidebar .page-detail h5,
        .content-with-sidebar .page-detail h6 {
            margin-bottom: 1rem;
            line-height: 1.2
        }

        @media only screen and (min-width:992px) {
            .content-with-sidebar>div:first-child {
                min-height: 700px
            }

            .content-with-sidebar .sidebar>div>div {
                width: 100%
            }
        }

        html {
            scroll-behavior: smooth;
            font-size: 15px
        }

        html body {
            font-family: Roboto, sans-serif;
            font-size: .95rem
        }

        p {
            font-size: 16px
        }

        a:hover {
            text-decoration: none;
            color: #ffc107
        }

        img {
            max-width: 100%
        }

        .icon {
            font-size: 25px
        }

        .text-red {
            color: red
        }

        .title {
            font-size: 24px
        }

        .milk-one .bg-img {
            background: #daeea2
        }

        .milk-one h4 {
            color: #b8d85e;
            line-height: 1.5rem
        }

        .milk-one p {
            font-size: 16px
        }

        .milk-one h1 {
            font-size: 30px;
            color: #b8d85e
        }

        .milk-two .bg-img {
            background: #fffefc
        }

        .milk-two h4 {
            color: #000;
            font-size: 18px;
            font-weight: 500;
        }

        .milk-two p {
            font-size: 13px
        }

        .milk-two h1 {
            font-size: 30px;
            color: #000
        }

        .milk-three .bg-img {
            background: #00d3ec
        }

        .milk-three h4 {
            color: #00d4ec;
            line-height: 1.5rem
        }

        .milk-three h1 {
            font-size: 30px;
            color: #00d3ec
        }

        .milk-three p {
            font-size: 16px
        }

        .font-14 {
            font-size: 14px
        }

        .bg-img-1 {
            background: #daeea2
        }

        .bg-img-2 {
            background: #afccfd
        }

        .bg-img-3 {
            background: #00d3ec
        }

        .lds-ellipsis {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px
        }

        .lds-ellipsis div {
            position: absolute;
            top: 33px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            background: #fff;
            -webkit-animation-timing-function: cubic-bezier(0, 1, 1, 0);
            animation-timing-function: cubic-bezier(0, 1, 1, 0)
        }

        .lds-ellipsis div:first-child {
            left: 8px;
            -webkit-animation: lds-ellipsis1 .6s infinite;
            animation: lds-ellipsis1 .6s infinite
        }

        .lds-ellipsis div:nth-child(2) {
            left: 8px
        }

        .lds-ellipsis div:nth-child(2),
        .lds-ellipsis div:nth-child(3) {
            -webkit-animation: lds-ellipsis2 .6s infinite;
            animation: lds-ellipsis2 .6s infinite
        }

        .lds-ellipsis div:nth-child(3) {
            left: 32px
        }

        .lds-ellipsis div:nth-child(4) {
            left: 56px;
            -webkit-animation: lds-ellipsis3 .6s infinite;
            animation: lds-ellipsis3 .6s infinite
        }

        @-webkit-keyframes lds-ellipsis1 {
            0% {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @keyframes lds-ellipsis1 {
            0% {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        @-webkit-keyframes lds-ellipsis3 {
            0% {
                transform: scale(1)
            }

            to {
                transform: scale(0)
            }
        }

        @keyframes lds-ellipsis3 {
            0% {
                transform: scale(1)
            }

            to {
                transform: scale(0)
            }
        }

        @-webkit-keyframes lds-ellipsis2 {
            0% {
                transform: translate(0)
            }

            to {
                transform: translate(24px)
            }
        }

        @keyframes lds-ellipsis2 {
            0% {
                transform: translate(0)
            }

            to {
                transform: translate(24px)
            }
        }

        #loading {
            position: fixed;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, .3137254901960784);
            z-index: 12;
            display: none;
            align-items: center;
            justify-content: center
        }

        .search-result {
            color: #ffc107
        }

        .product-qty .qty {
            width: 45px;
            text-align: center;
            border: 1px solid #dbdbdb;
            height: 38px;
            -moz-appearance: textfield
        }

        .product-qty .qty::-webkit-inner-spin-button,
        .product-qty .qty::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0
        }

        .product-qty button {
            border-radius: unset;
            border: 1px solid #dbdbdb;
            background: #fff;
            color: #707070;
            width: 38px;
            height: 38px
        }

        .product-qty p {
            font-size: 16px
        }

        .pd-50 {
            padding: 50px 0
        }

        h3 {
            margin-bottom: 0;
            line-height: 3.25rem
        }

        .add-to-cart:hover {
            background: #fea532
        }

        .zoomContainer:hover {
            background-color: #b8d85e
        }

        .chat {
            position: fixed;
            bottom: 115px;
            right: 18px;
            z-index: 15
        }

        .chat .chat-online {
            width: 100%
        }

        .chat .fb_dialog {
            bottom: unset !important;
            right: 5pt !important
        }

        .chat .fb_dialog,
        .chat .zalo-chat-widget {
            position: absolute !important
        }

        .chat .purelac-phone {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            background: #fff;
            margin-right: 7px;
            margin-bottom: 10px;
            border-radius: 50%;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .15);
            transition: width .3s ease
        }

        .chat .purelac-phone .phone-number {
            margin-left: 10px;
            display: none
        }

        .chat .purelac-phone:hover {
            width: 170px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, .15);
            border-radius: 30px 0 0 30px;
            justify-content: left;
            padding-left: 10px;
            transition: all .3s ease
        }

        .chat .purelac-phone:hover .phone-number {
            display: block
        }

        .chat .purelac-phone:hover {
            box-shadow: 0 5px 24px rgba(0, 0, 0, .3)
        }

        .chat .purelac-phone i {
            font-size: 28px;
            color: #fff;
            width: 43px;
            height: 43px;
            border-radius: 50%;
            background: #007aff;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .fb_dialog .fb_dialog_content iframe {
            bottom: 55px !important
        }

        .page-item.disabled .page-link {
            color: #6c757d;
            background-color: #fafafa
        }

        .page-item.active .page-link {
            color: #fff;
            background-color: #1d498a;
            border-color: #1d498a
        }

        .page-link {
            padding: 10px;
            font-size: 18px;
            color: #333;
            background-color: #fafafa;
        }

        .promotion h1 {
            font-size: 23px;
            color: #fff;
            margin: 0
        }

        @media only screen and (min-width:992px) {
            .promotion h1 {
                font-size: 30px
            }
        }

        .promotion .card.border {
            border-color: #ffc107 !important
        }

        .promotion .card-header {
            background-color: #ffc107;
            color: #fff;
            font-size: 18px;
            text-align: center;
            font-weight: 500;
            padding: .5rem 0;
            text-transform: uppercase
        }

        .promotion .card-body {
            padding: 2rem 1.25rem
        }

        .promotion .km-time h2,
        .promotion .km-time p {
            color: #ffc107
        }

        .promotion #coundownVoucher {
            color: #fff;
            display: inline-block;
            font-weight: 100;
            text-align: center
        }

        .promotion #coundownVoucher>div {
            padding: 10px;
            border-radius: 15px;
            background: #f10228;
            display: inline-block;
            margin-left: 6px
        }

        .promotion #coundownVoucher div>span {
            display: inline-block;
            font-weight: 700;
            font-size: 28px
        }

        .promotion #clockdiv {
            color: #fff;
            display: inline-block;
            font-weight: 100;
            text-align: center
        }

        .promotion #clockdiv>div {
            padding: 10px;
            border-radius: 15px;
            background: #f10228;
            display: inline-block;
            margin-left: 6px
        }

        .promotion #clockdiv div>span {
            display: inline-block;
            font-weight: 700;
            font-size: 28px
        }

        .promotion .smalltext {
            font-size: 14px;
            font-weight: 700
        }

        .promotion button {
            background: #ffc107;
            color: #fff;
            font-weight: 700
        }

        .promotion button.btn-voucher {
            padding-top: 10px;
            padding-bottom: 10px
        }

        .cursor-pointer,
        .page-link:hover {
            cursor: pointer
        }

        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0
        }

        .videoWrapper embed,
        .videoWrapper iframe,
        .videoWrapper object {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }

        .font-20 {
            font-size: 20px
        }

        .font-24 {
            font-size: 24px
        }

        .font-12 {
            font-size: 12px
        }

        @media only screen and (min-width:1366px) {
            .container {
                min-width: 1300px
            }
        }

        .alert .close {
            background-color: transparent;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center
        }
        .logo{
            height: 105px;
            width: auto !important;
        }
        @media only screen and (max-width:992px) {
            .logo{
                height: 58px;
                width: auto !important;
            }
        }
        #list-products h2{
            color: #000;
            font-size: 20px;
            font-weight: 500;
        }
        body, html {
            height: unset !important;
        }
        .header-custom .navbar{
            width: 100%;
        }
        .header-custom .navbar #navbarNav{
            border-top: 1px solid #ff8901;
            margin-top: 40px;
            padding-top: 6px;
        }
        .header-custom #navbarNav .navbar-nav .nav-item:first-child a{
            padding-left: 0 !important;
        }
        .header-custom #navbarNav .navbar-nav .nav-item:last-child {
            margin-left: auto;
        }
        .header-custom .main-logo{
            position: relative;
        }
        .header-custom .main-logo a{
            position: absolute;
            width: 145px;
            height: 145px;
            background-color: #fff;
            border-radius: 0 0 20px 20px;
            box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) !important;
            text-align: center;
        }
        .header-custom .main-logo a .logo{
            height: 102px;
            width: auto !important;
            margin-top: 20px;
        }
        @media only screen and (max-width:1400px) {
            .header-custom .logo{
                height: 58px;
                width: auto !important;
            }
            #header ul li a {
                color: #101010;
                font-size: 14px;
                cursor: pointer;
                padding-left: 10px !important;
                padding-right: 10px !important;
            }
            .logo {
                height: 72px;
                width: auto !important;
            }
        }
        @media only screen and (max-width:992px) {
            #header .menu-parent .menu-child{
                width: 100%;
                box-shadow: 0 10px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19) !important;
            }
            .vocher .head{
                padding-bottom: 0px;
            }
            .problem img{
                width: 280px;
            }
            .vocher .head .title{
                font-size: 18px;
            }
            #product-detail .add-to-cart-section {
                padding-left: 0px;
            }
            .not-active {
                pointer-events: none;
                cursor: default;
            }
        }
        @media only screen and (max-width:548px) {
            .problem img{
                width: 200px;
            }
        }

        .problem .prob span:hover {
            color: #e17502;
            box-shadow: 5px 3px 15px #888888;
        }
    </style>
    <!-- LD JSON -->
    <script src="{{ asset('assets/assets.comem.vn/js/vendors/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/assets.comem.vn/js/vendors/slick.min.js') }}"></script>
    <script src="{{ asset('assets/assets.comem.vn/js/lazysizes.min.js') }}"></script>
   
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HF06QHSWS8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HF06QHSWS8');
    </script>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;900&amp;family=Roboto:wght@400;500;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/assets.comem.vn/css/all.min.css') }}">

    @stack('style')
	@yield('style')
</head>

<body class="homepage">
        @include('frontend.layouts.partials.header')
            @yield('content')
        @include('frontend.layouts.partials.footer')


		<script type="text/javascript" src="{{ asset('assets/js/app3860.js') }}"></script>

	@stack('js')
	@yield('js')

    
    <script type="text/javascript">
        mybutton 					= document.getElementById("gotoTop");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display 	= "block";
            } else {
                mybutton.style.display 	= "none";
            }
        }
        function gotoTop() {
            document.documentElement.scrollTop = 0;
        }
    </script>


</body>

</html>