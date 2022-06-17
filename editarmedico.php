<?php include('mserver.php'); 
//session_start();
$nrbi=$_SESSION['edit'];
$bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');
$actual=date('d/m/Y');
if (isset($_GET['editar'])) {
    $id = $_GET['editar'];
    $editar_estado=true;

  
    $pesquisam="SELECT * from medico where NR_BI='{$nrbi}' ";
    $dadosm=mysqli_query($bdconnect,$pesquisam);
    $record=mysqli_fetch_array($dadosm);
    $nome = $record['NOMES'];
    $apelido = $record['APELIDO'];
    $idade= $record['IDADE'];
    $endereco = $record['ENDERECO'];
    $sexo = $record['SEXO'];
    $bi = $record['NR_BI'];
    $senha ;
    $email = $record['EMAIL'];
    $contacto = $record['CONTACTO'];
    $especialidade = $record['ESPECIALIDADE'];
    $nacionalidade = $record['NACIONALIDADE'];

}
	

?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="registoMedico.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>registoMedico</title> 
</head>
<body>
    <div class="container">
        <header>Registo de Medico</header>

        <form  method="POST" action="mserver.php">
            <div class="form">
                <div class="details personal">
                    
                    <div class="fields">
                        <div class="input-field">
                            <label>Nomes</label>
                            <input type="text"  name="nome"   value="<?php  echo $nome;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Apelido</label>
                            <input type="text"  name="apelido" value="<?php  echo $apelido;?>" required>
                        </div>
                        <div class="input-field">
                            <label>Endereco</label>
                            <input type="text"  name="endereco" value="<?php  echo $endereco;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Nacionalidade</label>
                            <input type="text"  name="nacionalidade" value="<?php  echo $nacionalidade;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Especialidade</label>
                            <input type="text"  name="especialidade" value="<?php  echo $especialidade;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Data de nascimento</label>
                            <input type="date"  name="datanascimento" value="<?php  echo $datanascimento;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text"  name="email" value="<?php  echo $email;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Contacto</label>
                            <input type="number" name="contacto" value="<?php  echo $contacto;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Sexo</label>
                            <select name="sexo" required>
                                <option disabled selected>Genero</option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nr. de B.I</label>
                            <input type="text"  name="bi" value="<?php  echo $bi;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Senha</label>
                            <input type="password" name="senha" value="<?php  echo $senha;?>" required>
                        </div>

                        
                    
                        <button class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Voltar</span>
                            
                        </button>
        
                        <button name="submeter" class="sumbit">
                                <span type="submit"  name="sumeter" class="btnText">Submeter</span>
                                <i class="uil uil-navigator"></i>
                         </button>
                                
                    </div> 
                </div>     
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>