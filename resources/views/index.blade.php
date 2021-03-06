@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">My posts</div>

        @foreach($posts as $post)
            <div class="panel-body">
                <h1>{{ $post['title'] }}</h1>
                <p>
                {{ $post['description'] }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
