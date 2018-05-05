@extends('layout.master')

@section('title','Laravel - Blog')

@section('content')
	<h1>Ini Halaman Blog Laravel</h1>
	<p>description blog laravel</p>
	<hr>
	<table cellpadding="5" cellspacing="5">
		<tr>
			<td>Title</td>
			<td>Action</td>
		</tr>
		@foreach ($blogs as $bg)
		<tr>
			<td><a href="blog/{{$bg->id}}">{{$bg->title}}</a></td>
			<td>
				<a href="blog/{{$bg->id}}/edit">edit</a>&nbsp;&nbsp;
				<form action="/coba-laravel/public/blog/{{$bg->id}}" method="post">
					<input type="submit" value="delete">
					{{csrf_field()}}
					<input type="hidden" name="_method" value="DELETE">
				</form>
			</td>
		</tr>
		@endforeach
	</table>
		{{ $blogs->links() }}
	
@endsection 
