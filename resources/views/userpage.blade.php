<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesaj Gönder</title>
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
    <h2>Mesaj Gönder</h2>

    <form action="{{ route('submit-message') }}" method="POST">
    @csrf
        <div>
            <label for="name">İsim:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="message">Mesaj:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div>
            <button type="submit">Gönder</button>
        </div>
    </form>

    <form action="{{ route('login') }}" method="GET">
    
    <button type="submit" name="logout">Logout</button>
</form>
         </div>
 
</body>
</html>
