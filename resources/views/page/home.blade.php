@extends('layout.master')

@section('title','Laravel - Blog')

@section('content')
	<h1>Ini Halaman Blog Laravel</h1>
	<p>description blog laravel</p>
	<hr>
	@foreach ($blogs as $bg)
		<li><a href="blog/{{$bg->id}}">{{$bg->title}}</a></li>
	@endforeach
@endsection 
