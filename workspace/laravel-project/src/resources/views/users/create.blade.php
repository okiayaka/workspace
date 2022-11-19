<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>登録</title>
</head>

<body>
    <h1>ユーザ登録</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        name<input type="text" name="name" />
        mail<input type="email" name="email" />
        pass<input type="password" name="password" />
        <input type="submit" name="submit" value="登録" />
    </form>
</body>

</html>