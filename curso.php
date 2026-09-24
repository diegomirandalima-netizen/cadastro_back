<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="curso.css"> 
    <title>Cadastro de curso</title> 
</head> 
    <body> 

    <form action="salvar_curso" method="POST">                         <!-- Abre o formulario definindo a rota de destino e o envio seguro por POST -->
        <h1 class="titulo"><strong>Cadastro de curso</strong></h1>    <!-- Titulo principal do formulario destacado em negrito grosso -->

        <div> 
            <label for="id_curso">ID do curso:</label>                 <!-- Legenda vinculada ao campo ID do curso por meio do id -->
            <input type="text" id="id_curso" name="id_curso" placeholder="Gerado automaticamente" > <!-- Campo com texto de aviso em cinza para o codigo do curso -->
        </div> 
        <div> 
            <label for="nome_curso">Nome curso:</label>                             <!-- Legenda vinculada ao campo Nome por meio do id -->
            <input type="text" id="nome_curso" name="nome_curso" required>          <!-- Campo de texto obrigatorio para preenchimento do nome completo -->
        </div> 
        
        <div> 
            <label for="descricao">descricão do curso:</label>                               <!-- Legenda vinculada ao campo descricao por meio do id -->
            <input type="text" id="descricao" name="descricao" required>            <!-- Campo de texto obrigatorio para digitar o descricao do curso -->
        </div> 
        <div> 
            <label for="duracao">duracão do curso:</label>                     <!-- Legenda vinculada ao campo duracao por meio do id -->
            <input type="text" id="duracao" name="duracao">            <!-- Campo especifico para receber o numero de duracao ou celular -->
        </div> 
         
        <button class="botao" type="submit">Cadastrar</button>          <!-- Botao de envio que dispara as informacoes para o backend salvar_curso -->
    </form> 

</body> 
</html>
