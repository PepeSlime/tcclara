<x-layout>
<title> Cadastro professor</title>
<link rel="stylesheet" href="/css/prof.css">

<section>
    <form>
        <input type="hidden" name="id" value="{{ $professor?->id}}">
        <div>
            <label>Cadastro Professor</label>
        </div>
        <div>
            <input type="text" placeholder="Nome:" name="name" required value="{{ $professor?->nome }} ">
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
    </form>
</section>

</x-layout>