<x-layout>
    <link rel="stylesheet" href="/css/hora.css">
    <div class="flex-col space-30 content-center">
        <h1>{{$turma->nome}}</h1>
        <table>
            <tr>
                <th>Horário</th>
                @foreach($dias_da_semana as $dia)
                <th>{{ $dia }} </th>
                @endforeach
            </tr>
            @foreach ($cronograma as $h)
            <tr>

                <td>{{ $h[0] }} ás{{ $h[1]}}</td>

                @foreach ($dias_da_semana as $dia)
                <td>

                    <form class="flex-col gap-5" method="POST">

                        <select required name="prof">
                            <option value="" selected hidden disabled>Professor</option>
                            @foreach ($professores as $prof)
                            <?php
                                $registro = $prof->horarios
                                ->where("hora_inicio","=", "$h[0]:00")
                                ->where("hora_fim","=", "$h[1]:00")
                                ->where("dia_da_semana","=", $dia)
                                ->first();
                            ?>
                            <option <?php if($registro) echo 'selected';  ?> value="{{ $prof->id }}" >
                                {{ $prof->nome }}
                            </option>
                            @endforeach
                        </select>
                        <select required name="comp">
                            <option value="" selected hidden disabled>Componente</option>
                            @foreach ($componentes as $comp)
                            <?php
                            $registro = $comp->horarios
                            ->where("hora_inicio","=", "$h[0]:00")
                            ->where("hora_fim","=", "$h[1]:00")
                            ->where("dia_da_semana","=", $dia)
                            ->first();
                            ?>
                            <option value="{{$comp->id}}" <?php if($registro) echo 'selected';  ?>>
                                {{$comp->nome}}
                            </option>
                            @endforeach
                        </select>

                        <input type="hidden" name="dds" value="{{$dia}}">
                        <input type="hidden" name="hi" value="{{$h[0]}}">
                        <input type="hidden" name="hf" value="{{$h[1]}}">
                        <input type="hidden" name="turma" value="{{$turma->id}}">
                        <button type="submit">Salvar</button>
                        @csrf
                    </form>
                </td>
                @endforeach
            </tr>
            @endforeach
        </table>
        <button type="button" onclick="window.print();">Imprimir</button>
    </div>
</x-layout>