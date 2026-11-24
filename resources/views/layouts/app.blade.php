<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library System')</title>
</head>
<body style="font-family: sans-serif; margin: 20px;">
    <h1>Library System</h1>

    <nav style="margin-bottom: 15px;">
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('books.index') }}">Books</a> |
        <a href="{{ route('categories.index') }}">Categories</a> |
        <a href="{{ route('members.index') }}">Members</a> |
        <a href="{{ route('borrowings.index') }}">Borrowings</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

    <hr style="margin-top: 30px;">
    <footer>
        <p>&copy; 2026 Library System</p>
    </footer>
</body>
</html>