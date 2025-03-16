<div>
    <h1>Registre seu Link</h1>

    <form action="{{ route('link.create') }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Nome">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div>
            <input type="text" name="url" placeholder="Url">
            @error('url')
            <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <button type="submit">Salvar</button>
    </form>
</div>
