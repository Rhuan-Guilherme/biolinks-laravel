<div>
    <h1>Login</h1>

    @if($error = session()->get('error'))
    <div>{{ $error }}</div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <input type="name" name="name" placeholder="Nome">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="email" name="email" placeholder="Email">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="email" name="email_confirmation" placeholder="Confirme seu e-mail">
            @error('email_confirmation')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="password" name="password" placeholder="Senha">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Logar</button>
    </form>
</div>