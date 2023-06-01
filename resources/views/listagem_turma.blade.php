<x-layout>


    <link rel="stylesheet" href="/css/listagemcomponente.css">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TurmaX</td>
                <td class="actions">

                    <button class="btm" class="btn-editar">Editar</button>
                    &nbsp;
                    <button class="btm" class="btn-editar">Horário</button>
                    &nbsp;
                    <button class="btm" class="btn-excluir">Excluir</button>


                </td>
            </tr>
            <tr>
                <td>TurmaY</td>
                <td class="actions">

                    <button class="btm" class="btn-editar">Editar</button>
                    &nbsp;
                    <button class="btm" class="btn-editar">Horário</button>
                    &nbsp;
                    <button class="btm" class="btn-excluir">Excluir</button>

                </td>
            </tr>



        </tbody>
    </table>
    <br>

    <div class="flex-row content-center">
        <a href="/turma/cadastro" class="btm" class="centrar-botao" id="Cadastro">Cadastro</a>
    </div>
    

</x-layout>