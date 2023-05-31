<x-layout>
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro professor</title>
    <link rel="stylesheet" href="/flex/flex-style.css">
    <link rel="stylesheet" href="/flex/flex.css">
    <link rel="stylesheet" href="/css/prof.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="/js/home.js"></script>
    <link rel="stylesheet" href="/css/home.js">
</head>

<section>
    <form>
        <input type="hidden" name="id" value="{{ $professor->id}}">
        <div>
            <label>Cadastro Professor</label>
        </div>
        <div>
            <input type="text" placeholder="Nome:" name="name" required value="{{ $professor->nome }} ">
        </div>
        <div>
            <input type="text" placeholder="e-mail:" name="email" required value= "{{ $professor->email }}">
        </div>
        <div>
            <input type="text" placeholder="Telefone:" name="telefone" required  value="{{ $professor->telefone }}">
        </div>
        <div>
            <input type="submit" value="Cadastrar">
        </div>
    </form>
</section>

</x-layout>