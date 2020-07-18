<h1>Editar Aluno</h1>
<form method="POST" action="{{route('student.edit', ['id'=>$editData->id])}}">
    @csrf
@include('students.form')
<input type="Submit" value="Editar"> <br />
</form>
