<div>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Logar</button>
    </form>
</div>