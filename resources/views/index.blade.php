@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
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
            </div>
        </div>
    </div>
@endsection
