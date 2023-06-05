<x-layout>

    <title>Cadastro turma</title>
    <link rel="stylesheet" href="/css/prof.css">
    

    <body>


        <section>
            <form action="/turma/cadastro" method="post" id="form">
                <div>
                    <label>Cadastro Turma</label>
                </div>
                <div>
                    <input type="text" placeholder="Turma:" name="turma" required>
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