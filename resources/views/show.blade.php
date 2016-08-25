@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">{{ $post['title'] }}</div>

            <div class="panel-body">
                <p>
                    {{ $post['description'] }}
                </p>
            </div>
    </div>
@endsection
