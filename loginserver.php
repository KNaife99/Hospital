<?php
session_start();

$bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');

if(empty($_POST['nrbi']) || empty($_POST['senha'])){
    header('Location:login.php');
    exit();
}
$nrbi = mysqli_real_escape_string($bdconnect, $_POST['nrbi']);
$senha =mysqli_real_escape_string($bdconnect, $_POST['senha']);
//pesquisa na tabela paciente dados do usuario logado
$pesquisap="select * from paciente where NR_BI='{$nrbi}'";
$dadosp=mysqli_query($bdconnect,$pesquisap);
$rowp=mysqli_nua_rows($dadosp);
$usulogado=$rowp['NOME'];
//pesquisa na tabela medico dados do usuario logado
$pesquisam="select * from medico where NR_BI='{$nrbi}'";
$dadosm=mysqli_query($bdconnect,$pesquisam);
$rowm=mysqli_nua_rows($dadosm);
$usulogado=$rowm['NOME'];


$pesquisa="select * from usuarios where NR_BI='{$nrbi}' and SENHA=md5('{$senha}')";
$dados=mysqli_query($bdconnect,$pesquisa);
$row=mysqli_nua_rows($dados);
if($row==1){
    if($row['NIVEL'] = "Administrador"){
        $_SESSION['usuario']=$usulogado;
        header('location:admin.php');
        exit();
    }else
        if($row['NIVEL']="Medico"){
         $_SESSION['usuario']=$usulogado;
         header('location:Tmedico.php');
        }else
            if($row['NIVEL']="Paciente"){
              $_SESSION['usuario']=$usulogado;
              header('AgendarConsulta.php');
              exit();
            }
}else{
header('location: login.php');
exit();
}

?>

