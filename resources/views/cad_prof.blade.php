<x-layout>
<title> Cadastro professor</title>
<link rel="stylesheet" href="/css/prof.css">

<section>
    <form action="/professor/cadastro" method="post">
        <input type="hidden" name="id" value="{{ $professor?->id}}">
        <div>
            <label>Cadastro Professor</label>
        </div>
        <div>
            <input type="text" placeholder="Nome:" name="nome" required value="{{ $professor?->nome }}" required>
        </div>
        <div>
            <input type="text" placeholder="e-mail:" name="email" required value= "{{ $professor?->email }}">
        </div>
        <div>
            <input type="text" placeholder="Telefone:" name="telefone" required  value="{{ $professor?->telefone }}">
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
        @csrf
    </form>
</section>

</x-layout>