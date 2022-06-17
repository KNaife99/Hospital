<?php include('agendaserver.php'); 
//session_start();
$nrbi=$_SESSION['bi'];
$bdconnect = mysqli_connect('127.0.0.1', 'root', '','hospital');

$pesquisap="SELECT * from paciente where NR_BI='{$nrbi}'";
$dadosp=mysqli_query($bdconnect,$pesquisap);
$rowp=mysqli_fetch_array($dadosp);


$nome = $rowp['NOMES'];
$nrbi=$rowp['NR_BI'];
$contacto=$rowp['CONTACTO'];
$apelido=$rowp['APELIDO'];
$email=$rowp['EMAIL'];




?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Site responsivo de hospital</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- link css  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- Inicio da seccao de agendar  -->
<section class="book" id="book">

    <h1 class="heading"> <span>Agendar consulta</span>  </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form method="POST" action="agendaserver.php">
            <h3>Agende a tua consulta</h3>
            <label>Nome</label> <input type="text" value="<?php echo $nome." ".$apelido; ?>" class="box">
            <label>NR_BI</label> <input type="text" value="<?php echo $nrbi; ?>" class="box">
            <label>Contacto</label> <input type="number" value="<?php echo $contacto; ?>" class="box">
            <label>Email</label>  <input type="email" value="<?php echo $email; ?>" class="box">
            <label>Data</label> <input name="datae" type="date" class="box" required>
            <select classe="box" name="hora" required>
             <option disabled selected>Horario</option>
             <option value="07:00">07:00 - 08:00</option>
             <option value="08:00">08:00 - 09:00</option>
             <option value="09:00">09:00 - 10:00</option>
             <option value="10:00">10:o0 - 11:00</option>
             <option value="11:00">11:00 - 12:00</option>
             <option value="12:30">12:30 - 13:30</option>
             <option value="13:30">13:30 - 14:30</option>
             <option value="14:30">14:30 - 15:30</option>
           </select>
            <input name="submeter" type="submit" value="Submeter" class="btn">
            
              
           
                    
        </form>
    </div>
</section>