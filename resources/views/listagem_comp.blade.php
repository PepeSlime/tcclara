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

            @foreach ($componentes as $componente)
            <tr>
                <td>{{ $componente->nome }}</td>
                <td class="actions">
                    <a class="btm" href="/componente/edicao/{{ $componente->id }}" class="btn-editar">Editar</a>
                    <a class="btm" href="/turma/excluir/{{ $componente->id }}" class="btn-excluir">Excluir</a>


                </td>
            </tr>
            @endforeach

            <tr>
                <td>ComponenteY</td>
                <td class="actions">
                    <a class="btm" href="/componente/edicao/{{ $componente->id }}" class="btn-editar">Editar</a>
                    <a class="btm" href="/turma/excluir/{{ $componente->id }}" class="btn-excluir">Excluir</a>


                    

                </td>
            </tr>



        </tbody>
    </table>
    <br>

    <div class="flex-row content-center">
        <a href="/componente/cadastro" class="btm" class="centrar-botao" id="Cadastro">Cadastro</a>
    </div>
    

</x-layout>