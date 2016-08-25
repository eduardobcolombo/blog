<div class="">
    <div class="panel panel-default">
        <div class="panel-heading">Search</div>
        <div class="panel-body">
            <p>&nbsp;</p>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Last posts</div>
        <div class="panel-body">

            @foreach($posts as $post)
            <p>
                <a href="{{route('blog.show', ['id'=>$post['id']])}}">{{ $post['title'] }}</a>
            </p>
            @endforeach
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">tags</div>
        <div class="panel-body">
            <p>&nbsp;</p>
        </div>
    </div>

</div>