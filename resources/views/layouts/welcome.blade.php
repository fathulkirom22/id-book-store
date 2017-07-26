
    <div class="container" style="">
    <div class="">
        @if (Route::has('login'))
            <div class="links mainPitch-content background-link">
                @if (Auth::check())
                    <a href="{{ url('/home') }}"><stronge>Home</stronge></a>
                @elseif (Auth::guard('admins')->check())
                    <a href="{{ url('/admin/home') }}"><strong>Dashboard</strong></a>
                @elseif (Auth::guard('autors')->check())
                    <a href="{{ url('/autor/home') }}"><strong>Dashboard Autor</strong></a>
                @else
                    <a href="{{ url('/admin') }}"><strong>I am Autor</strong></a>
                    <a href="{{ url('/login') }}"><strong>Login</strong></a>
                    <a href="{{ url('/register') }}"><strong>Register</strong></a>
                @endif
            </div>
        @endif
        <div class="content mainPitch-content img-logo">
            <img class="img-responsive" src="{{URL::asset('img/IDBOOK_PN.png')}}" >
            {{-- <div class="title m-b-md">
                ID Book Store
            </div> --}}
            {{-- <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div> --}}
        </div>
    </div>
    </div>
