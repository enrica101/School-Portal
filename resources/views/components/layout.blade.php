<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Roboto+Condensed:wght@400;700&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Students App</title>
</head>
<body>
    <nav>
        <h1 class="text-2xl font-bold my-auto">Admin Portal</h1>
        <ul>
            <li><a href="/">Home</a></li>
            @auth
            <li><a href="/index">Student Records</a></li>
            <li><a href="/students/create">Add Student</a></li>
            <li>
                <form method="post" action="/logout">
                    @csrf
                    <button type="submit">
                        Logout
                    </button>
                </form>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
            @endauth
        </ul>
    </nav>
    {{$slot}}
</body>
</html>