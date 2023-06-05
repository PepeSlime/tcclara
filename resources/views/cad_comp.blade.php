<x-layout>

    <title>Cadastro componente</title>
    <link rel="stylesheet" href="/css/prof.css">
    

    <body>


        <section>
            <form action="/componente/cadastro" method="post" id="form">
                <div>
                    <label>Cadastro Componente</label>
                </div>
                <div>
                    <input type="text" placeholder="Componente:" name="componente" required>
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