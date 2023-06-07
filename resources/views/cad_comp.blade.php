<x-layout>

    <title>Cadastro componente</title>
    <link rel="stylesheet" href="/css/prof.css">
    

    <body>


        <section>
            <form action="/componente/salvar" method="post" id="form">
                <input type="hidden" name="id" value="{{ $componente?->id}}">
                <div>
                    <label>Cadastro Componente</label>
                </div>
                <div>
                    <input type="text" placeholder="Componente:" name="nome" required value="{{ $componente?->nome }}">
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