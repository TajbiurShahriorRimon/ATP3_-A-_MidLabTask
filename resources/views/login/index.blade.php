<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>User email</td>
            <td>
                <input type="text" name="email" value="{{old('email')}}">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="password" value="{{old('password')}}">
            </td>
        </tr>
        <tr>
            <td>
            </td>
            <td>
                <input type="submit" name="loginBtn" value="Login">
            </td>
        </tr>
    </table>
</form>
<br>
{{session('msg')}}
<br>
<br>
@foreach ($errors->all() as $error)
    {{$error}} <br>
@endforeach
<a href="user">Click</a>
</body>
</html>
