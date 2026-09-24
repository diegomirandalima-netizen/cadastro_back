<!DOCTYPE html> 
<html lang="pt-br"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="turmas.css"> 
    <title>Cadastro das turmas</title> 
</head> 
    <body> 

    <form action="salvar_turmas" method="POST">                         <!-- Abre o formulario definindo a rota de destino e o envio seguro por POST -->
        <h1 class="titulo"><strong>Cadastro das turmas</strong></h1>    <!-- Titulo principal do formulario destacado em negrito grosso -->

        <div> 
            <label for="id_pturmas">ID das turmas:</label>                 <!-- Legenda vinculada ao campo ID do pturmas por meio do id -->
            <input type="text" id="id_turmas" name="id_turmas" placeholder="Gerado automaticamente" > <!-- Campo com texto de aviso em cinza para o codigo do pturmas -->
        </div> 
        <div> 
            <label for="nome_turmas">Nome da turma:</label>                             <!-- Legenda vinculada ao campo Nome por meio do id -->
            <input type="text" id="nome_turmas" name="nome_turmas" required>          <!-- Campo de texto obrigatorio para preenchimento do nome completo -->
        </div> 
        
        <div> 
            <label for="ano">ano:</label>                               <!-- Legenda vinculada ao campo ano por meio do id -->
            <input type="int" id="ano" name="ano" required>            <!-- Campo de texto obrigatorio para digitar o ano do pturmas -->
        </div> 
        <div> 
            <label for="turno">Turno:</label>                     <!-- Legenda vinculada ao campo Tturno por meio do id -->
            <input type="text" id="turno" name="turno">            <!-- Campo especifico para receber o numero de tturno ou celular -->
        </div> 

        <div> 
            <label for="id_curso">ID do curso:</label>                 <!-- Legenda vinculada ao campo ID do pturmas por meio do id -->
            <input type="text" id="id_curso" name="id_curso" placeholder="Gerado automaticamente" > <!-- Campo com texto de aviso em cinza para o codigo do pturmas -->
        </div>
         

        <button class="botao" type="submit">Cadastrar</button>          <!-- Botao de envio que dispara as informacoes para o backend salvar_pturmas -->
    </form> 

</body> 
</html>
