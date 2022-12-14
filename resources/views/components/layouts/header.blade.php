<header class="bg-white border-t-4 border-blue-600 shadow mb-5">
    <nav class="container max-w-7xl mx-auto px-5 lg:px-40 py-5 flex justify-between">
        <ul class="flex space-x-5">
            <li class="font-bold mr-5 text-blue-600"><a href="{{ route('home')}}">Laravel 8 Blog</a></li>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#">Archiv</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>
        <ul class="flex space-x-5">
            @guest
                <li><a href="{{ route('admin.index') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else

                <li><a href="{{ route('admin.index') }}"> {{Auth::user()->name }}</a></li>
            @endguest
        </ul>
    </nav>
</header>
