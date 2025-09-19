<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Simple Page</title>
</head>
<body>
    <header>
        {{--  
        <h1>Welcome</h1>
        --}}
    </header>

    <main>
        @if(Auth::check())
            <p>User Name: {{ Auth::user()->name }}</p>
            <p>User Email: {{ auth()->user()->email }}</p>
        @endif
    </main>

    <footer>
        {{--
        <p>&copy; {{ date('Y') }} My Laravel App</p>
        --}}
    </footer>
</body>
</html>
