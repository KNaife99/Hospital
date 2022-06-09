<?php
session_start();

$nome="";
$apelido="";
$datanascimento="";
$endereco="";
$sexo="";
$bi="";
$senha="";
$nivel="paciente";
$email="";
$contacto="";
//connecao  com o banco de dados
$bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');
//salvar os dados no banco
if (isset($_POST['submeter'])) {
    $nome = $_POST['nome'];
    $apelido=$_POST['apelido'];
    $datanascimento=$_POST['datanascimento'];
    $endereco=$_POST['endereco'];
    $sexo=$_POST['sexo'];
    $bi=$_POST['bi'];
    $senha=$_POST['senha'];
    $email=$_POST['email'];
    $contacto=$_POST['contacto'];

    $query = "INSERT INTO paciente (nomes,apelido,data_nascimento,endereco,sexo,nr_bi,
    email,contacto)VALUES ('$nome','$apelido','$datanascimento','$endereco',
     '$sexo','$bi','$email','$contacto')";
    mysqli_query($bdconnect,$query);
    $_SESSION['msg'] = "Dados submetidos com sucesso";
    header('location:login.php'); 

    $query = "INSERT INTO usuarios (nr_bi,senha,nivel)VALUES ('$bi',md5('$senha'),'$nivel')";
    mysqli_query($bdconnect,$query);
    $_SESSION['msg'] = "Dados submetidos com sucesso";
    header('location:login.php');
}

?>