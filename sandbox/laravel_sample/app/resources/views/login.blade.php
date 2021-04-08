<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <form action="/authenticate" method="POST">
        @csrf
        Username: <input type="text" name="username" /> <br />
        Password: <input type="password" name="password" /> <br />    
        <input type="submit" value="Login" />
    </form>
</html>