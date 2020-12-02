<?php
session_start();


require_once('../config.php');
require_once(DBAPI);




include_once("bootstrap.html");

  ?>
<style type="text/css">
   

body{
background-color: #1C1C1C;
 
}
.centralizar{
 border: solid 0px;
 border-color: black;
 padding: 5px 5px 5px;
 color: black;
 font-family: arial;
}
.rightside{
 border: solid 1px;
 border-color: white;
 box-shadow: 0 0 20px 1px black;
 padding: 10px 25px 15px;
 color: white;
 position: absolute;
 left: 500px
}


</style>






                       




 <form method="post" action="valida.php">

<div style="display: flex;">



  

<div class="rightside">

  <div class="centralizar"> 
<center>  
<img src="logo.png" style=" width: 250px; height: 250px;">
</center>
</div>     

  <center><h2 style="color: white;">Entrar</h2></center><br>
    
    <div class="form-group row">
           
                    <div class="col-sm-10">
                      <input  type="text" class="form-control"  placeholder="Digite seu login" style="border-radius: 0px; width: 22vw;" required name="login">
                    </div>
                  </div>
                  <div class="form-group row">
               
                    <div class="col-sm-10">
 <input type="password"  class="form-control" id="inputPassword3" maxlength="16" minlength="5" placeholder="Digite sua senha" style="border-radius: 0px; width: 22vw;" required name="senha">
                    </div>


                  </div>
<center>
<button type="submit" class="btn btn-warning" style="width: 22vw; border-radius: 0px;">Prosseguir</button></center><br>
 <?php
 if(isset($_SESSION['erro'])){
     
     echo "<h4 style='color:red;'>".$_SESSION['erro']."</h4>";
        unset($_SESSION['erro']);
 }

 ?>


Não tem uma conta? <a href="../cadastro/index.php">Crie uma!</a> <br><br>

<center><a href="../index.php">Voltar</a> </center>
</div>



                  </div>
</div>

                       </form>

</body>



























              
