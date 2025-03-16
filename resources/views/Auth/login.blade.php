<div>
    <h1>Login</h1>

    @if($error = session()->get('error'))
        <div>{{ $error }}</div>
    @endif

    <form action="/login" method="post">
        @csrf
        <div>
            <input type="email" name="email" placeholder="Email">
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="password" name="password" placeholder="Senha">
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Logar</button>
    </form>
</div>