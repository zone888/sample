@extends('layouts.default')
@section('title','主页')
@section('content')
	<div class="jumbotron">
		<h1>欢迎来到这里</h1>
		<p class="lead">
			现在你看到的是<a href="http://www.baidu.com">百度</a>友情提供
		</p>	
		<p>一切，从这里开始</p>
		<p>
			<a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
		</p>
	</div>

@stop
