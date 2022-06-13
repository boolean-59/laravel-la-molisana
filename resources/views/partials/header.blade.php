<header>
     <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{Request::route()->getName() == 'home' ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('prodotti')}}" class="{{Route::currentRouteName() == 'prodotti' ? 'active' : ''}}">Prodotti</a>
            </li>
            <li>
                <a href="{{route('news')}}" class="{{Route::currentRouteName() == 'news' ? 'active' : ''}}">News</a>
            </li>
        </ul>
    </nav>
</header>
