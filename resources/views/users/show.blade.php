@extends('layouts.default')
@section('title',$user->name)
@section('content')
	<div class="row">
		<div class="col-offset-2 col-md-8">
			<div class="col-md-12">
				<div class="col-offset col-md-8">
					<section class="user_info">
						<p>欢迎{{$user->name}}成功注册</p>
					</section>
				</div>
			</div>
		</div>
	</div>
@stop
