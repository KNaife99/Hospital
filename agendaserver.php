<?php
session_start();
$estado="pendente";
$nome="";
$email="";
$contacto="";
$data="";
$hora="";
$estado="";
$nrbi=$_SESSION['bi'];
//connecao  com o banco de dados
$bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');
//buscar dados do paciente logado
$pesquisap="SELECT * from paciente where NR_BI='{$nrbi}'";
$dadosp=mysqli_query($bdconnect,$pesquisap);
$rowp=mysqli_fetch_array($dadosp);
//salvar os dados no banco
$nome = $rowp['NOMES'];
$nrbi=$rowp['NR_BI'];
$contacto=$rowp['CONTACTO'];
$apelido=$rowp['APELIDO'];
$email=$rowp['EMAIL'];
if (isset($_POST['submeter'])) {
  
    $data=$_POST['datae'];
    $hora=$_POST['hora'];

   
}
$query = "INSERT INTO agendamento (nome,nr_bi,email,contacto,dia,hora)VALUES
('$nome','$nrbi','$email','$contacto','$data','$hora')";
mysqli_query($bdconnect,$query) or die('erro ao salvar'); 

$resultado = mysqli_query($bdconnect, "SELECT * FROM paciente");
echo " <h1> Ola  ".$nome.",  a tua Consulta foi agendada com sucesso </h1>"; 
echo "<a href=\"logout.php\">Sair</a>";
?>