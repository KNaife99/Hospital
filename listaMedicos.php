<?php include('mserver.php'); 
//session_start();
	// fetch dados actualizados
	if (isset($_GET['editar'])) {
		$id = $_GET['editar'];
		$editar_estado=true;

      
		$rec = mysqli_query($db, "SELECT * FROM medico WHERE NR_BI=$bi");
		$record = mysqli_fetch_array($rec);
		$nome = $record['nome'];
		$apelido = $record['apelido'];
		$idade= $record['idade'];
        $endereco = $record['endereco'];
        $sexo = $record['sexo'];
        $bi = $record['bi'];
        $dataemissao = $record['dataemissao'];
        $datavalidade = $record['datavalidade'];
        $email = $record['email'];
        $contacto = $record['contacto'];
        $especialidade = $record['especialidade'];
        $nacionalidade = $record['nacionalidade'];
    
	}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="listaMedicos.css">
    
    <script src="main.js" defer></script>
    <title>CRUD</title>
</head>
<body>


    <header>
        <h1 class="header-title">Medicos</h1>
    </header>
    <main>
        <button type="button" class="button blue mobile" id="cadastrarCliente">
            <a href="registoMedico.php">Cadastrar Medicos</a>
        </button>
        <button type="button" name="refrescar" class="button blue mobile" id="cadastrarCliente">
            <a href="#"> Refresh</a>
        </button>

        
        <table class="records">
            <thead>
                <tr>
                    <th>Apelido</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                   <th>Idade</th>
                    <th>Endereco</th>
                   
                    <th>Contacto</th>
                    <th>Nr_Bi</th>
                    <th>Especialidade</th>
                    <th colspan="2">Ação</th>
                           
                </tr>
            </thead>
            <tbody>
              
                
            <?php while ($row = mysqli_fetch_array($results)) { ?>
              
				<tr>
				<td><?php echo $row['APELIDO']; ?></td>
				<td><?php echo $row['NOMES']; ?></td>
                <td><?php echo $row['SEXO']; ?></td>
                <td><?php echo $row['IDADE']; ?></td>
                <td><?php echo $row['ENDERECO']; ?></td>
                
                <td><?php echo $row['CONTACTO']; ?></td>
                <td><?php echo $row['NR_BI']; ?></td>
                <td><?php echo $row['ESPECIALIDADE']; ?></td>
				<td>
					<a href="editarmedico.php?editar=<?php echo $_SESSION['edit']= $row['NR_BI']; ?>">editar</a>
					<a href="mserver.php?del=<?php echo $row['NR_BI']; ?>">excluir</a>
				</td>
			</tr>
			<?php }  ?>
        
               
            </tbody>
        </table>
       
    </main>
    <footer>
        Copyright &copy; Kevin e Aderito
    </footer>
</body>
</html>