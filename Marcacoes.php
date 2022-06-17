<?php 
 $bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');
$busca = mysqli_query($bdconnect, "SELECT * FROM marcar") or die("erro na busca")
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
        <h1 class="header-title">Consultas</h1>
    </header>
    <main>
        <table class="records">
            <thead>
                <tr>
                    
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Nr_bi</th>
                    <th>Contacto</th>
                    <th>Email</th>
                    <th>Sintomas</th>
                    <th>Estado</th>
                 </tr>
            </thead>
            <tbody>
              
                
            <?php while ($row = mysqli_fetch_array($busca)) { ?>
                
             
				<tr>
				<td><?php echo $row['NOME']; ?></td>
				<td><?php echo $row['IDADE']; ?></td>
                <td><?php echo $row['NR_BI']; ?></td>
                <td><?php echo $row['CONTACTO']; ?></td>
                <td><?php echo $row['EMAIL']; ?></td>
                <td><?php echo $row['SINTOMAS']; ?></td>
                <td><?php echo $row['ESTADO']; ?></td>
               
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