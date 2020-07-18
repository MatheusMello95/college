<h1>Adicionar Aluno</h1>
<form method="POST" action="{{route('student.add')}}">
    @csrf
@include('students.form')
<input type="Submit" value="Adicionar"> <br />
</form>

