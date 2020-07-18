@extends('layouts.admin')

@section('title', 'Students Add')

@section('content')

@if($editData)
    @include('students.edit')
@else
    @include('students.add')
@endif
<script type="text/javascript">
    $(document).ready(function(){
        $("#cep").focusout(function(){
            //Início do Comando AJAX
            $.ajax({
                //O campo URL diz o caminho de onde virá os dados
                //É importante concatenar o valor digitado no CEP
                url: window.location.origin+'/address/'+$(this).val(),
                //Aqui você deve preencher o tipo de dados que será lido,
                //no caso, estamos lendo JSON.
                dataType: 'json',
                //SUCESS é referente a função que será executada caso
                //ele consiga ler a fonte de dados com sucesso.
                //O parâmetro dentro da função se refere ao nome da variável
                //que você vai dar para ler esse objeto.
                success: function(resposta){
                    //Agora basta definir os valores que você deseja preencher
                    //automaticamente nos campos acima.
                    $("#bairro").val(resposta.bairro);
                    $("#logradouro").val(resposta.logradouro);
                    $("#cidade").val(resposta.cidade);
                    $("#estado").val(resposta.estado);
                    $("#numero").focus();
                    console.log(resposta);
                }
            });
        });
    })
</script>
@endsection
