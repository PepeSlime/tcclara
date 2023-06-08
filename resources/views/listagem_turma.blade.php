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

            @foreach ($turmas as $turma)
            <tr>
                <td>{{ $turma->nome }}</td>
                <td class="actions">
                    <a class="btm" href="/turma/edicao/{{ $turma->id }}">Editar</a>
                    &nbsp;
                    <a class="btm" href="/horario/{{ $turma->id }}">Horário</a>
                    &nbsp;
                    <a class="btm" href="/turma/excluir/{{ $turma->id }}">Excluir</a>
                   
                </td>
            </tr>
            @endforeach




        </tbody>
    </table>
    <br>

    <div class="flex-row content-center">
        <a href="/turma/cadastro" class="btm" class="centrar-botao" id="Cadastro">Cadastro</a>
    </div>


</x-layout>