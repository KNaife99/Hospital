<?php include('mserver.php'); 

	// fetch dados actualizados
	if (isset($_GET['editar'])) {
		$id = $_GET['editar'];
		$editar_estado=true;

      
		$rec = mysqli_query($db, "SELECT * FROM paciente WHERE NR_BI=$bi");
		$record = mysqli_fetch_array($rec);
		$nome = $record['nome'];
		$apelido = $record['apelido'];
		$datanascimento = $record['datanascimento'];
        $endereco = $record['endereco'];
        $sexo = $record['sexo'];
        $bi = $record['bi'];
        $senha = $record['senha'];
        $email = $record['email'];
        $contacto = $record['contacto'];
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
        <h1 class="header-title">Pacientes</h1>
    </header>
    <main>
        <table class="records">
            <thead>
                <tr>
                    <th>Apelido</th>
                    <th>Nome</th>
                    <th>sexo</th>
                    <th>Endereco</th>
                    <th>Email</th>
                    <th>Contacto</th>
                    <th> Nr_Bi</th>
                 </tr>
            </thead>
            <tbody>
              
                
            <?php while ($row = mysqli_fetch_array($resultado)) { ?>
                
             
				<tr>
				<td><?php echo $row['APELIDO']; ?></td>
				<td><?php echo $row['NOMES']; ?></td>
                <td><?php echo $row['SEXO']; ?></td>
               
                <td><?php echo $row['ENDERECO']; ?></td>
                <td><?php echo $row['EMAIL']; ?></td>
                <td><?php echo $row['CONTACTO']; ?></td>
                <td><?php echo $row['NR_BI']; ?></td>
               
			</tr>.
			<?php }  ?>
        
               
            </tbody>
        </table>
       
    </main>
    <footer>
        Copyright &copy; Kevin e Aderito
    </footer>
</body>
</html>