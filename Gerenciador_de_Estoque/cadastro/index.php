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

<script type="text/javascript">
            function mascara(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; 
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') '; 
 
            if(telefone.value.length == 8)
                telefone.value = telefone.value + '-';
  
}
    </script>




                       




 <form method="post" action="add.php">

<div style="display: flex;">



  

<div class="rightside">

  <div class="centralizar"> 
<center>  
<img src="logo.png" style=" width: 200px; height: 200px;">
</center>
</div>     

  <center><h2 style="color: white;">Criar Conta</h2></center><br>
    
    <div class="form-group row">
           
                    <div class="col-sm-10">
                      <input  type="text" class="form-control"  placeholder="Digite seu nome" style="border-radius: 0px; width: 22vw;" maxlength="32" minlength="5" required name="nome">
                    </div>
                  </div>
                  <div class="form-group row">
               
                    <div class="col-sm-10">
 <input type="email"  class="form-control" maxlength="25" minlength="5" placeholder="Digite seu email" style="border-radius: 0px; width: 22vw;" required name="email">
                    </div>
</div>



 <div class="form-group row">
 <div class="col-sm-10">
 <input type="text"  class="form-control" maxlength="16" minlength="5" placeholder="Digite seu login de acesso" style="border-radius: 0px; width: 22vw;" required name="login">
                    </div>
</div>



 <div class="form-group row">
<div class="col-sm-10">
 <input type="password"  class="form-control" maxlength="16" minlength="5" placeholder="Digite sua senha" style="border-radius: 0px; width: 22vw;" required name="senha">
                    </div>
</div>






 <div class="form-group row">
 <div class="col-sm-10">
 <input type="text"  class="form-control" maxlength="15" minlength="15" placeholder="Digite seu telefone" style="border-radius: 0px; width: 22vw;" required name="telefone" onkeypress="mascara(this)">
                    </div>
</div>






<br>

<center>
<button type="submit" class="btn btn-warning" style="width: 22vw; border-radius: 0px;">Prosseguir</button></center><br>
 


Já tem uma conta? <a href="../login/index.php">Entre!</a> <br><br>

<center><a href="../index.php">Voltar</a> </center>
</div>



                  </div>
</div>

                       </form>

</body>
