<?php
session_start();

$nome="";
$bi="";
$email="";
$contacto="";
$data="";
$hora="";
//connecao  com o banco de dados
$bdconnect = mysqli_connect('127.0.0.1', 'root', '','banco1');
//salvar os dados no banco
if (isset($_POST['submeter'])) {
    $nome = $_POST['nome'];
    $bi=$_POST['bi'];
    $email=$_POST['email'];
    $contacto=$_POST['contacto'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];

    $query = "INSERT INTO agendamento (nome,nr_bi,contacto,datta,hora)VALUES 
    ('$nome','$bi','$email','$contacto','$data','$hora')";
    mysqli_query($bdconnect,$query);
    $_SESSION['msg'] = "Consulta agendanda com sucesso";
    header('location:index.php'); 

    $resultado = mysqli_query($db, "SELECT * FROM paciente");
}