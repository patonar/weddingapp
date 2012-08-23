<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
	{{ HTML::style('css/css.css')}}
</head>

<ul class='todoList'>
@foreach ($checklists as $check)
	
	<li class='todoList'> 
	<div class="text">{{ $check->title }} </div>
				
		<div class="actions">
			<a href="#" class="edit">Edit</a>
			<a href="#" class="delete">Delete</a>
		</div>
		<ul>
			@foreach ($check->todo as $todo)
				<li> {{$todo->title}}</li>
				<li> {{$todo->description}}</li>
				<li> {{$todo->due}}</li>
			@endforeach
		</ul>

	</li>
@endforeach
</ul>




