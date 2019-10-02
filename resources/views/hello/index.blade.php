@extends('layouts.index')

@section('content')
        <p>{{ $msg }}</p>
        <table>
        <form action="/hello" method="post">
                {{ csrf_field() }}
                <tr><th>name: </th><td><input type="text" name="name"></td></tr>
                <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
                <tr><th>age: </th><td><input type="text" name="age"></td></tr>
                <tr><th>submit: </th><td><input type="submit" name="submit"></td></tr>
        </form>
        </table>
@endsection
