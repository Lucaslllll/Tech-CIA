@extends('template.base')

<link rel="stylesheet" type="text/css" href="assets/css/style-faca.css">

@section('adicao')
<div class="tamanho">
	<form action="#" method="post" class="center">
		
	    Nome: <p> <input type="text" name="nome" style="width:200px" /> </p>
		CPF:  <p> <input type="text" name="cpf" maxlength="11" style="width:200px"/> </p>
		CEP:  <p> <input type="text" name="cep" style="width:200px"/> </p>
			  <p> <input type="submit" class="Cbutton" value="Gerar Boleto"> </p>
	
	</form>
</div>
@endsection