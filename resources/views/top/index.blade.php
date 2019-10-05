@extends('layouts.index')

@section('content')
<ul class="ranking_list">
    @foreach ($items as $item)
    <div class="ranking">
        <li class="@if($loop->iteration <= 5) top_five @endif">
            <div class="ranking_box">
                <p>{{$item}}</p>
            </div>
        </li>
    </div>
    @endforeach
</ul>
@endsection