@extends('layout');

@section('content')
    <h1>Register</h1>
    
    @if ($errors->any())
        <div>Something went wrong!</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <div>
            <label for="name">名前</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus required>
        </div>

        <div>
            <label for="email">メールアドレス</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="password">パスワード</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" required>
        </div>

        <div>
            <label for="password_confirmation">パスワード確認</label>
            <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
        </div>

        <div>
            <button type="submit">登録</button>
        </div>
    </form>

@endsection
