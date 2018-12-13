@extends('layouts.default')
@section('title','登陆')
@section('content')
	<div class="col-md-offset-2 col-md-8">
		<div class="panel panel-default">
				<div class="panel-heading">
					<h4>登陆</h4>
				</div>
				<div class="panel-body">
					@include('share._errors')
					<form method="POST" action="{{route('login')}}">
						{{csrf_field()}}
						<div class="form-group">
							<label for="email">邮箱</label>
							<input type="email" name="email" value="{{old('email')}}" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">密码</label>
							<input type="password" name="password" value="{{old('password')}}" class="form-control">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="remember">记住我</label>
						</div>
						<button type="submit" class="btn btn-primary">登陆</button>
					</form>
					<p>还没有账号<a href="{{route('signup')}}">现在注册</a></p>
				</div>
		</div>
	</div>
@stop

						
