@extends('layout.master')

@section('title','Laravel - Edit')

@section('content')

	<h1>Ini Halaman Create</h1>
	{{-- @if(count($errors) >0)
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif --}}
	<form action="/coba-laravel/public/blog" method="post">
		Title : 
		<br>
		<input type="text" name="title" value="{{old('title')}}">
			@if($errors->has('title'))
				<span>{{$errors->first('title')}}</span>
			@endif
		<br>
		Description:
		<br>
		<textarea name="description" rows="8" cols="40">{{old('description')}}</textarea>
			@if($errors->has('description'))
				<span>{{$errors->first('description')}}</span>
			@endif
		<br>	
		<input type="submit" name="create" value="create">
		{{csrf_field()}}
	</form>
@endsection 
