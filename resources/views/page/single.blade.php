@extends('layout.master')

@section('title','Laravel - Detail')

@section('content')

	<h1>Ini Halaman Single</h1>
	<h2>{{$blog->title}}</h2>
	<hr>
	<p>
		{{$blog->description}}
	</p>
	{{-- @foreach ($users as $us)
		<li>{{$us->username}}</li>
	@endforeach

	@if(count($users) <=0 )
		<p>Users is empty</p>
	@else
		<p>Total Users {{count($users)}}</p>
	@endif --}}

	{{-- {!! $unexp !!} --}}
@endsection 
