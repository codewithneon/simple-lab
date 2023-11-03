<nav class="nav d-block overflow-y-auto">
    <header class="text-center  py-3">
        <div>
            <img
                width="120"
                class="img-fluid"
                alt="{{$user->name}}"
                src="{{asset($user->image)}}">
        </div>
        <span class="badge bg-secondary">PhD Professor</span>
        <h6>{{$user->name}}</h6>
        <p>Lab: Population Genetics</p>
    </header>
    <div class="list-group list-group-flush">
        @foreach($menu as $item)
            <a href="{{$item['link']}}" class="list-group-item {{$item['active']?'':'bg-transparent'}}">
                <i class="fa-solid {{$item['icon']}}"></i>
                <span class="ml-2">{{$item['title']}}</span>
            </a>
        @endforeach
    </div>
</nav>
