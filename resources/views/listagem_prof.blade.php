<x-layout>

<body>
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
                    <a href="/professor/edicao/{{ $professor->id }}" class="btn-editar">Editar</a>
                    <a href="/turma/excluir/{{ $professor->id }}" class="btn-excluir">Excluir</a>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
</x-layout>