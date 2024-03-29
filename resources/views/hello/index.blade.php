@extends('layouts.index')

@section('content')
	<p>{{ $msg }}</p>
	@if (count($errors) > 0)
	<p>入力に誤りがあります。再入力してください。</p>
	@endif
	<table>
		<form action="/hello" method="post">
			@csrf
			@if ($errors->has('msg'))
			<tr><th>ERROR!</th><td>{{$errors->first('msg')}}</td></tr>
			@endif
			{{-- @if ($errors->has('name'))
			<tr><th>ERROR!</th><td>{{$errors->first('name')}}</td></tr>
			@endif
			<tr><th>name: </th><td><input type="text" name="name" value="{{ old('name') }}"></td></tr>
			@if ($errors->has('mail'))
			<tr><th>ERROR!</th><td>{{$errors->first('mail')}}</td></tr>
			@endif
			<tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail') }}"></td></tr>
			@if ($errors->has('age'))
			<tr><th>ERROR!</th><td>{{$errors->first('age')}}</td></tr>
			@endif --}}
			{{-- <tr><th>age: </th><td><input type="text" name="age" value="{{ old('age') }}"></td></tr> --}}
			<tr>
				<th>Message: </th><td><input type="text" name="msg" value="{{old('msg')}}"></td>
			</tr>
			<tr><th>submit: </th><td><input type="submit" name="submit"></td></tr>
		</form>
	</table>
@endsection
