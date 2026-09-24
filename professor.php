<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="professor.css"> 
    <title>Cadastro de professor</title> 
</head> 
    <body> 

    <form action="salvar_professor" method="POST">                         <!-- Abre o formulario definindo a rota de destino e o envio seguro por POST -->
        <h1 class="titulo"><strong>Cadastro do professor</strong></h1>    <!-- Titulo principal do formulario destacado em negrito grosso -->

        <div> 
            <label for="id_professor">ID do professor:</label>                 <!-- Legenda vinculada ao campo ID do professor por meio do id -->
            <input type="text" id="id_professor" name="id_professor" placeholder="Gerado automaticamente" > <!-- Campo com texto de aviso em cinza para o codigo do professor -->
        </div> 
        <div> 
            <label for="nome_professor">Nome professor:</label>                             <!-- Legenda vinculada ao campo Nome por meio do id -->
            <input type="text" id="nome_professor" name="nome_professor" required>          <!-- Campo de texto obrigatorio para preenchimento do nome completo -->
        </div> 
        
        <div> 
            <label for="cpf">CPF:</label>                               <!-- Legenda vinculada ao campo CPF por meio do id -->
            <input type="text" id="cpf" name="cpf" required>            <!-- Campo de texto obrigatorio para digitar o CPF do professor -->
        </div> 
        <div> 
            <label for="telefone">Telefone:</label>                     <!-- Legenda vinculada ao campo Telefone por meio do id -->
            <input type="tel" id="telefone" name="telefone">            <!-- Campo especifico para receber o numero de telefone ou celular -->
        </div> 
        <div> 
            <label for="email">Email:</label>                           <!-- Legenda vinculada ao campo Email por meio do id -->
            <input type="email" id="email" name="email">                <!-- Campo de texto configurado para validar o formato de endereco eletronico -->
        </div> 

        <div> 
            <label for="formacao">formação:</label>    <!-- Legenda vinculada ao campo Data de Nascimento por meio do id -->
            <input type="text" id="formacao" name="formacao" required> <!-- Campo obrigatorio com calendario nativo para escolher a data -->
        </div> 

        <button class="botao" type="submit">Cadastrar</button>          <!-- Botao de envio que dispara as informacoes para o backend salvar_professor -->
        <P>
     <div class = "botaovolta">
         <button class="botao" type="submit">voltar</button> 
    </div>
    </form> 

</body> 
</html>
