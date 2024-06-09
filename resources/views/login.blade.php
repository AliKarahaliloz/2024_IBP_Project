<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<style>
        .centered-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        th, td {
            text-align: left;
        }
    </style>


<div class="centered-container">
    <h2>Login</h2>

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>

    <div>
    <button type="submit">Login</button>
    <a href="{{ url('/register') }}"><button type="button">Register</button></a>
    <a href="{{ url('/adminlogin') }}"><button type="button">Admin Login</button></a>
</div>
</div>

</body>
</html>
