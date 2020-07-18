<label>
    Nome: <br/>
<input type="text" name='name' value="{{$editData ? $editData->student_name : ''}}"> <br />
    CEP: <br/>
    <input type="text" name="cep" id='cep' value="{{$editData ? trim(explode('-', $editData->address)[0]) : ''}}"> <br />
    Bairro: <br/>
    <input type="text" name="bairro" id="bairro" value="{{$editData ? trim(explode(',',explode('-', $editData->address)[1])[0]) : ''}}"><br>
    Logradouro: <br/>
    <input type="text" name="logradouro" id="logradouro" value="{{$editData ? trim(explode(',',explode('-', $editData->address)[1])[1]) : ''}}"><br>
    Cidade: <br/>
    <input type="text" name="cidade" id="cidade" value="{{$editData ? trim(explode(',',explode('-', $editData->address)[1])[2]) : ''}}"><br>
    Estado: <br/>
    <input type="text" name="estado" id="estado" value="{{$editData ? trim(explode('-', $editData->address)[2]) : ''}}"><br>
    Curso: <br/>
    <input type="text" name="curso" value="{{$editData ? $editData->course : ''}}"><br/>
    Foto: <br/>
</label>
