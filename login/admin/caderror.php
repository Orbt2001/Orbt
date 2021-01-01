<!DOCTYPE html>
<html lang="pt-BR">
    <meta charset="utf-8">
    <head>
        <link  rel="stylesheet" href="css/cad.css" />
        <link rel="stylesheet" href="css/main.css">

        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     
    </head>
    <style>
         background-color: #444444;
  color:#fff;
}
#cssmenu ul {
  background: #444444;
}
#cssmenu > ul > li > a {
   color:#fff;
}
    </style>
    <body>

    <div id='cssmenu'>
<ul>
   <li><a href='index.php'>Home</a></li>
   <li><a href='admin.php'>Admin</a></li>
   <li class="active"><a href='#'>Cadastrar</a></li>
   <li><a href='listar.php'>Clientes</a></li>
   <li><a href='#'>Valores</a></li>
   <div class="user">
      <a href=""><img src="img/user.png" height="38"></a>
   </div>
   <div class="logout">
      <a href="">Logout</a>
   </div>
</ul>
</div>

<h1>Cadastro de Clientes</h1>
<p style="color:red;">Erro ao cadastrar Cliente</p>
        <div class="box">
        <form action="cad.php" method="post">
            <fieldset>
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" style="width: 10em" value="">
                    </div>
                    <div class="campo">
                        <label for="snome">Sobrenome</label>
                        <input type="text" id="snome" name="snome" style="width: 10em" value="">
                    </div>
                </fieldset>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" style="width: 20em" value="">
                </div>
                <div class="campo">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
                </div>
        
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade" style="width: 10em" value="">
                    </div>
                    <div class="campo">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado">
                            <option value="">--</option>
                            <option value="PR">PR</option>
                            <option value="SP">SP</option>
                            <option value="RJ">RJ</option>
                            <option value="PR">MG</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="grupo">
                <div class="campo">
                    <label for="cpf">CPF/CNPJ</label>
                    <input type="text" id="cpf" name="cpf" style="width: 10em" value="">
                </div>
                <div class="campo">
                    <label for="rz">Razão Social</label>
                    <input type="text" id="rz" name="rz" style="width: 10em" value="">
                </div>
            </fieldset>
                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha"  minlength="8" style="width: 10em" value="">
                </div>
        
               
               
        
                <button type="submit" name="submit">Enviar</button>
            </fieldset>
        </form>
    </div>
    </body>
</html>