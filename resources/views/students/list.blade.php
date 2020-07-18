@extends('layouts.admin')

@section('title', 'Student List')

    {!! Form::text('name') !!}
    {!! Form::submit('Pesquisar') !!}

@section('content')
    <h1>Listagem</h1>

<a href="{{ route('student.add') }}">Adicionar Aluno</a>

    @if (count($list)>0)
        <table>
        @foreach ($list as $student)
            <tr>
                <td>{{$student->student_name}}</td>
                <td>@if ($student->situation == 1)
                    Ativo
                    @else
                    Inativo
                @endif</td>
                <td>{{$student->address}}</td>
                <td>{{$student->course}}</td>
                <td><a href="{{ route('student.edit', ['id'=>$student->id]) }}">[ Editar ]</td>
                <td><a href="{{ route('student.delete', ['id'=>$student->id]) }}">[ Deletar ]</td>
            <tr>
        @endforeach
        </table>
    @else
        Não possui estudantes cadastrados.
    @endif

@endsection

