<?php 


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="marcar.css">

    
  </head>
  <body>
    <!--<div class="container">
      
      <h1 style="font-family: montserrat,sans-serif, bol" >Selecione o que sente</h1>
      

      <button class="btn btn1">Dor de cabeca</button>
      <button class="btn btn2">Dores de estomago</button>
      <button class="btn btn3">Tose</button>
      <button class="btn btn4">Gripe</button>
      <button class="btn btn3">Dores na garganta</button>
      <button class="btn btn4">Dores no pes</button>
    </div>-->
  
    <header>
      <h1 class="header-title">Selecione os sintomas</h1>
  </header>
<div>

        <form  method="POST" action="marcarserver.php"> 
       <table>
          <tr>
        <th>   
<input  id="cabeca" name="sintomas[]" value="Dor_de_cabeca" type="checkbox">
<label for="cabeca" > Dor de cabeca</label>

<th>
<input id="estomago" name="sintomas[]" value="Dor_de_estomago" type="checkbox">
<label for="estomago" >Dor de estomago</label> 
</th>

</th>
<th> 
<input id="musculos" name="sintomas[]" value="Dor_nos_musculos" type="checkbox"> 
<label for="musculos" >Dor nos musculos</label> 
</th>
<th> 
<input id="dor" name="sintomas[]" value="Dor_nos_pes" type="checkbox">
<label for="dor" >Dor nos pes </label>
</th>
<th> 
<input id="gripe" name="sintomas[]" value="Gripe" type="checkbox">
<label for="gripe" >Gripe</label>
</th>
</tr>

<tr>
  <th>
<input id="vistas" name="sintomas[]" value="Dor_nas_vista" type="checkbox">
<label for="vistas" >Dor nas vistas</label> 
</th>
<th>
<input id="coluna" name="sintomas[]" value="Dor_na_coluna" type="checkbox">
<label for="coluna" >Dor na coluna</label> 
</th>
<th>
<input id="diareia" name="sintomas[]" value="Diareia" type="checkbox">
<label for="diareia" >Diareia</label>
</th>
<th>
<input id="vomitos" name="sintomas[]" value="Vomitos" type="checkbox"> 
<label for="vomitos" >Vomitos</label>
</th>
<th>
<input id="apetite" name="sintomas[]" value="Falta_de_apetite" type="checkbox"> 
<label for="apetite" >Falta de apetite</label> 
</th>
</tr>

<tr>
  <th>
<input id="alta" name="sintomas[]" value="Febre_alta" type="checkbox"> 
<label for="alta" >Febre alta</label>
</th> 
<th>
<input id="baixa" name="sintomas[]" value="Febre_baixa" type="checkbox">
<label for="baixa" >Febre baixa</label>
</th>
<th>
<input id="garganta" name="sintomas[]" value="Dores_na_garganta" type="checkbox"> 
<label for="garganta" >Dores na garganta</label>
</th>
<th>
<input id="tosse" name="sintomas[]" value="Tosse" type="checkbox">
<label for="tosse" > Tosse</label> 
</th>
<th>
<input id="calafrios" name="sintomas[]" value="Calafrios" type="checkbox">
<label for="calafrios" > Calafrios</label>
</th>
</tr>

<tr>
<th>
<input id="nausias" name="sintomas[]" value="Nausias" type="checkbox">
<label for="nausias" >Nausias</label>
</th>
<th>
<input id="pes" name="sintomas[]" value="Inchasso_nos_pes" type="checkbox">
<label for="pes" >Inchasso nos pes</label>
</th> 
<th>
<input  id="repirar" name="sintomas[]" value="Dificuldade_de_respirar" type="checkbox">
<label for="respirar" >Falta de respirar</label> 
</th>
<th>
<input id="pisca" name="sintomas[]" value="Pisca_pisca_ao_urinar" type="checkbox"> 
<label for="pisca" >pisca pisca ao urinar</label>
</th>
<th>
<input id="feridas" name="sintomas[]" value="Feridas_na_boca" type="checkbox"> 
<label for="feridas" >Feridas na boca</label> 
</th>
</tr>
</table>
           <input class="button" type="submit" name="submeter" value="Submeter">
        </form>
        </div>

      
  </body>
</html>
