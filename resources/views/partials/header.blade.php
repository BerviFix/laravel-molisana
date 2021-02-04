<header>
    <img src="{{ asset('https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png') }}" alt="">
    <ul class="list_inline">
        <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
            <a href="{{ route('home') }}">HOME</a>
        </li>
        
        <li class="{{ Route::currentRouteName() == 'prodotto' ? 'active' : '' }}">
            <a href="{{ route('prodotto', ['id' => 0]) }}">PRODOTTI</a>
        </li>

        <li class="{{ Route::currentRouteName() == 'news' ? 'active' : '' }}">
            <a href="{{ route('news') }}">NEWS</a>
        </li>
    </ul>
</header>