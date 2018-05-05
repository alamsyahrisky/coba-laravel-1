@extends('layout.master')

@section('title','Laravel - Edit')

@section('content')

	<h1>Ini Halaman Edit{{$blog->title}}</h1>

	<form action="/coba-laravel/public/blog/{{$blog->id}}" method="post">
		Title : 
		<br>
		<input type="text" name="title" value="{{$blog->title}}">
		<br><br>
		Description:
		<br>
		<textarea name="description" rows="8" cols="40">{{$blog->description}}</textarea>
		<br>
		<input type="submit" name="edit" value="edit">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
	</form>
@endsection 
