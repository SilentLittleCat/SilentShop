@extends('layouts.test')

@section('style')
<style type="text/css">
#myTest {
    margin: top 100px;
}

.outer-box {
    background-color: red;
    width: 500px;
    height: 500px;
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    box-sizing: content-box;
}

.inner-box {
    background-color: green;
    width: 200px;
    height: 100%;
    top: 100px;
    float: left;
}
.inner-box1 {
    background-color: blue;
    width: 100px;
    height: 100%;
    margin: auto auto;
    top: 100px;
    float: left;
}
</style>
@endsection

@section('content')
<div id="myTest">
    <div class="outer-box">
        <div class="inner-box"></div>
        <div class="inner-box1"></div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('.outer-box').hover(function() {
        console.log('in');
    }, function() {
        console.log('out');
    }).mousemove(function() {
        console.log('move');
    });
</script>
@endsection