<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>編集</title>
</head>

<body>
    {{ Log::info("-----------"); }}
    {{ Log::info($user); }}
    <h1>ユーザ詳細</h1>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @method('PUT')
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}" />
        name<input type="text" name="name" value="{{ $user->name }}" />
        mail<input type="email" name="email" value="{{ $user->email }}" />
        <input type="submit" value="更新">
    </form>
    <a href="{{ route('users.show', $user->id) }}">>{{ __('詳細に戻る') }}</a>
</body>

</html>