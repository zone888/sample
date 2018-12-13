<a href="{{route('users.show',$user->id)}}">
	<img src="{{$user->gravatar('140')}}" ait="{{$user->name}}" class="gravatar">
</a>
<h1>{{$user->name}}</h1>
