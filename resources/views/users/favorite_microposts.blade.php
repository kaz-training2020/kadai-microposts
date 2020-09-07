@if(count($favorites) > 0)
<ul class="list-unstyled">
    @foreach($favorites as $favorite)
        <li class="media">
            <!-- ユーザのメールアドレスをもとにGravatarを取得して表示 -->
            <img class="mr-2 rounded" src="{{ Gravatar::get($user->email,['size' => 50]) }}" alt="">
            <div class="media-body mb-2">
                <div>
                    <p class="mb-1">{!! link_to_route('users.show',$favorite->user->name,['user' => $favorite->user->id]) !!}<span class=" pl-2 text-muted">posted at {{ $favorite->created_at }}</span></p>
                <div>
                    {{$favorite->content}}
                </div>
            </div>
        </li>
    @endforeach
</ul>
    <!--ページネーションのリンク作成-->
    {{ $favorites->links() }} 
@endif