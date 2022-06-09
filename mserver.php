<?php
session_start();

$nome="";
$apelido="";
$datanascimento="";
$endereco="";
$sexo="";
$bi="";
$senha="";
$nivel="Medico";
$email="";
$contacto="";
$nacionalidade="";
$especialidade="";
$editar_estado=false;
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
    $nacionalidade=$_POST['nacionalidade'];
    $especialidade=$_POST['especialidade'];
    $email=$_POST['email'];
    $contacto=$_POST['contacto'];
    $senha=$_POST['senha'];

    $query = "INSERT INTO medico (nomes,apelido,data_nascimento,nacionalidade,endereco,sexo,nr_bi,email,
    contacto,especialidade)VALUES ('$nome','$apelido','$datanascimento','$nacionalidade','$endereco',
     '$sexo','$bi','$email','$contacto','$especialidade')";
    mysqli_query($bdconnect,$query);
    

    $query = "INSERT INTO usuarios (nr_bi,senha,nivel)VALUES ('$bi',md5('$senha'),'$nivel')";
    mysqli_query($bdconnect,$query);
    $_SESSION['msg'] = "Dados submetidos com sucesso";
    header('location:admin.php');

}

if (isset($_POST['actualizar'])) {
    $con = mysqli_connect('127.0.0.1', 'root', '','banco1');
            $nome = mysqli_real_escape_string($con, $_POST['nome']);
            $apelido = mysqli_real_escape_string($con, $_POST['apelido']);
            $datanascimento = mysqli_real_escape_string($con, $_POST['datanascimento']);
            $nacionalidade = mysqli_real_escape_string($con, $_POST['nacionalidade']);
            $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
            $sexo = mysqli_real_escape_string($con, $_POST['sexo']);
            $bi = mysqli_real_escape_string($con, $_POST['bi']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $contacto = mysqli_real_escape_string($con, $_POST['contacto']);
            $especialidade = mysqli_real_escape_string($con, $_POST['especialidade']);

            mysqli_query($db, "UPDATE medico SET nomes=$nome,apelido=$apelido,data_nascimento=$datanascimento,
            nacionalidade=$nacionalidade,endereco=$endereco,sexo=$sexo,nr_bi=$bi,data_emissao=$dataemissao,
            data_validade=$datavalidade,email=$email,contacto=$contacto,especialidade=$especialidade WHERE bi=$bi");
            $_SESSION['msg'] = "Actualizacao feita com sucesso.";
            header('location: listaMedicos.php');

        }	

//eliminar dados
if (isset($_GET['del'])) {
    $bi = $_GET['del'];
    mysqli_query($bdconnect, "DELETE FROM medico WHERE NR_bi=$bi");
    $_SESSION['msg'] = "Email eliminado com sucesso.";
            header('location: listaMedicos.php');	
    
    }	

// retrive records
$results = mysqli_query($bdconnect, "SELECT * FROM medico") or die("erro na busca");
$resultado = mysqli_query($bdconnect, "SELECT * FROM paciente") or die("erro na busca");


?>
