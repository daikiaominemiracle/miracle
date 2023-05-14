<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OQYLYQ</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<main class="whole_deck">
    <div class="first_part">
        <header class="container">
            <a href="{{route('welcome')}}"><img style="width:100%" src="{{asset('img/logo.png')}}" alt="logo"></a>
            <form class="sumbit" action="#">
                <input class="submit" type="search" placeholder="Kereginizdi tabamyz">
            </form>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">KIRY
                            /</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                               class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">/ TIRKELY</a>
                        @endif
                    @endauth
                </div>
            @endif
            <ul>
                <a href="#">
                    <li>KITAPTAR</li>
                </a>
                <a href="#">
                    <li>JANRY</li>
                </a>
                <a href="#">
                    <li>AVTORLAR</li>
                </a>
                <a href="#">
                    <li>REITINGI</li>
                </a>
                <a href="#">
                    <li>JAZYLY</li>
                </a>
            </ul>
        </header>
        @yield('content')
        <footer>
            @copyright 2023
        </footer>
    </div>




</main>
</body>
</html>
