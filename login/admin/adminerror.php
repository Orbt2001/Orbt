
<html>
    <head>
        <title>UCAD</title>
        <link rel="stylesheet" type="text/css" href="css/adminn.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <style>
       input{
          outline: none
       }
       body{
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
         <li class='active'><a href='#'>Admin</a></li>
         <li><a href='cadastrar.php'>Cadastrar</a></li>
         <li><a href='listar.php'>Clientes</a></li>
         <li><a href='#'>Valores</a></li>
         <div class="user">
            <a href=""><img src="img/user.png" height="40"></a>
         </div>
         <div class="logout">
            <a href="logout.php">Logout</a>
         </div>
      </ul>
      </div>
        <span>Cadastro de Adminitradores</span>
       <br><span class="linhaspan">No Sistema</span></br> 
<div class="formcad">
    <form class="cadbase" method="POST" action="cadmin.php">
       <br><input class="inp txt1" type="text" name="nome" placeholder="Nome">  </br>
       <br><input class="inp txt1" type="email" name="email" placeholder="Email"> </br>
       <br><input class="inp txt1" type="password" name="senha" placeholder="Senha"></br>
       <br><p style="color:red;">Problemas para Cadastrar Administrador</p>
       <br><button class="button_inp txtbtn" type="submit" >Cadastrar</button> </br>
       
</form>
</div>

</body>
</html>