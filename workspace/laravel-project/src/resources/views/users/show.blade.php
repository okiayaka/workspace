<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>詳細</title>
</head>

<body>
    {{Log::info($user);}}
    <h1>ユーザ詳細</h1>
    <div>
        ID
        {{ $user->id }}
    </div>
    <div>
        ユーザー名
        {{ $user->name }}
    </div>
    <div>
        メールアドレス
        {{ $user->email }}
    </div>
    <div>
        作成日時
        {{ $user->created_at }}
    </div>
    <div>
        更新日時
        {{ $user->updated_at }}
    </div>
    <a href="{{ route('users.index') }}">{{ __('一覧に戻る') }}</a>
    @csrf
    <a href="{{ route('users.edit', $user->id) }}">編集</a>

    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
        @method('DELETE')
        @csrf
        <button type="submit">削除</button>
    </form>
</body>

</html>