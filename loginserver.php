<?php
session_start();
$usulogado="";
$nivel="";
$bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');

if(empty($_POST['nrbi']) || empty($_POST['senha'])){
    header('Location:login.php');
    exit();
}

$nrbi = mysqli_real_escape_string($bdconnect, $_POST['nrbi']);
$senha =mysqli_real_escape_string($bdconnect, $_POST['senha']);

$pesquisa="SELECT * from usuarios where NR_BI='{$nrbi}' ";
$dados=mysqli_query($bdconnect,$pesquisa);
$row=mysqli_fetch_array($dados);
$linhas=mysqli_num_rows($dados);
$nivel=$row['NIVEL'];
if(password_verify($senha, $row['SENHA'])){
    if($nivel =="Administrador"){
        //pesquisa na tabela medico dados do usuario logado
       $pesquisam="SELECT * from medico where NR_BI='{$nrbi}'";
       $dadosm=mysqli_query($bdconnect,$pesquisam);
       $rowm=mysqli_fetch_array($dadosm);
       $usulogado=$rowm['NOMES'];
        $_SESSION['usuario']=$usulogado;
        header('location: admin.php');
        exit();
    }else
        if($nivel=="Medico"){
//pesquisa na tabela medico dados do usuario logado
$pesquisam="SELECT * from medico where NR_BI='{$nrbi}' ";
$dadosm=mysqli_query($bdconnect,$pesquisam);
$rowm=mysqli_fetch_array($dadosm);
$usulogado=$rowm['NOMES'];
         $_SESSION['usuario']=$usulogado;
         header('location:Tmedico.php');
         exit();
        }else
            {
//pesquisa na tabela paciente dados do usuario logado
       $pesquisap="SELECT * from paciente where NR_BI='{$nrbi}'";
       $dadosp=mysqli_query($bdconnect,$pesquisap);
       $rowp=mysqli_fetch_array($dadosp);
       $usulogado=$rowp['NOMES'];
       $idade=$rowp['IDADE'];
              $_SESSION['bi']=$nrbi;
              $_SESSION['usuario']=$usulogado;
              if($idade <= 18){
              header('location:AgendarConsulta.php');
              exit();
              }else{
              header('location: opcoes.php');
              exit();
              }
            }
}else{

header('location: login.php');
echo "Senha ou nr_bi incorreto!";
exit();
}

?>

