<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Postcards from the Mainframe</title>

        <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    </head>
    <body>
        @yield('content')

        <footer class="border-t-4 border-gray-900 bg-gray-700 text-gray-100 text-right p-4 pb-32
            font-mono tracking-widest">
            <span class="text-gray-100">
                Postcards from the Mainframe 
            </span>
            <span class="text-gray-400 font-bold">
                [{{$postcard}}] 
            </span>

            <nav class="mt-12">
                @unless ($postcard == 0)
                    <a href="{{ route('postcard.show', $postcard-1) }}">
                        <- Previous entry
                    </a>
                @endunless

                @unless ($postcard == 1)
                    <a href="{{ route('postcard.show', $postcard+1) }}">
                        Next entry ->
                    </a>
                @endunless
            </nav>
        </footer>
    </body>
</html>
