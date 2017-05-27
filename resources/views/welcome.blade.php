@extends('layouts.master')

@section('content')
<div id="main-content">
	<div id="shop-header">
        <div class="ui search">
            <div class="ui fluid action input">
                <input type="text" name="">
                <div class="ui red button">Search</div>
            </div>
        </div>
        <div class="header">
            <div class="nav">
                <div class="ui red nine item inverted menu">
                    @for($i = 0; $i < 9; ++$i)
                    <a class="item" href="#">秒杀</a>
                    @endfor
                </div>
            </div>
            <div class="sub-nav">
                <div class="left-nav">
                    <div class="ui vertical menu">
                        @for($i = 0; $i < 10; ++$i)
                        <div class="item">
                            <i class="diamond icon"></i>
                            <a href="#">珠宝</a>
                            <span>/</span>
                            <a href="#">珠宝</a>
                            <span>/</span>
                            <a href="#">珠宝</a>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="center-nav">
                    <div class="carousel" data-number="4">
                        <div class="indicators">
                            <div class="indicator" data-id="1"><span></span></div>
                            <div class="indicator" data-id="2"><span></span></div>
                            <div class="indicator" data-id="3"><span></span></div>
                            <div class="indicator" data-id="4"><span></span></div>
                        </div>
                        <div class="content">
                            <img class="active image" src="{{ asset('images/carousel/1.jpeg') }}" data-id="1">
                            <img class="image" src="{{ asset('images/carousel/2.jpeg') }}" data-id="2">
                            <img class="image" src="{{ asset('images/carousel/3.jpeg') }}" data-id="3">
                            <img class="image" src="{{ asset('images/carousel/4.jpeg') }}" data-id="4">
                        </div>
                    </div>
                    <div class="left-nav-content">
                        <div class="ui teal tag labels">
                            @for($i = 0; $i < 5; ++$i)
                            <a href="#" class="ui label">日用</a>
                            @endfor
                        </div>
                        <div class="ui grid">
                            @for($i = 0; $i < 7; ++$i)
                            <div class="row">
                                <div class="two wide column"><strong>电器用品&nbsp;&nbsp;&gt;</strong></div>
                                <div class="fourteen wide column">
                                    <div class="ui horizontal divided list">
                                        @for($j = 0; $j < 15; ++$j)
                                        <a href="#" class="item">手机</a>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="right-nav">
                    <div class="ui card">
                        <div class="content">
                            <img class="ui avatar image" src="{{ asset('images/avatars/avatar6.png') }}">SilentGod
                        </div>
                        <div class="extra content">
                            <div class="ui two buttons">
                                <div class="ui basic green mini button">登录</div>
                                <div class="ui basic red mini button">注册</div>
                            </div>
                        </div>
                        <div class="extra content">
                            @for($i = 0; $i < 20; ++$i)
                            <i class="ui red large heartbeat icon"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	<div id="shop-content">
        <div class="ui equal width centered grid">
        	<div class="red one column row">
        		<div class="column">
        			<div class="inverted ui left floated header">
        				<i class="huge hourglass start icon"></i>
        				<div class="content">
        					秒杀
        					<div class="sub header">总有你想不到的低价</div>
        				</div>
        			</div>
        			<div class="inverted ui right floated header">
        				<div class="content">
        					<div class="ui timer tiny red inverted statistics">
        						<div class="ui inverted compact segment">
        							<div class="statistic">
        								<div class="hour value">06</div>
        							</div>
        						</div>
        						<div class="statistic">
        							<div class="value">:</div>
        						</div>
        						<div class="ui inverted compact segment">
        							<div class="statistic">
        								<div class="minute value">06</div>
        							</div>
        						</div>
        						<div class="statistic">
        							<div class="value">:</div>
        						</div>
        						<div class="ui inverted compact segment">
        							<div class="statistic">
        								<div class="second value">06</div>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="inverted ui right floated header">
        				<div class="content">离开抢还剩</div>
        			</div>
        		</div>
        	</div>
        	<div class="six column row">
	            @for($i = 0; $i < 6; ++$i)
	            <div class="column">
	                <div class="ui link centered card">
	                    <div class="image">
	                        <img src="{{ asset('images/goods/good1.jpg') }}">
	                    </div>
	                    <div class="content">
	                    	<div class="description">
	                    		<a href="#">法国进口 巴黎水柠檬味天然含汽矿泉水</a>
	                   			<div class="ui red mini statistic">
	                   				<div class="value">￥888.8</div>
	                   			</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
            @endfor
        	</div>
        	<div class="three column row">
	            @for($i = 0; $i < 3; ++$i)
	            <div class="column">
	                <div class="ui link centered card">
	                	<div class="content">
	                		<div class="ui teal inverted segment compact">
	                			<h3 class="ui inverted left floated header">发现好货</h3>
	                			<h5 class="ui inverted right floated header">发现品质生活</h5>
	                		</div>	                		
	                	</div>
	                    <div class="image">
	                        <img src="{{ asset('images/goods/good1.jpg') }}">
	                    </div>
	                    <div class="content">
	                    	<div class="description">
	                    		<a href="#">法国进口 巴黎水柠檬味天然含汽矿泉水</a>
	                   			<div class="ui red mini statistic">
	                   				<div class="value">￥888.8</div>
	                   			</div>
	                    	</div>
	                    </div>
	                </div>
	            </div>
            @endfor
        	</div>
        </div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function() {
	$('.sub-nav .carousel').carousel({
		interval: 5000
	});

	$('.timer.statistics').myTimer();

	$('.left-nav .item').hover(function() {
		$('.center-nav .left-nav-content').show();
	}, function() {
		$('.center-nav .left-nav-content').hide();
	});

    $('#shop-header').visibility({
        once: false,
        onBottomPassed: function() {
            $('#app-header .fixed.menu').transition('fade in');
        },
        onBottomPassedReverse: function() {
            $('#app-header .fixed.menu').transition('fade out');
        }
    });
});
</script>
@endsection