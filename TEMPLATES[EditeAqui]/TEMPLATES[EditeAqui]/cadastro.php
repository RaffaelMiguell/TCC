<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Escambeando</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <form id="form_cadastro" method="POST" action="enviar_cadastro.php">
        <div class="tipo_cadastro text-center">
            <h2>Escolha o tipo de cadastro</h2>
               <br> 
                <label for="opt-pf">Pessoa Física</label>
                    <input id="opt-pf" checked="checked" type="radio" name="TipoPessoa"/>&nbsp;
                <label for="opt-pj">Pessoa Jurídica</label>
                    <input id="opt-pj" type="radio" name="TipoPessoa"/>
                <br>
            <!------------------ DADOS PESSOAIS PARA CADASTRO ------------------> 
    <div class="form-group">
			<span class="input-group-addon"><img src="img/png/color_18/user.png" alt=""></span>
                <div class="input-group">
				    <!-- <span class="input-group-addon"><img src="img/png/color_18/smile.png" alt=""></span> -->				    
					<input type="text" id="cpf" name="txt_cpf" placeholder="CPF - Ex.: 000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"required/>
                    <input type="text" id="nome" name="nome" size="60" placeholder="Nome Completo" pattern="[a-z\s]+$" required/>
                     <input type="text" id="idade" name="idade" size="2" placeholder="Idade" pattern="\d{2}" required/>
                    <select class="form-control" id="genero" name="txt_GENERO">
                        <option>Selecione o Genero</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>
                    </select>
			  	</div>
				
				<!------------------ DADOS PARA CADASTRO DE LOGIN ------------------>
				<div class="form-group">
				<span class="input-group-addon"><img src="img/png/color_18/lock.png" alt=""></span>
				<div class="input-group">
				<!--    <span class="input-group-addon"><img src="img/png/color_18/lock.png" alt=""></span> -->
					<input class="form-control" type="email" id="email" name="email" size="60" required/>
					<input class="form-control" type="password" id="senha" name="senha" size="60" required/>
					<input class="form-control" type="password" id="conf_senha" name="conf_senha" size="10" required/>
    				</div>						
				<span class="input-group-addon"><img src="img/png/color_18/home.png" alt=""></span>     		
				<div class="input-group">
				    
				 <!------------------ DADOS PARA CADASTRO DE ENDEREÇO ------------------>
				    <!-- <span class="input-group-addon"><img src="img/png/color_18/home.png" alt=""></span>		 -->	
					<input  class="form-control" id="cep" type="text" name="txt_CEP" maxlength="10" placeholder="CEP - Ex.: 00000-000"/>
                    <input class="form-control" id="rua" type="text" name="txt_RUA"  size="60" placeholder="Rua"/>
                    <input class="form-control" id="bairro" type="text" name="txt_BAIRRO" size="60" placeholder="Bairro"/>
                    <input class="form-control" id="cidade" type="text" name="txt_CIDADE" size="60" placeholder="Cidade"/>	
			         <select class="form-control" id="estado" name="txt_ESTADO">
			             
			             <!-- AQUI EXISTIRÁ UM RETORNO PARA LISTAGEM DE TODOS OS ESTADOS CADASTRADOS -->
                        <option>Selecione o Estado</option> 
                        <option>Acre</option> 
                        <option>Alagoas</option> 
                        <option>Amazonas</option> 
                        <option>Amapá</option> 
                        <option>Bahia</option> 
                        <option>Ceará</option> 
                        <option>Distrito Federal</option> 
                        <option>Espírito Santo</option> 
                        <option>Goiás</option> 
                        <option>Maranhão</option> 
                        <option>Mato Grosso</option> 
                        <option>Mato Grosso do Sul</option> 
                        <option>Minas Gerais</option> 
                        <option>Pará</option> 
                        <option>Paraíba</option> 
                        <option>Paraná</option> 
                        <option>Pernambuco</option> 
                        <option>Piauí</option> 
                        <option>Rio de Janeiro</option> 
                        <option>Rio Grande do Norte</option> 
                        <option>Rondônia</option> 
                        <option>Rio Grande do Sul</option> 
                        <option>Roraima</option> 
                        <option>Santa Catarina</option> 
                        <option>Sergipe</option> 
                        <option>São Paulo</option> 
                        <option>Tocantins</option> 
                </select>
                <br>
            </div>
            <div class="checkbox">
                <label><input type="checkbox">Eu li, entendi e concordo com estas regras e condições.</label>
            </div>
			<br>
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Cadastrar"> 
        <br>
      </div>
    </div>
  </form>
</body>