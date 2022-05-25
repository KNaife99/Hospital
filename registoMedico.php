<?php include('mserver.php'); 

	

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

    <title>registoPaciente</title> 
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
                            <label>Data de emissao</label>
                            <input type="date" name="dataemissao" value="<?php  echo $dataemissao;?>" required>
                        </div>

                        <div class="input-field">
                            <label>Data de validade</label>
                            <input type="date" name="datavalidade" value="<?php  echo $datavalidade;?>" required>
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