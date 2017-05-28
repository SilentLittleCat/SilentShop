@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div id="goods-show">
	<div class="ui centered grid">
		<div class="row">
			<div class="four wide column">
				<div class="ui grid">
					<div class="one column row image-zoom" id="imageZoom">
						<div class="image">
							<img src="{{ asset('images/goods/good2.png') }}">
						</div>
						<div class="cursor-box"></div>
						<div class="image-box"></div>
					</div>
					<div class="five column row" id="imageChange">
						<div class="control column">
							<i class="ui huge angle left icon"></i>
						</div>
						<div class="active column">
							<img src="{{ asset('images/goods/good2.png') }}">
						</div>
						<div class="column">
							<img src="{{ asset('images/goods/good3.png') }}">
						</div>
						<div class="column">
							<img src="{{ asset('images/goods/good7.png') }}">
						</div>
						<div class="control column">
							<i class="ui huge angle right icon"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="ten wide column">
				<div class="ui header">
					<div class="ui green label">商场同款</div>
					<div class="content">
						clarks休闲男鞋 复古三瓣鞋牛皮圆头舒适Trigenic Flex 17
					</div>
				</div>
				<div class="good-ticket">
					<div class="ui grid">
						<div class="row">
							<div class="two wide column">优&nbsp;惠&nbsp;价</div>
							<div class="fourteen wide column">
								<div class="ui mini red statistic">
									<div class="value">￥888</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="two wide column">优&nbsp;惠&nbsp;券</div>
							<div class="fourteen wide column">
								<div class="ui red labels">
									<div class="ui label">满十减一</div>
									<div class="ui label">满十减一</div>
									<div class="ui label">满十减一</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="two wide column">促&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;销</div>
							<div class="fourteen wide column">
								<div class="ui red label">赠品</div>
							</div>
						</div>
					</div>
				</div>
				<div class="good-info">
					<div class="ui grid">
						<div class="row">
							<div class="two wide column">选择颜色</div>
							<div class="fourteen wide column">
								<button class="ui red basic tiny button">Red</button>
								<button class="ui purple basic tiny button">Purple</button>
								<button class="ui pink basic tiny button">Pink</button>
								<button class="ui black basic tiny button">Black</button>
							</div>
						</div>
						<div class="row">
							<div class="two wide column">选择颜色</div>
							<div class="fourteen wide column">
								<button class="ui red basic tiny button">Red</button>
								<button class="ui purple basic tiny button">Purple</button>
								<button class="ui pink basic tiny button">Pink</button>
								<button class="ui black basic tiny button">Black</button>
							</div>
						</div>
						<div class="row">
							<div class="two wide column">选择颜色</div>
							<div class="fourteen wide column">
								<button class="ui red basic tiny button">Red</button>
								<button class="ui purple basic tiny button">Purple</button>
								<button class="ui pink basic tiny button">Pink</button>
								<button class="ui black basic tiny button">Black</button>
							</div>
						</div>
						<div class="row">
							<div class="two wide column">选择颜色</div>
							<div class="fourteen wide column">
								<button class="ui red basic tiny button">Red</button>
								<button class="ui purple basic tiny button">Purple</button>
								<button class="ui pink basic tiny button">Pink</button>
								<button class="ui black basic tiny button">Black</button>
							</div>
						</div>
						<div class="row">
							<div class="two wide column">
								<input type="number" name="" style="width: 100%;">
							</div>
							<div class="fourteen wide column">
								<button class="ui red button">加入购物车</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="two wide column">
				<div class="ui vertical rectangle test ad" data-text="Some Ad to show"></div>
			</div>
		</div>
		<div class="row">
			<div class="four wide column">
				<div class="sg-card">
					<div class="header">
						<h4 class="ui header">食品专营店</h4>
					</div>
					<div class="content">
						<div class="left-content">
							<div class="ui red mini statistic">
								<div class="value">9.34</div>
							</div>
						</div>
						<div class="right-content">
							<ul>
								<li>商品评价&nbsp;<span>9.23</span>&nbsp;<i class="ui red long arrow down icon"></i></li>
								<li>服务态度&nbsp;<span>9.45</span>&nbsp;<i class="ui green long arrow up icon"></i></li>
								<li>物流速度&nbsp;<span>9.22</span>&nbsp;<i class="ui red long arrow down icon"></i></li>
							</ul>
						</div>
					</div>
					<div class="actions">
						<div class="action">
							<div class="ui button">
								<i class="ui red home icon"></i>进店看看
							</div>
						</div>
						<div class="action">
							<div class="ui button">
								<i class="ui red star icon"></i>进店看看
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="twelve wide column" id="detailInfo">
				<div class="ui red inverted tabular menu">
					<a href="#" class="active item" data-tab="first">商品介绍</a>
					<a href="#" class="item" data-tab="second">规格与包装</a>
					<a href="#" class="item" data-tab="third">售后保障</a>
					<a href="#" class="item" data-tab="fourth">商品评价(500+)</a>
					<a href="#" class="item" data-tab="fifth">本店好评商品</a>
				</div>
				<div class="ui bottom attached active tab segment" data-tab="first">
					<div class="ui fluid images">
						<img src="https://img30.360buyimg.com/popWaterMark/jfs/t5515/70/447420732/110986/8460707f/590020baN364904a4.jpg" class="ui image">
						<img src="https://img30.360buyimg.com/popWareDetail/jfs/t3499/231/450563238/191697/4be57339/580ad499Na9e76456.jpg" class="ui image">
						<img src="https://img30.360buyimg.com/popWareDetail/jfs/t3733/168/459060758/223431/f10108ab/580ad499N5bd295bd.jpg" class="ui image">
					</div>
				</div>
				<div class="ui bottom attached tab segment" data-tab="second">
					First
				</div>
				<div class="ui bottom attached tab segment" data-tab="third">
					First
				</div>
				<div class="ui bottom attached tab segment" data-tab="fourth">
					First
				</div>
				<div class="ui bottom attached tab segment" data-tab="fifth">
					First
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function() {
	$('#imageZoom').sgZoom();

	$('#imageChange').on('mouseenter', '.column:not(.active):not(.control)', function(){
		$(this).addClass('active').siblings('.active').removeClass('active');
		console.log($(this).find('img').attr('src'));
		$('#imageZoom').find('img').attr('src', $(this).find('img').attr('src'));
	});

	$('#detailInfo .menu').visibility({
        once: false,
        onBottomPassed: function() {
            $(this).css({
            	position: 'fixed',
            	top: 0,
            	left: $(this).offset().left,
            	width: $(this).width(),
            	height: $(this).height()
            });
        },
        onBottomPassedReverse: function() {
            $(this).css({
            	position: 'relative',
            	left: 0,
            	width: $(this).width(),
            	height: $(this).height()
            });
        }
    });
});
</script>
@endsection