<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>一覧</title>
</head>

<body>
    <h1>ユーザ一覧</h1>
    <a href="{{ route('users.create') }}">ユーザ登録</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ユーザ名</th>
                <th>メールアドレス</th>
                <th>作成日時</th>
                <th>更新日時</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}">詳細</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>