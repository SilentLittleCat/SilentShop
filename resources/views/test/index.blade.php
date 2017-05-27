@extends('layouts.test')

@section('style')
<style type="text/css">
#myTest {
    margin: top 100px;
}

.outer-box {
    background-color: red;
    border: 125px solid black;
    width: 500px;
    height: 500px;
    position: absolute;
    top: 0;
    left: 0;
    box-sizing: content-box;
}

.inner-box {
    background-color: green;
    width: 200px;
    height: 200px;
    position: absolute;
    top: 100px;
}
</style>
@endsection

@section('content')
<div id="myTest">
    <div class="outer-box">
        <div class="inner-box"></div>
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