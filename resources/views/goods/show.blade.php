@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div id="goods-show">
	<div class="ui centered grid">
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
					clarks休闲男鞋 复古三瓣鞋牛皮圆头舒适Trigenic Flex 17春秋季新品 深蓝色反毛皮
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
		<div class="two wide column"></div>
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
});
</script>
@endsection