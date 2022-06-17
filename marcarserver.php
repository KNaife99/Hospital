<?php //include('loginserver.php');
session_start();

   $sintomas="";
   $nrbi=$_SESSION['bi'];
   $bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');

   $pesquisap="SELECT * from paciente where NR_BI='{$nrbi}'";
   $dadosp=mysqli_query($bdconnect,$pesquisap);
   $rowp=mysqli_fetch_array($dadosp);

if (isset($_POST['submeter'])) {
    $nome = $rowp['NOMES'];
   $nrbi=$rowp['NR_BI'];
   $contacto=$rowp['CONTACTO'];
   $idade=$rowp['IDADE'];
   $email=$rowp['EMAIL'];
   $selecionados=$_POST['sintomas'];
   $n=count($selecionados); 
  
for($i=0; $i<$n; $i++){
    $sintomas="$sintomas  $selecionados[$i], ";
   }
   
}


   $query = "INSERT INTO marcar (nome,idade,nr_bi,email,contacto,sintomas)VALUES
   ('$nome','$idade','$nrbi','$email','$contacto','$sintomas')";
   mysqli_query($bdconnect,$query); 
   <h1><?php echo "Ola  ".$nome."  a tua Consulta foi marcada com sucesso aguarde pela prescicao medica"; ?><h1>;
   echo "<a href=\"logout.php\">Sair</a>";


   $busca = mysqli_query($bdconnect, "SELECT * FROM marcar") or die("erro na busca");
?>