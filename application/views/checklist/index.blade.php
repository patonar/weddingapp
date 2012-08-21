<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>

@foreach ($checklists as $check)
	<h2> {{ $check->title }}</h2>
	<h3> {{$check->description}}</h2>
	<hr>
@endforeach