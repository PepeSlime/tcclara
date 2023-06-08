<x-layout>

    <title>Cadastro turma</title>
    <link rel="stylesheet" href="/css/prof.css">
    

    <body>


        <section>
            <form action="/turma/salvar" method="post" id="form">
                <input type="hidden" name="id" value="{{ $turma?->id}}">
                <div>
                    <label>Cadastro Turma</label>
                </div>
                <div>
                    <input type="text" placeholder="Turma:" name="turma" required value="{{ $turma?->nome }}">
                </div>

                <div>
                    <input type="submit" value="Cadastrar" >
                </div>
                @csrf
            </form>
        </section>

        </div>
    </body>

</x-layout>