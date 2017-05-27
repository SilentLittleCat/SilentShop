<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="{{ asset('images/icons/icon.png') }}">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/semantic-ui/dist/semantic.css') }}">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    @yield('style')

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div id="app-header">
            <div class="ui fixed one item menu transition hidden">
                <div class="item">
                    <div class="ui search">
                        <div class="ui fluid action input">
                            <input type="text" name="">
                            <div class="ui red button">Search</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui text menu">
                <div class="ui simple dropdown item">
                    <i class="red marker icon"></i>北京
                    <div class="menu">
                        <div class="ui four column grid">
                            @for($i = 0; $i < 4; ++$i)
                            <div class="column">
                                <a href="#" class="item">北京</a>
                                <a href="#" class="item">北京</a>
                                <a href="#" class="item">北京</a>
                                <a href="#" class="item">北京</a>
                                <a href="#" class="item">北京</a>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="right menu">
                    <a href="#" class="item">登录</a>
                    <a href="#" class="item">注册</a>
                    <a href="#" class="item">我的Shop</a>
                    <a href="#" class="item">我的订单</a>
                    <div class="ui simple mobile dropdown right item">
                        <i class="red mobile icon"></i>手机版
                        <div class="menu">
                            <img class="ui bordered image" src="{{ asset('images/icons/tdcode.png') }}">
                        </div>
                    </div>
                    <div class="ui simple navigation dropdown right item">
                        网页导航<i class="dropdown icon"></i>
                        <div class="menu">
                            <div class="ui four column relaxed grid">
                                @for($i = 0; $i < 4; ++$i)
                                <div class="column">
                                    <h4 class="ui header">热点推荐 Hot</h4>
                                    <div class="ui three column relaxed grid">
                                        @for($j = 0; $j < 3; ++$j)
                                        <div class="column">
                                            <a href="#" class="item">品牌超市</a>
                                            <a href="#" class="item">女装新品</a>
                                            <a href="#" class="item">试美妆</a>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('vendor/semantic-ui/dist/semantic.js') }}"></script>
    <script src="{{ asset('vendor/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('js/myPlugin.js') }}"></script>
    @yield('script')
</body>
</html>