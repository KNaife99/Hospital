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
$nacionalidade="";
$especialidade="";
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
    $nacionalidade=$_POST['nacionalidade'];
    $especialidade=$_POST['especialidade'];
    $dataemissao=$_POST['dataemissao'];
    $datavalidade=$_POST['datavalidade'];
    $email=$_POST['email'];
    $contacto=$_POST['contacto'];

    $query = "INSERT INTO medico (nomes,apelido,data_nascimento,nacionalidade,endereco,sexo,nr_bi,data_emissao,
     data_validade,email,contacto,especialidade)VALUES ('$nome','$apelido','$datanascimento','$nacionalidade','$endereco',
     '$sexo','$bi','$dataemissao','$datavalidade','$email','$contacto','$especialidade')";
    mysqli_query($bdconnect,$query);
    $_SESSION['msg'] = "Dados submetidos com sucesso";
    header('location:admin.php'); 
}
