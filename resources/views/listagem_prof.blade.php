<x-layout>


    <link rel="stylesheet" href="/css/listagemprofessor.css">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($professores as $professor)
            <tr> 

                <td>{{ $professor->nome }}</td>
                <td class="actions">
                    <a class="btm" href="/professor/edicao/{{ $professor->id }}" class="btn-editar">Editar</a>
                    <a class="btm" href="/turma/excluir/{{ $professor->id }}" class="btn-excluir">Excluir</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<br>

   <div class="flex-row content-center">
        <a href="/professor/cadastro" class="btm" class="centrar-botao" id="Cadastro">Cadastro</a>
    </div>
</x-layout>