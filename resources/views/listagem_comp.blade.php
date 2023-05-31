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
                <td>ComponenteX</td>
                <td class="actions">

                    <button class="btm" class="btn-editar">Editar</button>
                    &nbsp;
                    <button class="btm" class="btn-excluir">Excluir</button>


                </td>
            </tr>
            <tr>
                <td>ComponenteY</td>
                <td class="actions">

                    <button class="btm" class="btn-editar">Editar</button>
                    &nbsp;
                    <button class="btm" class="btn-excluir">Excluir</button>

                </td>
            </tr>



        </tbody>
    </table>
    <br>

    <div class="flex-row content-center">
        <a href="/componente/cadastro" class="btm" class="centrar-botao" id="Cadastro">Cadastro</a>
    </div>
    

</x-layout>