<?php
session_start();

$nome="";
$apelido="";
$datanascimento="";
$endereco="";
$sexo="";
$bi="";
$dataemissao="";
$datavalidade="";
$email="";
$contacto="";
//connecao  com o banco de dados
$bdconnect = mysqli_connect('127.0.0.1', 'root', '','banco1');
//salvar os dados no banco
if (isset($_POST['submeter'])) {
    $nome = $_POST['nome'];
    $apelido=$_POST['apelido'];
    $datanascimento=$_POST['datanascimento'];
    $endereco=$_POST['endereco'];
    $sexo=$_POST['sexo'];
    $bi=$_POST['bi'];
    $dataemissao=$_POST['dataemissao'];
    $datavalidade=$_POST['datavalidade'];
    $email=$_POST['email'];
    $contacto=$_POST['contacto'];

    $query = "INSERT INTO paciente (nomes,apelido,data_nascimento,endereco,sexo,nr_bi,data_emissao,
     data_validade,email,contacto)VALUES ('$nome','$apelido','$datanascimento','$endereco',
     '$sexo','$bi','$dataemissao','$datavalidade','$email','$contacto')";
    mysqli_query($bdconnect,$query);
    $_SESSION['msg'] = "Dados submetidos com sucesso";
    header('location:login.php'); 
}

?>